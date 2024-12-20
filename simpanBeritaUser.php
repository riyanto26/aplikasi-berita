<?php 
    include "koneksi.php";
    $judul = $_POST['judul'];
    $isi   = $_POST['isi'];

    $vfoto = $_FILES['fupload']['name'];
    $tfoto = $_FILES['fupload'] ['tmp_name'];
    $dir   = "foto_berita/";

    $penulis = $_POST['penulis'];
    $simpan  = mysqli_query($conn,"INSERT into tbberita(judul,isiberita,gambar,penulis) values ('$judul','$isi','$vfoto','$penulis')");

    $upload=$dir.$vfoto;
    move_uploaded_file($tfoto, $upload);
    
?>
<script>
    document.location ='tampilBeritaUser.php'
</script>