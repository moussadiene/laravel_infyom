<!-- Nom Field -->
<div class="form-group">
    {!! Form::label('nom', 'Nom:') !!}
    <p>{{ $entreprise->nom }}</p>
</div>

<!-- Ninea Field -->
<div class="form-group">
    {!! Form::label('ninea', 'Ninea:') !!}
    <p>{{ $entreprise->ninea }}</p>
</div>

<!-- Adresse Field -->
<div class="form-group">
    {!! Form::label('adresse', 'Adresse:') !!}
    <p>{{ $entreprise->adresse }}</p>
</div>

<!-- Telephone Field -->
<div class="form-group">
    {!! Form::label('telephone', 'Telephone:') !!}
    <p>{{ $entreprise->telephone }}</p>
</div>

<!-- Email Field -->
<div class="form-group">
    {!! Form::label('email', 'Email:') !!}
    <p>{{ $entreprise->email }}</p>
</div>

<!-- Budget Field -->
<div class="form-group">
    {!! Form::label('budget', 'Budget:') !!}
    <p>{{ $entreprise->budget }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $entreprise->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $entreprise->updated_at }}</p>
</div>

