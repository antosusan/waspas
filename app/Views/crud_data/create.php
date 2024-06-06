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

            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <div class="row">
                    <!-- Column -->

                    <!-- Column -->
                    <!-- Column -->

                    <div class="card">
                        <div class="card-body">
                            <form class="form-horizontal form-material mx-2" action="<?= base_url('data-criteria/store') ?>" method="post">
                                <div class="form-group">
                                    <label for="nama_router" class="form-label">Nama Router</label>
                                    <input type="text" class="form-control" id="nama_router" name="nama_router" required>
                                </div>
                                <div class="form-group">
                                    <label for="harga_router" class="form-label">Harga Router</label>
                                    <input type="number" class="form-control" id="harga_router" name="harga_router" required>
                                </div>
                                <div class="form-group">
                                    <label for="freq_router" class="form-label">Frekuensi</label>
                                    <select class="form-control" id="freq_router" name="freq_router" required>
                                        <option value="">Pilih Frekuensi</option>
                                        <?php foreach (['650MHz', '716MHz', '800MHz', '864MHz'] as $freq) : ?>
                                            <option value="<?= $freq ?>"><?= $freq ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="jml_port_router" class="form-label">Jumlah Port Ethernet</label>
                                    <input type="number" class="form-control" id="jml_port_router" name="jml_port_router" required>
                                </div>
                                <div class="form-group">
                                    <label for="port_sfp_router" class="form-label">Port SFP</label>
                                    <select class="form-control" id="port_sfp_router" name="port_sfp_router" required>
                                        <option value="">Pilih Opsi</option>
                                        <option value="Tidak Ada">Tidak Ada</option>
                                        <option value="Ada">Ada</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-12" for="wlan_tech_router">teknologi wireless </label>
                                    <select class="form-control" id="wlan_tech_router" name="wlan_tech_router" required>
                                        <option value="802.11b/g/n">802.11b/g/n</option>
                                        <option value="802.11a/n/ac">802.11a/n/ac</option>
                                        <option value="802.11b/g/n/ax">802.11b/g/n/ax</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="jml_wlan_router" class="form-label">Jumlah WLAN</label>
                                    <input type="number" class="form-control" id="jml_wlan_router" name="jml_wlan_router" required>
                                </div>

                                <div class="form-group">
                                    <label for="ram_router" class="form-label">RAM</label>
                                    <select class="form-control" id="ram_router" name="ram_router" required>
                                        <option value="">Pilih RAM</option>
                                        <option value="32MB">32MB</option>
                                        <option value="64MB">64MB</option>
                                        <option value="128MB">128MB</option>
                                        <option value="256MB">256MB</option>
                                        <option value="1 GB">1 GB</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <button class="btn btn-success text-white" type="submit">Submit</button>
                                        <!-- <button class="btn btn-secondary text-white" onclick="confirmGoBack();">Cancel</button> -->
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <button class="btn btn-secondary text-white" onclick="confirmGoBack();">Cancel</button>
                            </div>
                        </div>
                    </div>

                    <!-- Column -->
                </div>
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
        <script>
            function confirmGoBack() {
                if (confirm("Are you sure you want to cancel? Any unsaved changes will be lost.")) {
                    window.location.href = '<?= base_url('data-criteria') ?>';
                }
            }
        </script>

</body>

</html>