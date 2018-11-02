<?php

namespace Inwebo\Component\IpStack\Model\Exceptions;

use Throwable;

/**
 * Class NoFoundException
 */
class NotFoundException extends BaseException
{
    /**
     * @inheritdoc
     */
    public function __construct(string $message = "", int $code = 0, Throwable $previous = null)
    {
        parent::__construct('The requested resource does not exist.', 404, $previous);
    }
}