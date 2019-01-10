<li class="{{ Request::is('home*') ? 'active' : '' }}">
    <a href="{!! route('home') !!}"><i class="fa fa-edit"></i><span>Dashboard</span></a>
</li>
<li class="treeview menu-close {{ Request::is('bookings*') ? 'active' : '' }}">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Bookings</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="{{ Request::is('bookings') ? 'active' : '' }}"><a href="{!! route('bookings.index') !!}"><i class="fa fa-circle-o"></i><span>Bookings Dashboard</span></a></li>
            <li class="{{ Request::is('bookingshistory') ? 'active' : '' }}"><a href="{!! route('bookinghistory') !!}"><i class="fa fa-circle-o"></i><span>Bookings History</span></a></li>
            <li class="{{ Request::is('bookings/create') ? 'active' : '' }}"><a href="{!! route('bookings.create') !!}"><i class="fa fa-circle-o"></i><span>New Booking</span></a></li>
           
          </ul>
</li>
<li class="{{ Request::is('agencies*') ? 'active' : '' }}">
    <a href="{!! route('agencies.index') !!}"><i class="fa fa-edit"></i><span>Agencies</span></a>
</li>


<li class="treeview menu-close {{ Request::is('cars*') || Request::is('brands*') || Request::is('reglages*') ? 'active' : '' }}">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Cars Management</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
			<li class="{{ Request::is('cars*') ? 'active' : '' }}">
			    <a href="{!! route('cars.index') !!}"><i class="fa fa-edit"></i><span>Cars list</span></a>
			</li>
			<li class="{{ Request::is('brands*') ? 'active' : '' }}">
			    <a href="{!! route('brands.index') !!}"><i class="fa fa-edit"></i><span>Car Brands</span></a>
			</li>
			<li class="{{ Request::is('reglages*') ? 'active' : '' }}">
			    <a href="{!! route('reglages.index') !!}"><i class="fa fa-edit"></i><span>Reglages</span></a>
			</li>
</ul>
<li class="{{ Request::is('users*') ? 'active' : '' }}">
    <a href="{!! route('users.index') !!}"><i class="fa fa-edit"></i><span>Users</span></a>
</li>

<li class="">
    
</li>

<li class="{{ Request::is('clients*') ? 'active' : '' }}">
    <a href="{!! route('clients.index') !!}"><i class="fa fa-edit"></i><span>Clients</span></a>
</li>



<li class="{{ Request::is('invoices*') ? 'active' : '' }}">
    <a href="{!! route('invoices.index') !!}"><i class="fa fa-edit"></i><span>Invoices</span></a>
</li>



