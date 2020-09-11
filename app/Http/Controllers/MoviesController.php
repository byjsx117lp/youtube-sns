<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Movie;
use Illuminate\Support\Facades\Auth;


class MoviesController extends Controller
{
    //
    public function create() {
        $user = Auth::user();

        $movies = $user->movies()->orderBy('id', 'desc')->paginate(9);

        return view('movies.create', ['movies' => $movies]);
    }

    public function store(Request $request) {

        $this->validate($request, [
            'url' => 'required|max:11',
            'comment' => 'max:36', 
        ]);

        $request->user()->movies()->create([
            'url' => $request->url,
            'comment' => $request->comment,
        ]);

        return back();
    }

    public function destroy($id) {
        $movie = Movie::find($id);

        $user = Auth::user();
        if($user->id == $movie->user_id) {
            $movie->delete();
        }

        return back();
    }
}
