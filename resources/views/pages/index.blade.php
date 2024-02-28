@extends('layouts.main-layout')
@section('head')
    <title>Home</title>
@endsection
@section('content')
    
    @foreach ($projects as $project)
    <tr>
        <td>{{ $project->id }}</td>
        <td>{{ $project->name }}</td>
        <td>{{ $project->user->name }}</td>
        <td>
            @foreach ($project->technologies as $technology)
                {{ $technology->name }} 
            @endforeach
        </td>
        <td>
            <a href="{{ route('projects.edit', $project) }}">Modifica</a>
            <a href="{{ route('projects.destroy', $project) }}">Elimina</a>
        </td>
    </tr>
@endforeach


@endsection
