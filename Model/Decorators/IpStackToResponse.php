<?php

namespace Inwebo\Bundle\IpStackBundle\Model\Decorators;

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

        return new Response($json);
    }
}