<?php
/**
 * Created by PhpStorm.
 * User: inwebo
 * Date: 28/10/18
 * Time: 19:06
 */

namespace Inwebo\Component\IpStack\Model;


class Languages implements LanguagesInterface
{
    /** @var Language[] */
    protected $languages;

    /**
     * @return Language[]
     */
    public function getLanguages(): array
    {
        return $this->languages;
    }

    /**
     * @param Language[] $languages
     */
    public function setLanguages(array $languages): void
    {
        $this->languages = $languages;
    }

    public function addLanguage(LanguageInterface $language)
    {
        $this->languages[] = $language;
    }

    /**
     * Languages constructor.
     */
    public function __construct()
    {
        $this->languages = [];
    }
}