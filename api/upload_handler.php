<?php
header('Content-Type: application/json');

$target_dir = "uploads/products/";
if (!file_exists($target_dir)) {
    mkdir($target_dir, 0777, true);
}

if (isset($_FILES["prod-img-file"])) {
    $file_extension = pathinfo($_FILES["prod-img-file"]["name"], PATHINFO_EXTENSION);
    $file_name = time() . "_" . uniqid() . "." . $file_extension;
    $target_file = $target_dir . $file_name;

    if (move_uploaded_file($_FILES["prod-img-file"]["tmp_name"], $target_file)) {
        echo json_encode([
            "status" => "success",
            "file_path" => $target_file
        ]);
    } else {
        echo json_encode(["status" => "error", "message" => "Gagal menyimpan gambar."]);
    }
} else {
    echo json_encode(["status" => "error", "message" => "Tidak ada file yang diterima."]);
}
?>