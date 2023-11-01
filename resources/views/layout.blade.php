<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Project</title>
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <link href="assets/css/custom.css" rel="stylesheet" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <a class="navbar-brand" style="height: 70px;" href="index.php">0_0</a>
            </div>
            <a href="{{ route('siswacreate') }}" class="btn btn-primary" style="position: relative; top: 0.5cm; left: 1cm">Tambah Siswa</a>
            <div style="color: white; padding: 15px 50px 5px 50px; float: right; font-size: 16px;">
            </div>
        </nav>
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li class="text-center">
                        <img src="assets/img/logo.png" class="user-image img-responsive" />
                    </li>
                    <li><a href="{{ route('siswa') }}"><i class="fa fa-edit fa-3x"></i>Dashboard</a></li>
                    <li><a href="pesanan.php"><i class="fa fa-bar-chart-o fa-3x"></i>About</a></li>
                </ul>
            </div>
        </nav>
        <div id="page-wrapper">
            <div id="page-inner">
                @yield('content') <!-- Ini adalah bagian konten yang akan digantikan -->
            </div>
        </div>
    </div>

    <script src="assets/js/jquery-1.10.2.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.metisMenu.js"></script>
    <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
    <script src="assets/js/custom.js"></script>
</body>
<style>
    .header {
        background-image: linear-gradient(to right, #EC2121, #E37A1D);
        padding: 3px;
        text-align: center;
        color: #ffffff;
    }

    .header h1 {
        font-size: 36px;
        margin: 0;
        padding-bottom: 5px;
        border-bottom: 2px solid #ffffff;
    }

    .header p {
        font-size: 18px;
        margin: 0;
    }
</style>
</html>