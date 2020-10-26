<!-- Cedula Persona Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cedula_persona', 'Cedula Persona:') !!}
    {!! Form::select('cedula_persona', $personaItems, null, ['class' => 'form-control']) !!}
</div>

<!-- Tipo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tipo', 'Tipo:') !!}
    {!! Form::text('tipo', null, ['class' => 'form-control']) !!}
</div>

<!-- Descripcion Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('descripcion', 'Descripcion:') !!}
    {!! Form::textarea('descripcion', null, ['class' => 'form-control']) !!}
</div>

<!-- Fecha Solicitud Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fecha_solicitud', 'Fecha Solicitud:') !!}
    {!! Form::text('fecha_solicitud', null, ['class' => 'form-control','id'=>'fecha_solicitud']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#fecha_solicitud').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Estado Field -->
<div class="form-group col-sm-6">
    {!! Form::label('estado', 'Estado:') !!}
    {!! Form::select('estado', ['Pendiente' => 'Pendiente', 'Ejecutandose' => 'Ejecutandose', 'Listo' => 'Listo'], null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('solicituds.index') }}" class="btn btn-default">Cancel</a>
</div>
