@extends('layouts.app')

@section('content')
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f0f0f0;
    }

    header {
        background-color: #fff;
        box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.2);
        padding: 20px 40px;
    }

    nav a {
        margin-right: 20px;
        color: #333;
        text-decoration: none;
    }

    main {
        padding: 40px;
    }

    footer {
        background-color: #fff;
        text-align: center;
        padding: 20px 0;
        position: fixed;
        width: 100%;
        bottom: 0;
    }

    ul {
        list-style: lower-roman;
        padding: 0;
        font-family: Arial, sans-serif;
        color: #333;
    }

    li {
        margin-bottom: 20px;
        padding: 10px;
        border-bottom: 1px solid #ddd;
    }

    li:last-child {
        border-bottom: none;
    }
</style>
<h1>Lista de users</h1>
<a href="{{ route('users.create') }}">Agregar user</a>
<ul>
    @foreach($users as $user)
    <li>
        <a href="{{ route('users.show', $user->id) }}">{{ $user->name }}</a>
    </li>
    @endforeach
</ul>
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