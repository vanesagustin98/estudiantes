@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-sm">

        </div>
        <div class="col-sm">
            <div>
                <h2>Formulario Estudiante</h2>
            </div>
            <form method="POST" action="{{ route('estudiante.adicionar') }}">
                {!! csrf_field() !!}
                @include('estudiantes.formulario')
                <button type="submit" class="btn btn-primary">Guardar</button>
                <button type="button" class="btn btn-warning"
                    onclick="window.location.href='{{ url('estudiantes') }}'">Cancelar</button>
            </form>
        </div>
        <div class="col-sm">

        </div>
    </div>
</div>


@endsection