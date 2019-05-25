<?php

declare(strict_types=1);

namespace WhensMyFerry\Data\Stops;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * WhensMyFerry\Data\Stops\Stop
 *
 * @method static Builder|Stop newModelQuery()
 * @method static Builder|Stop newQuery()
 * @method static Builder|Stop query()
 */
class Stop extends Eloquent
{
    use SoftDeletes;

    protected $fillable = [
        'api_id',
        'name',
        'latitude',
        'longitude',
        'stop_type'
    ];

    protected $hidden = [
        'id'
    ];
}