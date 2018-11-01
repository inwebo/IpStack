<?php
/**
 * Created by PhpStorm.
 * User: inwebo
 * Date: 30/10/18
 * Time: 20:26
 */

namespace Inwebo\Component\IpStack\Model;

interface ResponseInterface
{
    /**
     * Returns the requested IP address.
     *
     * @return string
     */
    public function getIp(): string;

    /**
     * @param $ip
     */
    public function setIp($ip);

    /**
     * Returns the hostname the requested IP resolves to, only returned if Hostname Lookup is enabled.
     *
     * @see https://ipstack.com/documentation
     *
     * @return string
     */
    public function getHostName(): string;

    /**
     * @param string $hostName
     */
    public function setHostName(string $hostName): void;

    /**
     * Returns the IP address type IPv4 or IPv6.
     *
     * @return string
     */
    public function getType(): string;

    /**
     * @param string $type
     */
    public function setType(string $type): void;

    /**
     * Returns the 2-letter continent code associated with the IP.
     *
     * @return string
     */
    public function getContinentCode(): string;

    /**
     * @param string $continentCode
     */
    public function setContinentCode(string $continentCode): void;

    /**
     * Returns the name of the continent associated with the IP.
     *
     * @return string
     */
    public function getContinentName(): string;

    /**
     * @param string $continentName
     */
    public function setContinentName(string $continentName): void;

    /**
     * Returns the 2-letter country code associated with the IP.
     *
     * @see https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2
     *
     * @return string
     */
    public function getCountryCode(): string;

    /**
     * @param string $countryCode
     */
    public function setCountryCode(string $countryCode): void;

    /**
     * Returns the name of the country associated with the IP.
     *
     * @return string
     */
    public function getCountryName(): string;

    /**
     * @param string $countryName
     */
    public function setCountryName(string $countryName): void;

    /**
     * Returns the region code of the region associated with the IP (e.g. CA for California).
     *
     * @return string
     */
    public function getRegionCode(): string;

    /**
     * @param string $regionCode
     */
    public function setRegionCode(string $regionCode): void;

    /**
     * Returns the name of the region associated with the IP.
     *
     * @return string
     */
    public function getRegionName(): string;

    /**
     * @param string $regionName
     */
    public function setRegionName(string $regionName): void;

    /**
     * Returns the name of the city associated with the IP.
     *
     * @return string
     */
    public function getCity(): string;

    /**
     * @param string $city
     */
    public function setCity(string $city): void;

    /**
     * Returns the ZIP code associated with the IP.
     *
     * @return string
     */
    public function getZip(): string;

    /**
     * @param string $zip
     */
    public function setZip(string $zip): void;

    /**
     *    Returns the latitude value associated with the IP.
     *
     * @return float
     */
    public function getLatitude(): float;

    /**
     * @param float $latitude
     */
    public function setLatitude(float $latitude): void;

    /**
     * @return float
     */
    public function getLongitude(): float;

    /**
     * @param float $longitude
     */
    public function setLongitude(float $longitude): void;

    /**
     * @param LocationInterface $location
     */
    public function setLocation(LocationInterface $location): void;
}