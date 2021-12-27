<?php
include '../config/koneksi.php';
session_start();
unset($_SESSION['spmi_log_username']);
unset($_SESSION['spmi_log_tipe_akun']);
unset($_SESSION['master_standar']);
unset($_SESSION['sub_spmi']);

header("location:$link_web/masuk");
