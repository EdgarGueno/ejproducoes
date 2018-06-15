@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="center">Adicionar Usuário</h2>
    <div class="row">
        <nav>
            <div class="nav-wrapper green">
                <div class="col s12">
                    <a href="{{route('admin.principal')}}" class="breadcrumb"> Home</a>
                    <a href="{{route('admin.usuarios')}}" class="breadcrumb"> Usuários</a>
                    <a href="{{route('admin.usuarios')}}" class="breadcrumb"> Adicionar Usuarios</a>
                </div>
            </div>
        </nav>
    </div>
        <div class="row">
            <form action="{{route('admin.usuarios.salvar')}}" method="post">
            
            {{ csrf_field()}}
            @include('admin.usuarios._form')

            <button class="btn green"> Adicionar </button>

            </form>

        </div>
    </div>
</div>
@endsection