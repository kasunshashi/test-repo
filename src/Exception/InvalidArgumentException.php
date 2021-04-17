<?php
declare(strict_types=1);

namespace WildBlog\Exception;

use Throwable;

class InvalidArgumentException extends \Exception
{
    public function __construct($message = "Turnover data not found!")
    {
        parent::__construct($message);
    }
}
