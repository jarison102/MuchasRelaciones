@extends('layouts.app')

@section('template_title')
    {{ $restaurante->name ?? "{{ __('Show') Restaurante" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Restaurante</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('restaurantes.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Restaurante:</strong>
                            {{ $restaurante->id_Restaurante }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $restaurante->Nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo:</strong>
                            {{ $restaurante->Tipo }}
                        </div>
                        <div class="form-group">
                            <strong>Compraid:</strong>
                            {{ $restaurante->Compraid }}
                        </div>
                        <div class="form-group">
                            <strong>Ventaid:</strong>
                            {{ $restaurante->Ventaid }}
                        </div>
                        <div class="form-group">
                            <strong>Empleadoid:</strong>
                            {{ $restaurante->Empleadoid }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
