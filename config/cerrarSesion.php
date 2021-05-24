<?php session_start();
require 'config.php';
require_once 'funciones.php';

session_unset();
session_destroy();
$_SESSION = array();

header('Location: '.RUTA.'');