<?php
/**
 * Created by PhpStorm.
 * User: inwebo
 * Date: 30/10/18
 * Time: 20:22
 */

namespace Inwebo\Component\IpStack\Model;

interface ConnectionInterface
{
    /**
     * Returns the Autonomous System Number associated with the IP.
     *
     * @see https://www.techopedia.com/definition/26871/autonomous-system-number-asn
     *
     * @return string
     */
    public function getAsn(): string;

    /**
     * @param string $asn
     */
    public function setAsn(string $asn): void;

    /**
     * Returns the name of the ISP associated with the IP.
     *
     * @return string
     */
    public function getIsp(): string;

    /**
     * @param string $isp
     */
    public function setIsp(string $isp): void;
}