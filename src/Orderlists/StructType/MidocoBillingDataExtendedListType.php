<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoBillingDataExtendedListType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoBillingDataExtendedListType extends MidocoBillingDataListType
{
    /**
     * The supplierName
     * @var string|null
     */
    protected ?string $supplierName = null;
    /**
     * The hotelName
     * @var string|null
     */
    protected ?string $hotelName = null;
    /**
     * The carrierName
     * @var string|null
     */
    protected ?string $carrierName = null;
    /**
     * Constructor method for MidocoBillingDataExtendedListType
     * @uses MidocoBillingDataExtendedListType::setSupplierName()
     * @uses MidocoBillingDataExtendedListType::setHotelName()
     * @uses MidocoBillingDataExtendedListType::setCarrierName()
     * @param string $supplierName
     * @param string $hotelName
     * @param string $carrierName
     */
    public function __construct(?string $supplierName = null, ?string $hotelName = null, ?string $carrierName = null)
    {
        $this
            ->setSupplierName($supplierName)
            ->setHotelName($hotelName)
            ->setCarrierName($carrierName);
    }
    /**
     * Get supplierName value
     * @return string|null
     */
    public function getSupplierName(): ?string
    {
        return $this->supplierName;
    }
    /**
     * Set supplierName value
     * @param string $supplierName
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataExtendedListType
     */
    public function setSupplierName(?string $supplierName = null): self
    {
        // validation for constraint: string
        if (!is_null($supplierName) && !is_string($supplierName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($supplierName, true), gettype($supplierName)), __LINE__);
        }
        $this->supplierName = $supplierName;
        
        return $this;
    }
    /**
     * Get hotelName value
     * @return string|null
     */
    public function getHotelName(): ?string
    {
        return $this->hotelName;
    }
    /**
     * Set hotelName value
     * @param string $hotelName
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataExtendedListType
     */
    public function setHotelName(?string $hotelName = null): self
    {
        // validation for constraint: string
        if (!is_null($hotelName) && !is_string($hotelName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($hotelName, true), gettype($hotelName)), __LINE__);
        }
        $this->hotelName = $hotelName;
        
        return $this;
    }
    /**
     * Get carrierName value
     * @return string|null
     */
    public function getCarrierName(): ?string
    {
        return $this->carrierName;
    }
    /**
     * Set carrierName value
     * @param string $carrierName
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataExtendedListType
     */
    public function setCarrierName(?string $carrierName = null): self
    {
        // validation for constraint: string
        if (!is_null($carrierName) && !is_string($carrierName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($carrierName, true), gettype($carrierName)), __LINE__);
        }
        $this->carrierName = $carrierName;
        
        return $this;
    }
}
