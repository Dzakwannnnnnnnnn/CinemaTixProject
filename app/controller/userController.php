<?php
// app/controller/UserController.php

require_once __DIR__ . '/../model/FilmModel.php';

class UserController
{
  public function index()
  {
    // Buat objek model
    $filmModel = new FilmModel();

    // Ambil semua data film
    $data = $filmModel->getAllFilms();

    // Kirim data ke view
    include __DIR__ . '/../view/users/index.php';
  }
}
