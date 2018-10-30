<?php
/**
 * Created by PhpStorm.
 * User: inwebo
 * Date: 30/10/18
 * Time: 20:26
 */

namespace Inwebo\Component\IpStack\Model;

interface SecurityInterface
{
    /**
     * Returns true or false depending on whether or not the given IP is associated with a proxy.
     *
     * @return bool
     */
    public function isProxy(): bool;

    /**
     * @param bool $isProxy
     */
    public function setIsProxy(bool $isProxy): void;

    /**
     * Returns the type of proxy the IP is associated with.
     *
     * @return int
     */
    public function getProxyType(): int;

    /**
     * @param int $proxyType
     */
    public function setProxyType(int $proxyType): void;

    /**
     * Returns true or false depending on whether or not the given IP is associated with a crawler.
     *
     * @return bool
     */
    public function isCrawler(): bool;

    /**
     * @param bool $isCrawler
     */
    public function setIsCrawler(bool $isCrawler): void;

    /**
     * Returns the name of the crawler the IP is associated with.
     *
     * @return string
     */
    public function getCrawlerName(): string;

    /**
     * @param string $crawlerName
     */
    public function setCrawlerName(string $crawlerName): void;

    /**
     * Returns the type of crawler the IP is associated with.
     *
     * @return string
     */
    public function getCrawlerType(): string;

    /**
     * @param string $crawlerType
     */
    public function setCrawlerType(string $crawlerType): void;

    /**
     * Returns true or false depending on whether or not the given IP is associated with the anonymous Tor system.
     *
     * @return bool
     */
    public function isTor(): bool;

    /**
     * @param bool $isTor
     */
    public function setIsTor(bool $isTor): void;

    /**
     * Returns the type of threat level the IP is associated with.
     *
     * @return string
     */
    public function getThreatLevel(): string;

    /**
     * @param string $threatLevel
     */
    public function setThreatLevel(string $threatLevel): void;
}