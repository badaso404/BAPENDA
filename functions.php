<?php

$conn = mysqli_connect('localhost', 'root', '', 'db_kampus');

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
    $nama_lengkap = $data["nama_lengkap"];
    $npwp = $data["npwp"];
    $alamat = $data["alamat"];
    $no_telepon = $data["no_telepon"];
    $tanggal = $data["tanggal"];
    $jenis_pajak = $data["jenis_pajak"];
    $massa_pajak = $data["massa_pajak"];

    $query = "INSERT INTO tb_input VALUES
            ('','$nama_lengkap', '$npwp', '$alamat', '$no_telepon', 'tanggal', 'jenis_pajak', 'massa_pajak')
    ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapus($id){

    global $conn;
    $query = "DELETE FROM tb_input WHERE id=$id";
    mysqli_query($conn,$query);

    return mysqli_affected_rows($conn);
}

function ubah($data){

    global $conn;
    $nama_lengkap = $data["nama_lengkap"];
    $npwp = $data["npwp"];
    $alamat = $data["alamat"];
    $no_telepon = $data["no_telepon"];
    $tanggal = $data["tanggal"];
    $jenis_pajak = $data["jenis_pajak"];
    $massa_pajak = $data["massa_pajak"];



    $query = "UPDATE tb_input SET
                nama_lengkap = '$nama_lengkap',
                npwp = '$npwp',
                alamat = '$alamat',
                no_telepon = '$no_telepon'
                tanggal     = $tanggal
                jenis_pajak = $jenis_pajak
                massa_pajak = $massa_pajak
                WHERE tanggal ='$tanggal' 
    ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);

}
?>