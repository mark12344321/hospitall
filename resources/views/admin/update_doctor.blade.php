<!DOCTYPE html>
<html lang="en">

<head>
    <base href="/public">
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




                    @if(session()->has('message'))
               <div class="alert alert-success">
                      <button type="button" class="close" data-dismiss="alert">
                          x
                      </button>
                      {{ session()->get('message') }}
               </div>
                    @endif



                    <div class="container p-md-5 panel-body text-black"  >
                        <form action="{{ url('edit_doctor',$data->id) }}" method="POST"  enctype="multipart/form-data">
                            @csrf
                                <div class="p-15">
                                      <label class="text-left " for="name">Doctor name:</label>
                                      <input class="text-primary border border-left form-control" value="{{ $data->name }}"  type="text" name="name" placeholder="write the name" required>
                                </div>

                                <div class="p-15">
                                    <labelclass="text-left" for="phone">Phone:</label>
                                    <input class="text-primary border border-left form-control" value="{{ $data->phone }}"  type="tel" name="phone" placeholder="write the phone" required>
                              </div>

                              <div class="p-15">
                                <label class="text-left" for="specialty">Speciality:</label>
                                <select class="text-primary border  bg-white border-left form-control"  name="specialty" id="speciality" required>
                                    <option> {{ $data->specialty }}--selected</option>
                                    <option value="skin">Skin</option>
                                    <option value="heart">Heart</option>
                                    <option value="eye">Eye</option>
                                    <option value="nose">Nose</option>
                                </select>
                          </div>

                          <div class="p-15">
                            <label class="text-left" for="room">Room number:</label>
                            <input class="text-primary border border-left form-control" value="{{ $data->room }}"   type="text" name="room" placeholder="write the room number" required>
                      </div>

                      <div class="p-15">
                        <label class="text-left" for="image">Old image:</label>
                        <img width="100" height="100" src="doctorname/{{ $data->image }}" alt="{{ $data->name }}">
                        <input type="file" name="image" id="" value="cahnge">
                    </div>

                      <div class="p-15">
                        
                        <input type="submit" class="btn btn-primary text-white" value="Save" >
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
