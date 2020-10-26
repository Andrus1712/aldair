<!-- Cedula Persona Field -->
<div class="form-group">
    {!! Form::label('cedula_persona', 'Cedula Persona:') !!}
    <p>{{ $solicitud->cedula_persona }}</p>
</div>

<!-- Tipo Field -->
<div class="form-group">
    {!! Form::label('tipo', 'Tipo:') !!}
    <p>{{ $solicitud->tipo }}</p>
</div>

<!-- Descripcion Field -->
<div class="form-group">
    {!! Form::label('descripcion', 'Descripcion:') !!}
    <p>{{ $solicitud->descripcion }}</p>
</div>

<!-- Fecha Solicitud Field -->
<div class="form-group">
    {!! Form::label('fecha_solicitud', 'Fecha Solicitud:') !!}
    <p>{{ $solicitud->fecha_solicitud }}</p>
</div>

<!-- Estado Field -->
<div class="form-group">
    {!! Form::label('estado', 'Estado:') !!}
    <p>{{ $solicitud->estado }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $solicitud->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $solicitud->updated_at }}</p>
</div>

