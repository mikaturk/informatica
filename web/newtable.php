<?php
import dbconnect.php;

pg_query($pg_conn, `
CREATE TABLE files(
name text,
file bytea
)
`);
 ?>
