<table class="table table-responsive" id="reglages-table">
    <thead>
        <tr>
            <th>Type Reglage</th>
        <th>Date Reglage</th>
        <th>Montant</th>
        <th>Car Id</th>
        <th>Agency Id</th>
        <th>User Id</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($reglages as $reglage)
        <tr>
            <td>{!! $reglage->type_reglage !!}</td>
            <td>{!! $reglage->date_reglage !!}</td>
            <td>{!! $reglage->montant !!}</td>
            <td>{!! $reglage->car_id !!}</td>
            <td>{!! $reglage->agency_id !!}</td>
            <td>{!! $reglage->user_id !!}</td>
            <td>
                {!! Form::open(['route' => ['reglages.destroy', $reglage->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('reglages.show', [$reglage->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('reglages.edit', [$reglage->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>