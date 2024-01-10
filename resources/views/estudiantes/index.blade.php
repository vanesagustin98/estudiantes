@extends('layouts.app');

@section('content')
<button onclick="window.location.href='{{url('estudiantes/preadicionar')}}'" class="btn btn-info">Nuevo Estudiante</button>
<table class="table">
    <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nombres</th>
            <th scope="col">Apellidos</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($estudiantes as $estudiante)
        <tr>
            <th scope="row">{{$estudiante->id}}</th>
            <td>{{$estudiante->nombres}}</td>
            <td>{{$estudiante->apellidos}}</td>
            <td>
                <button type="button" class="btn btn-primary" value="{{$estudiante->id}}">Editar</button>
                <button type="button" class="btn btn-danger" value="{{$estudiante->id}}">Eliminar</button>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<script src="{{ asset('js/scriptEstudiante.js?n=2') }}"></script>

@endsection