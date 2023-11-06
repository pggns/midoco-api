<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoSalesListBySupplierGroupCriteriaType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoSalesListBySupplierGroupCriteriaType extends MidocoSalesListCriteriaType
{
    /**
     * The supplierGroup
     * @var int|null
     */
    protected ?int $supplierGroup = null;
    /**
     * The supplierGroupValue
     * @var string|null
     */
    protected ?string $supplierGroupValue = null;
    /**
     * Constructor method for MidocoSalesListBySupplierGroupCriteriaType
     * @uses MidocoSalesListBySupplierGroupCriteriaType::setSupplierGroup()
     * @uses MidocoSalesListBySupplierGroupCriteriaType::setSupplierGroupValue()
     * @param int $supplierGroup
     * @param string $supplierGroupValue
     */
    public function __construct(?int $supplierGroup = null, ?string $supplierGroupValue = null)
    {
        $this
            ->setSupplierGroup($supplierGroup)
            ->setSupplierGroupValue($supplierGroupValue);
    }
    /**
     * Get supplierGroup value
     * @return int|null
     */
    public function getSupplierGroup(): ?int
    {
        return $this->supplierGroup;
    }
    /**
     * Set supplierGroup value
     * @param int $supplierGroup
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoSalesListBySupplierGroupCriteriaType
     */
    public function setSupplierGroup(?int $supplierGroup = null): self
    {
        // validation for constraint: int
        if (!is_null($supplierGroup) && !(is_int($supplierGroup) || ctype_digit($supplierGroup))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($supplierGroup, true), gettype($supplierGroup)), __LINE__);
        }
        $this->supplierGroup = $supplierGroup;
        
        return $this;
    }
    /**
     * Get supplierGroupValue value
     * @return string|null
     */
    public function getSupplierGroupValue(): ?string
    {
        return $this->supplierGroupValue;
    }
    /**
     * Set supplierGroupValue value
     * @param string $supplierGroupValue
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoSalesListBySupplierGroupCriteriaType
     */
    public function setSupplierGroupValue(?string $supplierGroupValue = null): self
    {
        // validation for constraint: string
        if (!is_null($supplierGroupValue) && !is_string($supplierGroupValue)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($supplierGroupValue, true), gettype($supplierGroupValue)), __LINE__);
        }
        $this->supplierGroupValue = $supplierGroupValue;
        
        return $this;
    }
}
