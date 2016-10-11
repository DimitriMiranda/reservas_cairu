<!DOCTYPE html>
<html>
    <head>
        @include('includes.header')
    </head>
    <body class="hold-transition skin-red sidebar-mini">
        <div class="wrapper">

            <div style="">
                <div  class="row">

                    <div class="col-md-4" style=" /* border:  1px solid #f00; */">
                        <aside class="main-sidebar" >
                            @include('includes.sidebar')
                        </aside>
                    </div>

                    <div class="col-md-4" style="margin-top: 40px;">
                        <!-- Content Wrapper. Contains page content -->
                        <div class="content-wrapper">                
                            @yield('content')

                        </div>
                    </div>
                </div>
                <footer style="font-size: 11px" class="main-footer">
                </footer>
                <div>
                    </body>
                    </html>