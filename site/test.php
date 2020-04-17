<?php
$dir = "file/a";

$result = is_dir($dir);

if (!$result) {
  mkdir($dir);
}
?>