<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SuppliersTcmsSpecialDTO StructType
 * @subpackage Structs
 */
class SuppliersTcmsSpecialDTO extends AbstractStructBase
{
    /**
     * The hcodeRegex
     * @var string|null
     */
    protected ?string $hcodeRegex = null;
    /**
     * The scodeRegex
     * @var string|null
     */
    protected ?string $scodeRegex = null;
    /**
     * The supplierCode
     * @var string|null
     */
    protected ?string $supplierCode = null;
    /**
     * Constructor method for SuppliersTcmsSpecialDTO
     * @uses SuppliersTcmsSpecialDTO::setHcodeRegex()
     * @uses SuppliersTcmsSpecialDTO::setScodeRegex()
     * @uses SuppliersTcmsSpecialDTO::setSupplierCode()
     * @param string $hcodeRegex
     * @param string $scodeRegex
     * @param string $supplierCode
     */
    public function __construct(?string $hcodeRegex = null, ?string $scodeRegex = null, ?string $supplierCode = null)
    {
        $this
            ->setHcodeRegex($hcodeRegex)
            ->setScodeRegex($scodeRegex)
            ->setSupplierCode($supplierCode);
    }
    /**
     * Get hcodeRegex value
     * @return string|null
     */
    public function getHcodeRegex(): ?string
    {
        return $this->hcodeRegex;
    }
    /**
     * Set hcodeRegex value
     * @param string $hcodeRegex
     * @return \Pggns\MidocoApi\Documents\StructType\SuppliersTcmsSpecialDTO
     */
    public function setHcodeRegex(?string $hcodeRegex = null): self
    {
        // validation for constraint: string
        if (!is_null($hcodeRegex) && !is_string($hcodeRegex)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($hcodeRegex, true), gettype($hcodeRegex)), __LINE__);
        }
        $this->hcodeRegex = $hcodeRegex;
        
        return $this;
    }
    /**
     * Get scodeRegex value
     * @return string|null
     */
    public function getScodeRegex(): ?string
    {
        return $this->scodeRegex;
    }
    /**
     * Set scodeRegex value
     * @param string $scodeRegex
     * @return \Pggns\MidocoApi\Documents\StructType\SuppliersTcmsSpecialDTO
     */
    public function setScodeRegex(?string $scodeRegex = null): self
    {
        // validation for constraint: string
        if (!is_null($scodeRegex) && !is_string($scodeRegex)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($scodeRegex, true), gettype($scodeRegex)), __LINE__);
        }
        $this->scodeRegex = $scodeRegex;
        
        return $this;
    }
    /**
     * Get supplierCode value
     * @return string|null
     */
    public function getSupplierCode(): ?string
    {
        return $this->supplierCode;
    }
    /**
     * Set supplierCode value
     * @param string $supplierCode
     * @return \Pggns\MidocoApi\Documents\StructType\SuppliersTcmsSpecialDTO
     */
    public function setSupplierCode(?string $supplierCode = null): self
    {
        // validation for constraint: string
        if (!is_null($supplierCode) && !is_string($supplierCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($supplierCode, true), gettype($supplierCode)), __LINE__);
        }
        $this->supplierCode = $supplierCode;
        
        return $this;
    }
}
