<?php

namespace App\Interfaces;

interface BookInterface
{
    public function all();
    public function create(array $data);
    public function read($model);
    public function update($data, $model);
    public function delete($model);
}
