<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('creditos') }}
            {{ Form::text('creditos', $materium->creditos, ['class' => 'form-control' . ($errors->has('creditos') ? ' is-invalid' : ''), 'placeholder' => 'Creditos']) }}
            {!! $errors->first('creditos', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nombre_materia') }}
            {{ Form::text('nombre_materia', $materium->nombre_materia, ['class' => 'form-control' . ($errors->has('nombre_materia') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Materia']) }}
            {!! $errors->first('nombre_materia', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('profesor') }}
            {{ Form::text('profesor', $materium->profesor, ['class' => 'form-control' . ($errors->has('profesor') ? ' is-invalid' : ''), 'placeholder' => 'Profesor']) }}
            {!! $errors->first('profesor', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Turno') }}
            {{ Form::text('Turno', $materium->Turno, ['class' => 'form-control' . ($errors->has('Turno') ? ' is-invalid' : ''), 'placeholder' => 'Turno']) }}
            {!! $errors->first('Turno', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('disponible') }}
            {{ Form::text('disponible', $materium->disponible, ['class' => 'form-control' . ($errors->has('disponible') ? ' is-invalid' : ''), 'placeholder' => 'Disponible']) }}
            {!! $errors->first('disponible', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>