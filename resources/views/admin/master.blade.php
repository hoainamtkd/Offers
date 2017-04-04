@include('admin.layout.head')
<body class="leftbar-view">
    <!--Topbar Start Here-->
    @include('admin.layout.header')
    <!--Topbar End Here-->
    <!--Leftbar Start Here-->
    @include('admin.layout.menu')
    <!--Leftbar End Here-->
    <!--Page Container Start Here-->
    @yield('content')
    <!--Page Container End Here-->
@include('admin.layout.footer')

    
