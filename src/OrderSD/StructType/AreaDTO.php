<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\OrderSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AreaDTO StructType
 * @subpackage Structs
 */
class AreaDTO extends AbstractStructBase
{
    /**
     * The areaCode
     * @var string|null
     */
    protected ?string $areaCode = null;
    /**
     * The description
     * @var string|null
     */
    protected ?string $description = null;
    /**
     * Constructor method for AreaDTO
     * @uses AreaDTO::setAreaCode()
     * @uses AreaDTO::setDescription()
     * @param string $areaCode
     * @param string $description
     */
    public function __construct(?string $areaCode = null, ?string $description = null)
    {
        $this
            ->setAreaCode($areaCode)
            ->setDescription($description);
    }
    /**
     * Get areaCode value
     * @return string|null
     */
    public function getAreaCode(): ?string
    {
        return $this->areaCode;
    }
    /**
     * Set areaCode value
     * @param string $areaCode
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\AreaDTO
     */
    public function setAreaCode(?string $areaCode = null): self
    {
        // validation for constraint: string
        if (!is_null($areaCode) && !is_string($areaCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($areaCode, true), gettype($areaCode)), __LINE__);
        }
        $this->areaCode = $areaCode;
        
        return $this;
    }
    /**
     * Get description value
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }
    /**
     * Set description value
     * @param string $description
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\AreaDTO
     */
    public function setDescription(?string $description = null): self
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        $this->description = $description;
        
        return $this;
    }
}
