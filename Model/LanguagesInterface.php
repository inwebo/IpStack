<?php

namespace Inwebo\Component\IpStack\Model;

/**
 * Interface LanguagesInterface
 */
interface LanguagesInterface
{
    /**
     * @return Language[]
     */
    public function getLanguages(): array;

    /**
     * @param Language[] $languages
     */
    public function setLanguages(array $languages): void;
}