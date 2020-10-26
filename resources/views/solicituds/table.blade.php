<div class="table-responsive">
    <table class="table" id="solicituds-table">
        <thead>
            <tr>
                <th>Cedula Persona</th>
        <th>Tipo</th>
        <th>Descripcion</th>
        <th>Fecha Solicitud</th>
        <th>Estado</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($solicituds as $solicitud)
            <tr>
                <td>{{ $solicitud->cedula_persona }}</td>
            <td>{{ $solicitud->tipo }}</td>
            <td>{{ $solicitud->descripcion }}</td>
            <td>{{ $solicitud->fecha_solicitud }}</td>
            <td>{{ $solicitud->estado }}</td>
                <td>
                    {!! Form::open(['route' => ['solicituds.destroy', $solicitud->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('solicituds.show', [$solicitud->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('solicituds.edit', [$solicitud->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
