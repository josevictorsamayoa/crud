<div class="table-responsive-sm">
    <table class="table table-striped" id="docentes-table">
        <thead>
            <tr>
                <th>Nombre</th>
        <th>Apellido</th>
        <th>Especialidad</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($docentes as $docente)
            <tr>
                <td>{{ $docente->nombre }}</td>
            <td>{{ $docente->apellido }}</td>
            <td>{{ $docente->especialidad }}</td>
            <td>
                    {!! Form::open(['route' => ['docentes.destroy', $docente-> iddocente], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('docentes.show', [$docente -> iddocente]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('docentes.edit', [$docente -> iddocente]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>

            </tr>
        @endforeach
        </tbody>
    </table>
</div>