<?php

namespace App\Filters;

class ColorFilter
{
    public function filter($builder, $value)
    {
        return $builder->where('color', '!=', $value); 
    }
}