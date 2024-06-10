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

                <h2 class="text-white font-semibold text-3xl text-center">update Product</h2>
               <div class="flex justify-content-center items-center">

                   <form action="{{url('edit_product', $data->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                       <div>

                           <label class="inline-block p-3 w-50 h-12 text-white font-bold text-xl">Title</label>
                           <input type="text" name="title" value="{{$data->title}}">

                       </div>

                       <div>

                           <label class="inline-block p-3   text-black wfont-bold text-xl"> Description</label>
                           <textarea type="text" class="h-50 w-100 pl-5" name="description">{{$data->description}}</textarea>

                       </div>

                       <div>

                           <label class="inline-block p-3 w-50 h-12 text-white font-bold text-xl">Price</label>
                           <input type="text" name="price" value="{{$data->price}}">

                       </div>

                       <div>

                           <label class="inline-block p-3 w-50 h-12 text-white font-bold text-xl">Quantity</label>
                           <input type="text" name="quantity" value="{{$data->quantity}}">

                       </div>

                       <div>

                           <label class="inline-block p-3 w-50 h-12 text-white font-bold text-xl">category</label>
                           <select name="category">
                               <option value="{{$data->category}}">
                                 {{$data->category}}

                                   @foreach($category as $category)

                                   <option value="{{$category->category_name}}">
                                        {{$category->category_name}}
                                   </option>

                                   @endforeach
                               </option>
                           </select>

                       </div>

                       <div>

                           <label class="inline-block p-3 w-50 h-12 text-white font-bold text-xl">Current Image</label>
                           <img width="150" src="/products/{{$data->image}}" alt="">

                       </div>

                       <div>
                           <label>New Image</label>
                           <input type="file" name="image">
                       </div>

                       <div class="mt-5 text-center">
                           <input class="btn-success" type="submit" value="update product">
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
