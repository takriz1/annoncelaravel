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
    <!-- toastr Alert-->
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">


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
                        <h4 class="mt-4 mb-3">Products List</h4>
                        <table class="table table-striped table-dark">
                            <thead>
                                <tr>
                                    <th scope="col">Category Name</th>
                                    <th scope="col">Client Name</th>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Quantity</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $index => $p)
                                    <tr>
                                        <th scope="row">{{ $p->category->libelle_c }}</th>
                                        <th scope="row"> {{ $p->user->name }}</th>
                                        <th scope="row">{{ $p->id }}</th>
                                        <td>{{ $p->name }}</td>
                                        <td>{{ $p->description }}</td>
                                        <td>{{ $p->price }} TND</td>
                                        <td>{{ $p->qtt }}</td>
                                        <td><img src="{{ asset('uploads/products') }}/{{ $p->image }}"
                                                width="100"></td>
                                        <td>
                                            @switch($p->state)
                                                @case('InProgress')
                                                    <a href="/admin/product/{{ $p->id }}/accepted"
                                                        class="btn btn-success">Accepted</a>
                                                    <a href="/admin/product/{{ $p->id }}/rejected"
                                                        class="btn btn-danger">Rejected</a>
                                                @break

                                                @default
                                                    <div class="alert  {{ $p->state == 'Accepted' ? 'alert-solid-success' : 'alert-solid-danger' }} "
                                                        role="alert">{{ $p->state }}</div>
                                            @endswitch
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

    <script src="{{ asset('dashassets/js/phoenix.js') }}"></script>
    <script src="{{ asset('dashassets/js/ecommerce-dashboard.js') }}"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>




    <script>
        // Set the options that I want
        toastr.options = {
            "closeButton": true,
            "newestOnTop": false,
            "progressBar": true,
            "positionClass": "toast-bottom-center",
            "preventDuplicates": false,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        }

        @if (Session::has('messege'))
        debugger
            var type = "{{ Session::get('alert-type', 'info') }}"
            var message = "{{ Session::get('messege', 'info') }}"

            console.log("type",type);
            console.log("message",message);
            switch (type) {
                case 'info':
                    toastr.info("{{ Session::get('messege') }}");
                    break;
                case 'success':
                    toastr.success("{{ Session::get('messege') }}");
                    break;
                case 'warning':
                    toastr.warning("{{ Session::get('messege') }}");
                    break;
                case 'error':
                    toastr.error("{{ Session::get('messege') }}");
                    break;
            }
        @endif
    </script>
</body>

</html>
