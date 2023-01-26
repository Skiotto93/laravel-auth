@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Lista Progetti</h1>
    <table class="table table-dark table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Slug</th>
                <th scope="col">Nome Cliente</th>
                <th scope="col-3">Azioni</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($projects as $project)
            <tr>
                <th>{{$project->id}}</th>
                <td>{{$project->name}}</td>
                <td>{{$project->slug}}</td>
                <td>{{$project->name_client}}</td>
            </tr>                
            @endforeach
        </tbody>
    </table>
</div>
@endsection