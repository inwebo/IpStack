<?php

namespace Inwebo\Component\IpStack\Model\Exceptions;

use Throwable;

/**
 * Class InactiveUserException
 */
class InactiveUserException extends BaseException
{
    /** @var strring */
    protected $account;

    /**
     * InactiveUserException constructor.
     *
     * @param string         $message
     * @param int            $code
     * @param Throwable|null $previous
     * @param string         $account
     */
    public function __construct(string $message = "", int $code = 0, Throwable $previous = null, string $account = "Unknown")
    {
        $this->account = $account;
        $message = sprintf("The current user account (%s) is not active. User will be prompted to get in touch with Customer Support.", $this->account);

        parent::__construct($message, 102, $previous);

    }
}