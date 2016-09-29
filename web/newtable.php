<?php
include 'dbconnect.php';

pg_query($pg_conn, `
CREATE TABLE filestable
(
name text,
file bytea
);
`);
 ?>
