<?php

namespace App\Contracts\Pos;

interface CartRepositoryInterface
{
    public function createCart($model, $id);
}