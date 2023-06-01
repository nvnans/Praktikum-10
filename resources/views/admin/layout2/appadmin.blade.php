@include('admin.layout2.atas')
@include('admin.layout2.menu')
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            @yield('content')
        </div>
    </main>
</div>
</div>
@include('admin.layout2.bawah')