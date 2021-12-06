<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CheckIfTocSupplierResponse StructType
 * @subpackage Structs
 */
class CheckIfTocSupplierResponse extends AbstractStructBase
{
    /**
     * The isTocSupplier
     * Meta information extracted from the WSDL
     * - default: false
     * @var bool|null
     */
    protected ?bool $isTocSupplier = null;
    /**
     * The supplierRegex
     * @var string|null
     */
    protected ?string $supplierRegex = null;
    /**
     * The hotelRegex
     * @var string|null
     */
    protected ?string $hotelRegex = null;
    /**
     * Constructor method for CheckIfTocSupplierResponse
     * @uses CheckIfTocSupplierResponse::setIsTocSupplier()
     * @uses CheckIfTocSupplierResponse::setSupplierRegex()
     * @uses CheckIfTocSupplierResponse::setHotelRegex()
     * @param bool $isTocSupplier
     * @param string $supplierRegex
     * @param string $hotelRegex
     */
    public function __construct(?bool $isTocSupplier = false, ?string $supplierRegex = null, ?string $hotelRegex = null)
    {
        $this
            ->setIsTocSupplier($isTocSupplier)
            ->setSupplierRegex($supplierRegex)
            ->setHotelRegex($hotelRegex);
    }
    /**
     * Get isTocSupplier value
     * @return bool|null
     */
    public function getIsTocSupplier(): ?bool
    {
        return $this->isTocSupplier;
    }
    /**
     * Set isTocSupplier value
     * @param bool $isTocSupplier
     * @return \Pggns\MidocoApi\Documents\StructType\CheckIfTocSupplierResponse
     */
    public function setIsTocSupplier(?bool $isTocSupplier = false): self
    {
        // validation for constraint: boolean
        if (!is_null($isTocSupplier) && !is_bool($isTocSupplier)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isTocSupplier, true), gettype($isTocSupplier)), __LINE__);
        }
        $this->isTocSupplier = $isTocSupplier;
        
        return $this;
    }
    /**
     * Get supplierRegex value
     * @return string|null
     */
    public function getSupplierRegex(): ?string
    {
        return $this->supplierRegex;
    }
    /**
     * Set supplierRegex value
     * @param string $supplierRegex
     * @return \Pggns\MidocoApi\Documents\StructType\CheckIfTocSupplierResponse
     */
    public function setSupplierRegex(?string $supplierRegex = null): self
    {
        // validation for constraint: string
        if (!is_null($supplierRegex) && !is_string($supplierRegex)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($supplierRegex, true), gettype($supplierRegex)), __LINE__);
        }
        $this->supplierRegex = $supplierRegex;
        
        return $this;
    }
    /**
     * Get hotelRegex value
     * @return string|null
     */
    public function getHotelRegex(): ?string
    {
        return $this->hotelRegex;
    }
    /**
     * Set hotelRegex value
     * @param string $hotelRegex
     * @return \Pggns\MidocoApi\Documents\StructType\CheckIfTocSupplierResponse
     */
    public function setHotelRegex(?string $hotelRegex = null): self
    {
        // validation for constraint: string
        if (!is_null($hotelRegex) && !is_string($hotelRegex)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($hotelRegex, true), gettype($hotelRegex)), __LINE__);
        }
        $this->hotelRegex = $hotelRegex;
        
        return $this;
    }
}
