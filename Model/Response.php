<?php
/**
 * Created by PhpStorm.
 * User: inwebo
 * Date: 28/10/18
 * Time: 18:49
 */

namespace Inwebo\Component\IpStack\Model;

class Response implements ResponseInterface
{

    const DEFAULT_COUNTRY_CODE = 'FR';

    // region attributs
    /** @var string */
    protected $ip;
    /** @var string */
    protected $hostName;
    /** @var string */
    protected $type;
    /** @var string */
    protected $continentCode;
    /** @var string */
    protected $continentName;
    /** @var string */
    protected $countryCode;
    /** @var string */
    protected $countryName;
    /** @var string */
    protected $regionCode;
    /** @var string */
    protected $regionName;
    /** @var string */
    protected $city;
    /** @var string */
    protected $zip;
    /** @var float */
    protected $latitude;
    /** @var float */
    protected $longitude;
    /** @var LocationInterface */
    protected $location;
    /** @var CurrencyInterface */
    protected $currency;
    /** @var ConnectionInterface */
    protected $connection;
    /** @var SecurityInterface */
    protected $security;
    //endregion

    //region getters-setters
    /**
     * Returns the requested IP address.
     *
     * @return string
     */
    public function getIp(): string
    {
        return $this->ip;
    }

    /**
     * @param $ip
     */
    public function setIp($ip)
    {
        $this->ip = $ip;
    }

    /**
     * Returns the hostname the requested IP resolves to, only returned if Hostname Lookup is enabled.
     *
     * @see https://ipstack.com/documentation
     *
     * @return string
     */
    public function getHostName(): string
    {
        return $this->hostName;
    }

    /**
     * @param string $hostName
     */
    public function setHostName(string $hostName): void
    {
        $this->hostName = $hostName;
    }

    /**
     * Returns the IP address type IPv4 or IPv6.
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    public function setType(string $type) : void
    {
        $this->type = $type;
    }

    /**
     * Returns the 2-letter continent code associated with the IP.
     *
     * @return string
     */
    public function getContinentCode(): string
    {
        return $this->continentCode;
    }

    /**
     * @param string $continentCode
     */
    public function setContinentCode(string $continentCode): void
    {
        $this->continentCode = $continentCode;
    }

    /**
     * Returns the name of the continent associated with the IP.
     *
     * @return string
     */
    public function getContinentName(): string
    {
        return $this->continentName;
    }

    /**
     * @param string $continentName
     */
    public function setContinentName(string $continentName): void
    {
        $this->continentName = $continentName;
    }

    /**
     * Returns the 2-letter country code associated with the IP.
     *
     * @see https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2
     *
     * @return string
     */
    public function getCountryCode(): string
    {
        return (!is_null($this->countryCode)) ? $this->countryCode : self::DEFAULT_COUNTRY_CODE;
    }

    /**
     * @param string $countryCode
     */
    public function setCountryCode(string $countryCode): void
    {
        $this->countryCode = $countryCode;
    }

    /**
     * Returns the name of the country associated with the IP.
     *
     * @return string
     */
    public function getCountryName(): string
    {
        return $this->countryName;
    }

    /**
     * @param string $countryName
     */
    public function setCountryName(string $countryName): void
    {
        $this->countryName = $countryName;
    }

    /**
     * Returns the region code of the region associated with the IP (e.g. CA for California).
     *
     * @return string
     */
    public function getRegionCode(): string
    {
        return $this->regionCode;
    }

    /**
     * @param string $regionCode
     */
    public function setRegionCode(string $regionCode): void
    {
        $this->regionCode = $regionCode;
    }

    /**
     * Returns the name of the region associated with the IP.
     *
     * @return string
     */
    public function getRegionName(): string
    {
        return $this->regionName;
    }

    /**
     * @param string $regionName
     */
    public function setRegionName(string $regionName): void
    {
        $this->regionName = $regionName;
    }

    /**
     * Returns the name of the city associated with the IP.
     *
     * @return string
     */
    public function getCity(): string
    {
        return $this->city;
    }

    /**
     * @param string $city
     */
    public function setCity(string $city): void
    {
        $this->city = $city;
    }

    /**
     * Returns the ZIP code associated with the IP.
     *
     * @return string
     */
    public function getZip(): string
    {
        return $this->zip;
    }

    /**
     * @param string $zip
     */
    public function setZip(string $zip): void
    {
        $this->zip = $zip;
    }

    /**
     * 	Returns the latitude value associated with the IP.
     *
     * @return float
     */
    public function getLatitude(): float
    {
        return $this->latitude;
    }

    /**
     * @param float $latitude
     */
    public function setLatitude(float $latitude): void
    {
        $this->latitude = $latitude;
    }

    /**
     * @return float
     */
    public function getLongitude(): float
    {
        return $this->longitude;
    }

    /**
     * @param float $longitude
     */
    public function setLongitude(float $longitude): void
    {
        $this->longitude = $longitude;
    }

    /**
     * @return LocationInterface
     */
    public function getLocation(): LocationInterface
    {
        return $this->location;
    }

    /**
     * @param LocationInterface $location
     */
    public function setLocation(LocationInterface $location): void
    {
        $this->location = $location;
    }

    /**
     * @return CurrencyInterface
     */
    public function getCurrency(): CurrencyInterface
    {
        return $this->currency;
    }

    /**
     * @param CurrencyInterface $currency
     */
    public function setCurrency(CurrencyInterface $currency): void
    {
        $this->currency = $currency;
    }

    /**
     * @return ConnectionInterface
     */
    public function getConnection(): ConnectionInterface
    {
        return $this->connection;
    }

    /**
     * @param ConnectionInterface $connection
     */
    public function setConnection(ConnectionInterface $connection): void
    {
        $this->connection = $connection;
    }

    /**
     * @return SecurityInterface
     */
    public function getSecurity(): SecurityInterface
    {
        return $this->security;
    }

    /**
     * @param SecurityInterface $security
     */
    public function setSecurity(SecurityInterface $security): void
    {
        $this->security = $security;
    }
    // endregion
}