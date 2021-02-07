@extends('layout')

@section('title','Create Project')

@section('content')
    <h1>Edit Project</h1>

    @include('partials.validation-errors')

    <form method="POST" action="{{ route('projects.update', $project) }}">
        @method('PATCH')
        @include('projects._form', ['btnText' => 'Edit'])
    </form>

@endsection
