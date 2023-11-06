<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for KeyValue StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class KeyValue extends AbstractStructBase
{
    /**
     * The value
     * @var string|null
     */
    protected ?string $value = null;
    /**
     * The key
     * @var string|null
     */
    protected ?string $key = null;
    /**
     * Constructor method for KeyValue
     * @uses KeyValue::setValue()
     * @uses KeyValue::setKey()
     * @param string $value
     * @param string $key
     */
    public function __construct(?string $value = null, ?string $key = null)
    {
        $this
            ->setValue($value)
            ->setKey($key);
    }
    /**
     * Get value value
     * @return string|null
     */
    public function getValue(): ?string
    {
        return $this->value;
    }
    /**
     * Set value value
     * @param string $value
     * @return \Pggns\MidocoApi\Mis\StructType\KeyValue
     */
    public function setValue(?string $value = null): self
    {
        // validation for constraint: string
        if (!is_null($value) && !is_string($value)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($value, true), gettype($value)), __LINE__);
        }
        $this->value = $value;
        
        return $this;
    }
    /**
     * Get key value
     * @return string|null
     */
    public function getKey(): ?string
    {
        return $this->key;
    }
    /**
     * Set key value
     * @param string $key
     * @return \Pggns\MidocoApi\Mis\StructType\KeyValue
     */
    public function setKey(?string $key = null): self
    {
        // validation for constraint: string
        if (!is_null($key) && !is_string($key)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($key, true), gettype($key)), __LINE__);
        }
        $this->key = $key;
        
        return $this;
    }
}
