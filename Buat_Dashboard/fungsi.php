<?php 


$link = mysqli_connect (
        "localhost", 
        "root", 
        "",
        "db_sekolah");

function query_siswa ($query){
        
        global $link;

        $result = mysqli_query ($link, $query);
        $rows = [];
        while ( $row = mysqli_fetch_assoc ( $result ) ) {
                $rows [] = $row;
        }
        return $rows;
}

function create_siswa ($post){

        global $link;

        $nis = htmlspecialchars($post["nis"]);
        $nama = htmlspecialchars($post["nama_siswa"]);
        $tgllhr = htmlspecialchars($post["tanggal_lahir"]);
        $jnsk = htmlspecialchars($post["jenis_kelamin"]);


        $query = "INSERT INTO tbl_siswa
                VALUES 
                ('','$nis','$nama','$tgllhr','$jnsk')";
        
        mysqli_query($link, $query);

        return mysqli_affected_rows ($link);

}

function delete_siswa ($id) {
        global $link;

        mysqli_query ($link, "DELETE FROM tbl_siswa WHERE nis=$id");

        return mysqli_affected_rows($link);
}

function update_siswa ($data_siswa) {
        global $link;

        $id = $data_siswa["id"];
        $nis = htmlspecialchars($data_siswa["nis"]);
        $nama = htmlspecialchars($data_siswa["nama_siswa"]);
        $tgllhr = htmlspecialchars($data_siswa["tanggal_lahir"]);
        $jnsk = htmlspecialchars($data_siswa["jenis_kelamin"]);


        $query = "UPDATE tbl_siswa SET 
                nis = '$nis',
                nama_siswa = '$nama',
                tanggal_lahir = '$tgllhr',
                jenis_kelamin = '$jnsk'
                WHERE id = $id
                ";
        mysqli_query($link, $query);

        return mysqli_affected_rows ($link);

}

function cari_sis($keyword_siswa) {

        $query = "SELECT * FROM tbl_siswa
                        WHERE 
                        nama_siswa Like  '%$keyword_siswa%' 
                        ";

        return query_siswa ($query);
}

// GURU



function query_guru ($query){
        
        global $link;

        $result = mysqli_query ($link, $query);
        $rows = [];
        while ( $row = mysqli_fetch_assoc ( $result ) ) {
                $rows [] = $row;
        }
        return $rows;
}

function create_guru ($post_guru){

        global $link;

        $nip = htmlspecialchars($post_guru["NIP"]);
        $nama = htmlspecialchars($post_guru["nama"]);
        $tgllhr = htmlspecialchars($post_guru["tanggal_lahir"]);
        $jnsk = htmlspecialchars($post_guru["jenis_kelamin"]);
        $alamat = htmlspecialchars($post_guru["alamat"]);


        $query = "INSERT INTO tbl_guru
                VALUES 
                ('','$nip','$nama','$alamat','$jnsk','$tgllhr')";
        
        mysqli_query($link, $query);

        return mysqli_affected_rows ($link);

}

function delete_guru ($id_guru) {
        global $link;

        mysqli_query ($link, "DELETE FROM tbl_guru WHERE NIP =$id_guru");

        return mysqli_affected_rows($link);
}

function update_guru ($data_guru) {
        global $link;

        $id = $data_guru["id"];
        $nip = htmlspecialchars($data_guru["NIP"]);
        $nama = htmlspecialchars($data_guru["nama_siswa"]);
        $tgllhr = htmlspecialchars($data_guru["tanggal_lahir"]);
        $jnsk = htmlspecialchars($data_guru["jenis_kelamin"]);
        $alamat = htmlspecialchars($data_guru["alamat"]);


        $query = "UPDATE tbl_guru SET 
                NIP = '$nis',
                nama = '$nama',
                tanggal_lahir = '$tgllhr',
                jenis_kelamin = '$jnsk,
                alamat = $alamat
                WHERE id = $id
                ";
        mysqli_query($link, $query_guru);

        return mysqli_affected_rows ($link);

}

function cari_guru($keyword_guru) {

        $query = "SELECT * FROM tbl_guru
                        WHERE 
                        nama Like  '%$keyword_guru%' 
                        ";

        return query_guru ($query);
}





 ?>