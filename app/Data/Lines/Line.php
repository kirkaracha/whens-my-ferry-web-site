<?php

declare(strict_types=1);

namespace WhensMyFerry\Data\Lines;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * WhensMyFerry\Data\Lines\Line
 *
 * @method static Builder|Line newModelQuery()
 * @method static Builder|Line newQuery()
 * @method static Builder|Line query()
 */
class Line extends Eloquent
{
    use SoftDeletes;

    protected $fillable = [
        'api_id',
        'name',
        'transport_mode',
        'public_code',
        'siri_line_ref',
        'monitored',
        'operator_ref'
    ];

    protected $hidden = [
        'id'
    ];
}
