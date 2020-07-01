<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Dashboard Anggota</title>

  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url()."assets/"; ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?php echo base_url()."assets/"; ?>css/sb-admin-2.min.css" rel="stylesheet">

  <link href="<?php echo base_url()."assets/"; ?>vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">


</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Anggota KyouCommunity</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url()."index.php/dashboardanggota/"; ?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url()."index.php/dashboardanggota/profil/".$this->session->userdata('id_anggota'); ?>">
          <i class="fas fa-fw fa-user"></i>
          <span>Profil</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url()."index.php/dashboardanggota/divisi/".$this->session->userdata('id_anggota'); ?>">
          <i class="fas fa-fw fa-clipboard-list"></i>
          <span>Divisi</span></a>
      </li>

     
      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->


        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Divisi</h1>
           
          </div>

          <!-- Content Row -->
          <div class="row">
            <div class="col-lg-12">
              <!-- Approach -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">List Divisi</h6>
                </div>
                <div class="card-body">
                <a href="<?php echo base_url()."index.php/dashboardanggota/daftar_divisi/".$this->session->userdata('id_anggota');?>" class="btn btn-primary">Daftar Divisi</a><br><br>
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Divisi</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                    <tr>
                    <?php
                        $no=1;
                        foreach($data as $dra){                    
                    ?>
                        <td><?php echo $no;?></td>
                        <td><?php echo $dra['nama'];?></td>
                        <td><?php 
                            $s = $dra['status'];
                            if($s == 0) echo "Belum dikonfirmasi";
                            else if($s == 1) echo "Diterima";
                            else echo "Ditolak";
                            ?>
                        <td>
                            <a href="<?php echo base_url()."index.php/dashboardanggota/hapus_divisi/".$dra['id_anggota_divisi'];?>" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                    <?php
                        $no++;
                        }
                    ?>
                    </tbody>
                    </table>
              </div>
                </div>
              </div>

            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; KitaBantu 2020</span>
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
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
          <a class="btn btn-primary" href="<?php echo base_url()."index.php/dashboardanggota/logout"; ?>">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url()."assets/"; ?>vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url()."assets/"; ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url()."assets/"; ?>vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?php echo base_url()."assets/"; ?>js/sb-admin-2.min.js"></script>

   <!-- Page level plugins -->
  <script src="<?php echo base_url()."assets/"; ?>vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="<?php echo base_url()."assets/"; ?>vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="<?php echo base_url()."assets/"; ?>js/demo/datatables-demo.js"></script>

</body>

</html>

