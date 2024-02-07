<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('id_Restaurante') }}
            {{ Form::text('id_Restaurante', $restaurante->id_Restaurante, ['class' => 'form-control' . ($errors->has('id_Restaurante') ? ' is-invalid' : ''), 'placeholder' => 'Id Restaurante']) }}
            {!! $errors->first('id_Restaurante', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Nombre') }}
            {{ Form::text('Nombre', $restaurante->Nombre, ['class' => 'form-control' . ($errors->has('Nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('Nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Tipo') }}
            {{ Form::text('Tipo', $restaurante->Tipo, ['class' => 'form-control' . ($errors->has('Tipo') ? ' is-invalid' : ''), 'placeholder' => 'Tipo']) }}
            {!! $errors->first('Tipo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Compraid') }}
            {{ Form::text('Compraid', $restaurante->Compraid, ['class' => 'form-control' . ($errors->has('Compraid') ? ' is-invalid' : ''), 'placeholder' => 'Compraid']) }}
            {!! $errors->first('Compraid', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Ventaid') }}
            {{ Form::text('Ventaid', $restaurante->Ventaid, ['class' => 'form-control' . ($errors->has('Ventaid') ? ' is-invalid' : ''), 'placeholder' => 'Ventaid']) }}
            {!! $errors->first('Ventaid', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Empleadoid') }}
            {{ Form::text('Empleadoid', $restaurante->Empleadoid, ['class' => 'form-control' . ($errors->has('Empleadoid') ? ' is-invalid' : ''), 'placeholder' => 'Empleadoid']) }}
            {!! $errors->first('Empleadoid', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>