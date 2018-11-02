<?php

namespace Inwebo\Component\IpStack\Model;

/**
 * Interface SerializableInterface
 */
interface SerializableInterface
{
    /**
     * @return array|null
     */
    public static function __sleep();
    public static function __wakeup();
}