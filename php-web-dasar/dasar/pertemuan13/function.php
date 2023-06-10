<?php

$conn = mysqli_connect("localhost", "root", "", "phpdasar");
if (!$conn) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}

function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data)
{
    global $conn;

    $npm = $data["npm"];
    $nama = $data["nama"];
    $email = $data["email"];
    $jurusan = $data["jurusan"];


    
    $gambar = upload();
    if (!$gambar || !$npm || !$nama || !$email || !$jurusan) {
        return false;
    }


    $query = "INSERT INTO mahasiswa VALUES
                ('', '$nama', '$npm', '$email', '$jurusan', '$gambar')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}


function upload()
{

    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];


    if ($error === 4) {
        echo "<script>
        alert('Pilih Gambar Terlebih Dahulu!');
            </script>";
        return false;
    }

    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
        echo "<script>
        alert('Yang anda upload bukan gambar');
            </script>";
        return false;
    };

    if($ukuranFile > 1000000){
        echo "<script>
        alert('Ukuran Gambar Terlalu Besar');
            </script>";
        return false;
    }


$namaFileBaru = uniqid();
$namaFileBaru .= '.';
$namaFileBaru .= $ekstensiGambar;


    move_uploaded_file($tmpName, 'image/' . $namaFileBaru);

    return $namaFile;
}


function hapus($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id");
    return mysqli_affected_rows($conn);
}

function ubah($data)
{
    global $conn;

    $id = $data["id"];
    $npm = $data["npm"];
    $nama = $data["nama"];
    $email = $data["email"];
    $jurusan = $data["jurusan"];
    $gambarLama = $data["gambarLama"];


    if($_FILES['gambar']['error'] === 4) {
        $gambar = $gambarLama;
    }else { 
        $gambar = upload();
    }
    

    $query = "UPDATE mahasiswa SET
              nama ='$nama',
               npm = '$npm',
               email = '$email',
               jurusan = '$jurusan',
               gambar = '$gambar'
               WHERE id = $id
               ";


    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function cari($keyword)
{
    $query = "SELECT * FROM mahasiswa WHERE 
    nama LIKE '%$keyword%' OR
    npm LIKE '%$keyword%' OR
    email LIKE '%$keyword%' OR
    jurusan LIKE '%$keyword%'
    ";

    return query($query);
}
