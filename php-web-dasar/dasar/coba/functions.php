<?php

$conn = mysqli_connect("localhost", "root", null, "cobain");
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

function tambah($data){
    global $conn;
    $nama = $data["nama"];
    $npm = $data["npm"];
    $email = $data["email"];
    $jurusan = $data["jurusan"];

    $query = "INSERT INTO coba VALUES('', '$nama', '$npm', '$email', '$jurusan')";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function hapus($id){
    global $conn;
    mysqli_query($conn, "DELETE FROM coba WHERE id = $id");
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

    $query = "UPDATE coba SET
              nama ='$nama',
               npm = '$npm',
               email = '$email',
               jurusan = '$jurusan'
               WHERE id = $id
               ";


    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
