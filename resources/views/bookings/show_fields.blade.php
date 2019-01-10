<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $booking->id !!}</p>
</div>

<!-- Client Id Field -->
<div class="form-group">
    {!! Form::label('client_id', 'Client Id:') !!}
    <p>{!! $booking->client->firstName !!}</p>
</div>

<!-- Brand Id Field -->
<div class="form-group">
    {!! Form::label('brand_id', 'Brand Id:') !!}
    <p>{!! $booking->brand->name !!}</p>
</div>

<!-- Car Id Field -->
<div class="form-group">
    {!! Form::label('car_id', 'Car Id:') !!}
    <p>{!! $booking->car->name !!}</p>
</div>

<!-- Agency Id Field -->
<div class="form-group">
    {!! Form::label('agency_id', 'Agency Id:') !!}
    <p>{!! $booking->agency->name !!}</p>
</div>

<!-- Start Date Field -->
<div class="form-group">
    {!! Form::label('start_date', 'Start Date:') !!}
    <p>{!! $booking->start_date !!}</p>
</div>

<!-- End Date Field -->
<div class="form-group">
    {!! Form::label('end_date', 'End Date:') !!}
    <p>{!! $booking->end_date !!}</p>
</div>

<!-- Options Field -->
<div class="form-group">
    {!! Form::label('options', 'Options:') !!}
    <p>{!! $booking->options !!}</p>
</div>

<!-- Status Field -->
<div class="form-group">
    {!! Form::label('status', 'Status:') !!}
    <p>{!! $booking->status !!}</p>
</div>

<!-- Deleted At Field -->
<div class="form-group">
    {!! Form::label('deleted_at', 'Deleted At:') !!}
    <p>{!! $booking->deleted_at !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $booking->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $booking->updated_at !!}</p>
</div>

