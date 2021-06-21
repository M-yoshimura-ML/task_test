<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
//use Prettus\Repository\Contracts\Transformable;
//use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class Contact.
 *
 * @package namespace App\Models;
 */
//class Contact extends Model implements Transformable
class Contact extends Model
{
//    use TransformableTrait;
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['takumoi_id', 'name', 'email', 'contact_content', 'text'];

}
