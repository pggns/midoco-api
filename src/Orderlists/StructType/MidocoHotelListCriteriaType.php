<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoHotelListCriteriaType StructType
 * @subpackage Structs
 */
class MidocoHotelListCriteriaType extends MidocoSalesListCriteriaType
{
    /**
     * The supplierId
     * @var string|null
     */
    protected ?string $supplierId = null;
    /**
     * The hotelCode
     * @var string|null
     */
    protected ?string $hotelCode = null;
    /**
     * The hotelName
     * @var string|null
     */
    protected ?string $hotelName = null;
    /**
     * Constructor method for MidocoHotelListCriteriaType
     * @uses MidocoHotelListCriteriaType::setSupplierId()
     * @uses MidocoHotelListCriteriaType::setHotelCode()
     * @uses MidocoHotelListCriteriaType::setHotelName()
     * @param string $supplierId
     * @param string $hotelCode
     * @param string $hotelName
     */
    public function __construct(?string $supplierId = null, ?string $hotelCode = null, ?string $hotelName = null)
    {
        $this
            ->setSupplierId($supplierId)
            ->setHotelCode($hotelCode)
            ->setHotelName($hotelName);
    }
    /**
     * Get supplierId value
     * @return string|null
     */
    public function getSupplierId(): ?string
    {
        return $this->supplierId;
    }
    /**
     * Set supplierId value
     * @param string $supplierId
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoHotelListCriteriaType
     */
    public function setSupplierId(?string $supplierId = null): self
    {
        // validation for constraint: string
        if (!is_null($supplierId) && !is_string($supplierId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($supplierId, true), gettype($supplierId)), __LINE__);
        }
        $this->supplierId = $supplierId;
        
        return $this;
    }
    /**
     * Get hotelCode value
     * @return string|null
     */
    public function getHotelCode(): ?string
    {
        return $this->hotelCode;
    }
    /**
     * Set hotelCode value
     * @param string $hotelCode
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoHotelListCriteriaType
     */
    public function setHotelCode(?string $hotelCode = null): self
    {
        // validation for constraint: string
        if (!is_null($hotelCode) && !is_string($hotelCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($hotelCode, true), gettype($hotelCode)), __LINE__);
        }
        $this->hotelCode = $hotelCode;
        
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
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoHotelListCriteriaType
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
}
