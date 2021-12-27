<?php
$link = $link_web . "/masuk";
$link_berhasil = $link_web;
if (isset($_POST['masuk'])) {
    $kodecap = @$_SESSION['kodecap'];
    $cahpta = $_POST['cahpta'];
    $user = $db->amankan($_POST['username']);
    $pass = $db->amankan($_POST['password']);
    $_SESSION['masuk_user'] = $user;
    $_SESSION['masuk_pass'] = $pass;

    if ($kodecap == $cahpta) {
        $log = $db->login("username, tipe_akun", "tb_users", "and username ='$user' and password = md5('$pass')") or die($koneksi->error);

        $log->execute();
        $log->store_result();
        $cek = $log->num_rows;
        $log->bind_result($username, $type);
        $log->fetch();
        if ($cek > 0) {
            $_SESSION['spmi_log_username'] = $username;
            $_SESSION['spmi_log_tipe_akun'] = $type;

            if ($_SESSION['spmi_log_tipe_akun'] == "admin_LPM") {
                $_SESSION['masuk_user'] = "";
                $_SESSION['masuk_pass'] = "";
                echo $db->alert("Proses Masuk Berhasil", "$link_berhasil");
            } elseif ($_SESSION['spmi_log_tipe_akun'] == "mahasiswa") {
                $_SESSION['spmi_log_idresponden'] = 1;
                $_SESSION['spmi_log_idmhs'] = $db->lihatdata("tb_resp_mahasiswa", "idresp_mahasiswa", "nim", $username);;
                $_SESSION['masuk_user'] = "";
                $_SESSION['masuk_pass'] = "";
                echo $db->alert("Proses Masuk Berhasil", "$link_berhasil");
            } else {
                echo $db->alert("Tipe Akun tidak Terdaftar", "$link");
            }
        } else {
            echo $db->alert("Username dan Password tidak Sama...", "$link");
        }
    } else {
        echo $db->alert("Chapta Tidak Sama...Coba Lagi", "$link");
    }
}
?>
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid hold-transition login-page" style="height: 80vh;">
            <div class=" login-box">
                <!-- /.login-logo -->
                <div class=" card card-outline card-primary">
                    <div class="card-header text-center">
                        <a href="<?php echo $link_web . "/masuk"; ?>" class="h1">Portal <b>SIMAWA</b></a>
                    </div>
                    <div class="card-body">
                        <p class="login-box-msg">Masukkan Username dan Password</p>

                        <form action="<?php echo $link ?>" method="post">
                            <div class="input-group mb-3">
                                <input type="text" name="username" class="form-control" placeholder="Username" value="<?php echo @$_SESSION['masuk_user'] ?>">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-user"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="input-group mb-3">
                                <input type="password" name="password" class="form-control" placeholder="Password" value="<?php echo @$_SESSION['masuk_pass'] ?>">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-lock"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group has-feedback" style="text-align: center">
                                <img src="<?php echo WEB_ROOT ?>/config/chapta.php" width="150" height="30" alt="Kode Acak" />
                            </div>
                            <div class="form-group has-feedback">
                                <input type="text" class="form-control" name="cahpta" value="" maxlength="6" required="" placeholder="Masukkan 5 digit diatas">
                                <!-- <span class="fa fa-exclamation form-control-feedback"></span> -->
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <!-- <div class="icheck-primary">
                                        <input type="checkbox" id="remember">
                                        <label for="remember">
                                            Remember Me
                                        </label>
                                    </div> -->
                                </div>
                                <!-- /.col -->
                                <div class="col-6">
                                    <button type="submit" name="masuk" class="btn btn-primary btn-block">Masuk</button>
                                </div>
                                <!-- /.col -->
                            </div>
                        </form>
                        <!-- /.social-auth-links -->

                        <p class="mb-1">
                            <a href="<?php echo $link_web . "/lupa_password"; ?>">Saya Lupa Password</a>
                        </p>

                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>