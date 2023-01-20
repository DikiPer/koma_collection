<?php

session_start();

if ($_SESSION['role'] == "") {
	header("Location: depan/index.php");
} elseif ($_SESSION['role'] == "admin") {
	header("Location: admin/index.php");
} elseif ($_SESSION['role'] == "user") {
	header("Location: user/index.php");
}
