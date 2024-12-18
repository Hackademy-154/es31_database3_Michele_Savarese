<x-layout>

    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-12">
                <h1 class="text-center display-4 text-shadow">
                    Dettaglio Autore <span class="fts-italic">{{ $author->name }}</span> </h1>
            </div>
        </div>

        <div class="row justify-content-center">
            {{-- @dd($ciccio) --}}
            {{-- @foreach ($authors as $author) --}}
            <div class="col-12 col-md-4">
                <div class="card" style="width: 18rem;">
                    <img src="{{ Storage::url($author->pic) }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $author->name }}</h5>
                        <p class="card-text">{{ $author->bio }}</p>
                        {{-- <a href="{{ route('author.show', compact('author')) }}" class="btn btn-primary">Visualizza
                            scheda</a> --}}

                    </div>
                </div>

                {{-- <x-card :boardgame="$boardgame" /> --}}


            </div>
            {{-- @endforeach --}}
        </div>

        <div class="row text-center">
            <div class="col-12">

                {{-- <a class="btn btn-warning" href="{{route('autor.edit',['author'=>$author]) }}">Modifica</a> --}}

                <a class="btn btn-warning" href="{{ route('author.edit', compact('author')) }}">Modifica</a>

            </div>

            <div class="col-12">

                {{-- <a class="btn btn-warning" href="{{route('autor.edit',['author'=>$author]) }}">Modifica</a> --}}

                <form method="POST" action="{{ route('author.destroy', compact('author')) }}">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger">
                        Rimuovi Autore
                    </button>

                </form>
            </div>

        </div>




    </div>
    {{-- <header class="bg-black vh-100">
    </header> --}}

</x-layout>
