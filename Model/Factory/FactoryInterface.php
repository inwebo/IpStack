<?php

namespace Inwebo\Component\IpStack\Model\Factory;

use Inwebo\Component\IpStack\Model\ResponseInterface;

/**
 * Interface FactoryInterface
 */
interface FactoryInterface
{
    /**
     * @param string $json
     *
     * @return ResponseInterface
     */
    public function create(string $json);
}