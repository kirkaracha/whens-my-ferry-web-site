<?php

declare(strict_types=1);

namespace WhensMyFerry\Data\Holidays;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * WhensMyFerry\Data\Holidays\Holiday
 *
 * @method static Builder|Holiday newModelQuery()
 * @method static Builder|Holiday newQuery()
 * @method static Builder|Holiday query()
 */
class Holiday extends Eloquent
{
    use SoftDeletes;

    protected $fillable = [
    ];

    protected $hidden = [
        'id'
    ];
}
