<?php

include("model/Template.class.php");
include("model/DB.class.php");
include("model/Pasien.class.php");
include("model/TabelPasien.class.php");
include("view/TampilPasien.php");

// instansiasi class Proses Pasien
$pasien = new ProsesPasien();

// jika ada masukan submit
if (isset($_POST['submit'])) {
    // jika nilai dari form id tidak kosong
    if (!empty($_POST['id'])) {
        //memanggil update
        $pasien->updateDataPasien($_POST);
        header("location:index.php");
    }
    else {
        //memanggil add
        $pasien->addDataPasien($_POST);
        header('Location:index.php');
    }
}

//  Jika terdapat nilai dari id_delete 
if (!empty($_GET['id_delete'])) {
    //memanggil delete
    $id = $_GET['id_delete'];
    $pasien->deleteDataPasien($id);
    header("location:index.php");
}


