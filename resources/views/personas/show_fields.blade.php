<!-- Cedula Field -->
<div class="form-group">
    {!! Form::label('cedula', 'Cedula:') !!}
    <p>{{ $persona->cedula }}</p>
</div>

<!-- Nombre Field -->
<div class="form-group">
    {!! Form::label('nombre', 'Nombre:') !!}
    <p>{{ $persona->nombre }}</p>
</div>

<!-- Cargo Field -->
<div class="form-group">
    {!! Form::label('cargo', 'Cargo:') !!}
    <p>{{ $persona->cargo }}</p>
</div>

<!-- Dependencia Field -->
<div class="form-group">
    {!! Form::label('dependencia', 'Dependencia:') !!}
    <p>{{ $persona->dependencia }}</p>
</div>

<!-- Telefono Field -->
<div class="form-group">
    {!! Form::label('telefono', 'Telefono:') !!}
    <p>{{ $persona->telefono }}</p>
</div>

<!-- Correo Field -->
<div class="form-group">
    {!! Form::label('correo', 'Correo:') !!}
    <p>{{ $persona->correo }}</p>
</div>

<!-- Prvilegio Field -->
<div class="form-group">
    {!! Form::label('prvilegio', 'Prvilegio:') !!}
    <p>{{ $persona->prvilegio }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $persona->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $persona->updated_at }}</p>
</div>

