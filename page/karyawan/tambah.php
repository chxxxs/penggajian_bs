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
    <h2 style="margin: top 10px; margin-bottom: 
    20px; text-align: center;">Tambah Data Karyawan</h2>
    
    <!--card-->
    <section class="container">
        <form action="proses" method="post">
        <div class="card">
            <div class="card-body" style="background-color: grey;">
                <div class="form-group row">
                    <div class="row mb-3">
                        <label class="col-2" style="color: white;">NIK</label>
                        <div class="col-4">
                        <input name="nik" class="form-control" type="number" placeholder="MASUKAN NOMOR INDUK">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-2" style="color: white;">Nama</label>
                        <div class="col-4">
                        <input name="nama" class="form-control" type="text" placeholder="MASUKAN NAMA">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-2" style="color: white;">Tanggal Mulai</label>
                        <div class="col-4">
                        <input name="tanggal_mulai" class="form-control" type="date" placeholder="MASUKAN TANGGAL">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-2" style="color: white;">Gaji Pokok</label>
                        <div class="col-4">
                        <input name="gaji_pokok" class="form-control" type="number">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-2" style="color: white;">Status Karyawan</label>
                        <div class="col-4">
                        <select class="form-control" name="status_karyawan" id="">
                            <option value="">--PILIH--</option>
                            <option value="TETAP">TETAP</option>
                            <option value="KONTRAK">KONTRAK</option>
                            <option value="MAGANG">MAGANG</option>
                        </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-2" style="color: white;">Bagian</label>
                        <div class="col-4">
                        <select class="form-control" name="bagian_id" id="">
                        <option value="">--PILIH--</option>
                            <?php 
                                $bagian = $koneksi->query("SELECT * FROM bagian");
                                foreach($bagian as $row){
                            ?>
                            <option value="<?= $row ['id'] ?>"><?= $row['nama'] ?></option>
                            <?php }?>
                        </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" name="simpan" class="btn bg-dark" style= "color: white;">SIMPAN</button>
            </div>
        </div>
        </form>
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