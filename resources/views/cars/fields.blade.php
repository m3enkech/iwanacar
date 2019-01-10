<!-- Name Field -->
<div class="form-group col-sm-4">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Year Field -->
<div class="form-group col-sm-4">
    {!! Form::label('year', 'Year:') !!}
    {!! Form::text('year', null, ['class' => 'form-control']) !!}
</div>

<!-- Brand Id Field -->
<div class="form-group col-sm-4">
    {!! Form::label('brand_id', 'Brand Id:') !!}
    {!! Form::select('brand_id', $brands, null , ['class' => 'form-control']) !!}
</div>

<!-- User Id Field -->
<div class="form-group col-sm-4">
    {!! Form::label('user_id', 'User Id:') !!}
    {!! Form::select('user_id', $users, null, ['class' => 'form-control']) !!}
</div>

<!-- Agency Id Field -->
<div class="form-group col-sm-4">
    {!! Form::label('agency_id', 'Agency Id:') !!}
    {!! Form::select('agency_id',$agencies, null, ['class' => 'form-control']) !!}
</div>

<!-- Year Field -->
<div class="form-group col-sm-4">
    {!! Form::label('price_unit', 'Prix Unitaire:') !!}
    {!! Form::text('price_unit', null, ['class' => 'form-control']) !!}
</div>
<!-- Year Field -->
<div class="form-group col-sm-4">
    {!! Form::label('price_long_term', 'Prix longue durée / Jour:') !!}
    {!! Form::text('price_long_term', null, ['class' => 'form-control']) !!}
</div>
<!-- Year Field -->
<div class="form-group col-sm-4">
    {!! Form::label('price_unit_agencies', 'Prix pour les agences / Jour:') !!}
    {!! Form::text('price_unit_agencies', null, ['class' => 'form-control']) !!}
</div>

<!-- Agency Image Upload -->
<div class="form-group col-sm-4">
    {!! Form::label('image', 'Car Image:') !!}
    {!! Form::file('image',['class' => 'form-control','multiple' => 'multiple']) !!}
</div>


<!-- Year Field -->
<div class="form-group col-sm-4">
    {!! Form::label('mileage', 'Mileage:') !!}
    {!! Form::text('mileage', null, ['class' => 'form-control']) !!}
</div>

<!-- Year Field -->
<div class="form-group col-sm-4">
    {!! Form::label('matricule', 'Matricule:') !!}
    {!! Form::text('matricule', null, ['class' => 'form-control']) !!}
</div>

<!-- Year Field -->
<div class="form-group col-sm-4">
    {!! Form::label('engine', 'Engine:') !!}
    {!! Form::text('engine', null, ['class' => 'form-control']) !!}
</div>

<!-- Year Field -->
<div class="form-group col-sm-4">
    {!! Form::label('prix_achat', 'Prix d\'achat:') !!}
    {!! Form::text('prix_achat', null, ['class' => 'form-control']) !!}
</div>

<!-- Year Field -->
<div class="form-group col-sm-4">
    {!! Form::label('insurance_name', 'Insurance name:') !!}
    {!! Form::text('insurance_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Year Field -->
<div class="form-group col-sm-4">
    {!! Form::label('insurance_number', 'Insurance_number:') !!}
    {!! Form::text('insurance_number', null, ['class' => 'form-control']) !!}
</div>

<!-- Year Field -->
<div class="form-group col-sm-4">
    {!! Form::label('insurance_date', 'Insurance Exp Date:') !!}
    {!! Form::date('insurance_date', (isset($car) && $car->insurance_date ? $car->insurance_date : date('Y-m-d')), ['class' => 'form-control']) !!}
</div>

<!-- Year Field -->
<div class="form-group col-sm-4">
    {!! Form::label('carte_grise', 'carte_grise:') !!}
    {!! Form::text('carte_grise', null, ['class' => 'form-control']) !!}
</div>

<!-- Year Field -->
<div class="form-group col-sm-4">
    {!! Form::label('seats', 'seats:') !!}
    {!! Form::select('seats', ['1'=> '1','2'=>'2', '3'=>'3', '4'=>'4', '5'=>'5', '6'=>'6', '7'=>'7'],null, ['class' => 'form-control']) !!}
</div>

<!-- Year Field -->
<div class="form-group col-sm-4">
    {!! Form::label('transmission', 'transmission:') !!}
    {!! Form::select('transmission', ['manuelle'=> 'Manuelle','automatique'=>'Automatique'],null, ['class' => 'form-control']) !!}
</div>

<!-- Year Field -->
<div class="form-group col-sm-4">
    {!! Form::label('doors', 'doors:') !!}
    {!! Form::select('doors', ['1'=> '1','2'=>'2', '3'=>'3', '4'=>'4', '5'=>'5'],null, ['class' => 'form-control']) !!}
</div>

<!-- Year Field -->
<div class="form-group col-sm-4">
    {!! Form::label('color', 'color:') !!}
    {!! Form::text('color', null, ['class' => 'form-control']) !!}
</div>

<!-- Year Field -->
<div class="form-group col-sm-4">
    {!! Form::label('vidange', 'vidange:') !!}
    {!! Form::text('vidange', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field --><!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('cars.index') !!}" class="btn btn-default">Cancel</a>
</div>
