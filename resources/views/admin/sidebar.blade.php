
    <!-- Sidebar Navigation-->
    <nav id="sidebar">
        <!-- Sidebar Header-->
        <div class="sidebar-header d-flex align-items-center">
            <div class="avatar"><img src="{{asset('/admincss/img/avatar-6.jpg')}}" alt="..." class="img-fluid rounded-circle"></div>
            <div class="title">
                <h1 class="h5">Mark Stephen</h1>
                <p>Web Designer</p>
            </div>
        </div>
        <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
        <ul>
            <li><a href="{{ url('admin/dashboard')}}"> <i class="fa fa-home"></i>Home </a></li>
            <li><a href="{{ url('view_category')}}"> <i class="fa fa-th"></i>Category </a></li>

            <li><a href="#exampledropdownDropdown"> <i class="fa fa-product-hunt"></i>Products</a>
                <ul id="exampledropdownDropdown" class=" ">
                    <li ><a href="{{url('add_product')}}">Add Product</a></li>
                    <li><a href="{{url('view_product')}}">View Product</a></li>
                </ul>
        </ul>
    </nav>

