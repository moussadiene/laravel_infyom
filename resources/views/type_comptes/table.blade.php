<div class="table-responsive">
    <table class="table" id="typeComptes-table">
        <thead>
            <tr>
                <th>Libelle</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($typeComptes as $typeCompte)
            <tr>
                <td>{{ $typeCompte->libelle }}</td>
                <td>
                    {!! Form::open(['route' => ['typeComptes.destroy', $typeCompte->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('typeComptes.show', [$typeCompte->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('typeComptes.edit', [$typeCompte->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
