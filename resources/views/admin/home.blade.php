<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.css')
</head>

<body>

    <div class="container-scroller">

        <!-- partial:partials/_sidebar.html -->

       @include('admin.slider')

        <!-- partial -->

        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_navbar.html -->
                        <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper bg-light">
                    @include('admin.navbar')
                    {{--  rowa  --}}
                    {{--  rowb  --}}
                    {{--  rowc  --}}
                    {{--  rowd  --}}
                    {{--  body  --}}
                </div>
                <!-- content-wrapper ends -->
                <!-- partial:partials/_footer.html -->
                <footer class="footer">
                    <div class="d-sm-flex justify-content-center justify-content-sm-between">
                        <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com 2021</span>
                    </div>
                </footer>
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
</body>

</html>
