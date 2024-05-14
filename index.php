<?php 
    include "layout/header.php";
    include "config/database.php";

    
    $query = $_GET['query']??"";
    $cari = "SELECT * FROM buku WHERE judul LIKE '%$query%' OR penulis LIKE '%$query%' OR penerbit LIKE '%$query%' OR tahun_terbit LIKE '%$query%' OR stok LIKE '%$query%' LIMIT 10 ";
    
    $hasil = $connect->query($cari);
    
?>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    <?php include "layout/sidebar.php"?>
    <!--  Sidebar End -->
    <!--  Main wrapper -->
    <div class="body-wrapper">
      <!--  Header Start -->
      <?php include "layout/navbar.php"?>
      <!--  Header End -->
      <div class="container-fluid">
        <div class="card">
          <div class="card-body">
          <form action="" method="get">
              <input type="text" name="query" class="form-control-sm" placeholder="Cari...">
              <button class="btn-outline-primary">Search</button>
            </form>  
            <!-- Data Tabel -->
            <table class="table">
                        <thead>
                            <tr style="color: black" class="bg-transparent rounded p-5 mx-0">
                                <th scope="col">ID</th>
                                <th scope="col">Judul</th>
                                <th scope="col">Penulis</th>
                                <th scope="col">Penerbit</th>
                                <th scope="col">Tahun_Terbit</th>
                                <th scope="col">Stok</th>
                                <th scope="col">Harga_Pokok</th>
                                <th scope="col">Harga_ Jual</th>
                                <th scope="col">Diskon</th>
                                <th scope="col">Delete & Update</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($hasil as $item) {
                            ?>
                                <tr>
                                    <td><?= $item['id_buku'] ?></td>
                                    <td><?= $item['judul'] ?></td>
                                    <td><?= $item['penulis'] ?></td>
                                    <td><?= $item['penerbit'] ?></td>
                                    <td><?= $item['tahun_terbit'] ?></td>
                                    <td><?= $item['stok'] ?></td>
                                    <td><?= $item['harga_pokok'] ?></td>
                                    <td><?= $item['harga_jual'] ?></td>
                                    <td><?= $item['diskon'] ?></td>
                                    <td>
                                        <a class="btn btn-outline-dark-light me-2">Update</a>
                                        <a class="btn btn-outline-primary">Delete</a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                <button type="reset"  class ="btn btn-light-success">PREVIOUS</button>
                <button type="submit" class="btn btn-light-success">NEXT</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php include "layout/jslib.php"?>
</body>

</html>