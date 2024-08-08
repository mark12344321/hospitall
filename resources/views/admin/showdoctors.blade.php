<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.css')
</head>

<body>

    <div class="container-scroller ">

        <!-- partial:partials/_sidebar.html -->

       @include('admin.slider')

        <!-- partial -->

        <div class="container-fluid page-body-wrapper ">
            <!-- partial:partials/_navbar.html -->
                        <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper bg-white" >
                    @include('admin.navbar')


                    <div class="container-fluid  ">

                       <div>

                        <table class="table table-bordered text-dark text-bold">

                            <tr>
                                <th>Doctor name</th>
                                <th>Room</th>
                                <th>Phone</th>
                                <th>Speciality</th>
                                <th>Image</th>
                                <th>Delete</th>
                                <th>Update</th>
                            </tr>
                            @foreach ($data as $doctor)
                           <tr align="center">
                             <td>{{ $doctor->name }}</td>
                             <td>{{ $doctor->room }}</td>
                             <td>{{ $doctor->phone }}</td>
                             <td>{{ $doctor->specialty }}</td>
                             <td ><img src="doctorname/{{ $doctor->image }}" alt="{{ $doctor->name }}"></td>
                             <td><a onclick="return confirm('Are you sure?')" class="btn btn-danger" href="{{ url('delete_doctor',$doctor->id) }}">Delete</a></td>
                             <td><a class="btn btn-primary" href="{{ url('update_doctor',$doctor->id) }}">Update</a></td>
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
