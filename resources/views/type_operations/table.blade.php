<div class="table-responsive">
    <table class="table" id="typeOperations-table">
        <thead>
            <tr>
                <th>Libelle</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($typeOperations as $typeOperation)
            <tr>
                <td>{{ $typeOperation->libelle }}</td>
                <td>
                    {!! Form::open(['route' => ['typeOperations.destroy', $typeOperation->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('typeOperations.show', [$typeOperation->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('typeOperations.edit', [$typeOperation->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
