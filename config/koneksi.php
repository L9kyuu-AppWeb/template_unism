<?php
@session_start();
$nama_server = "sarimulia.simawa.com";

class databaseMysqli
{
    public $host = "localhost";
    private $username = "root";
    private $password = "ikanasin#2020";
    private $dbName;
    private $mysqli;

    public function __Construct($db)
    {
        $this->dbName = $db;
        $this->bukaKoneksi();
    }
    public function bukaKoneksi()
    {
        $this->mysqli = new mysqli($this->host, $this->username, $this->password, $this->dbName);
    }

    public function tampilData($tabel)
    {
        $result = $this->mysqli->query("SELECT * FROM $tabel where aktif='y'") or die('Tidak Ada Tabel!');
        return $result;
    }

    public function tampilData3($tabel, $where)
    {
        $result = $this->mysqli->query("SELECT * FROM $tabel where aktif='y' $where") or die('Tidak Ada Tabel!');
        return $result;
    }

    public function tampilData2($view, $tabel, $where)
    {
        $result = $this->mysqli->query("SELECT $view FROM $tabel where aktif='y' $where") or die('Tidak Ada Tabel!');
        return $result;
    }

    public function tampilData4($view, $tabel)
    {
        $result = $this->mysqli->query("SELECT $view FROM $tabel where aktif='y'") or die('Tidak Ada Tabel!');
        return $result;
    }

    public function login($panggil, $tabel, $where)
    {
        $result = $this->mysqli->prepare("SELECT $panggil FROM $tabel WHERE aktif='y' $where") or die('Tidak Ada Tabel!');
        return $result;
    }

    public function lihatData($tabel, $field, $where, $cari)
    {
        $result = $this->mysqli->query("SELECT $field as tampil FROM $tabel WHERE $where = '$cari'") or die('Gagal Lihat!');
        $row = $result->fetch_array();
        return $row['tampil'];
        mysqli_free_result($result);
    }

    public function lihatData2($tabel, $field, $where)
    {
        $result = $this->mysqli->query("SELECT $field as tampil FROM $tabel WHERE aktif='y' and $where") or die('Gagal!');
        $row = $result->fetch_array();
        return $row['tampil'];
        mysqli_free_result($result);
    }

    public function lihatData3($tabel, $field, $where, $cari)
    {
        $result = $this->mysqli->query("SELECT $field as tampil FROM $tabel WHERE $where like '%$cari%'") or die('Gagal!');
        $row = $result->fetch_array();
        return $row['tampil'];
        mysqli_free_result($result);
    }

    public function insertData($tabel, $field, $isi)
    {
        $result = $this->mysqli->query("INSERT INTO $tabel ($field) VALUES ($isi)");
        return $result;
    }

    public function updateData($tabel, $isi, $where, $nilai)
    {
        $result = $this->mysqli->query("update $tabel set $isi where $where ='$nilai'") or die('Gagal Update!');
        return $result;
    }

    public function deleteData($tabel, $where, $nilai)
    {
        $result = $this->mysqli->query("update $tabel set aktif='n',terhapus=CURRENT_TIMESTAMP where $where = '$nilai'");
        return $result;
    }

    public function bebas($isi)
    {
        $result = $this->mysqli->query("$isi") or die('Tidak Ada Tabel!');
        return $result;
    }

    public function amankan($isi)
    {
        $result = $this->mysqli->real_escape_string($isi);
        return $result;
    }

    public function alert($pesan, $link)
    {
        $result = "<script type='text/javascript'>alert('$pesan');
        window.location.href='$link';;</script>";
        return $result;
    }

    public function alert2($link)
    {
        $result = "<script type='text/javascript'>
        window.location.href='$link';</script>";
        return $result;
    }
}
// Nama Database
$db = new databaseMysqli('sm_spmi');

class databaseMysqli_ext
{
    public $host = "localhost";
    private $username = "root";
    private $password = "ikanasin#2020";
    private $dbName;
    private $mysqli;
    public function __Construct($db)
    {
        $this->dbName = $db;
        $this->bukaKoneksi();
    }
    public function bukaKoneksi()
    {
        $this->mysqli = new mysqli($this->host, $this->username, $this->password, $this->dbName);
    }

    public function tampilData($tabel)
    {
        $result = $this->mysqli->query("SELECT * FROM $tabel") or die('Tidak Ada Tabel!');
        return $result;
    }

    public function tampilData2($view, $tabel)
    {
        $result = $this->mysqli->query("SELECT $view FROM $tabel") or die('Tidak Ada Tabel!');
        return $result;
    }

    public function login($panggil, $tabel, $where)
    {
        $result = $this->mysqli->prepare("SELECT $panggil FROM $tabel WHERE $where") or die('Tidak Ada Tabel!');
        return $result;
    }

    public function lihatData($tabel, $field, $where, $cari)
    {
        $result = $this->mysqli->query("SELECT $field as tampil FROM $tabel WHERE $where = '$cari'") or die('Gagal Lihat!');
        $row = $result->fetch_array();
        return $row['tampil'];
        mysqli_free_result($result);
    }

    public function lihatData2($tabel, $field, $where)
    {
        $result = $this->mysqli->query("SELECT $field as tampil FROM $tabel WHERE $where") or die('Gagal!');
        $row = $result->fetch_array();
        return $row['tampil'];
        mysqli_free_result($result);
    }

    public function lihatData3($tabel, $field, $where, $cari)
    {
        $result = $this->mysqli->query("SELECT $field as tampil FROM $tabel WHERE $where like '%$cari%'") or die('Gagal!');
        $row = $result->fetch_array();
        return $row['tampil'];
        mysqli_free_result($result);
    }

    public function insertData($tabel, $isi)
    {
        $result = $this->mysqli->query("INSERT INTO $tabel VALUES ($isi)") or die('Gagal Insert!');
        return $result;
    }

    public function insertData2($tabel, $field, $isi)
    {
        $result = $this->mysqli->query("INSERT INTO $tabel ($field) VALUES ($isi)") or die('Gagal Insert!');
        return $result;
    }

    public function updateData($tabel, $isi, $where, $nilai)
    {
        $result = $this->mysqli->query("update $tabel set $isi where $where ='$nilai'") or die('Gagal Update!');
        return $result;
    }

    public function updateData2($tabel, $isi, $where)
    {
        $result = $this->mysqli->query("update $tabel set $isi where $where") or die('Gagal Update!');
        return $result;
    }

    public function deleteData($tabel, $where, $nilai)
    {
        $result = $this->mysqli->query("delete from $tabel where $where = '$nilai'") or die('Gagal Insert!');
        return $result;
    }

    public function bebas($isi)
    {
        $result = $this->mysqli->query("$isi") or die('Tidak Ada Tabel!');
        return $result;
    }

    public function alert($pesan, $link)
    {
        $result = "<script type='text/javascript'>alert('$pesan');
            window.location.href='$link';</script>";
        return $result;
    }

    public function alert2($link)
    {
        $result = "<script type='text/javascript'>
            window.location.href='$link';</script>";
        return $result;
    }
}
// Nama Database
$db_simpeg = new databaseMysqli_ext('sm_simpeg');
$db_sia = new databaseMysqli_ext('sm_sia');
$db_sikap = new databaseMysqli_ext('sm_sikap');

if (
    isset($_SERVER['HTTPS']) &&
    ($_SERVER['HTTPS'] == 'on' || $_SERVER['HTTPS'] == 1) ||
    isset($_SERVER['HTTP_X_FORWARDED_PROTO']) &&
    $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https'
) {
    $protocol = 'https://';
} else {
    $protocol = 'http://';
}

// $server_set = $_SERVER['HTTP_HOST'];    
@define('WEB_ROOT', $protocol . $nama_server);

$link_web = WEB_ROOT;
$url = explode("/", $_SERVER["REQUEST_URI"]);


$req1   = @$url[0];
@$req2   = @$url[1];
@$req3   = @$url[2];
@$req4   = @$url[3];
@$req5   = $url[4];
@$req6   = $url[5];
@$req7   = $url[6];
@$req8   = $url[7];
@$req9   = $url[8];
@$req10   = $url[9];
@$req11   = $url[9];
@$req12   = $url[10];
@$req13   = $url[11];
// $idta_aktif = $db->lihatdata("tb_ta","id","statussipenmaru","Y");

function sendMessage($message_text)
{
    $telegram_id = "-1001594046896";
    $secret_token = "1996751115:AAEQb95ZkmSR_SH9k7SkvPs9Zhawt8VzKbs";

    $url = "https://api.telegram.org/bot" . $secret_token . "/sendMessage?parse_mode=markdown&chat_id=" . $telegram_id;
    $url = $url . "&text=" . urlencode($message_text);
    $ch = curl_init();
    $optArray = array(
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true
    );
    curl_setopt_array($ch, $optArray);
    $result = curl_exec($ch);
    curl_close($ch);
}
