<?php

namespace Mapado\RestClientSdk\Tests\Model;

use Mapado\RestClientSdk\Mapping\Annotations as Rest;

/**
 * Class Product
 * @author Julien Deniau <julien.deniau@mapado.com>
 *
 * @Rest\Entity(key="product", client="Mapado\Foo\Bar\Client")
 */
class Product
{
    /**
     * id
     *
     * @var int
     * @access private
     *
     * @Rest\Id
     * @Rest\Attribute(name="id", type="integer")
     */
    private $id;

    /**
     * value
     *
     * @var string
     * @access private
     *
     * @Rest\Attribute(name="value", type="string")
     */
    private $value;

    /**
     * currency
     *
     * @var string
     * @access private
     *
     * @Rest\Attribute(name="currency", type="string")
     */
    private $currency;

    /**
     * Getter for id
     *
     * return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Setter for id
     *
     * @param string $id
     * @return Product
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * Getter for value
     *
     * return float
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Setter for value
     *
     * @param float $value
     * @return Product
     */
    public function setValue($value)
    {
        $this->value = $value;
        return $this;
    }

    /**
     * Getter for currency
     *
     * return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * Setter for currency
     *
     * @param string $currency
     * @return Product
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;
        return $this;
    }
}
