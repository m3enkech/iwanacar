<!-- Id Field -->
        <div class="col-md-6">
            <div class="box box-widget widget-user-2">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            @switch($client->status)
              @case('Good')<div  class="widget-user-header bg-green"> @break
              @case('Bad')<div  class="widget-user-header bg-red"> @break
              @default<div  class="widget-user-header bg-gray"> @break
             @endswitch
            

              <div class="widget-user-image">
                <img class="img-circle" src="../dist/img/user7-128x128.jpg" alt="User Avatar">
              </div>
              <!-- /.widget-user-image -->
              <h3 class="widget-user-username">{!! $client->firstName.' '.$client->lastName !!}</h3>
              <h5 class="widget-user-desc">- Status: {!! $client->status !!}</h5>
            </div>
            <div class="box-footer no-padding">
              <ul class="nav nav-stacked">
                <li><a href="#">Email: <span class="pull-right badge bg-aqua">{!! $client->email !!}</span></a></li>
                <li><a href="#">Phone: <span class="pull-right badge bg-green">{!! $client->phone !!}</span></a></li>
                <li><a href="#">CIN: <span class="pull-right badge bg-green">{!! $client->cin !!}</span></a></li>
                <li><a href="#">Nbr Reservation: <span class="pull-right badge bg-green">
                {!! count($client_reservation) !!}</span></a></li>
                <li><a href="{!! route('clients.index') !!}" class="btn btn-default">Back</a></li>
            </div>
            </div>
        </div> 
        <div class="col-lg-3 col-md-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>150</h3>

              <p>New Orders</p>
            </div>
            <div class="icon">
              <i class="fa fa-shopping-cart"></i>
            </div>
            <a href="#" class="small-box-footer">
              More info <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>150</h3>

              <p>New Orders</p>
            </div>
            <div class="icon">
              <i class="fa fa-shopping-cart"></i>
            </div>
            <a href="#" class="small-box-footer">
              More info <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div> 



