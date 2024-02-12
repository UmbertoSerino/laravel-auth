@extends('layouts.admin')

@section('title', 'Admin My Projects')

@section('main-content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>
                Qui sono disponibili tutti i progetti di: {{ Auth::user()->name }}!
            </h1>
        </div>
        <div class="col-12">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Titolo</th>
                    <th scope="col">Descrizione</th>
                    <th scope="col">data di consegna</th>
                    <th scope="col">Completato</th>
                    <th scope='col'>Funzioni</th>
                  </tr>
                </thead>
                <tbody>
                    @forelse ($projects as $project )
                  <tr>
                    <th scope="row">{{ $project->id }}</th>
                    <td>{{ $project->title }}</td>
                    {{-- se maggiore di 100 riduci la stringa a 100 e aggiungi ... --}}
                    <td> {{ strlen($project->description) > 100 ? substr($project->description, 0, 100) . '...' : $project->description }}</td>
                    <td>{{ $project->date }}</td>
                    <td>{{ $project->complete ? 'ok' : 'Non ancora' }} 
                    </td>
                    <td>
                        @include('admin.partials-button.button')
                    </td>
                    @empty
                    <td> Non ci sono progetti {{ Auth::user()->name }} </td>
                    @endforelse 
                  </tr>
                </tbody>
              </table>
        </div>
    </div>

</div>

@endsection