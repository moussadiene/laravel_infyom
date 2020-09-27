<div class="table-responsive">
    <table class="table" id="comptes-table">
        <thead>
            <tr>
                <th>Numero</th>
        <th>Rib</th>
        <th>Entreprise Id</th>
        <th>Client Id</th>
        <th>Type Compte</th>
        <th>Solde</th>
        <th>Agios</th>
        <th>Fraisouverture</th>
        <th>Remuneration</th>
        <th>Dated</th>
        <th>Datef</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($comptes as $compte)
            <tr>
                <td>{{ $compte->numero }}</td>
            <td>{{ $compte->rib }}</td>
            <td>{{ $compte->entreprise_id }}</td>
            <td>{{ $compte->client_id }}</td>
            <td>{{ $compte->type_compte }}</td>
            <td>{{ $compte->solde }}</td>
            <td>{{ $compte->agios }}</td>
            <td>{{ $compte->fraisOuverture }}</td>
            <td>{{ $compte->remuneration }}</td>
            <td>{{ $compte->dateD }}</td>
            <td>{{ $compte->dateF }}</td>
                <td>
                    {!! Form::open(['route' => ['comptes.destroy', $compte->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('comptes.show', [$compte->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('comptes.edit', [$compte->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
