@extends('layouts.app')

@section('main-content')
    <section>
        <article class="card" style="width: 18rem;">
            <div class="card-body">
                <h2 class="card-title">{{ $animal->name }}</h2>
                <p class="card-text">{{ $animal->species }}</p>
                <p class="card-text">{{ $animal->age }}</p>
                <a href="{{ route ('animals.index')}}" class="card-link">Tutti gli animali</a>
            </div>
        </article>
    </section>
@endsection
