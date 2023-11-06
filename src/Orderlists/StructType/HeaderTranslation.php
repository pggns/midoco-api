<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HeaderTranslation StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class HeaderTranslation extends AbstractStructBase
{
    /**
     * The key
     * @var string|null
     */
    protected ?string $key = null;
    /**
     * The translation
     * @var string|null
     */
    protected ?string $translation = null;
    /**
     * Constructor method for HeaderTranslation
     * @uses HeaderTranslation::setKey()
     * @uses HeaderTranslation::setTranslation()
     * @param string $key
     * @param string $translation
     */
    public function __construct(?string $key = null, ?string $translation = null)
    {
        $this
            ->setKey($key)
            ->setTranslation($translation);
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
     * @return \Pggns\MidocoApi\Orderlists\StructType\HeaderTranslation
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
    /**
     * Get translation value
     * @return string|null
     */
    public function getTranslation(): ?string
    {
        return $this->translation;
    }
    /**
     * Set translation value
     * @param string $translation
     * @return \Pggns\MidocoApi\Orderlists\StructType\HeaderTranslation
     */
    public function setTranslation(?string $translation = null): self
    {
        // validation for constraint: string
        if (!is_null($translation) && !is_string($translation)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($translation, true), gettype($translation)), __LINE__);
        }
        $this->translation = $translation;
        
        return $this;
    }
}
