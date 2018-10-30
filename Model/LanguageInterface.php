<?php
/**
 * Created by PhpStorm.
 * User: inwebo
 * Date: 30/10/18
 * Time: 20:24
 */

namespace Inwebo\Component\IpStack\Model;

interface LanguageInterface
{
    /**
     * Returns the 2-letter language code for the given language.
     *
     * @see https://en.wikipedia.org/wiki/List_of_ISO_639-1_codes
     *
     * @return string
     */
    public function getCode(): string;

    /**
     * @param string $code
     */
    public function setCode(string $code): void;

    /**
     * Returns the name (in the API request's main language) of the given language. (e.g. Portuguese)
     *
     * @return string
     */
    public function getName(): string;

    /**
     * @param string $name
     */
    public function setName(string $name): void;

    /**
     *    Returns the native name of the given language. (e.g. Português)
     *
     * @return string
     */
    public function getNative(): string;

    /**
     * @param string $native
     */
    public function setNative(string $native): void;
}