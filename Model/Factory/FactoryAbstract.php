<?php
namespace Inwebo\Bundle\IpStackBundle\Model;


class FactoryAbstract implements FactoryInterface
{
    /** @var Decorators\IpStackDecoratorInterface */
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