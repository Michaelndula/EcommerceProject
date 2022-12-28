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
            @if(session()->has('message'))

            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert"
                aria-hidden="true">x</button>

                {{session()->get('message')}}

            </div>

            @endif
            <div class="div_center">
                <h2 class="title">Add Category</h2>

                <form class="form" action="{{url('/add_category')}}" method="POST">
                    @csrf
                    <input type="text" name="category" class="text" placeholder="write category name">
                    <input type="submit" name="submit" class="btn btn-primary" value="Add Category">
                </form>

                <table class="display">
                    <tr class="split">
                        <td class="split">Category_name</td>
                        <td class="split">Action</td>
                    </tr>
                    @foreach ($data as $data)
                    <tr class="split">
                        <td class="split">{{$data->category_name}}</td>
                        <td>
                            <!-- <a class="btn btn-primary">Update</a> -->
                            <a onClick="return confirm('Are you sure you want to delete {{$data->category_name}}')" class="btn btn-danger" href="{{url('delete_category', $data->id)}}">Delete</a>
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

