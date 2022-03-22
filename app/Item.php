<?php

namespace App;

use App\Filters\ItemFilter;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Item extends Model
{
    public function scopeFilter(Builder $builder, $request)
    {
        return (new ItemFilter($request))->filter($builder);
    }
}
