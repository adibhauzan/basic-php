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
    $gambar = $data["gambar"];

    $query = "INSERT INTO mahasiswa VALUES
                ('', '$nama', '$npm', '$email', '$jurusan', '$gambar')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
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
    $gambar = $data["gambar"];

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
