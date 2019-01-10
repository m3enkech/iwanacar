<!-- Client Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('client_id', 'Client :') !!}
    {!! Form::select('client_id', $clients, null, ['class' => 'form-control']) !!}
</div>

<!-- Brand Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('brand_id', 'Brand :') !!}
    {!! Form::select('brand_id', $brands, null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-6">
<label for="validationCustom03">Car Name:</label>
  <select class="form-control" name="car_id" id="validationCustom03" onchange="ChangecatList()" required>
    @foreach($car_prices as $car)
                 <option value="{{ $car->id }}" <?php if(isset($booking)): if ($booking->car_id == $car->id ): ?>
                     selected
                 <?php endif; endif; ?>>{{ $car->name }}</option>
    @endforeach
  </select>
</div>

<div class="form-group col-sm-6">
    <label for="booking_price">Booking Price:</label>
    <select class="form-control" id="booking_price" name="booking_price" required>
     </select>
</div>
<!-- Agency Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('agency_id', 'Agency :') !!}
    {!! Form::select('agency_id', $agencies, null, ['class' => 'form-control']) !!}
</div>

<!-- Start Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('start_date', 'Start Date:') !!}
    {!! Form::date('start_date', (isset($booking) && $booking->start_date ? $booking->start_date : date('Y-m-d')), ['class' => 'form-control']) !!}
</div>

<!-- End Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('end_date', 'End Date:') !!}
    {!! Form::date('end_date', (isset($booking) && $booking->end_date ? $booking->end_date : date('Y-m-d')), ['class' => 'form-control']) !!}
</div>





<!-- Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status', 'Status:') !!}
    {!! Form::select('status', ['pending'=> 'pending','valid'=>'valid', 'expired'=>'expired'],null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('bookings.index') !!}" class="btn btn-default">Cancel</a>
</div>





<script type="text/javascript">
  var catAndActs = {};
  var i =0;
  <?php foreach ($car_prices as $car): ?>
      catAndActs['{{$car->id}}'] = ['{{$car->price_unit}}','{{$car->price_long_term}}','{{$car->price_unit_agencies}}']; 
  <?php endforeach ?>

$(function () {
    ChangecatList(); //this calls it on load
    $("validationCustom03").change(ChangecatList);
});
function ChangecatList() {
    var catList = document.getElementById("validationCustom03");
    var actList = document.getElementById("booking_price");
    var selCat = catList.options[catList.selectedIndex].value;
    while (actList.options.length) {
        actList.remove(0);
    }
    var cats = catAndActs[selCat];
    if (cats) {
        var i;
        for (i = 0; i < cats.length; i++) {
            var cat = new Option(cats[i], cats[i]);
            actList.options.add(cat);
            <?php if (isset($booking)): ?>
                 if({!!$booking->booking_price!!} == cats[i]){
                    $('#booking_price').prop('selectedIndex',i);

                    }
            <?php endif ?>
           
        
            
            
        }
    }
}       

</script>

