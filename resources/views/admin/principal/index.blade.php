@extends('layouts.app')

@section('content')

<div class="container">
	<h2>Administração</h2>
	<div class=" container">
    <div class="row">
    <li><a href="{{ route('admin.usuarios') }}">Usuarios</a></li>
	
    </div>
	
</div>

@endsection