<div class="movies row mt-5 text-center">
    
    @foreach ($movies as $key => $movie)

        @if($loop->iteration % 3 == 1 && $loop->iteration != 1)
    
            </div>
           
            <div class="row text-center mt-3">
        
        @endif
    
            <div class="col-lg-4 mb-5">

                <div class="movie text-left d-inline-block">

                    <div>
                        @if($movie)
                            <iframe width="290" height="163.125" src="{{ 'https://www.youtube.com/embed/'.$movie->url }}?controls=1&loop=1&playlist={{ $movie->url }}" frameborder="0"></iframe>
                        @else
                            <iframe width="290" height="163.125" src="https://www.youtube.com/embed/" frameborder="0"></iframe>
                        @endif
                    </div>
                    
                    <p>
                        @if(isset($movie->comment))
                            {{ $movie->comment }}
                        @endif
                    </p>
                        @if(Auth::user()->id == $movie->user_id)
                        <form action="{{ route('movies.destroy', ['movie' => $movie->id]) }}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit" class="button btn btn-danger">削除する</button>
                        </form>
                        @endif
                </div>
                
            </div>

    @endforeach

</div>

{{ $movies->links('pagination::bootstrap-4') }}