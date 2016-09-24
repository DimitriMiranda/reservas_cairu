<!DOCTYPE html>
<html>
    <head>
     @include('includes.header')
    </head>
    <body class="hold-transition skin-red sidebar-mini">
        <div class="wrapper">
        
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="main-sidebar">
                @include('includes.sidebar')
            </aside>
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">                
                @yield('content')
            </div>
            <footer style="font-size: 11px" class="main-footer">
               
            </footer>
        </div>
    </body>
</html>