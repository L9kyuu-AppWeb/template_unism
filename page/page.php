<?php
if (@$_SESSION['simawa_log_username'] == "") {
    if ($req2 == "") {
        include 'page/home.php';
    } else

    if ($req2 == "masuk") {
        include 'page/masuk.php';
    } else

    if ($req2 == "lupa_password") {
        include 'page/lupa_password.php';
    } else

	if ($req2 == "blank") {
        include 'page/blank.php';
    } else {
        include 'page/404.php';
    }
}
