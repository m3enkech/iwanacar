@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">Bookings Dashboard</h1>
        <h1 class="pull-right">
           <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('bookings.create') !!}">Add New</a>
        </h1>
    </section>
    <div class="content">
        
        <div class="row">
        
            <div class="clearfix"></div>

            @include('flash::message')


            <div class="col-md-6">
            <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Top Best Client</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <ul class="products-list product-list-in-box">
                @foreach($client_count as $client)
                <!-- /.item -->
                <li class="item">
                  
                  <div class="product-info">
                    <a href="{!! route('clients.show', [$client->client_id]) !!}" class="product-title">{{ $client->fname.' '.$client->lname }}
                      <span class="label label-info pull-right">{{ $client->count }} reservations</span></a>
                    
                  </div>
                </li>
                @endforeach
                <!-- /.item -->
              </ul>
            </div>
            <!-- /.box-body -->
            <div class="box-footer text-center">
              <a href="javascript:void(0)" class="uppercase">View All Clients</a>
            </div>
            <!-- /.box-footer -->
          </div>
        </div>


        <div class="row">
            
          </div>
        </div>
    </div>



@endsection

