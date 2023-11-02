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
    20px; text-align: center;">Tambah Data Bagian</h2>
    
    <!--card-->
    <section class="container">
        <form action="proses" method="post">
        <div class="card">
            <div class="card-body" style="background-color: grey;">
                <div class="form-group row">
                    <div class="row mb-3">
                        <label class="col-2" style="color: white;">ID</label>
                        <div class="col-4">
                        <input name="id" class="form-control" type="number" placeholder="MASUKAN NOMOR ID">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-2" style="color: white;">Nama</label>
                        <div class="col-4">
                        <input name="nama" class="form-control" type="text" placeholder="MASUKAN NAMA">
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