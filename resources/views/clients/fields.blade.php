<!-- Libelle Field -->
<div class="form-group col-sm-6">
    {!! Form::label('prenom', 'Prenom:') !!}
    {!! Form::text('prenom', null, ['class' => 'form-control','maxlength' => 100]) !!}
</div>

<!-- Libelle Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nom', 'Nom:') !!}
    {!! Form::text('nom', null, ['class' => 'form-control','maxlength' => 100]) !!}
</div>
<!-- Libelle Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cni', 'CNI:') !!}
    {!! Form::text('cni', null, ['class' => 'form-control','maxlength' => 100]) !!}
</div>
<!-- Libelle Field -->
<div class="form-group col-sm-6">
    {!! Form::label('sexe', 'Sexe:') !!}
    {!! Form::text('sexe', null, ['class' => 'form-control','maxlength' => 100]) !!}
</div>
<!-- Libelle Field -->
<div class="form-group col-sm-6">
    {!! Form::label('adresse', 'Adresse:') !!}
    {!! Form::text('adresse', null, ['class' => 'form-control','maxlength' => 100]) !!}
</div>
<!-- Libelle Field -->
<div class="form-group col-sm-6">
    {!! Form::label('telephone', 'Telephone:') !!}
    {!! Form::text('telephone', null, ['class' => 'form-control','maxlength' => 100]) !!}
</div>
<!-- Libelle Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::email('email', null, ['class' => 'form-control','maxlength' => 100]) !!}
</div>
<!-- Libelle Field -->
<div class="form-group col-sm-6">
    {!! Form::label('salaire', 'Salaire:') !!}
    {!! Form::number('salaire', null, ['class' => 'form-control','maxlength' => 100]) !!}
</div>
<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Enrgistrer', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('clients.index') }}" class="btn btn-default">Cancel</a>
</div>
