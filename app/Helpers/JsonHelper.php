<?php

declare(strict_types=1);

namespace WhensMyFerry\Helpers;

use Log;

class JsonHelper
{
    const BYTE_ORDER_MARK = 'efbbbf';

    public function removeBom($data)
    {
        if (0 === strpos(bin2hex($data), self::BYTE_ORDER_MARK)) {
            return substr($data, 3);
        }

        return $data;
    }

    public function logJsonError($jsonLastError)
    {
        if ($jsonLastError === JSON_ERROR_NONE) {
            return true;
        }

        switch ($jsonLastError) {
            case JSON_ERROR_DEPTH:
                $errorMessage = 'Maximum stack depth exceeded';
                break;
            case JSON_ERROR_STATE_MISMATCH:
                $errorMessage = 'Underflow or the modes mismatch';
                break;
            case JSON_ERROR_CTRL_CHAR:
                $errorMessage = 'Unexpected control character found';
                break;
            case JSON_ERROR_SYNTAX:
                $errorMessage = 'Syntax error, malformed JSON';
                break;
            case JSON_ERROR_UTF8:
                $errorMessage = 'Malformed UTF-8 characters, possibly incorrectly encoded';
                break;
            default:
                $errorMessage = 'Unknown error';
                break;
        }

        Log::error($jsonLastError . ':' . $errorMessage);

        return false;
    }
}
