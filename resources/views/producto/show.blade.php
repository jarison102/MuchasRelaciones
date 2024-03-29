@extends('layouts.app')

@section('template_title')
    {{ $producto->name ?? "{{ __('Show') Producto" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Producto</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('productos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Producto:</strong>
                            {{ $producto->id_producto }}
                        </div>
                        <div class="form-group">
                            <strong>Ventaid:</strong>
                            {{ $producto->Ventaid }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $producto->Nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo:</strong>
                            {{ $producto->Tipo }}
                        </div>
                        <div class="form-group">
                            <strong>Precio Unico:</strong>
                            {{ $producto->Precio unico }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
