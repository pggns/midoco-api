<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OrigSupplierDimensionDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class OrigSupplierDimensionDTO extends AbstractStructBase
{
    /**
     * The midocoOrigSupplierId
     * @var string|null
     */
    protected ?string $midocoOrigSupplierId = null;
    /**
     * The originalSupplierId
     * @var int|null
     */
    protected ?int $originalSupplierId = null;
    /**
     * Constructor method for OrigSupplierDimensionDTO
     * @uses OrigSupplierDimensionDTO::setMidocoOrigSupplierId()
     * @uses OrigSupplierDimensionDTO::setOriginalSupplierId()
     * @param string $midocoOrigSupplierId
     * @param int $originalSupplierId
     */
    public function __construct(?string $midocoOrigSupplierId = null, ?int $originalSupplierId = null)
    {
        $this
            ->setMidocoOrigSupplierId($midocoOrigSupplierId)
            ->setOriginalSupplierId($originalSupplierId);
    }
    /**
     * Get midocoOrigSupplierId value
     * @return string|null
     */
    public function getMidocoOrigSupplierId(): ?string
    {
        return $this->midocoOrigSupplierId;
    }
    /**
     * Set midocoOrigSupplierId value
     * @param string $midocoOrigSupplierId
     * @return \Pggns\MidocoApi\Mis\StructType\OrigSupplierDimensionDTO
     */
    public function setMidocoOrigSupplierId(?string $midocoOrigSupplierId = null): self
    {
        // validation for constraint: string
        if (!is_null($midocoOrigSupplierId) && !is_string($midocoOrigSupplierId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($midocoOrigSupplierId, true), gettype($midocoOrigSupplierId)), __LINE__);
        }
        $this->midocoOrigSupplierId = $midocoOrigSupplierId;
        
        return $this;
    }
    /**
     * Get originalSupplierId value
     * @return int|null
     */
    public function getOriginalSupplierId(): ?int
    {
        return $this->originalSupplierId;
    }
    /**
     * Set originalSupplierId value
     * @param int $originalSupplierId
     * @return \Pggns\MidocoApi\Mis\StructType\OrigSupplierDimensionDTO
     */
    public function setOriginalSupplierId(?int $originalSupplierId = null): self
    {
        // validation for constraint: int
        if (!is_null($originalSupplierId) && !(is_int($originalSupplierId) || ctype_digit($originalSupplierId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($originalSupplierId, true), gettype($originalSupplierId)), __LINE__);
        }
        $this->originalSupplierId = $originalSupplierId;
        
        return $this;
    }
}
