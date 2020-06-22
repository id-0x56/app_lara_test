<?php

namespace App\Repositories;

use App\Click;

class ClickRepository
{
    protected $click;

    public function __construct(Click $click)
    {
        $this->click = $click;
    }

    public function all()
    {
        return $this->click
            ->all();
    }

    public function find($id)
    {
        return $this->click
            ->find($id);
    }

    public function create(array $input)
    {
        return $this->click
            ->fill($input)
            ->save();
    }
}
