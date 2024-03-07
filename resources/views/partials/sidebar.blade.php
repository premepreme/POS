<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">



            <!-- Divider -->
            <hr class="sidebar-divider">
            <li class="nav-item {{ request()->is('admin/transactions') || request()->is('admin/transactions') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('admin.transactions.index') }}">
                    <i class="fas fa-fw fa-cogs"></i>
                    <span>{{ __('History') }}</span></a>
            </li>
            

            <li class="nav-item {{ request()->is('admin/categories') || request()->is('admin/categories') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('admin.categories.index') }}">
                    <i class="fas fa-fw fa-cogs"></i>
                    <span>{{ __('Category') }}</span></a>
            </li>

            <li class="nav-item {{ request()->is('admin/products') || request()->is('admin/products') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('admin.products.index') }}">
                    <i class="fas fa-fw fa-cogs"></i>
                    <span>{{ __('Item') }}</span></a>
            </li>

            <li class="nav-item {{ request()->is('admin/pos') || request()->is('admin/pos') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('admin.pos.index') }}">
                    <i class="fas fa-fw fa-cogs"></i>
                    <span>{{ __('Open Sale') }}</span></a>
            </li>

            


        </ul>