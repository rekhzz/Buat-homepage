<?php 

        $link = mysqli_connect (
        "localhost", 
        "root", 
        "",
        "db_sekolah");



function query_guru ($query){
        
        global $link;

        $result = mysqli_query ($link, $query);
        $rows = [];
        while ( $row = mysqli_fetch_assoc ($result) ) {
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
                ('','$nip','$nama','$tgllhr','$jnsk','$alamat')";
        
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
        $nama = htmlspecialchars($data_guru["nama"]);
        $tgllhr = htmlspecialchars($data_guru["tanggal_lahir"]);
        $jnsk = htmlspecialchars($data_guru["jenis_kelamin"]);
        $alamat = htmlspecialchars($data_guru["alamat"]);


        $query = "UPDATE tbl_guru SET 
                NIP = '$nip',
                nama = '$nama',
                tanggal_lahir = '$tgllhr',
                jenis_kelamin = '$jnsk',
                alamat = '$alamat'
                WHERE id = $id
                ";
        mysqli_query($link,$query_guru);

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