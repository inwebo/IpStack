<?php
/**
 * Created by PhpStorm.
 * User: inwebo
 * Date: 30/10/18
 * Time: 20:23
 */

namespace Inwebo\Component\IpStack\Model;

interface CurrencyInterface
{
    /**
     * Returns the 3-letter code of the main currency associated with the IP. Example: USD
     *
     * @see https://www.iban.com/currency-codes
     *
     * @return string
     */
    public function getCode(): string;

    /**
     * @param string $code
     */
    public function setCode(string $code): void;

    /**
     *    Returns the name of the given currency.
     *
     * @return string
     */
    public function getName(): string;

    /**
     * @param string $name
     */
    public function setName(string $name): void;

    /**
     * Returns the plural name of the given currency.
     *
     * @return string
     */
    public function getPlural(): string;

    /**
     * @param string $plural
     */
    public function setPlural(string $plural): void;

    /**
     * Returns the symbol letter of the given currency.
     *
     * @return string
     */
    public function getSymbol(): string;

    /**
     * @param string $symbol
     */
    public function setSymbol(string $symbol): void;

    /**
     * Returns the native symbol letter of the given currency.
     *
     * @return string
     */
    public function getSymbolNative(): string;

    /**
     * @param string $symbolNative
     */
    public function setSymbolNative(string $symbolNative): void;
}