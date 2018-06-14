<?php
session_start();
unset($_SESSION[@uid]);
echo"Logout done";
?>