<?php

namespace Inwebo\Bundle\IpStackBundle\Model\Decorators;

interface IpStackDecoratorInterface
{
    /**
     * @param string $json
     *
     * @return ResponseInterface
     */
    public function convert(string $json);
}