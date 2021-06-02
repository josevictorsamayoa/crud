<!-- Nombre Field -->
<div class="form-group">
    {!! Form::label('nombre', 'Nombre:') !!}
    <p>{{ $docente->nombre }}</p>
</div>

<!-- Apellido Field -->
<div class="form-group">
    {!! Form::label('apellido', 'Apellido:') !!}
    <p>{{ $docente->apellido }}</p>
</div>

<!-- Especialidad Field -->
<div class="form-group">
    {!! Form::label('especialidad', 'Especialidad:') !!}
    <p>{{ $docente->especialidad }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $docente->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $docente->updated_at }}</p>
</div>

