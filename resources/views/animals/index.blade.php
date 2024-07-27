@extends('layouts.app')

@section('main-content')
    <h1>ANIMALI</h1>
    <section>
        <a href="{{ route ('animals.create')}}">Aggiungi animale</a>
        <article class="card" style="width: 18rem;">
            @foreach ($animals as $animal)
                <div class="card-body">
                    <h2 class="card-title">{{ $animal->name }}</h2>
                    <p class="card-text">{{ $animal->species }}</p>
                    <p class="card-text">{{ $animal->age }}</p>
                    <a href="{{ route ('animals.show', $animal)}}" class="card-link">Mostrami il singolo animale</a>
                    <a href="{{ route ('animals.edit', $animal)}}" class="card-link">Aggiorna i dati</a>
                </div>
            @endforeach
        </article>
    </section>
@endsection
