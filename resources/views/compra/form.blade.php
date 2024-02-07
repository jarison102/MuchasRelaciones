<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('id_compra') }}
            {{ Form::text('id_compra', $compra->id_compra, ['class' => 'form-control' . ($errors->has('id_compra') ? ' is-invalid' : ''), 'placeholder' => 'Id Compra']) }}
            {!! $errors->first('id_compra', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Productoid') }}
            {{ Form::text('Productoid', $compra->Productoid, ['class' => 'form-control' . ($errors->has('Productoid') ? ' is-invalid' : ''), 'placeholder' => 'Productoid']) }}
            {!! $errors->first('Productoid', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Productos Comprados') }}
            {{ Form::text('Productos Comprados', $compra->Productos Comprados, ['class' => 'form-control' . ($errors->has('Productos Comprados') ? ' is-invalid' : ''), 'placeholder' => 'Productos Comprados']) }}
            {!! $errors->first('Productos Comprados', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Tipo de compra') }}
            {{ Form::text('Tipo de compra', $compra->Tipo de compra, ['class' => 'form-control' . ($errors->has('Tipo de compra') ? ' is-invalid' : ''), 'placeholder' => 'Tipo De Compra']) }}
            {!! $errors->first('Tipo de compra', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Valor Compra') }}
            {{ Form::text('Valor Compra', $compra->Valor Compra, ['class' => 'form-control' . ($errors->has('Valor Compra') ? ' is-invalid' : ''), 'placeholder' => 'Valor Compra']) }}
            {!! $errors->first('Valor Compra', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>