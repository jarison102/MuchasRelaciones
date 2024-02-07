@extends('layouts.app')

@section('template_title')
    {{ $compra->name ?? "{{ __('Show') Compra" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Compra</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('compras.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Compra:</strong>
                            {{ $compra->id_compra }}
                        </div>
                        <div class="form-group">
                            <strong>Productoid:</strong>
                            {{ $compra->Productoid }}
                        </div>
                        <div class="form-group">
                            <strong>Productos Comprados:</strong>
                            {{ $compra->Productos Comprados }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo De Compra:</strong>
                            {{ $compra->Tipo de compra }}
                        </div>
                        <div class="form-group">
                            <strong>Valor Compra:</strong>
                            {{ $compra->Valor Compra }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
