@extends('layouts.app')

@section('content')
<style>
    h1 {
        color: #333;
    }

    label {
        display: block;
        margin-top: 20px;
    }

    input {
        display: block;
        width: 100%;
        padding: 10px;
        margin-top: 5px;
        border-radius: 4px;
        border: 1px solid #ccc;
    }

    button {
        display: block;
        margin-top: 20px;
        padding: 10px 20px;
        background-color: #007BFF;
        color: #fff;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    button:hover {
        background-color: #0056b3;
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
<h1>Editar user</h1>
<form action="{{ route('users.update', $user->id) }}" method="POST">
    @csrf
    @method('PUT')
    <label for="name">Name:</label>
    <input type="text" name="name" id="name" value="{{ $user->name }}">
    <label for="email">Email:</label>
    <input type="email" name="email" id="email" value="{{ $user->email }}">
    <button type="submit">Guardar</button>
</form>
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
@endsection