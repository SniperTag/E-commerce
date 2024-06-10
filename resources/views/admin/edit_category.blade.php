<!DOCTYPE html>
<html>
<head>
    @include('admin.css')
</head>
<body>
<header class="header">
    @include('admin.header')
</header>
<div class="d-flex align-items-stretch">
    @include('admin.sidebar')
    <div class="page-content">
        <div class="page-header">
            <div class="container-fluid">

               <div>
                   <h1 class="text-white font-semibold text-3xl">Upadte Category</h1>
                    <div class="mt-5 flex justify-content-center align-items-center">
                   <form method="post" action="{{url('update_category', $data->id)}}" >
                       @csrf

                      <input type="text" name="category" value="{{($data->category_name)}}" class="w-48 h-9 text-black">
                       <input class="btn btn-success"  type="submit" value="Update Category">

                   </form>
                    </div>
               </div>

            </div>
        </div>

        @include('admin.footer')

    </div>
</div>
@include('admin.js')
</body>
</html>
