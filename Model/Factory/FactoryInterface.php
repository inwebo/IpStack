<?php
/**
 * Created by PhpStorm.
 * User: inwebo
 * Date: 30/10/18
 * Time: 20:58
 */

namespace Inwebo\Bundle\IpStackBundle\Model;

interface FactoryInterface
{
    /**
     * @param string $json
     *
     * @return ResponseInterface
     */
    public function create(string $json);
}