<!--start sidebar -->
<aside class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            <img src="{{ asset('admin/assets/images/logo-icon.png') }}" class="logo-icon" alt="logo icon" />
        </div>
        <div>
            <h4 class="logo-text">Yumzy</h4>
        </div>
        <div class="toggle-icon ms-auto">
            <i class="bi bi-chevron-double-left"></i>
        </div>
    </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">
        <li>
            <a href="{{ route('admin.home') }}">
                <div class="parent-icon"><i class="bi bi-house-door"></i></div>
                <div class="menu-title">Dashboard</div>
            </a>
        </li>
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bi bi-bag-check"></i></div>
                <div class="menu-title">Product Management</div>
            </a>
            <ul>
                <li>
                    <a href="{{ route('product.create') }}"><i class="bi bi-arrow-right-short"></i>Create Product</a>
                </li>
                <li>
                    <a href="{{ route('product.index') }}"><i class="bi bi-arrow-right-short"></i>Products List</a>
                </li>
                <li>
                    <a href="{{ route('categories.index') }}"><i class="bi bi-arrow-right-short"></i>Categories Details</a>
                </li>
                <li>
                    <a href="{{ route('categories.create') }}"><i class="bi bi-arrow-right-short"></i>Create Category</a>
                </li>
                <li>
                    <a href="#"><i class="bi bi-arrow-right-short"></i>Products Review</a>
                </li>
                <li>
                    <a href="#"><i class="bi bi-arrow-right-short"></i>Reservation</a>
                </li>
                
            </ul>
        </li>
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bi bi-grid"></i></div>
                <div class="menu-title">Order Management</div>
            </a>
            <ul>
                <li>
                    <a href="#"><i class="bi bi-arrow-right-short"></i>Order Details</a>
                </li>
                <li>
                    <a href="#"><i class="bi bi-arrow-right-short"></i>Pending Orders</a>
                </li>
                <li>
                    <a href="#"><i class="bi bi-arrow-right-short"></i>Completed Orders</a>
                </li>
               
            </ul>
        </li>
        
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bi bi-person-check"></i></div>
                <div class="menu-title">Manage User</div>
            </a>
            <ul>
                <li>
                    <a href="user"><i class="bi bi-arrow-right-short"></i>Customer Details</a>
                </li>
                <li>
                    <a href="{{ route('adminuser') }}"><i class="bi bi-arrow-right-short"></i>Admin Details</a>
                </li>
            </ul>
        </li>
        
        <li class="menu-label">Others</li>
        <li>
            <a href="https://codervent.com/skodash/documentation/index.html" target="_blank">
                <div class="parent-icon">
                    <i class="bi bi-file-earmark-code"></i>
                </div>
                <div class="menu-title">Documentation</div>
            </a>
        </li>
        <li>
            <a href="https://themeforest.net/user/codervent" target="_blank">
                <div class="parent-icon"><i class="bi bi-headset"></i></div>
                <div class="menu-title">Support</div>
            </a>
        </li>
    </ul>
    <!--end navigation-->
</aside>
<!--end sidebar -->
