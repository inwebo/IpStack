<?php
/**
 * Created by PhpStorm.
 * User: inwebo
 * Date: 30/10/18
 * Time: 20:58
 */

namespace Inwebo\Component\IpStack\Model\Factory;

use Inwebo\Component\IpStack\Model\ResponseInterface;

interface FactoryInterface
{
    /**
     * @param string $json
     *
     * @return ResponseInterface
     */
    public function create(string $json);
}