<?php
$file = $_GET['file']; //hứng bằng pt GET
//bước 1: mở file
$file_path = 'upload/'.$file;
//bước 2: thông báo tải file
header("Content-Disposition: attachment; filename = $file"); // tải xuống
//bước 3: trình duyệt trả về định dạng file
header("Content-Type: application/pdf");
//bước 4: đọc file
readfile($file_path);
?>