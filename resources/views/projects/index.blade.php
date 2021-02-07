@extends('layout')

@section('title','Portfolio')

@section('content')
    <h1>Portfolio</h1>
    <a href="{{ route('projects.create') }}">Create Project</a>

    <ul>
        @isset($projects)
            @foreach ($projects as $project)
                <li><a href="{{ route('projects.show', $project) }}"> {{ $project->title }} </a><br><small>{{ $project->description }}</small><br>{{ $project->created_at->format('Y-m-d') }}</li>
            @endforeach
        @else
            <li>No hay elementos para mostrar</li>
        @endisset
        {{ $projects->links() }}
    </ul>

@endsection
