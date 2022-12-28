<!DOCTYPE html>
<html lang="en">
  @include('admin.includes.css')
  <style>
    .div_center{
        padding-top: 20px;
    }
    .title{
        padding-bottom: 40px;
    }
    .text{
        color: black;
    }
    .form{
        text-align: center;
    }
    .display{
        margin: auto;
        width: 50%;
        text-align: center;
        margin-top: 30px;
        border: 1px solid white;
    }
    .split{
        border: 1px solid white;
        padding-bottom: 5px;
    }
  </style>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
        @include('admin.sidebar')
      <!-- partial -->

    <!-- partial:partials/_navbar.html -->
        @include('admin.navbar')
        <!-- partial -->
        <div class="main-panel">
        <div class="content-wrapper">
        <div class="div_center">
                <h2 class="title">All Products</h2>

                <form class="form" action="{{url('/add_product')}}" method="POST">
                    @csrf
                    <input type="text" name="category" class="text" placeholder="write product name">
                    <input type="submit" name="submit" class="btn btn-primary" value="Add Product">
                </form>

                <table class="display">
                    <tr class="split">
                        <td class="split">Product_name</td>
                        <td class="split">Action</td>
                    </tr>
                    @foreach ($data as $data)
                    <tr class="split">
                        <td class="split">{{$data->title}}</td>
                        <td>
                            <!-- <a class="btn btn-primary">Update</a> -->
                            <a onClick="return confirm('Are you sure you want to delete {{$data->title}}')" class="btn btn-danger" href="{{url('delete_product', $data->id)}}">Delete</a>
                        </td>
                    </tr>
                    @endforeach

                </table>
            </div>
        </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
            @include('admin.footer')
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.includes.script')
    <!-- End custom js for this page -->
  </body>
</html>

