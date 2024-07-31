@extends('layouts.app')

@section('main-content')
    <h1>CREA ANIMALE</h1>
    <section>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('animals.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nome</label>
                <input type="text" id="name" name="name" placeholder="Nome animale" aria-label="Animal name" value="{{ old('name') }}">
            </div>
            <div class="mb-3">
                <label for="species" class="form-label">Specie</label>
                <input type="text" id="species" name="species" class="form-control" placeholder="Specie animale" aria-label="Animal species" value="{{ old('species') }}">
            </div>
            <div class="mb-3">
                <label for="age" class="form-label">Eta</label>
                <input type="number" id="age" name="age" class="form-control" placeholder="Anni animale" aria-label="Animal age" value="{{ old('age') }}">
            </div>
            <button type="submit" class="btn btn-primary" value="Create animal">Crea</button>
        </form>
    </section>
@endsection
