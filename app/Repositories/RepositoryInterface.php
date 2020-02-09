<?php


namespace App\Repositories;


interface RepositoryInterface
{
  public function find(int $id);

  public function get();
}