<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CateringDTO StructType
 * @subpackage Structs
 */
class CateringDTO extends AbstractStructBase
{
    /**
     * The cateringCode
     * @var string|null
     */
    protected ?string $cateringCode = null;
    /**
     * The description
     * @var string|null
     */
    protected ?string $description = null;
    /**
     * Constructor method for CateringDTO
     * @uses CateringDTO::setCateringCode()
     * @uses CateringDTO::setDescription()
     * @param string $cateringCode
     * @param string $description
     */
    public function __construct(?string $cateringCode = null, ?string $description = null)
    {
        $this
            ->setCateringCode($cateringCode)
            ->setDescription($description);
    }
    /**
     * Get cateringCode value
     * @return string|null
     */
    public function getCateringCode(): ?string
    {
        return $this->cateringCode;
    }
    /**
     * Set cateringCode value
     * @param string $cateringCode
     * @return \Pggns\MidocoApi\Api\Order\StructType\CateringDTO
     */
    public function setCateringCode(?string $cateringCode = null): self
    {
        // validation for constraint: string
        if (!is_null($cateringCode) && !is_string($cateringCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cateringCode, true), gettype($cateringCode)), __LINE__);
        }
        $this->cateringCode = $cateringCode;
        
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
     * @return \Pggns\MidocoApi\Api\Order\StructType\CateringDTO
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
