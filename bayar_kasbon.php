<?php
session_start();
if ( !isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Kasbon - Jaya Group</title>
     <!-- Boostrap 5 -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar" style="background-color: #3C6255;">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-store"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Jaya Group</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>


            <!-- Divider -->

            <!-- Heading -->

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                My Work 
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item active">
                <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseGadai" aria-expanded="true"
                    aria-controls="collapseGadai">
                    <i class="fas fa-fw fa-cash-register"></i>
                    <span>Pegadaian</span>
                </a>
                <div id="collapseGadai" class="collapse" aria-labelledby="headingGadai"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a href="tambah_gadai.php" class="collapse-item">Gadai Barang</a>
                        <a class="collapse-item" href="barang_gadai.php">Data Barang</a>
                        <a class="collapse-item" href="barang_tempo.php">Barang Jatuh Tempo</a>
                        <a class="collapse-item" href="penebusan.php">Penebusan</a>
                    </div>
                </div>
            </li>
            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item active">
                <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseBill" aria-expanded="true"
                    aria-controls="collapseBill">
                    <i class="fas fa-fw fa-money-bill"></i>
                    <span>Billing</span>
                </a>
                <div id="collapseBill" class="collapse" aria-labelledby="headingBill"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="barang_jual.php">Barang</a>
                        <a class="collapse-item" href="penjualan.php">Penjualan</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="pengeluaran_admin.php">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Pengeluaran Admin</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="kas.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>KAS</span></a>
            </li>
            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="kasbon.php">
                    <i class="fas fa-fw fa-book"></i>
                    <span>Kasbon</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="rekap.php">
                    <i class="fas fa-fw fa-book"></i>
                    <span>Rekap</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseUser" aria-expanded="true"
                    aria-controls="collapseUser">
                    <i class="fas fa-fw fa-users"></i>
                    <span>Admin Dan Manager</span>
                </a>
                <div id="collapseUser" class="collapse" aria-labelledby="headingUser"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="user.php">Daftar Admin</a>
                        <a class="collapse-item" href="manager.php">Daftar Manager</a>
                        <a class="collapse-item" href="pelanggan.php">Daftar Pelanggan</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light topbar mb-4 static-top shadow" style="background-color: #3C6255;">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn" type="button" style="background-color: #A6BB8D;">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_SESSION['username'] ?></span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                <?php
                    include 'koneksi.php';
                    date_default_timezone_set('Asia/Makassar');
                    $namaUser = $_SESSION['username'];

                    $id = $_GET['id_kasbon'];
                    $sql = "SELECT * FROM kasbon WHERE id_bon = '$id'";
                    $result = mysqli_query($koneksi, $sql);
                    $row = mysqli_fetch_assoc($result);
                    $tanggal_sekarang = date("Y-m-d H:i:s");
                    $tanggal = date('Y-m-d');
                    $jam = date('H:i:s');

                    $nominal = $row['nominal'];
                    $nama = $row['nama'];
                    $jenis = $row['jenis'];
                    $tanggal = $row['waktu_kasbon'];

                    if (isset($_POST['blunaskan'])) {
                        $kas = "SELECT * FROM kas ORDER BY parameter DESC LIMIT 1";
                        $result22 = mysqli_query($koneksi, $kas);
                        $row = mysqli_fetch_assoc(mysqli_query($koneksi, $kas));
                        $saldo = $row['saldo'];
                        $saldo_akhir = $saldo + $nominal;
                        $keterangan = 'BAYAR KASBON @NAMA:'.$nama .'@ID:'.$id;
                        $sql = "INSERT INTO kas (tanggal_masuk, setor, saldo, kategori, keterangan, user, jam, parameter) VALUES ('$tanggal', '$nominal', '$saldo_akhir', 'BAYAR KASBON', '$keterangan', '$namaUser', '$jam', '$tanggal_sekarang')";
                        if (mysqli_query($koneksi, $sql)) {
                            $sql1 = "DELETE FROM kasbon WHERE id_bon = '$id'";
                            if (mysqli_query($koneksi, $sql1)){
                                echo "<script>
                                alert('Pembayaran Kasbon Sukses !');
                                document.location='kasbon.php';
                            </script>";
                            } else {
                                echo "<script>
                                alert('Pembayaran Kasbon Gagal !');
                                document.location='kasbon.php';
                            </script>";
                            }
                        } else {
                            echo "<script>
                                alert('Pembayaran Kasbon Gagal !');
                                document.location='kasbon.php';
                            </script>";
                        }
                    }
                ?>

                <!-- Page Heading -->
                 <!-- Basic Card Example -->
                 <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-success">Pembayaran Kasbon</h6>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        </div>
                    </div>
                    <br>
                    <br>
                    <h2 style="text-align: center;">Anda Akan Melakukan Pelunasan Kasbon Dengan <?php echo $id?></h2>
                    <br>
                    <table class="table table-hover">
                        <h5 style="margin-left: 40px;">Dengan Rincian</h5>
                        <br>
                    <tr>
                        <th>Nama</th>
                        <th>:</th>
                        <th><?php echo $nama ?></th>
                    </tr>
                    <tr>
                        <th>Jumlah Kasbon</th>
                        <th>:</th>
                        <th>Rp. <?php echo number_format($nominal, 0, ",", ".") ?></th>
                    </tr>
                    <tr>
                        <th>Tanggal Kasbon</th>
                        <th>:</th>
                        <th><?php echo $tanggal ?></th>
                    </tr>
                    <tr>
                        <th>Jenis</th>
                        <th>:</th>
                        <th><?php echo $jenis ?></th>
                    </tr>
                    <tr>
                        <th>Aksi</th>
                        <th>:</th>
                        <th>
                            <form action="" method="post">
                            <button type="submit" class="btn btn-success" name="blunaskan">Lunaskan</button>
                            </form>
                        </th>
                    </tr>
                    </table>
                </div>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer" style="background-color: #A6BB8D;">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Jaya Group 2023</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="logout.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>