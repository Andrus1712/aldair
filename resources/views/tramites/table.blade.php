<div class="table-responsive">
    <table class="table" id="tramites-table">
        <thead>
            <tr>
                <th>Solicitud Id</th>
        <th>Fechas Recepcion</th>
        <th>Fecha Recepcion</th>
        <th>Hora Recepcion</th>
        <th>Motivo</th>
        <th>Fecha Prorroga</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($tramites as $tramite)
            <tr>
                <td>{{ $tramite->solicitud_id }}</td>
            <td>{{ $tramite->fechas_recepcion }}</td>
            <td>{{ $tramite->fecha_recepcion }}</td>
            <td>{{ $tramite->hora_recepcion }}</td>
            <td>{{ $tramite->motivo }}</td>
            <td>{{ $tramite->fecha_prorroga }}</td>
                <td>
                    {!! Form::open(['route' => ['tramites.destroy', $tramite->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('tramites.show', [$tramite->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('tramites.edit', [$tramite->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
