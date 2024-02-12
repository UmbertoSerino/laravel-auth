@extends('layouts.admin')

@section('title', 'Admin My Project')

@section('main-content')
<section class="container-heros-cards">
    <article class="container-card p-3">
        <div class="row">
            <div class="col-12">
                <div class="card m-auto">
                    <div class="card-body">
                      <h5 class="card-title">Titolo: {{ $project['title'] }}</h5>
                      <p class="card-text">Data: {{ $project['date'] }}</p>
                      <p class="card-text">Descrizione: {{ $project['description'] }}</p>
                      <p class="card-text">Completato: {{ $project['complete'] }}</p>
                      <a href="{{ route('admin.projects.index') }}" class="btn btn-primary">Torna indietro</a>
                      <a href="{{ route('admin.projects.edit',$project->id) }}" class="btn btn-warning">Modifica</a>
                  </div>
                </div>
            </div>
        </div>
    </article>
</section>

@endsection