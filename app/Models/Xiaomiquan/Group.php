<?php

namespace App\Models\Xiaomiquan;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    /**
     * @var array $guarded
     */
    protected $guarded = [];

    /**
     * @var array $hidden
     */
    protected $hidden = [
        'updated_at', 'deleted_at',
    ];
    protected $table = 'xiaomiquan_groups';

}
