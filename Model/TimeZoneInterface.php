<?php

namespace Inwebo\Component\IpStack\Model;

/**
 * Interface TimeZoneInterface
 */
interface TimeZoneInterface
{
    /**
     * Returns the ID of the time zone associated with the IP. (e.g. America/Los_Angeles for PST)
     *
     * @return string
     */
    public function getId(): string;

    /**
     * @param string $id
     */
    public function setId(string $id): void;

    /**
     * Returns the current date and time in the location associated with the IP. (e.g. 2018-03-29T22:31:27-07:00)
     *
     * @return string
     */
    public function getCurrentTime(): string;

    /**
     * @param string $currentTime
     */
    public function setCurrentTime(string $currentTime): void;

    /**
     * Returns the GMT offset of the given time zone in seconds. (e.g. -25200 for PST's -7h GMT offset)
     *
     * @return int
     */
    public function getGmtOffset(): int;

    /**
     * @param int $gmtOffset
     */
    public function setGmtOffset(int $gmtOffset): void;

    /**
     * Returns the universal code of the given time zone.
     *
     * @see https://www.timeanddate.com/time/zones/
     *
     * @return string
     */
    public function getCode(): string;

    /**
     * @param string $code
     */
    public function setCode(string $code): void;

    /**
     * Returns true or false depending on whether or not the given time zone is considered daylight saving time.
     *
     * @return bool
     */
    public function isDayLightSaving(): bool;

    /**
     * @param bool $isDayLightSaving
     */
    public function setIsDayLightSaving(bool $isDayLightSaving): void;
}