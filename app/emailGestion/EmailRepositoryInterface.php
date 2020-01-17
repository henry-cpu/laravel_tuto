<?php


namespace App\emailGestion;


interface EmailRepositoryInterface
{
    public function save($mail);
}