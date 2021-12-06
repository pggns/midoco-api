<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MiscStatDTO StructType
 * @subpackage Structs
 */
class MiscStatDTO extends AbstractStructBase
{
    /**
     * The agencyId
     * @var int|null
     */
    protected ?int $agencyId = null;
    /**
     * The bookingDate
     * @var string|null
     */
    protected ?string $bookingDate = null;
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
     * The creationDate
     * @var string|null
     */
    protected ?string $creationDate = null;
    /**
     * The creationUserId
     * @var int|null
     */
    protected ?int $creationUserId = null;
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
     * The endTravelDate
     * @var string|null
     */
    protected ?string $endTravelDate = null;
    /**
     * The extSystem
     * @var string|null
     */
    protected ?string $extSystem = null;
    /**
     * The grantedRevenue
     * @var float|null
     */
    protected ?float $grantedRevenue = null;
    /**
     * The mediatorAffiliate
     * @var string|null
     */
    protected ?string $mediatorAffiliate = null;
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
     * The orderCreationDate
     * @var string|null
     */
    protected ?string $orderCreationDate = null;
    /**
     * The orderEndTravelDate
     * @var string|null
     */
    protected ?string $orderEndTravelDate = null;
    /**
     * The orderStartTravelDate
     * @var string|null
     */
    protected ?string $orderStartTravelDate = null;
    /**
     * The orderTotalPrice
     * @var float|null
     */
    protected ?float $orderTotalPrice = null;
    /**
     * The orgUnitId
     * @var int|null
     */
    protected ?int $orgUnitId = null;
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
     * The sellItemId
     * @var int|null
     */
    protected ?int $sellItemId = null;
    /**
     * The startTravelDate
     * @var string|null
     */
    protected ?string $startTravelDate = null;
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
     * The traveltypeKeyId
     * @var int|null
     */
    protected ?int $traveltypeKeyId = null;
    /**
     * Constructor method for MiscStatDTO
     * @uses MiscStatDTO::setAgencyId()
     * @uses MiscStatDTO::setBookingDate()
     * @uses MiscStatDTO::setCalcMediatorAmount()
     * @uses MiscStatDTO::setCalcRevenueAmount()
     * @uses MiscStatDTO::setCatalogKeyId()
     * @uses MiscStatDTO::setCommissionAmount()
     * @uses MiscStatDTO::setCreationDate()
     * @uses MiscStatDTO::setCreationUserId()
     * @uses MiscStatDTO::setDestinationKeyId()
     * @uses MiscStatDTO::setDurationKeyId()
     * @uses MiscStatDTO::setEndTravelDate()
     * @uses MiscStatDTO::setExtSystem()
     * @uses MiscStatDTO::setGrantedRevenue()
     * @uses MiscStatDTO::setMediatorAffiliate()
     * @uses MiscStatDTO::setMediatorId()
     * @uses MiscStatDTO::setNoOfPersons()
     * @uses MiscStatDTO::setOrderCreationDate()
     * @uses MiscStatDTO::setOrderEndTravelDate()
     * @uses MiscStatDTO::setOrderStartTravelDate()
     * @uses MiscStatDTO::setOrderTotalPrice()
     * @uses MiscStatDTO::setOrgUnitId()
     * @uses MiscStatDTO::setPaidMediatorAmount()
     * @uses MiscStatDTO::setPersonsKeyId()
     * @uses MiscStatDTO::setProductTypeId()
     * @uses MiscStatDTO::setSellItemId()
     * @uses MiscStatDTO::setStartTravelDate()
     * @uses MiscStatDTO::setStatusId()
     * @uses MiscStatDTO::setSupplierId()
     * @uses MiscStatDTO::setTotalAmount()
     * @uses MiscStatDTO::setTransportKeyId()
     * @uses MiscStatDTO::setTraveltypeKeyId()
     * @param int $agencyId
     * @param string $bookingDate
     * @param float $calcMediatorAmount
     * @param float $calcRevenueAmount
     * @param int $catalogKeyId
     * @param float $commissionAmount
     * @param string $creationDate
     * @param int $creationUserId
     * @param int $destinationKeyId
     * @param int $durationKeyId
     * @param string $endTravelDate
     * @param string $extSystem
     * @param float $grantedRevenue
     * @param string $mediatorAffiliate
     * @param int $mediatorId
     * @param int $noOfPersons
     * @param string $orderCreationDate
     * @param string $orderEndTravelDate
     * @param string $orderStartTravelDate
     * @param float $orderTotalPrice
     * @param int $orgUnitId
     * @param float $paidMediatorAmount
     * @param int $personsKeyId
     * @param int $productTypeId
     * @param int $sellItemId
     * @param string $startTravelDate
     * @param int $statusId
     * @param int $supplierId
     * @param float $totalAmount
     * @param int $transportKeyId
     * @param int $traveltypeKeyId
     */
    public function __construct(?int $agencyId = null, ?string $bookingDate = null, ?float $calcMediatorAmount = null, ?float $calcRevenueAmount = null, ?int $catalogKeyId = null, ?float $commissionAmount = null, ?string $creationDate = null, ?int $creationUserId = null, ?int $destinationKeyId = null, ?int $durationKeyId = null, ?string $endTravelDate = null, ?string $extSystem = null, ?float $grantedRevenue = null, ?string $mediatorAffiliate = null, ?int $mediatorId = null, ?int $noOfPersons = null, ?string $orderCreationDate = null, ?string $orderEndTravelDate = null, ?string $orderStartTravelDate = null, ?float $orderTotalPrice = null, ?int $orgUnitId = null, ?float $paidMediatorAmount = null, ?int $personsKeyId = null, ?int $productTypeId = null, ?int $sellItemId = null, ?string $startTravelDate = null, ?int $statusId = null, ?int $supplierId = null, ?float $totalAmount = null, ?int $transportKeyId = null, ?int $traveltypeKeyId = null)
    {
        $this
            ->setAgencyId($agencyId)
            ->setBookingDate($bookingDate)
            ->setCalcMediatorAmount($calcMediatorAmount)
            ->setCalcRevenueAmount($calcRevenueAmount)
            ->setCatalogKeyId($catalogKeyId)
            ->setCommissionAmount($commissionAmount)
            ->setCreationDate($creationDate)
            ->setCreationUserId($creationUserId)
            ->setDestinationKeyId($destinationKeyId)
            ->setDurationKeyId($durationKeyId)
            ->setEndTravelDate($endTravelDate)
            ->setExtSystem($extSystem)
            ->setGrantedRevenue($grantedRevenue)
            ->setMediatorAffiliate($mediatorAffiliate)
            ->setMediatorId($mediatorId)
            ->setNoOfPersons($noOfPersons)
            ->setOrderCreationDate($orderCreationDate)
            ->setOrderEndTravelDate($orderEndTravelDate)
            ->setOrderStartTravelDate($orderStartTravelDate)
            ->setOrderTotalPrice($orderTotalPrice)
            ->setOrgUnitId($orgUnitId)
            ->setPaidMediatorAmount($paidMediatorAmount)
            ->setPersonsKeyId($personsKeyId)
            ->setProductTypeId($productTypeId)
            ->setSellItemId($sellItemId)
            ->setStartTravelDate($startTravelDate)
            ->setStatusId($statusId)
            ->setSupplierId($supplierId)
            ->setTotalAmount($totalAmount)
            ->setTransportKeyId($transportKeyId)
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
     * @return \Pggns\MidocoApi\Mis\StructType\MiscStatDTO
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
     * Get bookingDate value
     * @return string|null
     */
    public function getBookingDate(): ?string
    {
        return $this->bookingDate;
    }
    /**
     * Set bookingDate value
     * @param string $bookingDate
     * @return \Pggns\MidocoApi\Mis\StructType\MiscStatDTO
     */
    public function setBookingDate(?string $bookingDate = null): self
    {
        // validation for constraint: string
        if (!is_null($bookingDate) && !is_string($bookingDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bookingDate, true), gettype($bookingDate)), __LINE__);
        }
        $this->bookingDate = $bookingDate;
        
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
     * @return \Pggns\MidocoApi\Mis\StructType\MiscStatDTO
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
     * @return \Pggns\MidocoApi\Mis\StructType\MiscStatDTO
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
     * @return \Pggns\MidocoApi\Mis\StructType\MiscStatDTO
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
     * @return \Pggns\MidocoApi\Mis\StructType\MiscStatDTO
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
     * Get creationDate value
     * @return string|null
     */
    public function getCreationDate(): ?string
    {
        return $this->creationDate;
    }
    /**
     * Set creationDate value
     * @param string $creationDate
     * @return \Pggns\MidocoApi\Mis\StructType\MiscStatDTO
     */
    public function setCreationDate(?string $creationDate = null): self
    {
        // validation for constraint: string
        if (!is_null($creationDate) && !is_string($creationDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creationDate, true), gettype($creationDate)), __LINE__);
        }
        $this->creationDate = $creationDate;
        
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
     * @return \Pggns\MidocoApi\Mis\StructType\MiscStatDTO
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
     * @return \Pggns\MidocoApi\Mis\StructType\MiscStatDTO
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
     * @return \Pggns\MidocoApi\Mis\StructType\MiscStatDTO
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
     * Get endTravelDate value
     * @return string|null
     */
    public function getEndTravelDate(): ?string
    {
        return $this->endTravelDate;
    }
    /**
     * Set endTravelDate value
     * @param string $endTravelDate
     * @return \Pggns\MidocoApi\Mis\StructType\MiscStatDTO
     */
    public function setEndTravelDate(?string $endTravelDate = null): self
    {
        // validation for constraint: string
        if (!is_null($endTravelDate) && !is_string($endTravelDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($endTravelDate, true), gettype($endTravelDate)), __LINE__);
        }
        $this->endTravelDate = $endTravelDate;
        
        return $this;
    }
    /**
     * Get extSystem value
     * @return string|null
     */
    public function getExtSystem(): ?string
    {
        return $this->extSystem;
    }
    /**
     * Set extSystem value
     * @param string $extSystem
     * @return \Pggns\MidocoApi\Mis\StructType\MiscStatDTO
     */
    public function setExtSystem(?string $extSystem = null): self
    {
        // validation for constraint: string
        if (!is_null($extSystem) && !is_string($extSystem)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($extSystem, true), gettype($extSystem)), __LINE__);
        }
        $this->extSystem = $extSystem;
        
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
     * @return \Pggns\MidocoApi\Mis\StructType\MiscStatDTO
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
     * Get mediatorAffiliate value
     * @return string|null
     */
    public function getMediatorAffiliate(): ?string
    {
        return $this->mediatorAffiliate;
    }
    /**
     * Set mediatorAffiliate value
     * @param string $mediatorAffiliate
     * @return \Pggns\MidocoApi\Mis\StructType\MiscStatDTO
     */
    public function setMediatorAffiliate(?string $mediatorAffiliate = null): self
    {
        // validation for constraint: string
        if (!is_null($mediatorAffiliate) && !is_string($mediatorAffiliate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mediatorAffiliate, true), gettype($mediatorAffiliate)), __LINE__);
        }
        $this->mediatorAffiliate = $mediatorAffiliate;
        
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
     * @return \Pggns\MidocoApi\Mis\StructType\MiscStatDTO
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
     * @return \Pggns\MidocoApi\Mis\StructType\MiscStatDTO
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
     * Get orderCreationDate value
     * @return string|null
     */
    public function getOrderCreationDate(): ?string
    {
        return $this->orderCreationDate;
    }
    /**
     * Set orderCreationDate value
     * @param string $orderCreationDate
     * @return \Pggns\MidocoApi\Mis\StructType\MiscStatDTO
     */
    public function setOrderCreationDate(?string $orderCreationDate = null): self
    {
        // validation for constraint: string
        if (!is_null($orderCreationDate) && !is_string($orderCreationDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orderCreationDate, true), gettype($orderCreationDate)), __LINE__);
        }
        $this->orderCreationDate = $orderCreationDate;
        
        return $this;
    }
    /**
     * Get orderEndTravelDate value
     * @return string|null
     */
    public function getOrderEndTravelDate(): ?string
    {
        return $this->orderEndTravelDate;
    }
    /**
     * Set orderEndTravelDate value
     * @param string $orderEndTravelDate
     * @return \Pggns\MidocoApi\Mis\StructType\MiscStatDTO
     */
    public function setOrderEndTravelDate(?string $orderEndTravelDate = null): self
    {
        // validation for constraint: string
        if (!is_null($orderEndTravelDate) && !is_string($orderEndTravelDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orderEndTravelDate, true), gettype($orderEndTravelDate)), __LINE__);
        }
        $this->orderEndTravelDate = $orderEndTravelDate;
        
        return $this;
    }
    /**
     * Get orderStartTravelDate value
     * @return string|null
     */
    public function getOrderStartTravelDate(): ?string
    {
        return $this->orderStartTravelDate;
    }
    /**
     * Set orderStartTravelDate value
     * @param string $orderStartTravelDate
     * @return \Pggns\MidocoApi\Mis\StructType\MiscStatDTO
     */
    public function setOrderStartTravelDate(?string $orderStartTravelDate = null): self
    {
        // validation for constraint: string
        if (!is_null($orderStartTravelDate) && !is_string($orderStartTravelDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orderStartTravelDate, true), gettype($orderStartTravelDate)), __LINE__);
        }
        $this->orderStartTravelDate = $orderStartTravelDate;
        
        return $this;
    }
    /**
     * Get orderTotalPrice value
     * @return float|null
     */
    public function getOrderTotalPrice(): ?float
    {
        return $this->orderTotalPrice;
    }
    /**
     * Set orderTotalPrice value
     * @param float $orderTotalPrice
     * @return \Pggns\MidocoApi\Mis\StructType\MiscStatDTO
     */
    public function setOrderTotalPrice(?float $orderTotalPrice = null): self
    {
        // validation for constraint: float
        if (!is_null($orderTotalPrice) && !(is_float($orderTotalPrice) || is_numeric($orderTotalPrice))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($orderTotalPrice, true), gettype($orderTotalPrice)), __LINE__);
        }
        $this->orderTotalPrice = $orderTotalPrice;
        
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
     * @return \Pggns\MidocoApi\Mis\StructType\MiscStatDTO
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
     * @return \Pggns\MidocoApi\Mis\StructType\MiscStatDTO
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
     * @return \Pggns\MidocoApi\Mis\StructType\MiscStatDTO
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
     * @return \Pggns\MidocoApi\Mis\StructType\MiscStatDTO
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
     * @return \Pggns\MidocoApi\Mis\StructType\MiscStatDTO
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
     * Get startTravelDate value
     * @return string|null
     */
    public function getStartTravelDate(): ?string
    {
        return $this->startTravelDate;
    }
    /**
     * Set startTravelDate value
     * @param string $startTravelDate
     * @return \Pggns\MidocoApi\Mis\StructType\MiscStatDTO
     */
    public function setStartTravelDate(?string $startTravelDate = null): self
    {
        // validation for constraint: string
        if (!is_null($startTravelDate) && !is_string($startTravelDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($startTravelDate, true), gettype($startTravelDate)), __LINE__);
        }
        $this->startTravelDate = $startTravelDate;
        
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
     * @return \Pggns\MidocoApi\Mis\StructType\MiscStatDTO
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
     * @return \Pggns\MidocoApi\Mis\StructType\MiscStatDTO
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
     * @return \Pggns\MidocoApi\Mis\StructType\MiscStatDTO
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
     * @return \Pggns\MidocoApi\Mis\StructType\MiscStatDTO
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
     * @return \Pggns\MidocoApi\Mis\StructType\MiscStatDTO
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
