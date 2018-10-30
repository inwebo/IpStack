<?php
/**
 * Created by PhpStorm.
 * User: inwebo
 * Date: 30/10/18
 * Time: 20:25
 */

namespace Inwebo\Component\IpStack\Model;

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