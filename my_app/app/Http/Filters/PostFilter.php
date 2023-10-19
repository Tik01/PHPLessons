<?php

namespace App\Http\Filters;

use Illuminate\Database\Eloquent\Builder;

class PostFilter extends AbstractFilter
{
    public const Name = 'name';
    public const Age = 'age';
    public const U_name = 'uname_id';

    protected function getCallbacks(): array
    {
        return [
            self::Name=>[$this,'name'],
            self::Age=>[$this,'age'],
            self::U_name=>[$this,'uname_id'],
        ];
    }

    public function name(Builder $builder, $value){
        $builder->where('name','like',"%{$value}%");
    }

    public function age(Builder $builder, $value){
        $builder->where('age','like',"%{$value}%");
    }
    public function uname_id(Builder $builder, $value){
        $builder->where('uname_id',$value);
    }
}
