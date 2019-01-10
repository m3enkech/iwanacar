@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Booking
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
<!-- Button trigger modal -->
<div class="col-md-12">
      <!-- Application buttons -->

        <div class="box-body">
          <a class="btn btn-app" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-user-plus"></i> Ajouter Client
          </a>
           <a class="btn btn-app" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-car"></i> Ajouter Voiture
          </a>
        </div>

</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ajouter Client</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         {!! Form::open(['route' => 'clients.addClient']) !!}

                        @include('clients.fields')
                        <!-- Submit Field -->
                        <div class="form-group col-sm-12">
                            {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                            <a href="{!! route('bookings.create') !!}" class="btn btn-default">Cancel</a>
                        </div>
                    {!! Form::close() !!}
      </div>
      <div class="modal-footer">
        
      </div>
    </div>
  </div>
</div>
            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'bookings.store']) !!}

                        @include('bookings.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>

@endsection
