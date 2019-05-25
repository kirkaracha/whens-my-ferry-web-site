<?php declare(strict_types=1);

namespace WhensMyFerry\Data\Lines;

use WhensMyFerry\Data\BaseRepository;

class LineRepository extends BaseRepository implements LineRepositoryInterface
{
    public function __construct(Line $line)
    {
        parent::__construct($line);
    }

    public function updateOrCreateLines(int $operatorId, $lines)
    {
        foreach ($lines as $line) {
            $this->model->updateOrCreate(
                [
                    'api_id' => $line->Id,
                    'name' => $line->Name,
                    'operator_id' => $operatorId
                ],
                [
                    'public_code' => $line->PublicCode,
                    'siri_line_ref' => $line->SiriLineRef,
                    'monitored' => $line->Montiored
                ]
            );
        }
    }
}
