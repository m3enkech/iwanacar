<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $invoice->id !!}</p>
</div>

<!-- Client Id Field -->
<div class="form-group">
    {!! Form::label('client_id', 'Client Id:') !!}
    <p>{!! $invoice->client_id !!}</p>
</div>

<!-- Agency Id Field -->
<div class="form-group">
    {!! Form::label('agency_id', 'Agency Id:') !!}
    <p>{!! $invoice->agency_id !!}</p>
</div>

<!-- User Id Field -->
<div class="form-group">
    {!! Form::label('user_id', 'User Id:') !!}
    <p>{!! $invoice->user_id !!}</p>
</div>

<!-- Create Date Field -->
<div class="form-group">
    {!! Form::label('create_date', 'Create Date:') !!}
    <p>{!! $invoice->create_date !!}</p>
</div>

<!-- Ref Invoice Field -->
<div class="form-group">
    {!! Form::label('ref_invoice', 'Ref Invoice:') !!}
    <p>{!! $invoice->ref_invoice !!}</p>
</div>

<!-- Deleted At Field -->
<div class="form-group">
    {!! Form::label('deleted_at', 'Deleted At:') !!}
    <p>{!! $invoice->deleted_at !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $invoice->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $invoice->updated_at !!}</p>
</div>

