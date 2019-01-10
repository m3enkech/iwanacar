<table class="table table-responsive" id="clients-table">
    <thead>
        <tr>
        <th>Client Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Cin</th>
        <th>Status</th>
        <th>N° Permis</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($clients as $client)
        <tr>
            <td>{!! $client->firstName.' '.$client->lastName !!}</td>
            <td>{!! $client->email !!}</td>
            <td>{!! $client->phone !!}</td>
            <td>{!! $client->cin !!}</td>
            <td>{!! $client->status !!}</td>
            <td>{!! $client->permis !!}</td>
            <td>
                {!! Form::open(['route' => ['clients.destroy', $client->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('clients.show', [$client->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('clients.edit', [$client->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>