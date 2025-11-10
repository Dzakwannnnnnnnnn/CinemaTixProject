<?php
// app/model/FilmModel.php

class FilmModel
{
  public function getAllFilms()
  {
    // sementara dummy data, nanti bisa diganti query MySQL
    return [
      [
        'judul' => 'Dune 2',
        'poster_url' => 'dune.jpg',
        'rating_usia' => '13+'
      ],
      [
        'judul' => 'Deadpool & Wolverine',
        'poster_url' => 'deadpool.jpg',
        'rating_usia' => '17+'
      ],
      [
        'judul' => 'Inside Out 2',
        'poster_url' => 'insideout2.jpg',
        'rating_usia' => 'SU'
      ]
    ];
  }
}
