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
                <div class="content-wrapper page-body-wrapper bg-light">
                    @include('admin.navbar')
                    <div class="container p-md-5 panel-body text-black "  >


                        @if(session()->has('message'))
                        <div class="alert alert-success">
                               <button type="button" class="close" data-dismiss="alert">
                                   x
                               </button>
                               {{ session()->get('message') }}
                        </div>
                        @endif


                        <form action="{{ url('upload_doctor') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                                <div class="p-15">
                                      <label class="text-left" for="name">Doctor name:</label>
                                      <input class="text-primary border border-left form-control"  type="text" name="name" placeholder="write the name" required>
                                </div>

                                <div class="p-15">
                                    <labelclass="text-left" for="phone">Phone:</label>
                                    <input class="text-black border border-left form-control"  type="tel" name="phone" placeholder="write the phone" required>
                              </div>

                              <div class="p-15">
                                <label class="text-left" for="specialty">Speciality:</label>
                                <select class="text-black border border-left bg-white form-control"  name="specialty" id="speciality" required>
                                    <option> --select-- </option>
                                    <option value="skin">Skin</option>
                                    <option value="heart">Heart</option>
                                    <option value="eye">Eye</option>
                                    <option value="nose">Nose</option>
                                </select>
                          </div>

                          <div class="p-15">
                            <label class="text-left" for="room">Room number:</label>
                            <input class="text-primary border border-left form-control"   type="text" name="room" placeholder="write the room number" required>
                      </div>

                      <div class="p-15">
                        <label class="text-left" for="image">Doctor image:</label>
                        <input class="text-primary border border-left form-control" type="file" name="image" required>
                      </div>

                      <div class="p-15">
                        
                        <input type="submit" class="btn btn-success text-black" value="Add" >
                      </div>


                        </form>


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
