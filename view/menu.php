<?php
if (@$_SESSION['spmi_log_username'] == "") {
    include 'view/aside.php';
} elseif (@$_SESSION['spmi_log_username'] != "" and $_SESSION['spmi_log_tipe_akun'] == "admin_LPM") {
    include 'view/aside_admin.php';
} elseif (@$_SESSION['spmi_log_username'] != "" and $_SESSION['spmi_log_tipe_akun'] == "mahasiswa") {
    include 'view/aside_mhs.php';
}
