<!-- Client Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('client_id', 'Client Id:') !!}
    {!! Form::number('client_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Agency Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('agency_id', 'Agency Id:') !!}
    {!! Form::number('agency_id', null, ['class' => 'form-control']) !!}
</div>

<!-- User Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user_id', 'User Id:') !!}
    {!! Form::number('user_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Create Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('create_date', 'Create Date:') !!}
    {!! Form::date('create_date', null, ['class' => 'form-control']) !!}
</div>

<!-- Ref Invoice Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ref_invoice', 'Ref Invoice:') !!}
    {!! Form::text('ref_invoice', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('invoices.index') !!}" class="btn btn-default">Cancel</a>
</div>
