<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\CrmSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AdapterDTO StructType
 * @subpackage Structs
 */
class AdapterDTO extends AbstractStructBase
{
    /**
     * The adapterId
     * @var string|null
     */
    protected ?string $adapterId = null;
    /**
     * The adapterType
     * @var string|null
     */
    protected ?string $adapterType = null;
    /**
     * The classname
     * @var string|null
     */
    protected ?string $classname = null;
    /**
     * The jndiUrl
     * @var string|null
     */
    protected ?string $jndiUrl = null;
    /**
     * Constructor method for AdapterDTO
     * @uses AdapterDTO::setAdapterId()
     * @uses AdapterDTO::setAdapterType()
     * @uses AdapterDTO::setClassname()
     * @uses AdapterDTO::setJndiUrl()
     * @param string $adapterId
     * @param string $adapterType
     * @param string $classname
     * @param string $jndiUrl
     */
    public function __construct(?string $adapterId = null, ?string $adapterType = null, ?string $classname = null, ?string $jndiUrl = null)
    {
        $this
            ->setAdapterId($adapterId)
            ->setAdapterType($adapterType)
            ->setClassname($classname)
            ->setJndiUrl($jndiUrl);
    }
    /**
     * Get adapterId value
     * @return string|null
     */
    public function getAdapterId(): ?string
    {
        return $this->adapterId;
    }
    /**
     * Set adapterId value
     * @param string $adapterId
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\AdapterDTO
     */
    public function setAdapterId(?string $adapterId = null): self
    {
        // validation for constraint: string
        if (!is_null($adapterId) && !is_string($adapterId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($adapterId, true), gettype($adapterId)), __LINE__);
        }
        $this->adapterId = $adapterId;
        
        return $this;
    }
    /**
     * Get adapterType value
     * @return string|null
     */
    public function getAdapterType(): ?string
    {
        return $this->adapterType;
    }
    /**
     * Set adapterType value
     * @param string $adapterType
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\AdapterDTO
     */
    public function setAdapterType(?string $adapterType = null): self
    {
        // validation for constraint: string
        if (!is_null($adapterType) && !is_string($adapterType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($adapterType, true), gettype($adapterType)), __LINE__);
        }
        $this->adapterType = $adapterType;
        
        return $this;
    }
    /**
     * Get classname value
     * @return string|null
     */
    public function getClassname(): ?string
    {
        return $this->classname;
    }
    /**
     * Set classname value
     * @param string $classname
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\AdapterDTO
     */
    public function setClassname(?string $classname = null): self
    {
        // validation for constraint: string
        if (!is_null($classname) && !is_string($classname)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($classname, true), gettype($classname)), __LINE__);
        }
        $this->classname = $classname;
        
        return $this;
    }
    /**
     * Get jndiUrl value
     * @return string|null
     */
    public function getJndiUrl(): ?string
    {
        return $this->jndiUrl;
    }
    /**
     * Set jndiUrl value
     * @param string $jndiUrl
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\AdapterDTO
     */
    public function setJndiUrl(?string $jndiUrl = null): self
    {
        // validation for constraint: string
        if (!is_null($jndiUrl) && !is_string($jndiUrl)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($jndiUrl, true), gettype($jndiUrl)), __LINE__);
        }
        $this->jndiUrl = $jndiUrl;
        
        return $this;
    }
}
