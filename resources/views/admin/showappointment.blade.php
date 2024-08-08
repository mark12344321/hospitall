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

        <div class="container-fluid page-body-wrapper ">
            <!-- partial:partials/_navbar.html -->
                        <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper bg-light" >
                    @include('admin.navbar')


                    <div class="container-fluid  ">

                       <div>

                        <table class="table table-bordered table-hover">

                            <tr>
                                <th>Customer name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Doctor name</th>
                                <th>Date</th>
                                <th>Message</th>
                                <th>Satuts</th>
                                <th>Approved</th>
                                <th>Canceled</th>
                            </tr>
                            @foreach ($data as $appoint)
                           <tr align="center">
                             <td>{{ $appoint->name }}</td>
                             <td>{{ $appoint->email }}</td>
                             <td>{{ $appoint->number }}</td>
                             <td>{{ $appoint->doctor_name }}</td>
                             <td>{{ $appoint->date }}</td>
                             <td>{{ $appoint->message }}</td>
                             <td>{{ $appoint->status }}</td>
                             <td><a class="btn btn-success" href="{{ url('approved',$appoint->id) }}">Approved</a></td>
                             <td><a class="btn btn-danger" onclick="return confirm('are you sure to delete this?')" href="{{ url('canceled',$appoint->id) }}">Canceled</a></td>
                           </tr>
                            @endforeach



                          </table>




                       </div>


                    </div>


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
