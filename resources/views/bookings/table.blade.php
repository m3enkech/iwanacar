<table class="table">
                <tbody>
                    <tr>
                        <th>Client</th>
                        <th>Car</th>
                        <th>Durée</th>
                        <th>Jours rest</th>
                        <th width="20%">Action</th>
                    </tr>
                

            @foreach($bookings as $booking)
                @if ($booking->status == $status)
                    <tr @if ($booking->end_date->format("Y/m/d") < Date("Y/m/d")) 
                            style="background-color:#fdcdd6"
                        @elseif($booking->end_date->format("Y/m/d") > Date("Y/m/d") && $booking->status == 'valid' ) 
                            style="background-color:palegreen"
                        @endif

                              >
                        <td>{!! $booking->client->firstName.' '.$booking->client->lastName !!} </td>
                        <td>{!! $booking->car->name.' - '.$booking->brand->name !!}</td>
                     
                        <td>De {!! $booking->start_date->format('d/m/Y') !!} <br>à {!! $booking->end_date->format('d/m/Y') !!}</td>
                        <td>{!! $booking->end_date->diffInDays()+1; !!}</td>
                        <td >
                            {!! Form::open(['route' => ['bookings.destroy', $booking->id], 'method' => 'delete']) !!}
                            <div class='btn-group'>
                                <a href="{!! route('bookings.show', [$booking->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                                <a href="{!! route('bookings.edit', [$booking->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                                {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                            </div>
                            {!! Form::close() !!}
                        </td>
                    </tr>
                @endif
            @endforeach
               
               
               
               
              </tbody>

</table>
