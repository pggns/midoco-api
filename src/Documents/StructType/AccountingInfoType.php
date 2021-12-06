<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AccountingInfoType StructType
 * @subpackage Structs
 */
class AccountingInfoType extends AbstractStructBase
{
    /**
     * The itemId
     * @var int|null
     */
    protected ?int $itemId = null;
    /**
     * The itemType
     * @var string|null
     */
    protected ?string $itemType = null;
    /**
     * The tourOperator
     * @var string|null
     */
    protected ?string $tourOperator = null;
    /**
     * The bookingId
     * @var string|null
     */
    protected ?string $bookingId = null;
    /**
     * The noOfPassengers
     * @var int|null
     */
    protected ?int $noOfPassengers = null;
    /**
     * The startTravel
     * @var string|null
     */
    protected ?string $startTravel = null;
    /**
     * The endTravel
     * @var string|null
     */
    protected ?string $endTravel = null;
    /**
     * The destination
     * @var string|null
     */
    protected ?string $destination = null;
    /**
     * The salePrice
     * @var float|null
     */
    protected ?float $salePrice = null;
    /**
     * The buyPrice
     * @var float|null
     */
    protected ?float $buyPrice = null;
    /**
     * The mediatorCommCalc
     * @var float|null
     */
    protected ?float $mediatorCommCalc = null;
    /**
     * The mediatorCommPaid
     * @var float|null
     */
    protected ?float $mediatorCommPaid = null;
    /**
     * The agencyCommCalc
     * @var float|null
     */
    protected ?float $agencyCommCalc = null;
    /**
     * The agencyCommPaid
     * @var float|null
     */
    protected ?float $agencyCommPaid = null;
    /**
     * The inkassoPrice
     * @var float|null
     */
    protected ?float $inkassoPrice = null;
    /**
     * The revenueSum
     * @var float|null
     */
    protected ?float $revenueSum = null;
    /**
     * The calcRevenue
     * @var float|null
     */
    protected ?float $calcRevenue = null;
    /**
     * The revenueBookingSum
     * @var float|null
     */
    protected ?float $revenueBookingSum = null;
    /**
     * The revenueBookingOpen
     * @var float|null
     */
    protected ?float $revenueBookingOpen = null;
    /**
     * The invoicedAmount
     * @var float|null
     */
    protected ?float $invoicedAmount = null;
    /**
     * The depositAmount
     * @var float|null
     */
    protected ?float $depositAmount = null;
    /**
     * The docTaxes
     * @var float|null
     */
    protected ?float $docTaxes = null;
    /**
     * The margin
     * @var float|null
     */
    protected ?float $margin = null;
    /**
     * The displayedCurrency
     * @var string|null
     */
    protected ?string $displayedCurrency = null;
    /**
     * The displayedItemPrice
     * @var float|null
     */
    protected ?float $displayedItemPrice = null;
    /**
     * Constructor method for AccountingInfoType
     * @uses AccountingInfoType::setItemId()
     * @uses AccountingInfoType::setItemType()
     * @uses AccountingInfoType::setTourOperator()
     * @uses AccountingInfoType::setBookingId()
     * @uses AccountingInfoType::setNoOfPassengers()
     * @uses AccountingInfoType::setStartTravel()
     * @uses AccountingInfoType::setEndTravel()
     * @uses AccountingInfoType::setDestination()
     * @uses AccountingInfoType::setSalePrice()
     * @uses AccountingInfoType::setBuyPrice()
     * @uses AccountingInfoType::setMediatorCommCalc()
     * @uses AccountingInfoType::setMediatorCommPaid()
     * @uses AccountingInfoType::setAgencyCommCalc()
     * @uses AccountingInfoType::setAgencyCommPaid()
     * @uses AccountingInfoType::setInkassoPrice()
     * @uses AccountingInfoType::setRevenueSum()
     * @uses AccountingInfoType::setCalcRevenue()
     * @uses AccountingInfoType::setRevenueBookingSum()
     * @uses AccountingInfoType::setRevenueBookingOpen()
     * @uses AccountingInfoType::setInvoicedAmount()
     * @uses AccountingInfoType::setDepositAmount()
     * @uses AccountingInfoType::setDocTaxes()
     * @uses AccountingInfoType::setMargin()
     * @uses AccountingInfoType::setDisplayedCurrency()
     * @uses AccountingInfoType::setDisplayedItemPrice()
     * @param int $itemId
     * @param string $itemType
     * @param string $tourOperator
     * @param string $bookingId
     * @param int $noOfPassengers
     * @param string $startTravel
     * @param string $endTravel
     * @param string $destination
     * @param float $salePrice
     * @param float $buyPrice
     * @param float $mediatorCommCalc
     * @param float $mediatorCommPaid
     * @param float $agencyCommCalc
     * @param float $agencyCommPaid
     * @param float $inkassoPrice
     * @param float $revenueSum
     * @param float $calcRevenue
     * @param float $revenueBookingSum
     * @param float $revenueBookingOpen
     * @param float $invoicedAmount
     * @param float $depositAmount
     * @param float $docTaxes
     * @param float $margin
     * @param string $displayedCurrency
     * @param float $displayedItemPrice
     */
    public function __construct(?int $itemId = null, ?string $itemType = null, ?string $tourOperator = null, ?string $bookingId = null, ?int $noOfPassengers = null, ?string $startTravel = null, ?string $endTravel = null, ?string $destination = null, ?float $salePrice = null, ?float $buyPrice = null, ?float $mediatorCommCalc = null, ?float $mediatorCommPaid = null, ?float $agencyCommCalc = null, ?float $agencyCommPaid = null, ?float $inkassoPrice = null, ?float $revenueSum = null, ?float $calcRevenue = null, ?float $revenueBookingSum = null, ?float $revenueBookingOpen = null, ?float $invoicedAmount = null, ?float $depositAmount = null, ?float $docTaxes = null, ?float $margin = null, ?string $displayedCurrency = null, ?float $displayedItemPrice = null)
    {
        $this
            ->setItemId($itemId)
            ->setItemType($itemType)
            ->setTourOperator($tourOperator)
            ->setBookingId($bookingId)
            ->setNoOfPassengers($noOfPassengers)
            ->setStartTravel($startTravel)
            ->setEndTravel($endTravel)
            ->setDestination($destination)
            ->setSalePrice($salePrice)
            ->setBuyPrice($buyPrice)
            ->setMediatorCommCalc($mediatorCommCalc)
            ->setMediatorCommPaid($mediatorCommPaid)
            ->setAgencyCommCalc($agencyCommCalc)
            ->setAgencyCommPaid($agencyCommPaid)
            ->setInkassoPrice($inkassoPrice)
            ->setRevenueSum($revenueSum)
            ->setCalcRevenue($calcRevenue)
            ->setRevenueBookingSum($revenueBookingSum)
            ->setRevenueBookingOpen($revenueBookingOpen)
            ->setInvoicedAmount($invoicedAmount)
            ->setDepositAmount($depositAmount)
            ->setDocTaxes($docTaxes)
            ->setMargin($margin)
            ->setDisplayedCurrency($displayedCurrency)
            ->setDisplayedItemPrice($displayedItemPrice);
    }
    /**
     * Get itemId value
     * @return int|null
     */
    public function getItemId(): ?int
    {
        return $this->itemId;
    }
    /**
     * Set itemId value
     * @param int $itemId
     * @return \Pggns\MidocoApi\Documents\StructType\AccountingInfoType
     */
    public function setItemId(?int $itemId = null): self
    {
        // validation for constraint: int
        if (!is_null($itemId) && !(is_int($itemId) || ctype_digit($itemId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($itemId, true), gettype($itemId)), __LINE__);
        }
        $this->itemId = $itemId;
        
        return $this;
    }
    /**
     * Get itemType value
     * @return string|null
     */
    public function getItemType(): ?string
    {
        return $this->itemType;
    }
    /**
     * Set itemType value
     * @param string $itemType
     * @return \Pggns\MidocoApi\Documents\StructType\AccountingInfoType
     */
    public function setItemType(?string $itemType = null): self
    {
        // validation for constraint: string
        if (!is_null($itemType) && !is_string($itemType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($itemType, true), gettype($itemType)), __LINE__);
        }
        $this->itemType = $itemType;
        
        return $this;
    }
    /**
     * Get tourOperator value
     * @return string|null
     */
    public function getTourOperator(): ?string
    {
        return $this->tourOperator;
    }
    /**
     * Set tourOperator value
     * @param string $tourOperator
     * @return \Pggns\MidocoApi\Documents\StructType\AccountingInfoType
     */
    public function setTourOperator(?string $tourOperator = null): self
    {
        // validation for constraint: string
        if (!is_null($tourOperator) && !is_string($tourOperator)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tourOperator, true), gettype($tourOperator)), __LINE__);
        }
        $this->tourOperator = $tourOperator;
        
        return $this;
    }
    /**
     * Get bookingId value
     * @return string|null
     */
    public function getBookingId(): ?string
    {
        return $this->bookingId;
    }
    /**
     * Set bookingId value
     * @param string $bookingId
     * @return \Pggns\MidocoApi\Documents\StructType\AccountingInfoType
     */
    public function setBookingId(?string $bookingId = null): self
    {
        // validation for constraint: string
        if (!is_null($bookingId) && !is_string($bookingId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bookingId, true), gettype($bookingId)), __LINE__);
        }
        $this->bookingId = $bookingId;
        
        return $this;
    }
    /**
     * Get noOfPassengers value
     * @return int|null
     */
    public function getNoOfPassengers(): ?int
    {
        return $this->noOfPassengers;
    }
    /**
     * Set noOfPassengers value
     * @param int $noOfPassengers
     * @return \Pggns\MidocoApi\Documents\StructType\AccountingInfoType
     */
    public function setNoOfPassengers(?int $noOfPassengers = null): self
    {
        // validation for constraint: int
        if (!is_null($noOfPassengers) && !(is_int($noOfPassengers) || ctype_digit($noOfPassengers))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($noOfPassengers, true), gettype($noOfPassengers)), __LINE__);
        }
        $this->noOfPassengers = $noOfPassengers;
        
        return $this;
    }
    /**
     * Get startTravel value
     * @return string|null
     */
    public function getStartTravel(): ?string
    {
        return $this->startTravel;
    }
    /**
     * Set startTravel value
     * @param string $startTravel
     * @return \Pggns\MidocoApi\Documents\StructType\AccountingInfoType
     */
    public function setStartTravel(?string $startTravel = null): self
    {
        // validation for constraint: string
        if (!is_null($startTravel) && !is_string($startTravel)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($startTravel, true), gettype($startTravel)), __LINE__);
        }
        $this->startTravel = $startTravel;
        
        return $this;
    }
    /**
     * Get endTravel value
     * @return string|null
     */
    public function getEndTravel(): ?string
    {
        return $this->endTravel;
    }
    /**
     * Set endTravel value
     * @param string $endTravel
     * @return \Pggns\MidocoApi\Documents\StructType\AccountingInfoType
     */
    public function setEndTravel(?string $endTravel = null): self
    {
        // validation for constraint: string
        if (!is_null($endTravel) && !is_string($endTravel)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($endTravel, true), gettype($endTravel)), __LINE__);
        }
        $this->endTravel = $endTravel;
        
        return $this;
    }
    /**
     * Get destination value
     * @return string|null
     */
    public function getDestination(): ?string
    {
        return $this->destination;
    }
    /**
     * Set destination value
     * @param string $destination
     * @return \Pggns\MidocoApi\Documents\StructType\AccountingInfoType
     */
    public function setDestination(?string $destination = null): self
    {
        // validation for constraint: string
        if (!is_null($destination) && !is_string($destination)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($destination, true), gettype($destination)), __LINE__);
        }
        $this->destination = $destination;
        
        return $this;
    }
    /**
     * Get salePrice value
     * @return float|null
     */
    public function getSalePrice(): ?float
    {
        return $this->salePrice;
    }
    /**
     * Set salePrice value
     * @param float $salePrice
     * @return \Pggns\MidocoApi\Documents\StructType\AccountingInfoType
     */
    public function setSalePrice(?float $salePrice = null): self
    {
        // validation for constraint: float
        if (!is_null($salePrice) && !(is_float($salePrice) || is_numeric($salePrice))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($salePrice, true), gettype($salePrice)), __LINE__);
        }
        $this->salePrice = $salePrice;
        
        return $this;
    }
    /**
     * Get buyPrice value
     * @return float|null
     */
    public function getBuyPrice(): ?float
    {
        return $this->buyPrice;
    }
    /**
     * Set buyPrice value
     * @param float $buyPrice
     * @return \Pggns\MidocoApi\Documents\StructType\AccountingInfoType
     */
    public function setBuyPrice(?float $buyPrice = null): self
    {
        // validation for constraint: float
        if (!is_null($buyPrice) && !(is_float($buyPrice) || is_numeric($buyPrice))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($buyPrice, true), gettype($buyPrice)), __LINE__);
        }
        $this->buyPrice = $buyPrice;
        
        return $this;
    }
    /**
     * Get mediatorCommCalc value
     * @return float|null
     */
    public function getMediatorCommCalc(): ?float
    {
        return $this->mediatorCommCalc;
    }
    /**
     * Set mediatorCommCalc value
     * @param float $mediatorCommCalc
     * @return \Pggns\MidocoApi\Documents\StructType\AccountingInfoType
     */
    public function setMediatorCommCalc(?float $mediatorCommCalc = null): self
    {
        // validation for constraint: float
        if (!is_null($mediatorCommCalc) && !(is_float($mediatorCommCalc) || is_numeric($mediatorCommCalc))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($mediatorCommCalc, true), gettype($mediatorCommCalc)), __LINE__);
        }
        $this->mediatorCommCalc = $mediatorCommCalc;
        
        return $this;
    }
    /**
     * Get mediatorCommPaid value
     * @return float|null
     */
    public function getMediatorCommPaid(): ?float
    {
        return $this->mediatorCommPaid;
    }
    /**
     * Set mediatorCommPaid value
     * @param float $mediatorCommPaid
     * @return \Pggns\MidocoApi\Documents\StructType\AccountingInfoType
     */
    public function setMediatorCommPaid(?float $mediatorCommPaid = null): self
    {
        // validation for constraint: float
        if (!is_null($mediatorCommPaid) && !(is_float($mediatorCommPaid) || is_numeric($mediatorCommPaid))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($mediatorCommPaid, true), gettype($mediatorCommPaid)), __LINE__);
        }
        $this->mediatorCommPaid = $mediatorCommPaid;
        
        return $this;
    }
    /**
     * Get agencyCommCalc value
     * @return float|null
     */
    public function getAgencyCommCalc(): ?float
    {
        return $this->agencyCommCalc;
    }
    /**
     * Set agencyCommCalc value
     * @param float $agencyCommCalc
     * @return \Pggns\MidocoApi\Documents\StructType\AccountingInfoType
     */
    public function setAgencyCommCalc(?float $agencyCommCalc = null): self
    {
        // validation for constraint: float
        if (!is_null($agencyCommCalc) && !(is_float($agencyCommCalc) || is_numeric($agencyCommCalc))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($agencyCommCalc, true), gettype($agencyCommCalc)), __LINE__);
        }
        $this->agencyCommCalc = $agencyCommCalc;
        
        return $this;
    }
    /**
     * Get agencyCommPaid value
     * @return float|null
     */
    public function getAgencyCommPaid(): ?float
    {
        return $this->agencyCommPaid;
    }
    /**
     * Set agencyCommPaid value
     * @param float $agencyCommPaid
     * @return \Pggns\MidocoApi\Documents\StructType\AccountingInfoType
     */
    public function setAgencyCommPaid(?float $agencyCommPaid = null): self
    {
        // validation for constraint: float
        if (!is_null($agencyCommPaid) && !(is_float($agencyCommPaid) || is_numeric($agencyCommPaid))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($agencyCommPaid, true), gettype($agencyCommPaid)), __LINE__);
        }
        $this->agencyCommPaid = $agencyCommPaid;
        
        return $this;
    }
    /**
     * Get inkassoPrice value
     * @return float|null
     */
    public function getInkassoPrice(): ?float
    {
        return $this->inkassoPrice;
    }
    /**
     * Set inkassoPrice value
     * @param float $inkassoPrice
     * @return \Pggns\MidocoApi\Documents\StructType\AccountingInfoType
     */
    public function setInkassoPrice(?float $inkassoPrice = null): self
    {
        // validation for constraint: float
        if (!is_null($inkassoPrice) && !(is_float($inkassoPrice) || is_numeric($inkassoPrice))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($inkassoPrice, true), gettype($inkassoPrice)), __LINE__);
        }
        $this->inkassoPrice = $inkassoPrice;
        
        return $this;
    }
    /**
     * Get revenueSum value
     * @return float|null
     */
    public function getRevenueSum(): ?float
    {
        return $this->revenueSum;
    }
    /**
     * Set revenueSum value
     * @param float $revenueSum
     * @return \Pggns\MidocoApi\Documents\StructType\AccountingInfoType
     */
    public function setRevenueSum(?float $revenueSum = null): self
    {
        // validation for constraint: float
        if (!is_null($revenueSum) && !(is_float($revenueSum) || is_numeric($revenueSum))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($revenueSum, true), gettype($revenueSum)), __LINE__);
        }
        $this->revenueSum = $revenueSum;
        
        return $this;
    }
    /**
     * Get calcRevenue value
     * @return float|null
     */
    public function getCalcRevenue(): ?float
    {
        return $this->calcRevenue;
    }
    /**
     * Set calcRevenue value
     * @param float $calcRevenue
     * @return \Pggns\MidocoApi\Documents\StructType\AccountingInfoType
     */
    public function setCalcRevenue(?float $calcRevenue = null): self
    {
        // validation for constraint: float
        if (!is_null($calcRevenue) && !(is_float($calcRevenue) || is_numeric($calcRevenue))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($calcRevenue, true), gettype($calcRevenue)), __LINE__);
        }
        $this->calcRevenue = $calcRevenue;
        
        return $this;
    }
    /**
     * Get revenueBookingSum value
     * @return float|null
     */
    public function getRevenueBookingSum(): ?float
    {
        return $this->revenueBookingSum;
    }
    /**
     * Set revenueBookingSum value
     * @param float $revenueBookingSum
     * @return \Pggns\MidocoApi\Documents\StructType\AccountingInfoType
     */
    public function setRevenueBookingSum(?float $revenueBookingSum = null): self
    {
        // validation for constraint: float
        if (!is_null($revenueBookingSum) && !(is_float($revenueBookingSum) || is_numeric($revenueBookingSum))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($revenueBookingSum, true), gettype($revenueBookingSum)), __LINE__);
        }
        $this->revenueBookingSum = $revenueBookingSum;
        
        return $this;
    }
    /**
     * Get revenueBookingOpen value
     * @return float|null
     */
    public function getRevenueBookingOpen(): ?float
    {
        return $this->revenueBookingOpen;
    }
    /**
     * Set revenueBookingOpen value
     * @param float $revenueBookingOpen
     * @return \Pggns\MidocoApi\Documents\StructType\AccountingInfoType
     */
    public function setRevenueBookingOpen(?float $revenueBookingOpen = null): self
    {
        // validation for constraint: float
        if (!is_null($revenueBookingOpen) && !(is_float($revenueBookingOpen) || is_numeric($revenueBookingOpen))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($revenueBookingOpen, true), gettype($revenueBookingOpen)), __LINE__);
        }
        $this->revenueBookingOpen = $revenueBookingOpen;
        
        return $this;
    }
    /**
     * Get invoicedAmount value
     * @return float|null
     */
    public function getInvoicedAmount(): ?float
    {
        return $this->invoicedAmount;
    }
    /**
     * Set invoicedAmount value
     * @param float $invoicedAmount
     * @return \Pggns\MidocoApi\Documents\StructType\AccountingInfoType
     */
    public function setInvoicedAmount(?float $invoicedAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($invoicedAmount) && !(is_float($invoicedAmount) || is_numeric($invoicedAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($invoicedAmount, true), gettype($invoicedAmount)), __LINE__);
        }
        $this->invoicedAmount = $invoicedAmount;
        
        return $this;
    }
    /**
     * Get depositAmount value
     * @return float|null
     */
    public function getDepositAmount(): ?float
    {
        return $this->depositAmount;
    }
    /**
     * Set depositAmount value
     * @param float $depositAmount
     * @return \Pggns\MidocoApi\Documents\StructType\AccountingInfoType
     */
    public function setDepositAmount(?float $depositAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($depositAmount) && !(is_float($depositAmount) || is_numeric($depositAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($depositAmount, true), gettype($depositAmount)), __LINE__);
        }
        $this->depositAmount = $depositAmount;
        
        return $this;
    }
    /**
     * Get docTaxes value
     * @return float|null
     */
    public function getDocTaxes(): ?float
    {
        return $this->docTaxes;
    }
    /**
     * Set docTaxes value
     * @param float $docTaxes
     * @return \Pggns\MidocoApi\Documents\StructType\AccountingInfoType
     */
    public function setDocTaxes(?float $docTaxes = null): self
    {
        // validation for constraint: float
        if (!is_null($docTaxes) && !(is_float($docTaxes) || is_numeric($docTaxes))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($docTaxes, true), gettype($docTaxes)), __LINE__);
        }
        $this->docTaxes = $docTaxes;
        
        return $this;
    }
    /**
     * Get margin value
     * @return float|null
     */
    public function getMargin(): ?float
    {
        return $this->margin;
    }
    /**
     * Set margin value
     * @param float $margin
     * @return \Pggns\MidocoApi\Documents\StructType\AccountingInfoType
     */
    public function setMargin(?float $margin = null): self
    {
        // validation for constraint: float
        if (!is_null($margin) && !(is_float($margin) || is_numeric($margin))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($margin, true), gettype($margin)), __LINE__);
        }
        $this->margin = $margin;
        
        return $this;
    }
    /**
     * Get displayedCurrency value
     * @return string|null
     */
    public function getDisplayedCurrency(): ?string
    {
        return $this->displayedCurrency;
    }
    /**
     * Set displayedCurrency value
     * @param string $displayedCurrency
     * @return \Pggns\MidocoApi\Documents\StructType\AccountingInfoType
     */
    public function setDisplayedCurrency(?string $displayedCurrency = null): self
    {
        // validation for constraint: string
        if (!is_null($displayedCurrency) && !is_string($displayedCurrency)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($displayedCurrency, true), gettype($displayedCurrency)), __LINE__);
        }
        $this->displayedCurrency = $displayedCurrency;
        
        return $this;
    }
    /**
     * Get displayedItemPrice value
     * @return float|null
     */
    public function getDisplayedItemPrice(): ?float
    {
        return $this->displayedItemPrice;
    }
    /**
     * Set displayedItemPrice value
     * @param float $displayedItemPrice
     * @return \Pggns\MidocoApi\Documents\StructType\AccountingInfoType
     */
    public function setDisplayedItemPrice(?float $displayedItemPrice = null): self
    {
        // validation for constraint: float
        if (!is_null($displayedItemPrice) && !(is_float($displayedItemPrice) || is_numeric($displayedItemPrice))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($displayedItemPrice, true), gettype($displayedItemPrice)), __LINE__);
        }
        $this->displayedItemPrice = $displayedItemPrice;
        
        return $this;
    }
}
