<div class="row">
                <div class="col-md-6  offset-md-0  toppad" >
                    <div class="card">
                        <div class="card-body">
                            <h2 class="card-title">{!! $car->name.' '.$car->year !!} - {!! $car->brand->name !!} </h2>
                            <table class="table table-user-information ">
                                <tbody>
                                    <tr>
                                        <td>Nombre de reservations:</td>
                                        <td>{!! $booking_history->count() !!}</td>
                                    </tr>
                                    <tr>
                                        <td>Nombre de jours résérvés:</td>
                                        <td><?php 
                                        	$total_reservation=0;
                                        	foreach ($booking_history as $booking):
                                        		$total_reservation += $booking->nombre_jours;
                                        	endforeach
                                         ?>{!! $total_reservation !!}</td>
                                    </tr>
                                    <tr>
                                        <td>total des gains:</td>
                                        <td><?php 
                                        	$total_gains=0;
                                        	foreach ($booking_history as $booking):
                                        		$total_gains += $booking->nombre_jours;
                                        	endforeach
                                         ?>{!! $booking_history->count() !!}</td>
                                    </tr>     
                                </tbody>
                            </table>
                            
                        </div>
                    </div>
                </div>
                <div class="col-md-6  offset-md-0  toppad">
                    <div class="card">
                        <div class="card-body">
                             <a href="{!! route('cars.index') !!}" class="btn btn-block btn-primary btn-flat">Back</a>
                            <a href="{!! route('cars.edit', [$car->id]) !!}"  class="btn btn-block btn-success btn-flat">Modifier</a>              
                        </div>
                    </div>
                </div>
                <div class="col-md-12  offset-md-0  toppad">
                	<table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                <thead>
                <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Rendering engine</th><th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Browser</th><th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Platform(s)</th><th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Engine version</th><th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">CSS grade</th></tr>
                </thead>
                <tbody>
                    <?php foreach ($booking_history as $reservation): ?>
                        <tr role="row" class="odd">
                          <td class="sorting_1">{!! $reservation->firstname.' '.$reservation->lastname !!}</td>
                          <td></td>
                          <td>{!! date('l', strtotime($reservation->start_date)) !!}</td>
                          <td>{!! date('d/m/Y', strtotime($reservation->start_date)) !!}</td>
                          <td>{!! date('d/m/Y', strtotime($reservation->end_date)) !!}</td>
                        </tr>
                    <?php endforeach ?>
                    
                </tbody>
                <tfoot>
                <tr><th rowspan="1" colspan="1">Rendering engine</th><th rowspan="1" colspan="1">Browser</th><th rowspan="1" colspan="1">Platform(s)</th><th rowspan="1" colspan="1">Engine version</th><th rowspan="1" colspan="1">CSS grade</th></tr>
                </tfoot>
              </table>
                </div>
            
</div>
                    