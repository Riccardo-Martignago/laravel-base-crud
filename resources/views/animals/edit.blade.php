@extends('layouts.app')

@section('main-content')
    <h1>CREA ANIMALE</h1>
    <section>
        <form action="{{ route('animals.update', $animal->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name" class="form-label">Nome</label>
                <input type="text" id="name" name="name" placeholder="Nome animale" aria-label="Animal name" value="{{ $animal->name }}">
            </div>
            <div class="mb-3">
                <label for="species" class="form-label">Specie</label>
                <input type="text" id="species" name="species" class="form-control" placeholder="Specie animale" aria-label="Animal specie" value="{{ $animal->species }}">
            </div>
            <div class="mb-3">
                <label for="age" class="form-label">Eta</label>
                <input type="number" id="age" name="age" class="form-control" placeholder="Anni animale" aria-label="Animal age" value="{{ $animal->age }}">
            </div>
            <button type="submit" class="btn btn-primary" value="Create animal">Aggiorna</button>
        </form>
    </section>
@endsection
