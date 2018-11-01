<?php

namespace Inwebo\Component\IpStack\Model\Factory;

use Inwebo\Component\IpStack\Model\Decorators\IpStackDecoratorInterface;

class Factory extends FactoryAbstract
{
    public function __construct(IpStackDecoratorInterface $ipStackDecorator)
    {
        $this->decorator = $ipStackDecorator;
    }
}