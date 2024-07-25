@extends('layouts.app')

@section('main-content')
    <h1>ANIMALI</h1>
    <section>
        <article class="card" style="width: 18rem;">
            @foreach ($animals as $animal)
                <div class="card-body">
                    <h2 class="card-title">{{ $animal->name }}</h2>
                    <p class="card-text">{{ $animal->species }}</p>
                    <p class="card-text">{{ $animal->age }}</p>
                    <a href="{{ route ('animals.show', $animal)}}" class="card-link">Mostrami il singolo animale</a>
                    <a href="#" class="card-link">Another link</a>
                </div>
            @endforeach
        </article>
    </section>
@endsection
