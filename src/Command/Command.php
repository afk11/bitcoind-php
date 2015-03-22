<?php
/**
 * @author Joshua Estes
 * @copyright 2012-2015 Joshua Estes
 * @license https://github.com/nbobtc/bitcoind-php/blob/2.x/LICENSE MIT
 */

namespace Nbobtc\Command;

/**
 * @since 2.0.0
 */
class Command implements CommandInterface
{
    /**
     * @var string
     */
    protected $method;

    /**
     * @var array
     */
    protected $parameters;

    /**
     * @var string
     */
    protected $id;

    /**
     * @since 2.0.0
     * @param string $method
     * @param array  $parameters
     * @param string $id
     */
    public function __construct($method = null, array $parameters = array(), $id = null)
    {
        $this->method     = $method;
        $this->parameters = $parameters;
        $this->id         = $id;
    }

    /**
     * @since 2.0.0
     * {@inheritdoc}
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * @since 2.0.0
     * {@inheritdoc}
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * @since 2.0.0
     * {@inheritdoc}
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @since 2.0.0
     * {@inheritdoc}
     */
    public function withMethod($method)
    {
        $this->method = $method;

        return $this;
    }

    /**
     * @since 2.0.0
     * {@inheritdoc}
     */
    public function withParameters($parameters)
    {
        if (is_array($parameters)) {
            $this->parameters = $parameters;
        } else {
            $this->parameters = array($parameters);
        }

        return $this;
    }

    /**
     * @since 2.0.0
     * {@inheritdoc}
     */
    public function withId($id)
    {
        $this->id = $id;

        return $this;
    }
}
