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
    /** @var string  */
    const AF = 'Africa';
    /** @var string  */
    const AS = 'Asia';
    /** @var string  */
    const EU = 'Europe';
    /** @var string  */
    const NA = 'North America';
    /** @var string  */
    const OC = 'Oceania';
    /** @var string  */
    const SA = 'South America';
    /** @var string  */
    const AN = 'Antarctica';

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