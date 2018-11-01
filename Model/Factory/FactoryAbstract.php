<?php

namespace Inwebo\Component\IpStack\Model\Factory;

use Inwebo\Component\IpStack\Model\Decorators\IpStackDecoratorInterface;
use Inwebo\Component\IpStack\Model\ResponseInterface;

/**
 * Class FactoryAbstract
 */
class FactoryAbstract implements FactoryInterface
{
    /** @var IpStackDecoratorInterface */
    protected $decorator;

    /**
     * @inheritdoc
     */
    public function __construct(IpStackDecoratorInterface $ipStackDecorator)
    {
        $this->decorator = $ipStackDecorator;
    }

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
            throw $e;
        }
    }
}