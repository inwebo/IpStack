<?php
/**
 * Created by PhpStorm.
 * User: inwebo
 * Date: 04/12/18
 * Time: 22:41
 */

namespace Inwebo\Component\IpStack\Model;


interface ContinentCodeInterface
{
    /**
     * @param string $code
     */
    public function setCode(string $code): void;

    /**
     * Returns the 2-letter continent code associated with the IP
     *
     * @return string
     */
    public function getCode(): string;

    /**
     * Min length = 4, max length = 12
     *
     * @param string $name
     */
    public function setName(string $name): void;

    /**
     * @return string
     */
    public function getName(): string;
}