<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function dashboard(): string
    {
        $message = '';
        if ($this->request->getMethod() === 'post') {
            // Load DB connection
            require_once APPPATH . 'Database/db.php';
            $title = $conn->real_escape_string($this->request->getPost('title'));
            $description = $conn->real_escape_string($this->request->getPost('description'));
            $image = $conn->real_escape_string($this->request->getPost('image'));
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
