<?php 
    include "../../layout/header.php";
    include "../../config/database.php";

    $sql = 'SELECT * FROM buku where id_buku =' . $_GET['id_buku'];
    $hasil = $connect->query($sql);
    $data = $hasil->fetch_assoc();

    if (isset($_POST['id_buku'])) {
        // Buat query update berdasarkan nis
    $sql = 'UPDATE buku SET 
    id_buku             ="' . $_POST['id_buku'] . '",
    judul               ="' . $_POST['judul'] . '",
    penulis             ="' . $_POST['penulis'] . '",
    penerbit            ="' . $_POST['penerbit'] . '",
    tahun_terbit        ="' . $_POST['tahun_terbit'] . '",
    stok                ="' . $_POST['stok'] . '",
    harga_pokok         ="' . $_POST['harga_pokok'] . '",
    harga_jual          ="' . $_POST['harga_jual'] . '",
    diskon              ="' . $_POST['diskon'] . '"
    WHERE id_buku=' . $_GET['id_buku'];

    $connect->query($sql);
    header('location: index.php');
    }
    
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
          <form action="" method="post" class="row g-3 justify-content-center">
            <h3 style="text-align: center;">Update Data Buku</h3>
            
            <div class="mb-3">
                <label for="input" class="form-label">ID Buku</label>
                <input type="text" class="form-control" name="id_buku" value="<?= $data['id_buku'] ?>">
            </div>
            
            <div class="mb-3">
                <label for="input" class="form-label">Judul</label>
                <input type="text" class="form-control" name="judul" value="<?= $data['judul'] ?>">
            </div>
             
            <div class="mb-3">
                <label for="input" class="form-label">Penulis</label>
                <input type="text" class="form-control" name="penulis" value="<?= $data['penulis'] ?>">
            </div>
             
            <div class="mb-3">
                <label for="input" class="form-label">Penerbit</label>
                <input type="text" class="form-control" name="penerbit" value="<?= $data['penerbit'] ?>">
            </div>
             
            <div class="mb-3">
                <label for="input" class="form-label">Tahun Terbit</label>
                <input type="text" class="form-control" name="tahun_terbit" value="<?= $data['tahun_terbit'] ?>">
            </div>
             
            <div class="mb-3">
                <label for="input" class="form-label">Stok</label>
                <input type="text" class="form-control" name="stok" value="<?= $data['stok'] ?>">
            </div>
             
            <div class="mb-3">
                <label for="input" class="form-label">Harga Pokok</label>
                <input type="text" class="form-control" name="harga_pokok" value="<?= $data['harga_pokok'] ?>">
            </div>
             
            <div class="mb-3">
                <label for="input" class="form-label">Harga Jual</label>
                <input type="text" class="form-control" name="harga_jual" value="<?= $data['harga_jual'] ?>">
            </div>
             
            <div class="mb-3">
                <label for="input" class="form-label">Diskon</label>
             <input type="text" class="form-control" name="diskon" value="<?= $data['diskon'] ?>">
            </div>
                            
             <div class="mb-3 text-center">
                <input class="btn btn-outline-success me-2"type="submit" value="Submit">
                <a href="index.php" class="btn btn-outline-danger">Cancel</a>
             </div>                
            </form>       
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php include "../../layout/jslib.php"?>
</body>

</html>