<!DOCTYPE html>
<html lang="en">

<head>
    <base href="/public">
    @include('admin.css')
</head>

<body>
    <div class="container-scroller">
        <div class="row p-0 m-0 proBanner" id="proBanner">
            <div class="col-md-12 p-0 m-0">
                <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
                    <div class="ps-lg-1">
                        <div class="d-flex align-items-center justify-content-between">
                            <p class="mb-0 font-weight-medium me-3 buy-now-text">Free 24/7 customer support, updates, and more with this template!</p>
                            <a href="https://www.bootstrapdash.com/product/corona-free/?utm_source=organic&utm_medium=banner&utm_campaign=buynow_demo" target="_blank" class="btn me-2 buy-now-btn border-0">Get Pro</a>
                        </div>
                    </div>
                    <div class="d-flex align-items-center justify-content-between">
                        <a href="https://www.bootstrapdash.com/product/corona-free/"><i class="mdi mdi-home me-3 text-white"></i></a>
                        <button id="bannerClose" class="btn border-0 p-0">
                            <i class="mdi mdi-close text-white me-0"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- partial:partials/_sidebar.html -->
        @include('admin.sidebar')

        @include('admin.navbar')



        <div class="container-fluid page-body-wrapper">


            <div class="container" align="center" style="padding : 100px">
            
        @if(session()->has('message'))
        <div class="alert alert-sucess">
            <button type="button" class="close" data-dismiss="alert">x</button>
            {{session()->get('messege')}}
        </div>
        @endif

                <form action="{{url('editdoctor',$data->id)}}" method="POST" enctype="multipart/form-data">
@csrf
                    <div>
                        <label>Doc Name</label>
                        <input type="text" name="name" value="{{$data->name}}" style="color:black;">
                    </div>

                    <div>
                        <label>Doc phone</label>
                        <input type="number" name="phone" value="{{$data->phone}}" style="color:black;">
                    </div>

                    <div>
                        <label>Doc speciality</label>
                        <input type="text" name="specialty" value="{{$data->specialty}}" style="color:black;">
                    </div>


                    <div>
                        <label>Doc room</label>
                        <input type="text" name="room" value="{{$data->room}}" style="color:black;">
                    </div>

                    <div style="padding:15px;">
                         <input type="submit" class="btn btn-primary" >
                    </div>



                </form>


            </div>
        </div>
        @include('admin.script')
</body>

</html>