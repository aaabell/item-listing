<?php

namespace App\Filters;

class LengthFilter
{
    public function filter($builder, $value)
    {
        return $builder->where('length', '>', $value); 
    }
}