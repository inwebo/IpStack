<?php

namespace Inwebo\Component\IpStack\Model;

/**
 * Interface LocationInterface
 *
 * UTF-8
 */
interface LocationInterface
{
    /**
     * Returns the unique geoname identifier in accordance with the Geonames Registry.
     *
     * @return string
     */
    public function getGeonameId(): string;

    /**
     * @param string $geonameId
     */
    public function setGeonameId(string $geonameId): void;

    /**
     * Returns the capital city of the country associated with the IP.
     *
     * @return string
     */
    public function getCapital(): string;

    /**
     * @param string $capital
     */
    public function setCapital(string $capital): void;

    /**
     * @return Languages[]
     */
    public function getLanguages(): array;

    /**
     * @param Language $language
     *
     * @return void
     */
    public function addLanguage(Language $language): void;

    /**
     * @param Languages $languages
     */
    public function setLanguages(Languages $languages): void;

    /**
     * Returns an HTTP URL leading to an SVG-flag icon for the country associated with the IP.
     *
     * @return string
     */
    public function getCountryFlag(): string;

    /**
     * @param string $countryFlag
     */
    public function setCountryFlag(string $countryFlag): void;

    /**
     * Returns the emoji icon for the flag of the country associated with the IP.
     *
     * @return string unicode
     */
    public function getCountryFlagEmoji(): string;

    /**
     * @param string $countryFlagEmoji UTF-8
     */
    public function setCountryFlagEmoji(string $countryFlagEmoji): void;

    /**
     * Returns the unicode value of the emoji icon for the flag of the country associated with the IP. (e.g. U+1F1F5 U+1F1F9 for the Portuguese flag)
     *
     * @return string unicode
     */
    public function getCountryFlagEmojiUnicode(): string;

    /**
     * @param string $countryFlagEmojiUnicode UTF-8
     */
    public function setCountryFlagEmojiUnicode(string $countryFlagEmojiUnicode): void;

    /**
     * Returns the calling/dial code of the country associated with the IP. (e.g. 351) for Portugal.
     *
     * Min length 1, max length 3.
     *
     * @return int
     */
    public function getCallingCode(): int;

    /**
     * @param int $callingCode
     */
    public function setCallingCode(int $callingCode): void;

    /**
     * Returns true or false depending on whether or not the county associated with the IP is in the European Union.
     *
     * @return bool
     */
    public function isEu(): bool;

    /**
     * @param bool $isEu
     */
    public function setIsEu(bool $isEu): void;
}