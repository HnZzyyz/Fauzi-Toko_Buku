<?php 
    include "../../layout/header.php";
    include "../../config/database.php";

    
    $query = $_GET['query']??"";
    $cari = "SELECT * FROM buku WHERE judul LIKE '%$query%' OR penulis LIKE '%$query%' OR penerbit LIKE '%$query%' OR tahun_terbit LIKE '%$query%' OR stok LIKE '%$query%' LIMIT 10 ";
    
    $hasil = $connect->query($cari);
    
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
                                        <a href="update.php?id_buku=<?= $item['id_buku'] ?>" class="btn btn-outline-success me-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="2em" viewBox="0 0 24 24">
                                            <path fill="currentColor" d="M20.71 7.04c.39-.39.39-1.04 0-1.41l-2.34-2.34c-.37-.39-1.02-.39-1.41 0l-1.84 1.83l3.75 3.75M3 17.25V21h3.75L17.81 9.93l-3.75-3.75z"/>
                                        </svg>
                                        </a>
                                        <a href="delete.php?id_buku=<?= $item['id_buku'] ?>" class="btn btn-outline-danger">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="2em" viewBox="0 0 24 24">
                                            <path fill="currentColor" d="M19 4h-3.5l-1-1h-5l-1 1H5v2h14M6 19a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V7H6z"/>
                                        </svg>
                                        </a>
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
  <?php include "../../layout/jslib.php"?>
</body>

</html>