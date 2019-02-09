<div class="sidebar">
    <button class="sidebar-minimizer brand-minimizer" type="button"></button>
    <nav class="sidebar-nav">
        <ul class="nav">
            <li class="nav-item ">
                <a class="nav-link" href="{{ route('dashboard.index') }}">
                    <i class="nav-icon icon-speedometer"></i> Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/relations">
                    <i class="nav-icon icon-user"></i> Relations</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/customers">
                    <i class="nav-icon icon-user"></i> Customers</a>
            </li>
            <li class="nav-item {{ Request::is('addresses*') ? 'active' : '' }}">
                <a href="{!! route('admincp.core.addresses.index') !!}"><i class="fa fa-edit"></i><span>Addresses</span></a>
            </li>
            <li class="nav-item {{ Request::is('customers*') ? 'active' : '' }}">
                <a href="{!! route('admincp.core.customers.index') !!}"><i class="fa fa-edit"></i><span>Customers</span></a>
            </li>
            <li class="nav-item {{ Request::is('relationAddresses*') ? 'active' : '' }}">
                <a href="{!! route('admincp.core.relationAddresses.index') !!}"><i class="fa fa-edit"></i><span>Relation
                        Addresses</span></a>
            </li>
            <li class="nav-item {{ Request::is('vendors*') ? 'active' : '' }}">
                <a href="{!! route('admincp.core.vendors.index') !!}"><i class="fa fa-edit"></i><span>Vendors</span></a>
            </li>
        </ul>
    </nav>
    <button class="sidebar-minimizer brand-minimizer" type="button"></button>
</div>