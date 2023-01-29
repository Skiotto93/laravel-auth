@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="py-3">
            <span>
                <strong>Nome Progetto:</strong> {{$project->name}}
            </span>
            <p>
                <strong>Descrizione: </strong>{{$project->description}}
            </p>
            <div>
                <strong>Immagine: </strong><img src="{{asset('storage/' . $project->cover_image)}}" alt="{{$project->name}}">
            </div>
        </div>
        <a href="{{ route('admin.projects.index') }}" class="btn btn-primary">Torna alla Dashboard</a>
    </div>
@endsection