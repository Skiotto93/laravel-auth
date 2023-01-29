@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="py-3">
            <span>
                <strong>Nome Progetto:</strong> {{$project->name}}
            </span>
            <p class="my-3">
                <strong>Descrizione: </strong>{{$project->description}}
            </p>
            <div>
                <strong>Immagine: </strong>
            </div>
        </div>
        <div>
            @if ($project->cover_image)
                <img class="my-4" src="{{asset('storage/' . $project->cover_image)}}" alt="{{$project->name}}">
            @endif
        </div>
        <div class="d-flex justify-content-center">
            <a href="{{ route('admin.projects.index') }}" class="btn btn-primary">Torna alla Dashboard</a>
        </div>
    </div>
@endsection