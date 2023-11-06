<!doctype html>
<html lang="en-US" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Phoenix</title>
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('dashassets/img/favicons/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32"
        href=" {{ asset('dashassets/img/favicons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16"
        href="{{ asset('dashassets/img/favicons/favicon-16x16.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('dashassets/img/favicons/favicon.ico') }}">
    <link rel="manifest" href="{{ asset('dashassets/img/favicons/manifest.json') }}">
    <meta name="msapplication-TileImage" content="{{ asset('dashassets/img/favicons/mstile-150x150.png') }}">
    <meta name="theme-color" content="#ffffff">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&amp;display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&amp;display=swap"
        rel="stylesheet">
    <link href="{{ asset('dashassets/css/phoenix.min.css') }}" rel="stylesheet" id="style-default">
    <link href="{{ asset('dashassets/css/user.min.css') }}" rel="stylesheet" id="user-style-default">

    <style>
        body {
            opacity: 0;
        }
    </style>
</head>

<body>
    <main class="main" id="top">
        <div class="container-fluid px-0">

            <!-- SideBar -->
            @include('admin.inc.sidebar')


            <!-- Navbar --->

            @include('admin.inc.navbar')

            <div class="content">
                <div class="pb-5">
                  <div class="row g-5">
                    <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Add Category</button>

                    <h4 class="mt-4 mb-3">Table Dark</h4>
                    <table class="table table-striped table-dark">
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Name</th>
                          <th scope="col">Description</th>
                          <th scope="col">Image</th>
                          <th scope="col">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ( $products as $index => $p )


                        <tr>
                          <th scope="row">{{ $p->id  }}</th>
                          <td>{{ $p->name }}</td>
                          <td>{{ $p->description }}</td>
                          <td><img src="{{ asset('uploads.produits') }}/{{ $p->image}}" width="100"></td>
                          <td>
                            <a  h data-bs-toggle="modal"
                            data-bs-target="#editCategory{{ $p->id }}" class="btn btn-outline-info me-1 mb-1" type="button">Edit</a>
                            <a onclick="return confirm('Do you really want to delete this category?')" href="/admin/category/{{$p->id}}/destroy" class="btn btn-outline-danger me-1 mb-1" type="button">Delete</a>
                          </td>
                        </tr>

                        @endforeach
                      </tbody>
                    </table>

                  </div>

                </div>



                <footer class="footer">
                    <div class="row g-0 justify-content-between align-items-center h-100 mb-3">
                        <div class="col-12 col-sm-auto text-center">
                            <p class="mb-0 text-900">Thank you for creating with phoenix<span
                                    class="d-none d-sm-inline-block"></span><span class="mx-1">|</span><br
                                    class="d-sm-none">2022 &copy; <a href="https://themewagon.com">Themewagon</a>
                            </p>
                        </div>
                        <div class="col-12 col-sm-auto text-center">
                            <p class="mb-0 text-600">v1.1.0</p>
                        </div>
                    </div>
                </footer>
              </div>
            </div>
        </div>

    </main>
    <!--- Modal Ajout -->

    <!--- Modal Edit --->
    @foreach ( $products as $index => $p  )


    <div class="modal fade" id="editCategory{{ $p->id }}" tabindex="-1" data-bs-backdrop="static" aria-labelledby="staticBackdropLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header bg-primary">
              <h5 class="modal-title text-white" id="staticBackdropLabel">Edit Product</h5><button class="btn p-1" type="button" data-bs-dismiss="modal" aria-label="Close"><svg class="svg-inline--fa fa-times fa-w-11 fs--1 text-white" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="times" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 352 512" data-fa-i2svg=""><path fill="currentColor" d="M242.72 256l100.07-100.07c12.28-12.28 12.28-32.19 0-44.48l-22.24-22.24c-12.28-12.28-32.19-12.28-44.48 0L176 189.28 75.93 89.21c-12.28-12.28-32.19-12.28-44.48 0L9.21 111.45c-12.28 12.28-12.28 32.19 0 44.48L109.28 256 9.21 356.07c-12.28 12.28-12.28 32.19 0 44.48l22.24 22.24c12.28 12.28 32.2 12.28 44.48 0L176 322.72l100.07 100.07c12.28 12.28 32.2 12.28 44.48 0l22.24-22.24c12.28-12.28 12.28-32.19 0-44.48L242.72 256z"></path></svg><!-- <span class="fas fa-times fs--1 text-white"></span> Font Awesome fontawesome.com --></button>
            </div>

            <form action="/admin/category/edit" method="POST" enctype="multipart/form-data">
                @csrf
            <div class="modal-body">
                <div class="mb-3">
                    <label class="form-label" for="exampleFormControlInput1">Product Name : <span class="text-primary">{{ $c->libelle_c }}</span></label>
                    <input class="form-control form-control" id="sizingInput" type="text" placeholder="Category name" name="lib" value="{{$c->libelle_c}}">
                    @error('lib')
                    <div class="alert alert-danger">
                        {{ $message }}

                    </div>
                @enderror
                  </div>
                  <div class="mb-0">
                    <label class="form-label" for="exampleTextarea">Products Description </label>
                    <textarea class="form-control" id="exampleTextarea" rows="3" name="desc">{{ $p->description_c }}</textarea>
                    @error('desc')
                    <div class="alert alert-danger">
                        {{ $message }}

                    </div>
                @enderror
                  </div>
                  <div class="mb-3">
                    <label class="form-label" for="customFile">Choose Image</label>
                    <input class="form-control" id="customFile" type="file" name="image">
                    @error('image')
                    <div class="alert alert-danger">
                        {{ $message }}

                    </div>
                @enderror
                  </div>
                  <input type="hidden" value="{{ $p->id }}" name="id_prod">

            </div>


            <div class="modal-footer">
                <button class="btn btn-primary" type="submit">Okay</button>
                <button class="btn btn-outline-primary" type="button" data-bs-dismiss="modal">Cancel</button>
            </div>
        </form>
          </div>
        </div>
      </div>

    @endforeach
    <script src="{{ asset('dashassets/js/phoenix.js') }}"></script>
    <script src="{{ asset('dashassets/js/ecommerce-dashboard.js') }}"></script>

</body>

</html>
