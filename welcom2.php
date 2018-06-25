<?php
/**
 * Created by PhpStorm.
 * User: st
 * Date: 28.03.2018
 * Time: 20:55
 */
session_start();

if( $_SESSION['flag']!== 1){
   header('Location: index.php');
};


?>
