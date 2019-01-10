@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">Bookings</h1>
        <h1 class="pull-right">
           <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('bookings.create') !!}">Add New</a>
        </h1>
    </section>
    <div class="content">
        
        <div class="row">
        
            <div class="clearfix"></div>

            @include('flash::message')

           
            
            <div class="col-md-12">
                <div class="box box-primary">
                    <div class="box-header"><h3 class="box-title">Historiques des reservations</h3></div>
                    <div class="box-body">
                            @include('bookings.table', ['status' => 'expired'])
                    </div>
                    {{ $bookings->links() }}  
                </div>
                <div class="text-center">
                
                </div>
            </div>
        
        </div>
        <div class="row">
            
          </div>
        </div>
    </div>



@endsection

