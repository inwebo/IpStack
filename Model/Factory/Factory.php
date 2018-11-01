<?php

namespace Inwebo\Component\IpStack\Model\Factory;

use Inwebo\Bundle\IpStackBundle\Model\Decorators\IpStackDecoratorInterface;

class Factory extends FactoryAbstract
{
    public function __construct(IpStackDecoratorInterface $ipStackDecorator)
    {
        $this->decorator = $ipStackDecorator;
    }
}