<?php
namespace Inwebo\Component\IpStack\Model\Factory;


use Inwebo\Bundle\IpStackBundle\Model\Decorators\IpStackDecoratorInterface;
use Inwebo\Component\IpStack\Model\ResponseInterface;

class FactoryAbstract implements FactoryInterface
{
    /** @var IpStackDecoratorInterface */
    protected $decorator;

    /**
     * @param string $json
     *
     * @return ResponseInterface
     *
     * @throws \Exception
     */
    public function create(string $json)
    {
        try {
            return $this->decorator->convert($json);
        } catch (\Exception $e) {
            throw  $e;
        }
    }
}