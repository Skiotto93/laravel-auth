@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1 class="text-center my-3">Crea un nuovo Progetto</h1>
        {{-- Condizione Error --}}
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
            
        <form action="{{ route('admin.projects.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="name" class="form-label">Nome Progetto:</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
            </div>
            <div class="mb-3">
                <label for="name_client" class="form-label">Nome Cliente:</label>
                <input type="text" class="form-control" id="name" name="name_client" value="{{ old('name_client') }}">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Descrizione:</label>
                <textarea class="form-control" id="description" name="description" rows="5" >{{ old('description') }}</textarea>
            </div>
            {{-- <div class="mb-3">
                <label for="slug" class="form-label">Slug:</label>
                <input class="text" id="slug" name="slug" rows="5">
            </div> --}}
            <div class="text-center mt-4">
                <button type="submit" class="btn btn-primary">Crea</button>
            </div>
        </form>
    </div>
@endsection