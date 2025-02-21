<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Barang Baru</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../jenis/index">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
</head>
<body>
    <div class="container">
    <h1>List Barang</h1>
    <?php 
    $id_barang=$_GET['id_barang'];
    include '../../config/koneksi.php'; 
    $query=mysqli_query($conn, "SELECT * FROM barang WHERE id_barang='$id_barang'");
    $result=mysqli_fetch_array($query);
    ?>
    <form action="proses_edit.php?id_barang=<?php echo $result['id_barang'] ?>" method="POST">
  <br class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Nama Barang</label>
    <input type="text" class="form-control" value="<?php echo $result['nama_barang'] ?>" name="nama_barang">
  </br>
  <br>
    <label for="exampleInputPassword1" class="form-label">Jenis</label>
    <input type="text" class="form-control" value="<?php echo $result['jenis'] ?>" name="jenis">
  </br>
  <br class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Harga</label>
    <input type="number" class="form-control" value="<?php echo $result['harga'] ?>" name="harga">
</br>
  <br class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Stok</label>
    <input type="number" class="form-control" value="<?php echo $result['stok'] ?>" name="stok">
  </br>
  <br class="mb-3">
    <label for="exampleInputPassword1" class="form-label">ID Jenis</label>
    <input type="number" class="form-control" value="<?php echo $result['id_jenis'] ?>" name="id_jenis">
  </br>
  <button type="submit" class="btn btn-primary">Kirim</button>
</form>
    </div>
</body>
</html><script>"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"</script>