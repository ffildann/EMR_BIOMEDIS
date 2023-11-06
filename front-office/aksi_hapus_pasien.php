<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include 'konfig.php';
$id_pasien = $_GET['id_pasien'];
$query = mysqli_query($con, "delete from tbl_pasien where id_pasien='$id_pasien'");
// mysqli_query($query);
if($query){
header("location:front-office.php?view=tampil_pasien");
}else{
echo "wek wek ora Hapus";
}
