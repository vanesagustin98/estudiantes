@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <a href="{{ route('estudiante.index')}}">
                        <div class="card" style="width: 18rem; border: none">
                            <img src="images\estidiante.png" width="100" height="100" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Estudiantes</h5>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection