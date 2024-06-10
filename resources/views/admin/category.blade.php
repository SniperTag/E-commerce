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

                        <h1 class="text-white font-semibold text-3xl">ADD CATEGORY</h1>
                <div class="flex justify-content-center align-items-center mt-3">
                <form action="{{url('add_category')}}" method="post">
                    @csrf
                    <div class=" ">
                        <input type="text" name="category" class="w-48 h-9 text-black">
                        <input class="btn btn-primary"  type="submit" value="Add Category" id="">
                    </div>
                </form>
                </div>

                <div class="mt-5">
                    <table class="text-center text-white font-sanserif m-auto border-4 border-solid  border-gray-100 w-100">
                        <tr>
                            <th class="font-semibold text-lg font-weight-bold bg-sky-300">Category Name</th>
                            <th class="font-semibold text-lg font-weight-bold bg-sky-300">Edit</th>
                            <th class="font-semibold text-lg font-weight-bold bg-sky-300">Delete</th>

                        </tr>
                        @foreach($data as $data)
                        <tr>
                            <td class="border-sky-300 border-solid border-2 p-3">{{$data->category_name}}</td>

                            <td class=" border-solid border-2 border-sky-300">
                                <a class="btn-success border-solid border-2 p-3" href="{{url('edit_category', $data->id)}}">Edit</a>
                            </td>

                            <td class=" border-solid border-2 border-sky-300">
                                <a class="btn-danger border-solid border-2 p-3 "
                                    onclick="confirmation(event)"
                                   href="{{url('delete_category', $data->id)}}">Delete</a>
                            </td>



                        </tr>
                        @endforeach
                    </table>
                </div>

            </div>
        </div>

        @include('admin.footer')

    </div>
</div>
@include('admin.js')
</body>
</html>
