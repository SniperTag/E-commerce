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

                <form action="{{url('product_search')}}" method="get">
                    @csrf
                    <input type="search" class="w-96 h-12 ml-14" name="search">
                    <input type="submit" class="btn-secondary fa fa-search h-12 w-20" value="Search">
                </form>

               <div class="flex justify-content-center items-center m-14"> {{--View Product Table--}}

                   <table class="border-2 border-solid border-sky-300 text-white font-bold p-2 w-100">
                       <tr class="border-2 border-solid border-sky-300 p-2 bg-sky-300 text-center text-xl">
                           <th class="border-2 border-solid border-sky-300">Product Title</th>
                           <th class="border-2 border-solid border-sky-300">Product Description</th>
                           <th class="border-2 border-solid border-sky-300">Product Price</th>
                           <th class="border-2 border-solid border-sky-300">Product Quantity</th>
                           <th class="border-2 border-solid border-sky-300">Product Category</th>
                           <th class="border-2 border-solid border-sky-300">Product Image</th>
                           <th class="border-2 border-solid border-sky-300">Action</th>
                           <th class="border-2 border-solid border-sky-300">Action</th>
                       </tr>

                        @foreach($product as $products)
                           <tr>
                                   <td class="border-2 border-solid border-sky-300 text-center">{{$products->title}}</td>
                                   <td class="border-2 border-solid border-sky-300 text-center">{{$products->description}}</td>
                                   <td class="border-2 border-solid border-sky-300 text-center">{{$products->category}}</td>
                                   <td class="border-2 border-solid border-sky-300 text-center">{{$products->price}}</td>
                                   <td class="border-2 border-solid border-sky-300 text-center">{{$products->quantity}}</td>
                                   <td class="border-2 border-solid border-sky-300">
                                        <img src="products/{{$products->image}}" height="120" width="120">
                                   </td>
                               <td class=" border-solid border-2 border-sky-300 text-center">
                                   <a class="btn-success border-solid border-2 p-3" href="{{url('update_product',$products->id)}}">Edit</a>
                               </td>
                               <td class=" border-solid border-2 border-sky-300 text-center">
                                   <a class="btn-danger border-solid border-2 p-3"  onclick="confirmation(event)" href="{{url('delete_product', $products->id)}}">Delete</a>
                               </td>


                            </tr>
                       @endforeach

                   </table>

               </div>
                {{$product->links()}}

            </div>
        </div>

        @include('admin.footer')

    </div>
</div>
@include('admin.js')
</body>
</html>
