<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SellItemFactDTO StructType
 * @subpackage Structs
 */
class SellItemFactDTO extends AbstractStructBase
{
    /**
     * The agencyId
     * @var int|null
     */
    protected ?int $agencyId = null;
    /**
     * The attributeId
     * @var int|null
     */
    protected ?int $attributeId = null;
    /**
     * The averagePricePerson
     * @var float|null
     */
    protected ?float $averagePricePerson = null;
    /**
     * The calcMediatorAmount
     * @var float|null
     */
    protected ?float $calcMediatorAmount = null;
    /**
     * The calcRevenueAmount
     * @var float|null
     */
    protected ?float $calcRevenueAmount = null;
    /**
     * The catalogKeyId
     * @var int|null
     */
    protected ?int $catalogKeyId = null;
    /**
     * The commissionAmount
     * @var float|null
     */
    protected ?float $commissionAmount = null;
    /**
     * The cooperationId
     * @var int|null
     */
    protected ?int $cooperationId = null;
    /**
     * The creationDateId
     * @var int|null
     */
    protected ?int $creationDateId = null;
    /**
     * The creationUserId
     * @var int|null
     */
    protected ?int $creationUserId = null;
    /**
     * The customerId
     * @var int|null
     */
    protected ?int $customerId = null;
    /**
     * The departureCodeId
     * @var int|null
     */
    protected ?int $departureCodeId = null;
    /**
     * The destinationCodeId
     * @var int|null
     */
    protected ?int $destinationCodeId = null;
    /**
     * The destinationKeyId
     * @var int|null
     */
    protected ?int $destinationKeyId = null;
    /**
     * The durationKeyId
     * @var int|null
     */
    protected ?int $durationKeyId = null;
    /**
     * The endTravelDateId
     * @var int|null
     */
    protected ?int $endTravelDateId = null;
    /**
     * The grantedRevenue
     * @var float|null
     */
    protected ?float $grantedRevenue = null;
    /**
     * The itemTypeId
     * @var int|null
     */
    protected ?int $itemTypeId = null;
    /**
     * The locationId
     * @var int|null
     */
    protected ?int $locationId = null;
    /**
     * The mediatorId
     * @var int|null
     */
    protected ?int $mediatorId = null;
    /**
     * The noOfPersons
     * @var int|null
     */
    protected ?int $noOfPersons = null;
    /**
     * The orgUnitId
     * @var int|null
     */
    protected ?int $orgUnitId = null;
    /**
     * The originalSupplierId
     * @var int|null
     */
    protected ?int $originalSupplierId = null;
    /**
     * The paidMediatorAmount
     * @var float|null
     */
    protected ?float $paidMediatorAmount = null;
    /**
     * The personsKeyId
     * @var int|null
     */
    protected ?int $personsKeyId = null;
    /**
     * The productTypeId
     * @var int|null
     */
    protected ?int $productTypeId = null;
    /**
     * The purchaseSaleId
     * @var int|null
     */
    protected ?int $purchaseSaleId = null;
    /**
     * The saleAmount
     * @var float|null
     */
    protected ?float $saleAmount = null;
    /**
     * The sellItemId
     * @var int|null
     */
    protected ?int $sellItemId = null;
    /**
     * The statusId
     * @var int|null
     */
    protected ?int $statusId = null;
    /**
     * The supplierId
     * @var int|null
     */
    protected ?int $supplierId = null;
    /**
     * The totalAmount
     * @var float|null
     */
    protected ?float $totalAmount = null;
    /**
     * The transportKeyId
     * @var int|null
     */
    protected ?int $transportKeyId = null;
    /**
     * The travelDateId
     * @var int|null
     */
    protected ?int $travelDateId = null;
    /**
     * The travelDuration
     * @var int|null
     */
    protected ?int $travelDuration = null;
    /**
     * The travelPrice
     * @var float|null
     */
    protected ?float $travelPrice = null;
    /**
     * The traveltypeKeyId
     * @var int|null
     */
    protected ?int $traveltypeKeyId = null;
    /**
     * Constructor method for SellItemFactDTO
     * @uses SellItemFactDTO::setAgencyId()
     * @uses SellItemFactDTO::setAttributeId()
     * @uses SellItemFactDTO::setAveragePricePerson()
     * @uses SellItemFactDTO::setCalcMediatorAmount()
     * @uses SellItemFactDTO::setCalcRevenueAmount()
     * @uses SellItemFactDTO::setCatalogKeyId()
     * @uses SellItemFactDTO::setCommissionAmount()
     * @uses SellItemFactDTO::setCooperationId()
     * @uses SellItemFactDTO::setCreationDateId()
     * @uses SellItemFactDTO::setCreationUserId()
     * @uses SellItemFactDTO::setCustomerId()
     * @uses SellItemFactDTO::setDepartureCodeId()
     * @uses SellItemFactDTO::setDestinationCodeId()
     * @uses SellItemFactDTO::setDestinationKeyId()
     * @uses SellItemFactDTO::setDurationKeyId()
     * @uses SellItemFactDTO::setEndTravelDateId()
     * @uses SellItemFactDTO::setGrantedRevenue()
     * @uses SellItemFactDTO::setItemTypeId()
     * @uses SellItemFactDTO::setLocationId()
     * @uses SellItemFactDTO::setMediatorId()
     * @uses SellItemFactDTO::setNoOfPersons()
     * @uses SellItemFactDTO::setOrgUnitId()
     * @uses SellItemFactDTO::setOriginalSupplierId()
     * @uses SellItemFactDTO::setPaidMediatorAmount()
     * @uses SellItemFactDTO::setPersonsKeyId()
     * @uses SellItemFactDTO::setProductTypeId()
     * @uses SellItemFactDTO::setPurchaseSaleId()
     * @uses SellItemFactDTO::setSaleAmount()
     * @uses SellItemFactDTO::setSellItemId()
     * @uses SellItemFactDTO::setStatusId()
     * @uses SellItemFactDTO::setSupplierId()
     * @uses SellItemFactDTO::setTotalAmount()
     * @uses SellItemFactDTO::setTransportKeyId()
     * @uses SellItemFactDTO::setTravelDateId()
     * @uses SellItemFactDTO::setTravelDuration()
     * @uses SellItemFactDTO::setTravelPrice()
     * @uses SellItemFactDTO::setTraveltypeKeyId()
     * @param int $agencyId
     * @param int $attributeId
     * @param float $averagePricePerson
     * @param float $calcMediatorAmount
     * @param float $calcRevenueAmount
     * @param int $catalogKeyId
     * @param float $commissionAmount
     * @param int $cooperationId
     * @param int $creationDateId
     * @param int $creationUserId
     * @param int $customerId
     * @param int $departureCodeId
     * @param int $destinationCodeId
     * @param int $destinationKeyId
     * @param int $durationKeyId
     * @param int $endTravelDateId
     * @param float $grantedRevenue
     * @param int $itemTypeId
     * @param int $locationId
     * @param int $mediatorId
     * @param int $noOfPersons
     * @param int $orgUnitId
     * @param int $originalSupplierId
     * @param float $paidMediatorAmount
     * @param int $personsKeyId
     * @param int $productTypeId
     * @param int $purchaseSaleId
     * @param float $saleAmount
     * @param int $sellItemId
     * @param int $statusId
     * @param int $supplierId
     * @param float $totalAmount
     * @param int $transportKeyId
     * @param int $travelDateId
     * @param int $travelDuration
     * @param float $travelPrice
     * @param int $traveltypeKeyId
     */
    public function __construct(?int $agencyId = null, ?int $attributeId = null, ?float $averagePricePerson = null, ?float $calcMediatorAmount = null, ?float $calcRevenueAmount = null, ?int $catalogKeyId = null, ?float $commissionAmount = null, ?int $cooperationId = null, ?int $creationDateId = null, ?int $creationUserId = null, ?int $customerId = null, ?int $departureCodeId = null, ?int $destinationCodeId = null, ?int $destinationKeyId = null, ?int $durationKeyId = null, ?int $endTravelDateId = null, ?float $grantedRevenue = null, ?int $itemTypeId = null, ?int $locationId = null, ?int $mediatorId = null, ?int $noOfPersons = null, ?int $orgUnitId = null, ?int $originalSupplierId = null, ?float $paidMediatorAmount = null, ?int $personsKeyId = null, ?int $productTypeId = null, ?int $purchaseSaleId = null, ?float $saleAmount = null, ?int $sellItemId = null, ?int $statusId = null, ?int $supplierId = null, ?float $totalAmount = null, ?int $transportKeyId = null, ?int $travelDateId = null, ?int $travelDuration = null, ?float $travelPrice = null, ?int $traveltypeKeyId = null)
    {
        $this
            ->setAgencyId($agencyId)
            ->setAttributeId($attributeId)
            ->setAveragePricePerson($averagePricePerson)
            ->setCalcMediatorAmount($calcMediatorAmount)
            ->setCalcRevenueAmount($calcRevenueAmount)
            ->setCatalogKeyId($catalogKeyId)
            ->setCommissionAmount($commissionAmount)
            ->setCooperationId($cooperationId)
            ->setCreationDateId($creationDateId)
            ->setCreationUserId($creationUserId)
            ->setCustomerId($customerId)
            ->setDepartureCodeId($departureCodeId)
            ->setDestinationCodeId($destinationCodeId)
            ->setDestinationKeyId($destinationKeyId)
            ->setDurationKeyId($durationKeyId)
            ->setEndTravelDateId($endTravelDateId)
            ->setGrantedRevenue($grantedRevenue)
            ->setItemTypeId($itemTypeId)
            ->setLocationId($locationId)
            ->setMediatorId($mediatorId)
            ->setNoOfPersons($noOfPersons)
            ->setOrgUnitId($orgUnitId)
            ->setOriginalSupplierId($originalSupplierId)
            ->setPaidMediatorAmount($paidMediatorAmount)
            ->setPersonsKeyId($personsKeyId)
            ->setProductTypeId($productTypeId)
            ->setPurchaseSaleId($purchaseSaleId)
            ->setSaleAmount($saleAmount)
            ->setSellItemId($sellItemId)
            ->setStatusId($statusId)
            ->setSupplierId($supplierId)
            ->setTotalAmount($totalAmount)
            ->setTransportKeyId($transportKeyId)
            ->setTravelDateId($travelDateId)
            ->setTravelDuration($travelDuration)
            ->setTravelPrice($travelPrice)
            ->setTraveltypeKeyId($traveltypeKeyId);
    }
    /**
     * Get agencyId value
     * @return int|null
     */
    public function getAgencyId(): ?int
    {
        return $this->agencyId;
    }
    /**
     * Set agencyId value
     * @param int $agencyId
     * @return \Pggns\MidocoApi\Mis\StructType\SellItemFactDTO
     */
    public function setAgencyId(?int $agencyId = null): self
    {
        // validation for constraint: int
        if (!is_null($agencyId) && !(is_int($agencyId) || ctype_digit($agencyId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($agencyId, true), gettype($agencyId)), __LINE__);
        }
        $this->agencyId = $agencyId;
        
        return $this;
    }
    /**
     * Get attributeId value
     * @return int|null
     */
    public function getAttributeId(): ?int
    {
        return $this->attributeId;
    }
    /**
     * Set attributeId value
     * @param int $attributeId
     * @return \Pggns\MidocoApi\Mis\StructType\SellItemFactDTO
     */
    public function setAttributeId(?int $attributeId = null): self
    {
        // validation for constraint: int
        if (!is_null($attributeId) && !(is_int($attributeId) || ctype_digit($attributeId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($attributeId, true), gettype($attributeId)), __LINE__);
        }
        $this->attributeId = $attributeId;
        
        return $this;
    }
    /**
     * Get averagePricePerson value
     * @return float|null
     */
    public function getAveragePricePerson(): ?float
    {
        return $this->averagePricePerson;
    }
    /**
     * Set averagePricePerson value
     * @param float $averagePricePerson
     * @return \Pggns\MidocoApi\Mis\StructType\SellItemFactDTO
     */
    public function setAveragePricePerson(?float $averagePricePerson = null): self
    {
        // validation for constraint: float
        if (!is_null($averagePricePerson) && !(is_float($averagePricePerson) || is_numeric($averagePricePerson))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($averagePricePerson, true), gettype($averagePricePerson)), __LINE__);
        }
        $this->averagePricePerson = $averagePricePerson;
        
        return $this;
    }
    /**
     * Get calcMediatorAmount value
     * @return float|null
     */
    public function getCalcMediatorAmount(): ?float
    {
        return $this->calcMediatorAmount;
    }
    /**
     * Set calcMediatorAmount value
     * @param float $calcMediatorAmount
     * @return \Pggns\MidocoApi\Mis\StructType\SellItemFactDTO
     */
    public function setCalcMediatorAmount(?float $calcMediatorAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($calcMediatorAmount) && !(is_float($calcMediatorAmount) || is_numeric($calcMediatorAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($calcMediatorAmount, true), gettype($calcMediatorAmount)), __LINE__);
        }
        $this->calcMediatorAmount = $calcMediatorAmount;
        
        return $this;
    }
    /**
     * Get calcRevenueAmount value
     * @return float|null
     */
    public function getCalcRevenueAmount(): ?float
    {
        return $this->calcRevenueAmount;
    }
    /**
     * Set calcRevenueAmount value
     * @param float $calcRevenueAmount
     * @return \Pggns\MidocoApi\Mis\StructType\SellItemFactDTO
     */
    public function setCalcRevenueAmount(?float $calcRevenueAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($calcRevenueAmount) && !(is_float($calcRevenueAmount) || is_numeric($calcRevenueAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($calcRevenueAmount, true), gettype($calcRevenueAmount)), __LINE__);
        }
        $this->calcRevenueAmount = $calcRevenueAmount;
        
        return $this;
    }
    /**
     * Get catalogKeyId value
     * @return int|null
     */
    public function getCatalogKeyId(): ?int
    {
        return $this->catalogKeyId;
    }
    /**
     * Set catalogKeyId value
     * @param int $catalogKeyId
     * @return \Pggns\MidocoApi\Mis\StructType\SellItemFactDTO
     */
    public function setCatalogKeyId(?int $catalogKeyId = null): self
    {
        // validation for constraint: int
        if (!is_null($catalogKeyId) && !(is_int($catalogKeyId) || ctype_digit($catalogKeyId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($catalogKeyId, true), gettype($catalogKeyId)), __LINE__);
        }
        $this->catalogKeyId = $catalogKeyId;
        
        return $this;
    }
    /**
     * Get commissionAmount value
     * @return float|null
     */
    public function getCommissionAmount(): ?float
    {
        return $this->commissionAmount;
    }
    /**
     * Set commissionAmount value
     * @param float $commissionAmount
     * @return \Pggns\MidocoApi\Mis\StructType\SellItemFactDTO
     */
    public function setCommissionAmount(?float $commissionAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($commissionAmount) && !(is_float($commissionAmount) || is_numeric($commissionAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($commissionAmount, true), gettype($commissionAmount)), __LINE__);
        }
        $this->commissionAmount = $commissionAmount;
        
        return $this;
    }
    /**
     * Get cooperationId value
     * @return int|null
     */
    public function getCooperationId(): ?int
    {
        return $this->cooperationId;
    }
    /**
     * Set cooperationId value
     * @param int $cooperationId
     * @return \Pggns\MidocoApi\Mis\StructType\SellItemFactDTO
     */
    public function setCooperationId(?int $cooperationId = null): self
    {
        // validation for constraint: int
        if (!is_null($cooperationId) && !(is_int($cooperationId) || ctype_digit($cooperationId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($cooperationId, true), gettype($cooperationId)), __LINE__);
        }
        $this->cooperationId = $cooperationId;
        
        return $this;
    }
    /**
     * Get creationDateId value
     * @return int|null
     */
    public function getCreationDateId(): ?int
    {
        return $this->creationDateId;
    }
    /**
     * Set creationDateId value
     * @param int $creationDateId
     * @return \Pggns\MidocoApi\Mis\StructType\SellItemFactDTO
     */
    public function setCreationDateId(?int $creationDateId = null): self
    {
        // validation for constraint: int
        if (!is_null($creationDateId) && !(is_int($creationDateId) || ctype_digit($creationDateId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($creationDateId, true), gettype($creationDateId)), __LINE__);
        }
        $this->creationDateId = $creationDateId;
        
        return $this;
    }
    /**
     * Get creationUserId value
     * @return int|null
     */
    public function getCreationUserId(): ?int
    {
        return $this->creationUserId;
    }
    /**
     * Set creationUserId value
     * @param int $creationUserId
     * @return \Pggns\MidocoApi\Mis\StructType\SellItemFactDTO
     */
    public function setCreationUserId(?int $creationUserId = null): self
    {
        // validation for constraint: int
        if (!is_null($creationUserId) && !(is_int($creationUserId) || ctype_digit($creationUserId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($creationUserId, true), gettype($creationUserId)), __LINE__);
        }
        $this->creationUserId = $creationUserId;
        
        return $this;
    }
    /**
     * Get customerId value
     * @return int|null
     */
    public function getCustomerId(): ?int
    {
        return $this->customerId;
    }
    /**
     * Set customerId value
     * @param int $customerId
     * @return \Pggns\MidocoApi\Mis\StructType\SellItemFactDTO
     */
    public function setCustomerId(?int $customerId = null): self
    {
        // validation for constraint: int
        if (!is_null($customerId) && !(is_int($customerId) || ctype_digit($customerId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($customerId, true), gettype($customerId)), __LINE__);
        }
        $this->customerId = $customerId;
        
        return $this;
    }
    /**
     * Get departureCodeId value
     * @return int|null
     */
    public function getDepartureCodeId(): ?int
    {
        return $this->departureCodeId;
    }
    /**
     * Set departureCodeId value
     * @param int $departureCodeId
     * @return \Pggns\MidocoApi\Mis\StructType\SellItemFactDTO
     */
    public function setDepartureCodeId(?int $departureCodeId = null): self
    {
        // validation for constraint: int
        if (!is_null($departureCodeId) && !(is_int($departureCodeId) || ctype_digit($departureCodeId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($departureCodeId, true), gettype($departureCodeId)), __LINE__);
        }
        $this->departureCodeId = $departureCodeId;
        
        return $this;
    }
    /**
     * Get destinationCodeId value
     * @return int|null
     */
    public function getDestinationCodeId(): ?int
    {
        return $this->destinationCodeId;
    }
    /**
     * Set destinationCodeId value
     * @param int $destinationCodeId
     * @return \Pggns\MidocoApi\Mis\StructType\SellItemFactDTO
     */
    public function setDestinationCodeId(?int $destinationCodeId = null): self
    {
        // validation for constraint: int
        if (!is_null($destinationCodeId) && !(is_int($destinationCodeId) || ctype_digit($destinationCodeId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($destinationCodeId, true), gettype($destinationCodeId)), __LINE__);
        }
        $this->destinationCodeId = $destinationCodeId;
        
        return $this;
    }
    /**
     * Get destinationKeyId value
     * @return int|null
     */
    public function getDestinationKeyId(): ?int
    {
        return $this->destinationKeyId;
    }
    /**
     * Set destinationKeyId value
     * @param int $destinationKeyId
     * @return \Pggns\MidocoApi\Mis\StructType\SellItemFactDTO
     */
    public function setDestinationKeyId(?int $destinationKeyId = null): self
    {
        // validation for constraint: int
        if (!is_null($destinationKeyId) && !(is_int($destinationKeyId) || ctype_digit($destinationKeyId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($destinationKeyId, true), gettype($destinationKeyId)), __LINE__);
        }
        $this->destinationKeyId = $destinationKeyId;
        
        return $this;
    }
    /**
     * Get durationKeyId value
     * @return int|null
     */
    public function getDurationKeyId(): ?int
    {
        return $this->durationKeyId;
    }
    /**
     * Set durationKeyId value
     * @param int $durationKeyId
     * @return \Pggns\MidocoApi\Mis\StructType\SellItemFactDTO
     */
    public function setDurationKeyId(?int $durationKeyId = null): self
    {
        // validation for constraint: int
        if (!is_null($durationKeyId) && !(is_int($durationKeyId) || ctype_digit($durationKeyId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($durationKeyId, true), gettype($durationKeyId)), __LINE__);
        }
        $this->durationKeyId = $durationKeyId;
        
        return $this;
    }
    /**
     * Get endTravelDateId value
     * @return int|null
     */
    public function getEndTravelDateId(): ?int
    {
        return $this->endTravelDateId;
    }
    /**
     * Set endTravelDateId value
     * @param int $endTravelDateId
     * @return \Pggns\MidocoApi\Mis\StructType\SellItemFactDTO
     */
    public function setEndTravelDateId(?int $endTravelDateId = null): self
    {
        // validation for constraint: int
        if (!is_null($endTravelDateId) && !(is_int($endTravelDateId) || ctype_digit($endTravelDateId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($endTravelDateId, true), gettype($endTravelDateId)), __LINE__);
        }
        $this->endTravelDateId = $endTravelDateId;
        
        return $this;
    }
    /**
     * Get grantedRevenue value
     * @return float|null
     */
    public function getGrantedRevenue(): ?float
    {
        return $this->grantedRevenue;
    }
    /**
     * Set grantedRevenue value
     * @param float $grantedRevenue
     * @return \Pggns\MidocoApi\Mis\StructType\SellItemFactDTO
     */
    public function setGrantedRevenue(?float $grantedRevenue = null): self
    {
        // validation for constraint: float
        if (!is_null($grantedRevenue) && !(is_float($grantedRevenue) || is_numeric($grantedRevenue))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($grantedRevenue, true), gettype($grantedRevenue)), __LINE__);
        }
        $this->grantedRevenue = $grantedRevenue;
        
        return $this;
    }
    /**
     * Get itemTypeId value
     * @return int|null
     */
    public function getItemTypeId(): ?int
    {
        return $this->itemTypeId;
    }
    /**
     * Set itemTypeId value
     * @param int $itemTypeId
     * @return \Pggns\MidocoApi\Mis\StructType\SellItemFactDTO
     */
    public function setItemTypeId(?int $itemTypeId = null): self
    {
        // validation for constraint: int
        if (!is_null($itemTypeId) && !(is_int($itemTypeId) || ctype_digit($itemTypeId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($itemTypeId, true), gettype($itemTypeId)), __LINE__);
        }
        $this->itemTypeId = $itemTypeId;
        
        return $this;
    }
    /**
     * Get locationId value
     * @return int|null
     */
    public function getLocationId(): ?int
    {
        return $this->locationId;
    }
    /**
     * Set locationId value
     * @param int $locationId
     * @return \Pggns\MidocoApi\Mis\StructType\SellItemFactDTO
     */
    public function setLocationId(?int $locationId = null): self
    {
        // validation for constraint: int
        if (!is_null($locationId) && !(is_int($locationId) || ctype_digit($locationId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($locationId, true), gettype($locationId)), __LINE__);
        }
        $this->locationId = $locationId;
        
        return $this;
    }
    /**
     * Get mediatorId value
     * @return int|null
     */
    public function getMediatorId(): ?int
    {
        return $this->mediatorId;
    }
    /**
     * Set mediatorId value
     * @param int $mediatorId
     * @return \Pggns\MidocoApi\Mis\StructType\SellItemFactDTO
     */
    public function setMediatorId(?int $mediatorId = null): self
    {
        // validation for constraint: int
        if (!is_null($mediatorId) && !(is_int($mediatorId) || ctype_digit($mediatorId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($mediatorId, true), gettype($mediatorId)), __LINE__);
        }
        $this->mediatorId = $mediatorId;
        
        return $this;
    }
    /**
     * Get noOfPersons value
     * @return int|null
     */
    public function getNoOfPersons(): ?int
    {
        return $this->noOfPersons;
    }
    /**
     * Set noOfPersons value
     * @param int $noOfPersons
     * @return \Pggns\MidocoApi\Mis\StructType\SellItemFactDTO
     */
    public function setNoOfPersons(?int $noOfPersons = null): self
    {
        // validation for constraint: int
        if (!is_null($noOfPersons) && !(is_int($noOfPersons) || ctype_digit($noOfPersons))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($noOfPersons, true), gettype($noOfPersons)), __LINE__);
        }
        $this->noOfPersons = $noOfPersons;
        
        return $this;
    }
    /**
     * Get orgUnitId value
     * @return int|null
     */
    public function getOrgUnitId(): ?int
    {
        return $this->orgUnitId;
    }
    /**
     * Set orgUnitId value
     * @param int $orgUnitId
     * @return \Pggns\MidocoApi\Mis\StructType\SellItemFactDTO
     */
    public function setOrgUnitId(?int $orgUnitId = null): self
    {
        // validation for constraint: int
        if (!is_null($orgUnitId) && !(is_int($orgUnitId) || ctype_digit($orgUnitId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($orgUnitId, true), gettype($orgUnitId)), __LINE__);
        }
        $this->orgUnitId = $orgUnitId;
        
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
     * @return \Pggns\MidocoApi\Mis\StructType\SellItemFactDTO
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
    /**
     * Get paidMediatorAmount value
     * @return float|null
     */
    public function getPaidMediatorAmount(): ?float
    {
        return $this->paidMediatorAmount;
    }
    /**
     * Set paidMediatorAmount value
     * @param float $paidMediatorAmount
     * @return \Pggns\MidocoApi\Mis\StructType\SellItemFactDTO
     */
    public function setPaidMediatorAmount(?float $paidMediatorAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($paidMediatorAmount) && !(is_float($paidMediatorAmount) || is_numeric($paidMediatorAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($paidMediatorAmount, true), gettype($paidMediatorAmount)), __LINE__);
        }
        $this->paidMediatorAmount = $paidMediatorAmount;
        
        return $this;
    }
    /**
     * Get personsKeyId value
     * @return int|null
     */
    public function getPersonsKeyId(): ?int
    {
        return $this->personsKeyId;
    }
    /**
     * Set personsKeyId value
     * @param int $personsKeyId
     * @return \Pggns\MidocoApi\Mis\StructType\SellItemFactDTO
     */
    public function setPersonsKeyId(?int $personsKeyId = null): self
    {
        // validation for constraint: int
        if (!is_null($personsKeyId) && !(is_int($personsKeyId) || ctype_digit($personsKeyId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($personsKeyId, true), gettype($personsKeyId)), __LINE__);
        }
        $this->personsKeyId = $personsKeyId;
        
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
     * @return \Pggns\MidocoApi\Mis\StructType\SellItemFactDTO
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
    /**
     * Get purchaseSaleId value
     * @return int|null
     */
    public function getPurchaseSaleId(): ?int
    {
        return $this->purchaseSaleId;
    }
    /**
     * Set purchaseSaleId value
     * @param int $purchaseSaleId
     * @return \Pggns\MidocoApi\Mis\StructType\SellItemFactDTO
     */
    public function setPurchaseSaleId(?int $purchaseSaleId = null): self
    {
        // validation for constraint: int
        if (!is_null($purchaseSaleId) && !(is_int($purchaseSaleId) || ctype_digit($purchaseSaleId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($purchaseSaleId, true), gettype($purchaseSaleId)), __LINE__);
        }
        $this->purchaseSaleId = $purchaseSaleId;
        
        return $this;
    }
    /**
     * Get saleAmount value
     * @return float|null
     */
    public function getSaleAmount(): ?float
    {
        return $this->saleAmount;
    }
    /**
     * Set saleAmount value
     * @param float $saleAmount
     * @return \Pggns\MidocoApi\Mis\StructType\SellItemFactDTO
     */
    public function setSaleAmount(?float $saleAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($saleAmount) && !(is_float($saleAmount) || is_numeric($saleAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($saleAmount, true), gettype($saleAmount)), __LINE__);
        }
        $this->saleAmount = $saleAmount;
        
        return $this;
    }
    /**
     * Get sellItemId value
     * @return int|null
     */
    public function getSellItemId(): ?int
    {
        return $this->sellItemId;
    }
    /**
     * Set sellItemId value
     * @param int $sellItemId
     * @return \Pggns\MidocoApi\Mis\StructType\SellItemFactDTO
     */
    public function setSellItemId(?int $sellItemId = null): self
    {
        // validation for constraint: int
        if (!is_null($sellItemId) && !(is_int($sellItemId) || ctype_digit($sellItemId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($sellItemId, true), gettype($sellItemId)), __LINE__);
        }
        $this->sellItemId = $sellItemId;
        
        return $this;
    }
    /**
     * Get statusId value
     * @return int|null
     */
    public function getStatusId(): ?int
    {
        return $this->statusId;
    }
    /**
     * Set statusId value
     * @param int $statusId
     * @return \Pggns\MidocoApi\Mis\StructType\SellItemFactDTO
     */
    public function setStatusId(?int $statusId = null): self
    {
        // validation for constraint: int
        if (!is_null($statusId) && !(is_int($statusId) || ctype_digit($statusId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($statusId, true), gettype($statusId)), __LINE__);
        }
        $this->statusId = $statusId;
        
        return $this;
    }
    /**
     * Get supplierId value
     * @return int|null
     */
    public function getSupplierId(): ?int
    {
        return $this->supplierId;
    }
    /**
     * Set supplierId value
     * @param int $supplierId
     * @return \Pggns\MidocoApi\Mis\StructType\SellItemFactDTO
     */
    public function setSupplierId(?int $supplierId = null): self
    {
        // validation for constraint: int
        if (!is_null($supplierId) && !(is_int($supplierId) || ctype_digit($supplierId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($supplierId, true), gettype($supplierId)), __LINE__);
        }
        $this->supplierId = $supplierId;
        
        return $this;
    }
    /**
     * Get totalAmount value
     * @return float|null
     */
    public function getTotalAmount(): ?float
    {
        return $this->totalAmount;
    }
    /**
     * Set totalAmount value
     * @param float $totalAmount
     * @return \Pggns\MidocoApi\Mis\StructType\SellItemFactDTO
     */
    public function setTotalAmount(?float $totalAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($totalAmount) && !(is_float($totalAmount) || is_numeric($totalAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($totalAmount, true), gettype($totalAmount)), __LINE__);
        }
        $this->totalAmount = $totalAmount;
        
        return $this;
    }
    /**
     * Get transportKeyId value
     * @return int|null
     */
    public function getTransportKeyId(): ?int
    {
        return $this->transportKeyId;
    }
    /**
     * Set transportKeyId value
     * @param int $transportKeyId
     * @return \Pggns\MidocoApi\Mis\StructType\SellItemFactDTO
     */
    public function setTransportKeyId(?int $transportKeyId = null): self
    {
        // validation for constraint: int
        if (!is_null($transportKeyId) && !(is_int($transportKeyId) || ctype_digit($transportKeyId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($transportKeyId, true), gettype($transportKeyId)), __LINE__);
        }
        $this->transportKeyId = $transportKeyId;
        
        return $this;
    }
    /**
     * Get travelDateId value
     * @return int|null
     */
    public function getTravelDateId(): ?int
    {
        return $this->travelDateId;
    }
    /**
     * Set travelDateId value
     * @param int $travelDateId
     * @return \Pggns\MidocoApi\Mis\StructType\SellItemFactDTO
     */
    public function setTravelDateId(?int $travelDateId = null): self
    {
        // validation for constraint: int
        if (!is_null($travelDateId) && !(is_int($travelDateId) || ctype_digit($travelDateId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($travelDateId, true), gettype($travelDateId)), __LINE__);
        }
        $this->travelDateId = $travelDateId;
        
        return $this;
    }
    /**
     * Get travelDuration value
     * @return int|null
     */
    public function getTravelDuration(): ?int
    {
        return $this->travelDuration;
    }
    /**
     * Set travelDuration value
     * @param int $travelDuration
     * @return \Pggns\MidocoApi\Mis\StructType\SellItemFactDTO
     */
    public function setTravelDuration(?int $travelDuration = null): self
    {
        // validation for constraint: int
        if (!is_null($travelDuration) && !(is_int($travelDuration) || ctype_digit($travelDuration))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($travelDuration, true), gettype($travelDuration)), __LINE__);
        }
        $this->travelDuration = $travelDuration;
        
        return $this;
    }
    /**
     * Get travelPrice value
     * @return float|null
     */
    public function getTravelPrice(): ?float
    {
        return $this->travelPrice;
    }
    /**
     * Set travelPrice value
     * @param float $travelPrice
     * @return \Pggns\MidocoApi\Mis\StructType\SellItemFactDTO
     */
    public function setTravelPrice(?float $travelPrice = null): self
    {
        // validation for constraint: float
        if (!is_null($travelPrice) && !(is_float($travelPrice) || is_numeric($travelPrice))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($travelPrice, true), gettype($travelPrice)), __LINE__);
        }
        $this->travelPrice = $travelPrice;
        
        return $this;
    }
    /**
     * Get traveltypeKeyId value
     * @return int|null
     */
    public function getTraveltypeKeyId(): ?int
    {
        return $this->traveltypeKeyId;
    }
    /**
     * Set traveltypeKeyId value
     * @param int $traveltypeKeyId
     * @return \Pggns\MidocoApi\Mis\StructType\SellItemFactDTO
     */
    public function setTraveltypeKeyId(?int $traveltypeKeyId = null): self
    {
        // validation for constraint: int
        if (!is_null($traveltypeKeyId) && !(is_int($traveltypeKeyId) || ctype_digit($traveltypeKeyId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($traveltypeKeyId, true), gettype($traveltypeKeyId)), __LINE__);
        }
        $this->traveltypeKeyId = $traveltypeKeyId;
        
        return $this;
    }
}
