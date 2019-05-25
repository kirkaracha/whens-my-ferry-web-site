<?php

declare(strict_types=1);

namespace WhensMyFerry\Data\Timetables;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * WhensMyFerry\Data\Timetables\Timetable
 *
 * @method static Builder|Timetable newModelQuery()
 * @method static Builder|Timetable newQuery()
 * @method static Builder|Timetable query()
 */
class Timetable extends Eloquent
{
    use SoftDeletes;

    protected $fillable = [
    ];

    protected $hidden = [
        'id'
    ];
}
