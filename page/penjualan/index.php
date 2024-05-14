<?php 
    include "../../layout/header.php";
    include "../../config/database.php";

    $dtbku = "SELECT * FROM buku WHERE judul";

    
    $hasil = $connect->query($dtbku);
    
?>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    <?php include "../../layout/sidebar.php"?>
    <!--  Sidebar End -->
    <!--  Main wrapper -->
    <div class="body-wrapper">
      <!--  Header Start -->
      <?php include "../../layout/navbar.php"?>
      <!--  Header End -->
      <div class="container-fluid">
        <div class="card">
          <div class="card-body">
          <form method="post" >
            <div class="mb-3">
                <label class="form-label">Judul Buku</label>
                <input type="checkbox" class="form-control" id="judul" name="judul" value=""> 
            </div>
            <div class="mb-3">
                <label class="form-label">Jumlah</label>
                <input type="number" class="form-control" id="jumlah" name="jumlah" min="1" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Total</label>
                <input type="text" class="form-control" id="total" name="total" readonly>
            </div>
            <div class="mb-3">
                <label class="form-label">Pembayaran</label>
                <input type="number" class="form-control" id="pembayaran" name="pembayaran" required>
            </div>
            <input type="submit" class="btn btn-primary" value="Bayar!">
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php include "../../layout/jslib.php"?>
</body>

</html>