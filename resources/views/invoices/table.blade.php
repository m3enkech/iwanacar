<table class="table table-responsive" id="invoices-table">
    <thead>
        <tr>
            <th>Client Id</th>
        <th>Agency Id</th>
        <th>User Id</th>
        <th>Create Date</th>
        <th>Ref Invoice</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($invoices as $invoice)
        <tr>
            <td>{!! $invoice->client_id !!}</td>
            <td>{!! $invoice->agency_id !!}</td>
            <td>{!! $invoice->user_id !!}</td>
            <td>{!! $invoice->create_date !!}</td>
            <td>{!! $invoice->ref_invoice !!}</td>
            <td>
                {!! Form::open(['route' => ['invoices.destroy', $invoice->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('invoices.show', [$invoice->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('invoices.edit', [$invoice->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>