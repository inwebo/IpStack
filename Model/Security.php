<?php

namespace Inwebo\Component\IpStack\Model;

/**
 * Class Security
 */
class Security implements SecurityInterface
{
    /** @var bool */
    protected $isProxy;
    /** @var int|null */
    protected $proxyType;
    /** @var bool */
    protected $isCrawler;
    /** @var string|null */
    protected $crawlerName;
    /** @var string|null */
    protected $crawlerType;
    /** @var bool */
    protected $isTor;
    /** @var string */
    protected $threatLevel;
    /** @var string|null */
    protected $threatTypes;

    /**
     * Returns true or false depending on whether or not the given IP is associated with a proxy.
     *
     * @return bool
     */
    public function isProxy(): bool
    {
        return $this->isProxy;
    }

    /**
     * @param bool $isProxy
     */
    public function setIsProxy(bool $isProxy): void
    {
        $this->isProxy = $isProxy;
    }

    /**
     * Returns the type of proxy the IP is associated with.
     *
     * @return int|string
     */
    public function getProxyType(): ?int
    {
        return $this->proxyType;
    }

    /**
     * @param int $proxyType
     */
    public function setProxyType(int $proxyType): void
    {
        $this->proxyType = $proxyType;
    }

    /**
     * Returns true or false depending on whether or not the given IP is associated with a crawler.
     *
     * @return bool
     */
    public function isCrawler(): bool
    {
        return $this->isCrawler;
    }

    /**
     * @param bool $isCrawler
     */
    public function setIsCrawler(bool $isCrawler): void
    {
        $this->isCrawler = $isCrawler;
    }

    /**
     * Returns the name of the crawler the IP is associated with.
     *
     * @return string|null
     */
    public function getCrawlerName(): ?string
    {
        return $this->crawlerName;
    }

    /**
     * @param string $crawlerName
     */
    public function setCrawlerName(string $crawlerName): void
    {
        $this->crawlerName = $crawlerName;
    }

    /**
     * Returns the type of crawler the IP is associated with.
     *
     * @return string|null
     */
    public function getCrawlerType(): ?string
    {
        return $this->crawlerType;
    }

    /**
     * @param string $crawlerType
     */
    public function setCrawlerType(string $crawlerType): void
    {
        $this->crawlerType = $crawlerType;
    }

    /**
     * Returns true or false depending on whether or not the given IP is associated with the anonymous Tor system.
     *
     * @return bool
     */
    public function isTor(): bool
    {
        return $this->isTor;
    }

    /**
     * @param bool $isTor
     */
    public function setIsTor(bool $isTor): void
    {
        $this->isTor = $isTor;
    }

    /**
     * Returns the type of threat level the IP is associated with.
     *
     * @return string
     */
    public function getThreatLevel(): string
    {
        return $this->threatLevel;
    }

    /**
     * @param string $threatLevel
     */
    public function setThreatLevel(string $threatLevel): void
    {
        $this->threatLevel = $threatLevel;
    }

    /**
     * @return null|string
     */
    public function getThreatTypes(): ?string
    {
        return $this->threatTypes;
    }

    /**
     * @param null|string $threatTypes
     */
    public function setThreatTypes(?string $threatTypes): void
    {
        $this->threatTypes = $threatTypes;
    }
}