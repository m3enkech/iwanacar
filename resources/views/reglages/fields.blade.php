<!-- Type Reglage Field -->
<div class="form-group col-sm-6">
    {!! Form::label('type_reglage', 'Type Reglage:') !!}
    {!! Form::text('type_reglage', null, ['class' => 'form-control']) !!}
</div>

<!-- Date Reglage Field -->
<div class="form-group col-sm-6">
    {!! Form::label('date_reglage', 'Date Reglage:') !!}
    {!! Form::date('date_reglage', null, ['class' => 'form-control']) !!}
</div>

<!-- Montant Field -->
<div class="form-group col-sm-6">
    {!! Form::label('montant', 'Montant:') !!}
    {!! Form::number('montant', null, ['class' => 'form-control']) !!}
</div>

<!-- Car Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('car_id', 'Car Id:') !!}
    {!! Form::number('car_id', null, ['class' => 'form-control']) !!}
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

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('reglages.index') !!}" class="btn btn-default">Cancel</a>
</div>
