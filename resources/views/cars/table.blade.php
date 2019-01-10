<table class="table table-responsive" id="cars-table">
    <thead>
        <tr>
            <th>Car Image</th>
            <th>Car Name</th>
            <th>User </th>
            <th>Agency </th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($cars as $car)
        <tr>
            <td><img src="{!! URL::to('/storage/'.$car->image) !!}" style="height: 50px; width: 50px" /></td>
            <td>{!! $car->brand->name.' '.$car->name.' '.$car->year  !!}</td>
            <td>{!! $car->user->name !!}</td>
            <td>{!! $car->agency->name !!}</td>
            <td>
                {!! Form::open(['route' => ['cars.destroy', $car->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('cars.show', [$car->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('cars.edit', [$car->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>