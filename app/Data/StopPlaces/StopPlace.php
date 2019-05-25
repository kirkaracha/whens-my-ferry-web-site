<?php

declare(strict_types=1);

namespace WhensMyFerry\Data\StopPlaces;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * WhensMyFerry\Data\StopPlaces\StopPlace
 *
 * @method static Builder|StopPlace newModelQuery()
 * @method static Builder|StopPlace newQuery()
 * @method static Builder|StopPlace query()
 */
class StopPlace extends Eloquent
{
    use SoftDeletes;

    protected $fillable = [
    ];

    protected $hidden = [
        'id'
    ];
}
