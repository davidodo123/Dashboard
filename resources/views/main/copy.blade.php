@extends('templates.copybase')

@section('nav-items')

@foreach($navItems as $item)
@endforeach

<li class="nav-item">
  <a class="nav-link active" href="{{ route('main.dashboard') }}" arial-current="page">DASHBOARD</a>
@endsection

@section('content')
<h2 class="mb-4">Bienvenido al DASHBOARD David Santiago Bermúdez</<h2>
  <h2>-------------------------------</h2>
<p>Si quiere acceder a mi Dashboard, dale al boton de DASHBOARD en la barra de navegacion</p>
<p>No he cambiado los valores, solo he puesto mas numeros y mas casillas</p>
@endsection

