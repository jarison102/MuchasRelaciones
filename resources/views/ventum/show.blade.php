@extends('layouts.app')

@section('template_title')
    {{ $ventum->name ?? "{{ __('Show') Ventum" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Ventum</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('venta.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Venta:</strong>
                            {{ $ventum->id_venta }}
                        </div>
                        <div class="form-group">
                            <strong>Clienteid:</strong>
                            {{ $ventum->Clienteid }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $ventum->Nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo:</strong>
                            {{ $ventum->Tipo }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
