<div class="table-responsive">
    <table class="table" id="personas-table">
        <thead>
            <tr>
                <th>Cedula</th>
        <th>Nombre</th>
        <th>Cargo</th>
        <th>Dependencia</th>
        <th>Telefono</th>
        <th>Correo</th>
        <th>Prvilegio</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($personas as $persona)
            <tr>
                <td>{{ $persona->cedula }}</td>
            <td>{{ $persona->nombre }}</td>
            <td>{{ $persona->cargo }}</td>
            <td>{{ $persona->dependencia }}</td>
            <td>{{ $persona->telefono }}</td>
            <td>{{ $persona->correo }}</td>
            <td>{{ $persona->prvilegio }}</td>
                <td>
                    {!! Form::open(['route' => ['personas.destroy', $persona->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('personas.show', [$persona->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('personas.edit', [$persona->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
