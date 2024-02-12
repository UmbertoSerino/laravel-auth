@extends('layouts.admin')

@section('title', 'Crea un nuovo progetto')

@section('main-content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            @if($errors->any())

            <div class="alert alert-danger" role="alert">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>
                            <strong>
                                {{ $error }}
                            </strong>
                        </li>
                    @endforeach
                </ul>
            </div>
        @endif

            <form action="{{ route('admin.projects.store') }}" method="POST">
                @csrf

                <div class="mb-3 input-group">
                    <label for="title" class="input-group-text">Titolo:</label>
                    <input class="form-control" type="text" name="title" id="title" value="{{ old('title') }}">
                </div>
                <div class="mb-3 input-group">
                    <label for="date" class="input-group-text">Data:</label>
                    <input class="form-control" type="date" name="date" id="date" value="{{ old('date') }}">
                </div>
                {{-- modificarlo con checkbox --}}
                <div class="mb-3 input-group">
                    <label for="complete" class="input-group-text">Comletato?:</label>
                    <input class="form-control" type="text" name="complete" id="complete" value="{{ old('complete') }}">
                </div>
                <div class="mb-3 input-group">
                    <label for="description" class="input-group-text">Descrizione:</label>
                    <textarea class="form-control"  name="description" id="description" cols="40" rows="10">{{ old('description')  }}</textarea>
                </div>
                <div class="mb-3 input-group">
                    <button class="btn btn-success">
                        Crea
                    </button>
                    <a href="{{ route('admin.projects.index') }}" class="btn btn-primary">Torna indietro</a>

                </div>

            </form>
        </div>
    </div>
</div>
@endsection