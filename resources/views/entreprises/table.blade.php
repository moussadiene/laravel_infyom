<div class="table-responsive">
    <table class="table" id="entreprises-table">
        <thead>
            <tr>
                <th>Nom</th>
        <th>Ninea</th>
        <th>Adresse</th>
        <th>Telephone</th>
        <th>Email</th>
        <th>Budget</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($entreprises as $entreprise)
            <tr>
                <td>{{ $entreprise->nom }}</td>
            <td>{{ $entreprise->ninea }}</td>
            <td>{{ $entreprise->adresse }}</td>
            <td>{{ $entreprise->telephone }}</td>
            <td>{{ $entreprise->email }}</td>
            <td>{{ $entreprise->budget }}</td>
                <td>
                    {!! Form::open(['route' => ['entreprises.destroy', $entreprise->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('entreprises.show', [$entreprise->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('entreprises.edit', [$entreprise->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
