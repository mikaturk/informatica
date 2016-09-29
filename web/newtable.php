<?php
include 'dbconnect.php';

pg_query($pg_conn,"CREATE TABLE filetable(name text,filename bytea);");
?>
