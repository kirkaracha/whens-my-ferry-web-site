<?php declare(strict_types=1);

namespace WhensMyFerry\Data\Patterns;

use WhensMyFerry\Data\BaseRepository;

class PatternRepository extends BaseRepository implements PatternRepositoryInterface
{
    public function __construct(Pattern $pattern)
    {
        parent::__construct($pattern);
    }
}
