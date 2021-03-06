<?php

namespace Inwebo\Component\IpStack\Model;

class Connection implements ConnectionInterface
{
    /** @var string */
    protected $asn;
    /** @var string */
    protected $isp;

    /**
     * Returns the Autonomous System Number associated with the IP.
     *
     * @see https://www.techopedia.com/definition/26871/autonomous-system-number-asn
     *
     * @return string
     */
    public function getAsn(): string
    {
        return $this->asn;
    }

    /**
     * @param string $asn
     */
    public function setAsn(string $asn): void
    {
        $this->asn = $asn;
    }

    /**
     * Returns the name of the ISP associated with the IP.
     *
     * @return string
     */
    public function getIsp(): string
    {
        return $this->isp;
    }

    /**
     * @param string $isp
     */
    public function setIsp(string $isp): void
    {
        $this->isp = $isp;
    }
}