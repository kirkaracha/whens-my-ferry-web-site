<?php

declare(strict_types=1);

namespace WhensMyFerry\Data\Patterns;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * WhensMyFerry\Data\Patterns\Pattern
 *
 * @method static Builder|Pattern newModelQuery()
 * @method static Builder|Pattern newQuery()
 * @method static Builder|Pattern query()
 */
class Pattern extends Eloquent
{
    use SoftDeletes;

    protected $fillable = [
    ];

    protected $hidden = [
        'id'
    ];
}
