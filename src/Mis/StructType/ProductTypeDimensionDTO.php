<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ProductTypeDimensionDTO StructType
 * @subpackage Structs
 */
class ProductTypeDimensionDTO extends AbstractStructBase
{
    /**
     * The productType
     * @var string|null
     */
    protected ?string $productType = null;
    /**
     * The productTypeId
     * @var int|null
     */
    protected ?int $productTypeId = null;
    /**
     * Constructor method for ProductTypeDimensionDTO
     * @uses ProductTypeDimensionDTO::setProductType()
     * @uses ProductTypeDimensionDTO::setProductTypeId()
     * @param string $productType
     * @param int $productTypeId
     */
    public function __construct(?string $productType = null, ?int $productTypeId = null)
    {
        $this
            ->setProductType($productType)
            ->setProductTypeId($productTypeId);
    }
    /**
     * Get productType value
     * @return string|null
     */
    public function getProductType(): ?string
    {
        return $this->productType;
    }
    /**
     * Set productType value
     * @param string $productType
     * @return \Pggns\MidocoApi\Mis\StructType\ProductTypeDimensionDTO
     */
    public function setProductType(?string $productType = null): self
    {
        // validation for constraint: string
        if (!is_null($productType) && !is_string($productType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($productType, true), gettype($productType)), __LINE__);
        }
        $this->productType = $productType;
        
        return $this;
    }
    /**
     * Get productTypeId value
     * @return int|null
     */
    public function getProductTypeId(): ?int
    {
        return $this->productTypeId;
    }
    /**
     * Set productTypeId value
     * @param int $productTypeId
     * @return \Pggns\MidocoApi\Mis\StructType\ProductTypeDimensionDTO
     */
    public function setProductTypeId(?int $productTypeId = null): self
    {
        // validation for constraint: int
        if (!is_null($productTypeId) && !(is_int($productTypeId) || ctype_digit($productTypeId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($productTypeId, true), gettype($productTypeId)), __LINE__);
        }
        $this->productTypeId = $productTypeId;
        
        return $this;
    }
}
