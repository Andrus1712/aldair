<!-- Solicitud Id Field -->
<div class="form-group">
    {!! Form::label('solicitud_id', 'Solicitud Id:') !!}
    <p>{{ $tramite->solicitud_id }}</p>
</div>

<!-- Fechas Recepcion Field -->
<div class="form-group">
    {!! Form::label('fechas_recepcion', 'Fechas Recepcion:') !!}
    <p>{{ $tramite->fechas_recepcion }}</p>
</div>

<!-- Fecha Recepcion Field -->
<div class="form-group">
    {!! Form::label('fecha_recepcion', 'Fecha Recepcion:') !!}
    <p>{{ $tramite->fecha_recepcion }}</p>
</div>

<!-- Hora Recepcion Field -->
<div class="form-group">
    {!! Form::label('hora_recepcion', 'Hora Recepcion:') !!}
    <p>{{ $tramite->hora_recepcion }}</p>
</div>

<!-- Motivo Field -->
<div class="form-group">
    {!! Form::label('motivo', 'Motivo:') !!}
    <p>{{ $tramite->motivo }}</p>
</div>

<!-- Fecha Prorroga Field -->
<div class="form-group">
    {!! Form::label('fecha_prorroga', 'Fecha Prorroga:') !!}
    <p>{{ $tramite->fecha_prorroga }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $tramite->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $tramite->updated_at }}</p>
</div>

