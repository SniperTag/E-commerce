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
                        <h1 class="text-center text-white text-4xl">Add Product</h1>
             <div class="  mt-5 items-center">

                 <form action="{{url('upload_product')}}" method="post" enctype="multipart/form-data">
                    @csrf
                     <div class="p-4">
                     <label class="inline-block justify-content-center align-items-center w-50 font-semibold text-white text-2xl mt-3 ">Product Title</label>
                     <input type="text" name="title" class="w-75 h-12" required >
                     </div>

                     <div class="p-4">
                         <label class="inline-block justify-content-center align-items-center w-50 font-semibold text-white text-2xl mt-3 ">Description</label>
                         <textarea type="text" name="description" class="w-75 h-12" required></textarea>
                     </div>

                     <div class="p-4">
                         <label class="inline-block justify-content-center align-items-center w-50 font-semibold text-white text-2xl mt-3">Price</label>
                         <input type="text" name="price" class="w-75 h-12">
                     </div>

                     <div class="p-4">
                         <label class=" inline-block justify-content-center align-items-center w-50 font-semibold text-white text-2xl mt-3">Quantity</label>
                         <input type="number" name="quantity" class="w-75 h-12" >
                     </div>

                     <div class="p-4">
                         <label class=" inline-block justify-content-center align-items-center w-50 font-semibold text-white text-2xl mt-3">Product Category</label>
                        <select class="w-75 h-12" name="category" required>
                            <option>
                               Select a Category
                            </option>
                            @foreach($category as $category)
                                <option value="{{$category->category_name}}">
                                    {{$category->category_name}}
                                </option>
                            @endforeach
                        </select>
                     </div>


                     <div class="p-4">
                         <label class=" inline-block justify-content-center align-items-center  font-semibold text-white text-2xl">Product Image</label>
                         <input type="file" name="image" class="m-xl-3 w-75" >
                     </div>
                     <div class="p-4">
                         <input type="submit" class="btn-success" value="Add product">
                     </div>

                 </form>


             </div>

            </div>
        </div>

        @include('admin.footer')

    </div>
</div>
@include('admin.js')
</body>
</html>
