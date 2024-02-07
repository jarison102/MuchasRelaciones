@extends('layouts.app')

@section('template_title')
    {{ $proveedor->name ?? "{{ __('Show') Proveedor" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Proveedor</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('proveedors.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Proveedor:</strong>
                            {{ $proveedor->id_proveedor }}
                        </div>
                        <div class="form-group">
                            <strong>Compraid:</strong>
                            {{ $proveedor->Compraid }}
                        </div>
                        <div class="form-group">
                            <strong>Cedula:</strong>
                            {{ $proveedor->Cedula }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $proveedor->Nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo De Proveedor:</strong>
                            {{ $proveedor->Tipo de proveedor }}
                        </div>
                        <div class="form-group">
                            <strong>Telefono:</strong>
                            {{ $proveedor->Telefono }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
