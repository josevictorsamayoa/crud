<div class="table-responsive-sm">
    <table class="table table-striped" id="alumnos-table">
        <thead>
            <tr>
                <th>Nombre</th>
        <th>Apellido</th>
        <th>Telefono</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($alumnos as $alumno)
            <tr>
            <td>{{ $alumno->nombre }}</td>
            <td>{{ $alumno->apellido }}</td>
            <td>{{ $alumno->telefono }}</td>
            <td>
                    {!! Form::open(['route' => ['alumnos.destroy', $alumno->idalumno], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('alumnos.show', [$alumno->idalumno]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('alumnos.edit', [$alumno->idalumno]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>

            </tr>
        @endforeach
        </tbody>
    </table>
</div>