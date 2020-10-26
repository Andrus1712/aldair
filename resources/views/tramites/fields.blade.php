<!-- Solicitud Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('solicitud_id', 'Solicitud Id:') !!}
    {!! Form::select('solicitud_id', $solicitudItems, null, ['class' => 'form-control']) !!}
</div>

<!-- Fechas Recepcion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fechas_recepcion', 'Fechas Recepcion:') !!}
    {!! Form::text('fechas_recepcion', null, ['class' => 'form-control','id'=>'fechas_recepcion']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#fechas_recepcion').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Fecha Recepcion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fecha_recepcion', 'Fecha Recepcion:') !!}
    {!! Form::text('fecha_recepcion', null, ['class' => 'form-control','id'=>'fecha_recepcion']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#fecha_recepcion').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Motivo Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('motivo', 'Motivo:') !!}
    {!! Form::textarea('motivo', null, ['class' => 'form-control']) !!}
</div>

<!-- Fecha Prorroga Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fecha_prorroga', 'Fecha Prorroga:') !!}
    {!! Form::text('fecha_prorroga', null, ['class' => 'form-control','id'=>'fecha_prorroga']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#fecha_prorroga').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('tramites.index') }}" class="btn btn-default">Cancel</a>
</div>
