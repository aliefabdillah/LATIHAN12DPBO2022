<?php

/******************************************
Asisten Pemrogaman 11
 ******************************************/

class TabelPasien extends DB
{
	function getPasien()
	{
		// Query mysql select data pasien
		$query = "SELECT * FROM pasien";
		// Mengeksekusi query
		return $this->execute($query);
	}

	// fungsi insert data ke table
	function addPasien($data)
	{
		$nik = $data['nik'];
		$nama = $data['nama'];
		$tempat = $data['tempat_lahir'];
		$tl = $data['tgl_lahir'];
		$gender = $data['gender'];
		$email = $data['email'];
		$telepon = $data['telepon'];

		$query = "insert into pasien values ('', '$nik', '$nama', '$tempat', '$tl', '$gender', '$email', '$telepon')";
		
		// Mengeksekusi query
		return $this->execute($query);
	}
	
	// fungsi update data pada tabel
	function updatePasien($data)
	{
		$id = $data['id'];
		$nik = $data['nik'];
		$nama = $data['nama'];
		$tempat = $data['tempat_lahir'];
		$tl = $data['tgl_lahir'];
		$gender = $data['gender'];
		$email = $data['email'];
		$telepon = $data['telepon'];

		$query = "update pasien set nik = '$nik', nama = '$nama', tempat = '$tempat', tl = '$tl', gender = '$gender', email = '$email', telp = '$telepon' where id = '$id'";
		
		// Mengeksekusi query
		return $this->execute($query);
	}

	// fungsi delete data dari table
	function deletePasien($id)
    {

        $query = "delete FROM pasien WHERE id = '$id'";

        // Mengeksekusi query
        return $this->execute($query);
    }
}
