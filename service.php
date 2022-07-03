<?php
include "koneksi.php";

switch ($_GET['action'])
{

    case 'save':

        $Merk = $_POST['Merk'];
        $Tipe = $_POST['Tipe'];
        $Tahun = $_POST['Tahun'];
        

        $query = mysqli_query($koneksi, "INSERT INTO hp (Merk, Tipe, Tahun) VALUES('$Merk', '$Tipe', '$Tahun')");
        if ($query)
        {
            echo "Simpan Data Berhasil";
        }
        else
        {
            echo "Simpan Data Gagal :" . mysqli_error($koneksi);
        }
    break;

    case 'edit':

        $Id = $_POST['Id'];
        $Merk = $_POST['Merk'];
        $Tipe = $_POST['Tipe'];
        $Tahun = $_POST['Tahun'];
        

        $query = mysqli_query($koneksi, "UPDATE hp SET Merk='$Merk', Tipe='$Tipe', Tahun='$Tahun' WHERE Id='$Id'");
        if ($query)
        {
            echo "Edit Data Berhasil";
        }
        else
        {
            echo "Edit Data Gagal :" . mysqli_error($koneksi);
        }
    break;

    case 'delete':

        $Id = $_POST['Id'];
        $query = mysqli_query($koneksi, "DELETE FROM hp WHERE Id='$Id'");
        if ($query)
        {
            echo "Hapus Data Berhasil";
        }
        else
        {
            echo "Hapus Data Gagal :" . mysqli_error($koneksi);
        }
    break;
}
