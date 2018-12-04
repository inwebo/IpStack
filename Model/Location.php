<?php

namespace Inwebo\Component\IpStack\Model;

/**
 * Class Location
 *
 * UTF-8
 */
class Location implements LocationInterface
{
    /** @var string */
    protected $geonameId;
    /** @var string */
    protected $capital;
    /** @var LanguagesInterface[] */
    protected $languages;
    /** @var string */
    protected $countryFlag;
    /** @var string */
    protected $countryFlagEmoji;
    /** @var string */
    protected $countryFlagEmojiUnicode;
    /** @var int */
    protected $callingCode;
    /** @var bool */
    protected $isEu;

    /**
     * @inheritdoc
     */
    public function getGeonameId(): string
    {
        return $this->geonameId;
    }

    /**
     * @inheritdoc
     */
    public function setGeonameId(string $geonameId): void
    {
        $this->geonameId = $geonameId;
    }

    /**
     * @inheritdoc
     */
    public function getCapital(): string
    {
        return $this->capital;
    }

    /**
     * @inheritdoc
     */
    public function setCapital(string $capital): void
    {
        $this->capital = $capital;
    }

    /**
     * @inheritdoc
     */
    public function getLanguages(): array
    {
        return $this->languages;
    }

    /**
     * @inheritdoc
     */
    public function addLanguage(Language $language): void
    {
        $this->languages[] = $language;
    }

    /**
     * @inheritdoc
     */
    public function setLanguages(Languages $languages): void
    {
        $this->languages = $languages;
    }

    /**
     * @inheritdoc
     */
    public function getCountryFlag(): string
    {
        return $this->countryFlag;
    }

    /**
     * @inheritdoc
     */
    public function setCountryFlag(string $countryFlag): void
    {
        $this->countryFlag = $countryFlag;
    }

    /**
     * @inheritdoc
     */
    public function getCountryFlagEmoji(): string
    {
        return $this->countryFlagEmoji;
    }

    /**
     * @inheritdoc
     */
    public function setCountryFlagEmoji(string $countryFlagEmoji): void
    {
        $this->countryFlagEmoji = $countryFlagEmoji;
    }

    /**
     * @inheritdoc
     */
    public function getCountryFlagEmojiUnicode(): string
    {
        return $this->countryFlagEmojiUnicode;
    }

    /**
     * @inheritdoc
     */
    public function setCountryFlagEmojiUnicode(string $countryFlagEmojiUnicode): void
    {
        $this->countryFlagEmojiUnicode = $countryFlagEmojiUnicode;
    }

    /**
     * @inheritdoc
     */
    public function getCallingCode(): int
    {
        return $this->callingCode;
    }

    /**
     * @inheritdoc
     */
    public function setCallingCode(int $callingCode): void
    {
        $this->callingCode = $callingCode;
    }

    /**
     * @inheritdoc
     */
    public function isEu(): bool
    {
        return $this->isEu;
    }

    /**
     * @inheritdoc
     */
    public function setIsEu(bool $isEu): void
    {
        $this->isEu = $isEu;
    }

    /**
     * Location constructor.
     */
    public function __construct()
    {
    }
}