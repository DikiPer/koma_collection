<?php

$server = "localhost";
$user = "root";
$pass = "";
$database = "koma_web";

$koneksi = mysqli_connect($server, $user, $pass, $database) or die(mysqli_error($koneksi));

class database
{
    private $hostname = "localhost";
    private $username = "root";
    private $password = "";
    private $dbName = "koma_web";
    public $conn;

    function __construct()
    {
        $this->conn = new mysqli($this->hostname, $this->username, $this->password, $this->dbName);

        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
        echo "";
    }



    /////////////////////////// SELECT TABLE SQL //////////////////////////////////
    // SELECT TABLE
    function select($table)
    {
        $sql = "SELECT * FROM $table";
        $result = $this->conn->query($sql);
        while ($row = mysqli_fetch_assoc($result)) {
            $hasil[] = $row;
        }
        return $hasil;
    }

    // SELECT TABLE WHERE
    function selectWhere($table, $params, $cParams)
    {
        $sql = "SELECT * FROM $table WHERE $params = '$cParams'"; //string data
        $result = $this->conn->query($sql);
        while ($row = mysqli_fetch_assoc($result)) {
            $hasil[] = $row;
        }
        return $hasil;
    }

    // cek sql
    function sqlWhere($table, $params, $cParams)
    {
        $sql = "SELECT * FROM $table WHERE $params = '$cParams'"; //string data
        $result = $this->conn->query($sql);
        return $result;
    }

    // cek sql not
    function sqlNotWhere($table, $params, $cParams)
    {
        $sql = "SELECT * FROM $table WHERE $params != '$cParams'"; //string data
        $result = $this->conn->query($sql);
        return $result;
    }

    // SELECT TABLE WHERE OR
    function selectWhereOr($table, $params, $cParams, $cParams2)
    {
        $sql = "SELECT * FROM $table WHERE $params = '$cParams' OR $params = '$cParams2'"; //string data
        $result = $this->conn->query($sql);
        while ($row = mysqli_fetch_assoc($result)) {
            $hasil[] = $row;
        }
        return $hasil;
    }

    // SELECT PASSWORD
    function selectWhere2($table, $params1, $cParams1, $params2, $cParams2)
    {
        $sql = "SELECT * FROM $table WHERE $params1 = '$cParams1' AND $params2 = '$cParams2'"; //string data
        $result = $this->conn->query($sql);
        return $result;
    }


    // SELECT TABLE ORDER
    function selectOrder($table, $order)
    {
        $sql = "SELECT * FROM $table ORDER BY $order DESC"; //string data
        $result = $this->conn->query($sql);
        while ($row = mysqli_fetch_assoc($result)) {
            $hasil[] = $row;
        }
        return $hasil;
    }

    function selected($table)
    {
        $sql = "SELECT * FROM $table";
        $result = $this->conn->query($sql);
        $rowcount = mysqli_num_rows($result);

        return $rowcount;
    }

    ///////////////////////////INSERT TABLE COMPONENTS//////////////////////////////////
    //catch.php


    // FUNCTIONAL ADDON///////////////////////////////////
    function id_ticket()
    {
        // ambil seluruh data user
        $id_ex = "";
        $query = "SELECT * FROM ticket_it ORDER BY id_ticket DESC LIMIT 1";
        $result = $this->conn->query($query);
        while ($fetch = mysqli_fetch_assoc($result)) {
            $id_ex = $fetch['id_ticket'];
        }
        $code = "HDIT";
        $time = date("my");
        $id = $id_ex + 1;
        $hasil = $code . $time . '-' . str_pad($id, 3, "0", STR_PAD_LEFT);
        return $hasil;
    }

    function ticket_id()
    {
        // ambil seluruh data user
        $id_ex = "";
        $query = "SELECT * FROM ticket_teknisi ORDER BY id_ticket DESC LIMIT 1";
        $result = $this->conn->query($query);
        while ($fetch = mysqli_fetch_assoc($result)) {
            $id_ex = $fetch['id_ticket'];
        }
        $code = "HDTKS";
        $time = date("my");
        $id = $id_ex + 1;
        $hasil = $code . $time . '-' . str_pad($id, 3, "0", STR_PAD_LEFT);
        return $hasil;
    }
}

function insert($id_produk, $nama_produk, $harga_produk, $kode_produk, $stok_produk, $gambar_produk, $category)
{
    mysqli_query($this->conn, "INSERT INTO data_produk VALUES('$id_produk, '$nama_produk','$harga_produk', '$kode_produk', '$stok_produk', '$gambar_produk', '$category')");
}