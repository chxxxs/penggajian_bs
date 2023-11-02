<?php
require '../../config/config.php';
require '../../config/koneksi.php';

if (isset($_POST['simpan'])){
    $id = $_POST['id'];
    $tahun = $_POST['tahun'];
    $karyawan_nik = $_POST['karyawan_nik'];
    $bulan = $_POST['bulan'];
    $gaji_bayar = $_POST['gaji_bayar'];

    $submit = $koneksi->query("INSERT INTO penggajian values(
        '$id',
        '$karyawan_nik',
        '$tahun',
        '$bulan',
        '$gaji_bayar'
    )");        

if ($submit){
    echo "<script>alert('Data Berhasil Disimpan');location.href='../penggajian/';</script>";
} else {
    echo "<script>alert('Data Gagal Disimpan');location.href='../penggajian/tambah';</script>";
}
    
} else if (isset($_POST['edit'])){
    $nik = $_POST['nik'];
    $nama = $_POST['nama'];
    $tanggal_mulai = $_POST['tanggal_mulai'];
    $gaji_pokok = $_POST['gaji_pokok'];
    $status_karyawan = $_POST['status_karyawan'];
    $bagian_id = $_POST['bagian_id'];

    $submit = $koneksi->query("UPDATE karyawan set
        nik = '$nik',
        nama = '$nama',
        tanggal_mulai = '$tanggal_mulai',
        gaji_pokok = '$gaji_pokok',
        status_karyawan = '$status_karyawan',
        bagian_id = '$bagian_id'
        WHERE
        nik = '$nik'
    ");        

    if ($submit){
        echo "<script>alert('Data Berhasil Diubah');location.href='../karyawan/';</script>";
    } else {
        echo "<script>alert('Data Gagal Diubah');location.href='../karyawan/edit';</script>";
    }
      
 } else if (isset($_GET['id'])){
    $delete = $koneksi->query("DELETE FROM penggajian WHERE id = '$_GET[id]'");
    if($delete){
    echo "<script>alert('Data berhasil dihapus');location.href='../penggajian/';</script>";
    }else {
        echo "<script>alert('Data berhasil dihapus');location.href='../penggajian/';</script>";
    }
 } 
?>