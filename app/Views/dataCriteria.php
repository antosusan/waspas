<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Nice lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Nice admin lite design, Nice admin lite dashboard bootstrap 5 dashboard template">
    <meta name="description" content="Nice Admin Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title>SPRM</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/niceadmin-lite/" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href=<?= base_url('assets/images/favicon.png') ?>>
    <!-- Custom CSS -->
    <link href=<?= base_url('assets/libs/chartist/dist/chartist.min.css') ?> rel="stylesheet">
    <!-- Custom CSS -->
    <link href=<?= base_url('dist/css/style.min.css') ?> rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-navbarbg="skin6" data-theme="light" data-layout="vertical" data-sidebartype="full" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin6">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <div class="navbar-header" data-logobg="skin5">
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)">
                        <i class="ti-menu ti-close"></i>
                    </a>
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <div class="navbar-brand">
                        <a href="index.html" class="logo">
                            <!-- Logo icon -->
                            <b class="logo-icon">
                                <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                                <!-- Dark Logo icon -->
                                <img src=<?= base_url('assets/images/logo-icon.png') ?> alt="homepage" class="dark-logo" />
                                <!-- Light Logo icon -->
                                <img src=<?= base_url('assets/images/logo-light-icon.png') ?> alt="homepage" class="light-logo" />
                            </b>
                            <!--End Logo icon -->
                            <!-- Logo text -->
                            <span class="logo-text">
                                <!-- dark Logo text -->
                                <img src=<?= base_url('assets/images/logo-text.png') ?> alt="homepage" class="dark-logo" />
                                <!-- Light Logo text -->
                                <img src=<?= base_url('assets/images/logo-light-text.png') ?> class="light-logo" alt="homepage" />
                            </span>
                        </a>
                    </div>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Toggle which is visible on mobile only -->
                    <!-- ============================================================== -->

                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->

            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <?php include(APPPATH . 'Views/partials/sidebar.php'); ?>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-5 align-self-center">
                        <h4 class="page-title">Data Criteria</h4>
                    </div>
                    <div class="col-7 align-self-center">
                        <div class="d-flex align-items-center justify-content-end">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="/dashboard">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Data Criteria</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">

                <!-- ============================================================== -->
                <!-- Email campaign chart -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Ravenue - page-view-bounce rate -->
                <!-- ============================================================== -->
                <!--   -->
                <!-- ============================================================== -->
                <!-- Ravenue - page-view-bounce rate -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Recent comment and chats -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <!-- <h4 class="card-title">Responsive tables</h4> -->
                                <h6 class="card-subtitle">Data About Specifications Product Router Mikrotik
                                    <code></code> <code></code>
                                    <code></code>.
                                </h6>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <button class="btn btn-success text-white" onclick="window.location.href='data-criteria/add-data';">Add Data</button>
                                    </div>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col">Nama Router</th>
                                            <th scope="col">Harga</th>
                                            <th scope="col">Frekuensi</th>
                                            <th scope="col">Jumlah Port</th>
                                            <th scope="col">Port SFP</th>
                                            <th scope="col">Teknologi WLAN</th>
                                            <th scope="col">Jumlah WLAN</th>
                                            <th scope="col">RAM</th>
                                            <th scope="col">Action</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($routers as $router) : ?>
                                            <tr>
                                                <td><?= esc($router['id_router']) ?></td>
                                                <td><?= esc($router['nama_router']) ?></td>
                                                <td><?= esc($router['harga_router']) ?></td>
                                                <td><?= esc($router['freq_router']) ?></td>
                                                <td><?= esc($router['jml_port_router']) ?></td>
                                                <td><?= esc($router['port_sfp_router']) ?></td>
                                                <td><?= esc($router['wlan_tech_router']) ?></td>
                                                <td><?= esc($router['jml_wlan_router']) ?></td>
                                                <td><?= esc($router['ram_router']) ?></td>
                                                <td> <span class="action-icons active">
                                                        <a onclick="window.location.href='data-criteria/edit';" href="data-criteria/edit">
                                                            <i class="ti-pencil-alt"></i>
                                                        </a>
                                                    </span>
                                                    <span class="action-icons active">
                                                        <a href="javascript:void(0)">
                                                            <i class="ti-trash icon-red" style="color: red;"></i>
                                                        </a>
                                                    </span>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>

                </div>
                <!-- column -->
                <!-- ============================================================== -->
                <!-- End Container fluid  -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- footer -->
                <!-- ============================================================== -->

                <!-- ============================================================== -->
                <!-- End footer -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Page wrapper  -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Wrapper -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- All Jquery -->
        <!-- ============================================================== -->
        <script src=<?= base_url('assets/libs/jquery/dist/jquery.min.js') ?>></script>
        <!-- Bootstrap tether Core JavaScript -->
        <script src=<?= base_url('assets/libs/bootstrap/dist/js/bootstrap.bundle.min.j') ?>></script>
        <!-- slimscrollbar scrollbar JavaScript -->
        <script src=<?= base_url('assets/extra-libs/sparkline/sparkline.js') ?>></script>
        <!--Wave Effects -->
        <script src=<?= base_url('dist/js/waves.js') ?>></script>
        <!--Menu sidebar -->
        <script src=<?= base_url('dist/js/sidebarmenu.js') ?>></script>
        <!--Custom JavaScript -->
        <script src=<?= base_url('dist/js/custom.min.js') ?>></script>
        <!--This page JavaScript -->
        <!--chartis chart-->
        <script src=<?= base_url('assets/libs/chartist/dist/chartist.min.js') ?>></script>
        <script src=<?= base_url('assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js') ?>></script>
        <script src=<?= base_url('dist/js/pages/dashboards/dashboard1.js') ?>></script>
</body>

</html>