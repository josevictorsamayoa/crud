<!-- Nombre Field -->
<div class="form-group">
    {!! Form::label('nombre', 'Nombre:') !!}
    <p>{{ $alumno->nombre }}</p>
</div>

<!-- Apellido Field -->
<div class="form-group">
    {!! Form::label('apellido', 'Apellido:') !!}
    <p>{{ $alumno->apellido }}</p>
</div>

<!-- Telefono Field -->
<div class="form-group">
    {!! Form::label('telefono', 'Telefono:') !!}
    <p>{{ $alumno->telefono }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $alumno->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $alumno->updated_at }}</p>
</div>

