<?php

namespace Inwebo\Component\IpStack\Model\Factory;

class Factory extends FactoryAbstract
{
    public function __construct(IpStackDecoratorInterface $ipStackDecorator)
    {
        $this->decorator = $ipStackDecorator;
    }
}