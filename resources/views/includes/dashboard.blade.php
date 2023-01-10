<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="utf-8" />

    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <meta name="description" content="" />

    <meta name="author" content="" />

    <title>Admin Dashboard </title>

    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />

    <link href="/css/styles.css" rel="stylesheet" />

    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>

</head>


<body class="sb-nav-fixed">

    <nav class="sb-topnav navbar navbar-expand" style="background-color: #119744; ">

        <!-- Navbar Brand-->

        <a class="navbar-brand ps-3" href="">
            <h2 class="text-light">STORE4U</h2>
        </a>

        <!-- Sidebar Toggle-->

        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i
                class="fas fa-bars"></i></button>

        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">

            <li class="nav-item dropdown">

                @php
                    
                    $user = Auth::user();
                    
                @endphp

            </li>

        </ul>

    </nav>

    <div id="layoutSidenav">

        <div id="layoutSidenav_nav">

            <nav class="sb-sidenav accordion " style="background-color: #119744;" id="sidenavAccordion">

                <div class="sb-sidenav-menu">

                    <div class="nav">




                        <a class="nav-link" href="{{ route('home') }}">

                            <div class="sb-nav-link-icon text-light "><i class="fas fa-tachometer-alt "></i>
                            </div>

                            <p class="text-light">Dashboard</p>

                        </a>



                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                            data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">

                            <div class="sb-nav-link-icon text-light"><i class="fas fa-columns"></i></div>

                            <p class="text-light">Add New</p>

                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>

                        </a>

                        <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne"
                            data-bs-parent="#sidenavAccordion">

                            <nav class="sb-sidenav-menu-nested nav">

                                <a class="nav-link" href="{{ url('/add-category') }}">Category</a>



                                <a class="nav-link" href="{{ url('/add-product') }}">Product</a>

                            </nav>

                        </div>

                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                            data-bs-target="#collapseLayouts1" aria-expanded="false" aria-controls="collapseLayouts">

                            <div class="sb-nav-link-icon"><i class="fas fa-pencil"></i></div>

                            <p class="text-light">Manage</p>

                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>

                        </a>

                        <div class="collapse" id="collapseLayouts1" aria-labelledby="headingOne"
                            data-bs-parent="#sidenavAccordion">

                            <nav class="sb-sidenav-menu-nested nav">

                                <a class="nav-link" href="{{ url('category') }}">Category</a>



                                <a class="nav-link" href="{{ url('product') }}">Product</a>

                            </nav>

                        </div>







                    </div>



            </nav>

        </div>

        <div id="layoutSidenav_content">

            @yield('section')



        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>

    <script src="/js/scripts.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>

    <script src="/assets/demo/chart-area-demo.js"></script>

    <script src="/assets/demo/chart-bar-demo.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>

    <script src="/js/datatables-simple-demo.js"></script>

</body>

</html>
