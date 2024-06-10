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

                @include('admin.body')

                </div>
            </div>

        @include('admin.footer')

    </div>
</div>
@include('admin.js')
</body>
</html>
