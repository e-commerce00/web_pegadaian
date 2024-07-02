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

    <title>Barang Gadai - Jaya Group</title>
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
    <script>

    </script>

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
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_SESSION['username']?></span>
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

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Data Barang Gadai</h1>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-success">Data Barang Gadai</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <a class="btn btn-primary me-md-2" href="tambah_gadai.php" role="button">Tambah Gadai</a>
                                <a class="btn btn-info" href="print/print_barang_gadai.php" role="button">Cetak</a>
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" style="text-align: center;">
                                    <thead> 
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Pemilik</th>
                                            <th>Nama Barang</th>
                                            <th>ID Barang</th>
                                            <th>Jumlah Gadai</th>
                                            <th>Jumlah Tebusan</th>
                                            <th>Tanggal Masuk</th>
                                            <th>Tanggal Tempo</th>
                                            <th>Status</th>
                                            <th>Opsi</th>
                                            <th>Hubungi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        include 'koneksi.php';
                                        date_default_timezone_set('Asia/Makassar');
                                        $data = mysqli_query($koneksi, "SELECT * FROM barang_gadai ORDER BY tanggal_tempo DESC");
                                        $no = 1;
                                        while($d = mysqli_fetch_array($data)){
                                            $tebus = $d['tebusan'];
                                            $tanggal_tempo = $d['tanggal_tempo'];
                                            $id = $d['id_barang'];
                                            $tanggal_sekarang = date("Y-m-d");
                                            // Hitung Selisih 
                                            $selisih_hari = strtotime($tanggal_sekarang) - strtotime($tanggal_tempo);
                                            $selisih_hari = floor($selisih_hari / (60*60*24));

                                            if ($selisih_hari > 0 && $selisih_hari <=11){
                                                $denda = 5000;
                                                $total_denda = $selisih_hari * $denda;
                                                $total_tebusan = $tebus + $total_denda;
                                                $status = "<a class='btn btn-danger me-md-2' href='#' role='button'>Telat   $selisih_hari  Hari</a>";
                                            } else if ($selisih_hari >= 12) {
                                                $denda = 5000;
                                                $total_denda = $selisih_hari * $denda;
                                                $total_tebusan = $tebus + $total_denda;
                                                $status = "<a class='btn btn-warning me-md-2' href='lelang.php?id_barang=$id'role='button'>Lelang</a>";
                                            } else if ($selisih_hari == 0) {
                                                $denda = 0; // Tidak ada denda
                                                $total_tebusan = $tebus;
                                                $status = "<a class='btn btn-info me-md-2' href='#' role='button'>Jatuh Tempo </a>";
                                            } else {
                                                // Jika Belum Telat
                                                $denda = 5000;
                                                $total_denda = 0;
                                                $total_tebusan = $tebus + $total_denda;
                                                $status = "<a class='btn btn-success me-md-2' href='#' role='button'>Belum Telat</a>";
                                            }
                                        ?>
                                        <tr>
                                            <td><?php echo $no++;?></td>
                                            <td><?php echo $d['nama_pemilik']; ?></td>
                                            <td><?php echo $d['nama_barang']; ?></td>
                                            <td><?php echo $d['id_barang']; ?></td>
                                            <td><?php echo number_format($d['nominal'], 0, ",", "."); ?></td> 
                                            <td><?php echo number_format($total_tebusan, 0, ",", ".");?></td>
                                            <td><?php echo $d['tanggal_masuk']; ?></td>
                                            <td><?php echo $d['tanggal_tempo']; ?></td>
                                            <td><?php echo $status; ?></td>
                                            <td>
                                                <a href="detail_barang.php?id_barang=<?php echo $d['id_barang'];?>" class="btn btn-info btn-circle"> <i class="fas fa-info-circle"></i></a>
                                            </td>
                                            <td>
                                                <a href="hubungi/wa.php?id_barang=<?php echo $d['id_barang'];?>" class="btn btn-success">WA</a>
                                            </td>
                                        </tr>
                                        <?php
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
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
    <script>
        $(document).ready(function() {
            $('#dataTable').DataTable({
                "lengthMenu": [100, 200, 500]
            });
        });
    </script>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>

</body>

</html>