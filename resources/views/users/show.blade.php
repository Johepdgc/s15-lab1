@extends('layouts.app')

@section('content')
<style>
    h1 {
        color: #333;
    }

    p {
        margin-bottom: 20px;
    }

    a {
        color: #007BFF;
        text-decoration: none;
    }

    a:hover {
        color: #0056b3;
    }

    button {
        display: block;
        margin-top: 20px;
        padding: 10px 20px;
        background-color: #dc3545;
        color: #fff;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    button:hover {
        background-color: #c82333;
    }

    .alert {
        color: #721c24;
        background-color: #f8d7da;
        border-color: #f5c6cb;
        padding: 10px;
        margin-top: 20px;
        border-radius: 4px;
    }
</style>

<h1>{{ $user->name }}</h1>
<p>{{ $user->email }}</p>
<a href="{{ route('users.edit', $user->id) }}">Editar</a>
<form action="{{ route('users.destroy', $user->id) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit">Eliminar</button>
</form>
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>@endif @endsection