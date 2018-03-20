<?php
/**
 * Created by PhpStorm.
 * User: surface
 * Date: 2018/3/19
 * Time: 14:24
 */
session_start();
if (isset($_SESSION['uid']) && !empty($_SESSION['uid'])) {

} else {
    header("Location: ../page/index.php");
}