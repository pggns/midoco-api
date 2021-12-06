<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoSalesListBySupplierCriteriaType StructType
 * @subpackage Structs
 */
class MidocoSalesListBySupplierCriteriaType extends MidocoSalesListCriteriaType
{
    /**
     * The supplier
     * @var string|null
     */
    protected ?string $supplier = null;
    /**
     * The allSupplier
     * @var bool|null
     */
    protected ?bool $allSupplier = null;
    /**
     * Constructor method for MidocoSalesListBySupplierCriteriaType
     * @uses MidocoSalesListBySupplierCriteriaType::setSupplier()
     * @uses MidocoSalesListBySupplierCriteriaType::setAllSupplier()
     * @param string $supplier
     * @param bool $allSupplier
     */
    public function __construct(?string $supplier = null, ?bool $allSupplier = null)
    {
        $this
            ->setSupplier($supplier)
            ->setAllSupplier($allSupplier);
    }
    /**
     * Get supplier value
     * @return string|null
     */
    public function getSupplier(): ?string
    {
        return $this->supplier;
    }
    /**
     * Set supplier value
     * @param string $supplier
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoSalesListBySupplierCriteriaType
     */
    public function setSupplier(?string $supplier = null): self
    {
        // validation for constraint: string
        if (!is_null($supplier) && !is_string($supplier)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($supplier, true), gettype($supplier)), __LINE__);
        }
        $this->supplier = $supplier;
        
        return $this;
    }
    /**
     * Get allSupplier value
     * @return bool|null
     */
    public function getAllSupplier(): ?bool
    {
        return $this->allSupplier;
    }
    /**
     * Set allSupplier value
     * @param bool $allSupplier
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoSalesListBySupplierCriteriaType
     */
    public function setAllSupplier(?bool $allSupplier = null): self
    {
        // validation for constraint: boolean
        if (!is_null($allSupplier) && !is_bool($allSupplier)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($allSupplier, true), gettype($allSupplier)), __LINE__);
        }
        $this->allSupplier = $allSupplier;
        
        return $this;
    }
}
