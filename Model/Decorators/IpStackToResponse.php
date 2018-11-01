<?php

namespace Inwebo\Component\IpStack\Model\Decorators;

use Inwebo\Bundle\IpStackBundle\Model\Decorators\IpStackDecoratorInterface;
use Inwebo\Component\IpStack\Model\Response;
use Inwebo\Component\IpStack\Model\ResponseInterface;

class IpStackToResponse implements IpStackDecoratorInterface
{
    /**
     * @param string $json
     *
     * @return ResponseInterface
     */
    public function convert(string $json)
    {
        // Mapping

        return new Response();
    }
}