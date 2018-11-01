<?php

namespace Inwebo\Component\IpStack\Model\Decorators;

use Inwebo\Component\IpStack\Model\ResponseInterface;

interface IpStackDecoratorInterface
{
    /**
     * @param string $json
     *
     * @return ResponseInterface
     */
    public function convert(string $json);
}