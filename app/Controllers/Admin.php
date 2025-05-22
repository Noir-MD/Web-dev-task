<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function dashboard(): string
    {
        $message = '';
        require_once APPPATH . 'Database/db.php';
        if (!isset($conn) || $conn->connect_error) {
            $message = 'Database connection failed: ' . ($conn->connect_error ?? 'No connection object');
        } else {
            $title = $conn->real_escape_string($this->request->getPost('title'));
            $description = $conn->real_escape_string($this->request->getPost('description'));
            // Ambil nama file dari $_FILES jika ada, jika tidak fallback ke post
            $image = '';
            if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
                $image = 'Images/' . $conn->real_escape_string(basename($_FILES['image']['name']));
            } else {
                $image = $conn->real_escape_string($this->request->getPost('image'));
            }
            $sql = "INSERT INTO produk (title, description, image) VALUES ('$title', '$description', '$image')";
            if ($conn->query($sql) === TRUE) {
                $message = 'Product sukses ditambahkan';
            } else {
                $message = 'Error: ' . $conn->error;
            }
        }
        return view('admin/dashboard', ['message' => $message]);
    }
}
