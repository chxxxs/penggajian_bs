<?php
require '../../config/config.php';
require '../../config/koneksi.php';
?>

<!doctype html>
<html lang="en">

<?php
include '../../templates/head.php';
?>

<!-- Navbar -->
<?php
include '../../templates/navbar.php';
?>
<!-- End Navbar -->

<body>
    <h2 style="margin: top 10px; margin-bottom: 20px; text-align: center;">Penggajian</h2>
    
    <!--card-->
<section class="container">
 <div class="card">
  <div class="card-header">
  <a href="tambah" class="btn bg-dark" style="margin-left : 10px; color: white;">Tambah</a>
</div>
 <div class ="card-body">
<table class="table" id="example">
  <thead class="table-dark">
      <tr>
        <th scope="col">No</th>
        <th scope="col">Id</th>
        <th scope="col">Nik Karyawan</th>
        <th scope="col">Tahun</th>
        <th scope="col">Bulan</th>
        <th scope="col">Gaji Bayar</th>          
        <th scope="col">Opsi</th>      
      </tr>
  </thead>
  <tbody>
    <?php
    $no = 1;
    $penggajian = $koneksi->query("SELECT * FROM penggajian ORDER BY id DESC");
    while($data = $penggajian->fetch_array()){
    ?>
    <tr>
        <td><?= $no++; ?></td>
        <td><?= $data['id'] ?></td>
        <td><?= $data['karyawan_nik'] ?></td>
        <td><?= $data['tahun'] ?></td>
        <td><?= $data['bulan'] ?></td>
        <td><?= $data['gaji_bayar'] ?></td>
        <td>
        <a href="edit?id=<?= $data['id'] ?>" class="btn bg-success" style="color: white;">Edit</a>
        <a href="proses?id=<?= $data['id'] ?>" class="btn bg-danger" style="color: white;">Hapus</a>
        </td>
    </tr>
    <?php }?>
  </tbody>
</table>
</div>
    </div>
    </section>
    <!--End card-->
    <?php
include '../../templates/script.php';
?>
</body>

</html>
<script>
  new DataTable('#example')
</script>