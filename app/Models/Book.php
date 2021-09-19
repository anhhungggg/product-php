<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Book extends Product
{
    use HasFactory;

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);

        $this->mergeFillable(['weight']);
    }

    protected $weight;
    protected $table = 'products';

    public function setWeight($weight){
        $this->weight = $weight;
    }
}
