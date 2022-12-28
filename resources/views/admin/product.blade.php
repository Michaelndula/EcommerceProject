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
    .form-control{
        background-color: white;
        color: black;
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
        <h2 class="title">All Products</h2>
        </section>
        <div class="row justify-content-center align-items-center h-100">
            <div class="col-12 col-lg-9 col-xl-7">
                <div class="card shadow-2-strong card-registration" style="border-radius: 15px; background-color: #2779e2;">
                    <div class="card-body p-4 p-md-5">
                        <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Add Products</h3>
                        <form class="form" action="{{url('/add_product')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 mb-4">

                            <div class="form-outline">
                                <input type="text" name="title" id="productTitle" class="form-control form-control-lg" required />
                                <label class="form-label" for="productTitle" >Product Title</label>
                            </div>

                            </div>
                            <div class="col-md-6 mb-4">

                            <div class="form-outline">
                                <input type="number" name="quantity" min="0" id="quantity" class="form-control form-control-lg" required />
                                <label class="form-label" for="quantity" >Quantity</label>
                            </div>

                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-4 d-flex align-items-center">

                            <div class="form-outline w-100">
                                <input type="number" name="price" class="form-control form-control-lg" id="price" required />
                                <label for="price" class="form-label" >Price</label>
                            </div>

                            </div>
                            <div class="col-md-6 mb-4 d-flex align-items-center">

                            <div class="form-outline w-100">
                                <input type="number" name="discount_price" class="form-control form-control-lg" id="discountPrice" />
                                <label for="discountPrice" class="form-label" >Discount_Price</label>
                            </div>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-4 d-flex align-items-center">

                            <div class="form-outline w-100">
                                <textarea name="description" class="form-control form-control-lg" id="productDesc" rows="3" placeholder="Say something about your Product" required></textarea>
                                <label for="discountPrice" class="form-label">Description</label>
                            </div>

                            </div>
                            <div class="col-md-6">

                            <select class="select form-control form-control-lg" style="background-color: white">
                                <option value="1" style="color:white;">Product Category</option>
                                @foreach ($data as $category)
                                <option value="2">{{$category->category_name}}</option>
                                @endforeach)

                            </select>

                        </div>
                        </div>


                        <div class="row">
                        <div class="col-md-9 pe-5">

                            <input class="form-control form-control-lg" id="formFileLg" type="file" name="image" required />
                            <div class="small text-muted mt-2" style="color:white;">Upload your Product image or any other relevant file. Max file
                            size 50 MB</div>

                        </div>

                        </div>

                        <div class="mt-4 pt-2">
                            <input class="btn btn-primary btn-lg" type="submit" value="Add Product" />
                        </div>
                    </div>

                </form>
                </div>
                </div>
            </div>
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

