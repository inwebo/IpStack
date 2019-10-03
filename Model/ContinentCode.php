<?php

namespace Inwebo\Component\IpStack\Model;


class ContinentCode implements ContinentCodeInterface
{
    /** @var string */

    protected $code;
    /** @var string */
    protected $name;

    /**
     * @inheritdoc
     */
    public function setCode(string $code): void
    {
        $this->code = $code;
    }

    /**
     * @inheritdoc
     */
    public function getCode(): string
    {
        return $this->code;
    }

    /**
     * @inheritdoc
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @inheritdoc
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * ContinentCode constructor.
     *
     * @param string $code
     * @param string $name
     */
    public function __construct(string $code, string $name)
    {
        $this->setCode($code);
        $this->setName($name);
    }
}