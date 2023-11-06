<?php

/*
|--------------------------------------------------------------------------
| Aksi login
|--------------------------------------------------------------------------
|
|   Aplikasi Sistem Informasi Rumah Sakit Sederhana
|   http://www.sarjanakomedi.com
|
*/

session_start(); //memulai session
session_destroy(); //mengakhiri session
header("location:index.php");
