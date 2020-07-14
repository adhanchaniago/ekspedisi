<?php

function getBerita()

{
    global $koneksi;

    $berita = [];
    $sql = "SELECT * FROM  tb_berita ";
    $query = mysqli_query($koneksi, $sql);
    while ($data = mysqli_fetch_assoc($query)){
        $berita[] = $data;

    }
    return $berita;
}