<?php

declare(strict_types=1);

namespace WhensMyFerry\Data\Operators;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * WhensMyFerry\Data\Operators\Operator
 *
 * @method static Builder|Operator newModelQuery()
 * @method static Builder|Operator newQuery()
 * @method static Builder|Operator query()
 */
class Operator extends Eloquent
{
    use SoftDeletes;

    protected $fillable = [
        'api_id',
        'name',
        'short_name',
        'siri_operator_ref',
        'timezone',
        'default_language',
        'contact_telephone_number',
        'website',
        'primary_mode',
        'private_code',
        'monitored',
        'other_modes'
    ];

    protected $hidden = [
        'id'
    ];
}
