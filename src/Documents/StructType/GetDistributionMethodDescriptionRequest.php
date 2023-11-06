<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetDistributionMethodDescriptionRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetDistributionMethodDescriptionRequest extends AbstractStructBase
{
    /**
     * The extSystem
     * @var string|null
     */
    protected ?string $extSystem = null;
    /**
     * The distributionCode
     * @var string|null
     */
    protected ?string $distributionCode = null;
    /**
     * Constructor method for GetDistributionMethodDescriptionRequest
     * @uses GetDistributionMethodDescriptionRequest::setExtSystem()
     * @uses GetDistributionMethodDescriptionRequest::setDistributionCode()
     * @param string $extSystem
     * @param string $distributionCode
     */
    public function __construct(?string $extSystem = null, ?string $distributionCode = null)
    {
        $this
            ->setExtSystem($extSystem)
            ->setDistributionCode($distributionCode);
    }
    /**
     * Get extSystem value
     * @return string|null
     */
    public function getExtSystem(): ?string
    {
        return $this->extSystem;
    }
    /**
     * Set extSystem value
     * @param string $extSystem
     * @return \Pggns\MidocoApi\Documents\StructType\GetDistributionMethodDescriptionRequest
     */
    public function setExtSystem(?string $extSystem = null): self
    {
        // validation for constraint: string
        if (!is_null($extSystem) && !is_string($extSystem)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($extSystem, true), gettype($extSystem)), __LINE__);
        }
        $this->extSystem = $extSystem;
        
        return $this;
    }
    /**
     * Get distributionCode value
     * @return string|null
     */
    public function getDistributionCode(): ?string
    {
        return $this->distributionCode;
    }
    /**
     * Set distributionCode value
     * @param string $distributionCode
     * @return \Pggns\MidocoApi\Documents\StructType\GetDistributionMethodDescriptionRequest
     */
    public function setDistributionCode(?string $distributionCode = null): self
    {
        // validation for constraint: string
        if (!is_null($distributionCode) && !is_string($distributionCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($distributionCode, true), gettype($distributionCode)), __LINE__);
        }
        $this->distributionCode = $distributionCode;
        
        return $this;
    }
}
