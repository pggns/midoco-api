<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FlightStatDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class FlightStatDTO extends AbstractStructBase
{
    /**
     * The airlineFees
     * @var float|null
     */
    protected ?float $airlineFees = null;
    /**
     * The airlineId
     * @var int|null
     */
    protected ?int $airlineId = null;
    /**
     * The commission
     * @var float|null
     */
    protected ?float $commission = null;
    /**
     * The creationDate
     * @var string|null
     */
    protected ?string $creationDate = null;
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
     * The documentTypeId
     * @var int|null
     */
    protected ?int $documentTypeId = null;
    /**
     * The extSystemId
     * @var int|null
     */
    protected ?int $extSystemId = null;
    /**
     * The farePrice
     * @var float|null
     */
    protected ?float $farePrice = null;
    /**
     * The fareTypeId
     * @var int|null
     */
    protected ?int $fareTypeId = null;
    /**
     * The feeHidden
     * @var float|null
     */
    protected ?float $feeHidden = null;
    /**
     * The feeVisible
     * @var float|null
     */
    protected ?float $feeVisible = null;
    /**
     * The flightItemId
     * @var int|null
     */
    protected ?int $flightItemId = null;
    /**
     * The itemPrice
     * @var float|null
     */
    protected ?float $itemPrice = null;
    /**
     * The orderId
     * @var int|null
     */
    protected ?int $orderId = null;
    /**
     * The orgUnitId
     * @var int|null
     */
    protected ?int $orgUnitId = null;
    /**
     * The tax
     * @var float|null
     */
    protected ?float $tax = null;
    /**
     * The ticketSellItemId
     * @var int|null
     */
    protected ?int $ticketSellItemId = null;
    /**
     * The travelDate
     * @var string|null
     */
    protected ?string $travelDate = null;
    /**
     * Constructor method for FlightStatDTO
     * @uses FlightStatDTO::setAirlineFees()
     * @uses FlightStatDTO::setAirlineId()
     * @uses FlightStatDTO::setCommission()
     * @uses FlightStatDTO::setCreationDate()
     * @uses FlightStatDTO::setDepartureCodeId()
     * @uses FlightStatDTO::setDestinationCodeId()
     * @uses FlightStatDTO::setDestinationKeyId()
     * @uses FlightStatDTO::setDocumentTypeId()
     * @uses FlightStatDTO::setExtSystemId()
     * @uses FlightStatDTO::setFarePrice()
     * @uses FlightStatDTO::setFareTypeId()
     * @uses FlightStatDTO::setFeeHidden()
     * @uses FlightStatDTO::setFeeVisible()
     * @uses FlightStatDTO::setFlightItemId()
     * @uses FlightStatDTO::setItemPrice()
     * @uses FlightStatDTO::setOrderId()
     * @uses FlightStatDTO::setOrgUnitId()
     * @uses FlightStatDTO::setTax()
     * @uses FlightStatDTO::setTicketSellItemId()
     * @uses FlightStatDTO::setTravelDate()
     * @param float $airlineFees
     * @param int $airlineId
     * @param float $commission
     * @param string $creationDate
     * @param int $departureCodeId
     * @param int $destinationCodeId
     * @param int $destinationKeyId
     * @param int $documentTypeId
     * @param int $extSystemId
     * @param float $farePrice
     * @param int $fareTypeId
     * @param float $feeHidden
     * @param float $feeVisible
     * @param int $flightItemId
     * @param float $itemPrice
     * @param int $orderId
     * @param int $orgUnitId
     * @param float $tax
     * @param int $ticketSellItemId
     * @param string $travelDate
     */
    public function __construct(?float $airlineFees = null, ?int $airlineId = null, ?float $commission = null, ?string $creationDate = null, ?int $departureCodeId = null, ?int $destinationCodeId = null, ?int $destinationKeyId = null, ?int $documentTypeId = null, ?int $extSystemId = null, ?float $farePrice = null, ?int $fareTypeId = null, ?float $feeHidden = null, ?float $feeVisible = null, ?int $flightItemId = null, ?float $itemPrice = null, ?int $orderId = null, ?int $orgUnitId = null, ?float $tax = null, ?int $ticketSellItemId = null, ?string $travelDate = null)
    {
        $this
            ->setAirlineFees($airlineFees)
            ->setAirlineId($airlineId)
            ->setCommission($commission)
            ->setCreationDate($creationDate)
            ->setDepartureCodeId($departureCodeId)
            ->setDestinationCodeId($destinationCodeId)
            ->setDestinationKeyId($destinationKeyId)
            ->setDocumentTypeId($documentTypeId)
            ->setExtSystemId($extSystemId)
            ->setFarePrice($farePrice)
            ->setFareTypeId($fareTypeId)
            ->setFeeHidden($feeHidden)
            ->setFeeVisible($feeVisible)
            ->setFlightItemId($flightItemId)
            ->setItemPrice($itemPrice)
            ->setOrderId($orderId)
            ->setOrgUnitId($orgUnitId)
            ->setTax($tax)
            ->setTicketSellItemId($ticketSellItemId)
            ->setTravelDate($travelDate);
    }
    /**
     * Get airlineFees value
     * @return float|null
     */
    public function getAirlineFees(): ?float
    {
        return $this->airlineFees;
    }
    /**
     * Set airlineFees value
     * @param float $airlineFees
     * @return \Pggns\MidocoApi\Mis\StructType\FlightStatDTO
     */
    public function setAirlineFees(?float $airlineFees = null): self
    {
        // validation for constraint: float
        if (!is_null($airlineFees) && !(is_float($airlineFees) || is_numeric($airlineFees))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($airlineFees, true), gettype($airlineFees)), __LINE__);
        }
        $this->airlineFees = $airlineFees;
        
        return $this;
    }
    /**
     * Get airlineId value
     * @return int|null
     */
    public function getAirlineId(): ?int
    {
        return $this->airlineId;
    }
    /**
     * Set airlineId value
     * @param int $airlineId
     * @return \Pggns\MidocoApi\Mis\StructType\FlightStatDTO
     */
    public function setAirlineId(?int $airlineId = null): self
    {
        // validation for constraint: int
        if (!is_null($airlineId) && !(is_int($airlineId) || ctype_digit($airlineId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($airlineId, true), gettype($airlineId)), __LINE__);
        }
        $this->airlineId = $airlineId;
        
        return $this;
    }
    /**
     * Get commission value
     * @return float|null
     */
    public function getCommission(): ?float
    {
        return $this->commission;
    }
    /**
     * Set commission value
     * @param float $commission
     * @return \Pggns\MidocoApi\Mis\StructType\FlightStatDTO
     */
    public function setCommission(?float $commission = null): self
    {
        // validation for constraint: float
        if (!is_null($commission) && !(is_float($commission) || is_numeric($commission))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($commission, true), gettype($commission)), __LINE__);
        }
        $this->commission = $commission;
        
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
     * @return \Pggns\MidocoApi\Mis\StructType\FlightStatDTO
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
     * @return \Pggns\MidocoApi\Mis\StructType\FlightStatDTO
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
     * @return \Pggns\MidocoApi\Mis\StructType\FlightStatDTO
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
     * @return \Pggns\MidocoApi\Mis\StructType\FlightStatDTO
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
     * Get documentTypeId value
     * @return int|null
     */
    public function getDocumentTypeId(): ?int
    {
        return $this->documentTypeId;
    }
    /**
     * Set documentTypeId value
     * @param int $documentTypeId
     * @return \Pggns\MidocoApi\Mis\StructType\FlightStatDTO
     */
    public function setDocumentTypeId(?int $documentTypeId = null): self
    {
        // validation for constraint: int
        if (!is_null($documentTypeId) && !(is_int($documentTypeId) || ctype_digit($documentTypeId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($documentTypeId, true), gettype($documentTypeId)), __LINE__);
        }
        $this->documentTypeId = $documentTypeId;
        
        return $this;
    }
    /**
     * Get extSystemId value
     * @return int|null
     */
    public function getExtSystemId(): ?int
    {
        return $this->extSystemId;
    }
    /**
     * Set extSystemId value
     * @param int $extSystemId
     * @return \Pggns\MidocoApi\Mis\StructType\FlightStatDTO
     */
    public function setExtSystemId(?int $extSystemId = null): self
    {
        // validation for constraint: int
        if (!is_null($extSystemId) && !(is_int($extSystemId) || ctype_digit($extSystemId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($extSystemId, true), gettype($extSystemId)), __LINE__);
        }
        $this->extSystemId = $extSystemId;
        
        return $this;
    }
    /**
     * Get farePrice value
     * @return float|null
     */
    public function getFarePrice(): ?float
    {
        return $this->farePrice;
    }
    /**
     * Set farePrice value
     * @param float $farePrice
     * @return \Pggns\MidocoApi\Mis\StructType\FlightStatDTO
     */
    public function setFarePrice(?float $farePrice = null): self
    {
        // validation for constraint: float
        if (!is_null($farePrice) && !(is_float($farePrice) || is_numeric($farePrice))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($farePrice, true), gettype($farePrice)), __LINE__);
        }
        $this->farePrice = $farePrice;
        
        return $this;
    }
    /**
     * Get fareTypeId value
     * @return int|null
     */
    public function getFareTypeId(): ?int
    {
        return $this->fareTypeId;
    }
    /**
     * Set fareTypeId value
     * @param int $fareTypeId
     * @return \Pggns\MidocoApi\Mis\StructType\FlightStatDTO
     */
    public function setFareTypeId(?int $fareTypeId = null): self
    {
        // validation for constraint: int
        if (!is_null($fareTypeId) && !(is_int($fareTypeId) || ctype_digit($fareTypeId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($fareTypeId, true), gettype($fareTypeId)), __LINE__);
        }
        $this->fareTypeId = $fareTypeId;
        
        return $this;
    }
    /**
     * Get feeHidden value
     * @return float|null
     */
    public function getFeeHidden(): ?float
    {
        return $this->feeHidden;
    }
    /**
     * Set feeHidden value
     * @param float $feeHidden
     * @return \Pggns\MidocoApi\Mis\StructType\FlightStatDTO
     */
    public function setFeeHidden(?float $feeHidden = null): self
    {
        // validation for constraint: float
        if (!is_null($feeHidden) && !(is_float($feeHidden) || is_numeric($feeHidden))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($feeHidden, true), gettype($feeHidden)), __LINE__);
        }
        $this->feeHidden = $feeHidden;
        
        return $this;
    }
    /**
     * Get feeVisible value
     * @return float|null
     */
    public function getFeeVisible(): ?float
    {
        return $this->feeVisible;
    }
    /**
     * Set feeVisible value
     * @param float $feeVisible
     * @return \Pggns\MidocoApi\Mis\StructType\FlightStatDTO
     */
    public function setFeeVisible(?float $feeVisible = null): self
    {
        // validation for constraint: float
        if (!is_null($feeVisible) && !(is_float($feeVisible) || is_numeric($feeVisible))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($feeVisible, true), gettype($feeVisible)), __LINE__);
        }
        $this->feeVisible = $feeVisible;
        
        return $this;
    }
    /**
     * Get flightItemId value
     * @return int|null
     */
    public function getFlightItemId(): ?int
    {
        return $this->flightItemId;
    }
    /**
     * Set flightItemId value
     * @param int $flightItemId
     * @return \Pggns\MidocoApi\Mis\StructType\FlightStatDTO
     */
    public function setFlightItemId(?int $flightItemId = null): self
    {
        // validation for constraint: int
        if (!is_null($flightItemId) && !(is_int($flightItemId) || ctype_digit($flightItemId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($flightItemId, true), gettype($flightItemId)), __LINE__);
        }
        $this->flightItemId = $flightItemId;
        
        return $this;
    }
    /**
     * Get itemPrice value
     * @return float|null
     */
    public function getItemPrice(): ?float
    {
        return $this->itemPrice;
    }
    /**
     * Set itemPrice value
     * @param float $itemPrice
     * @return \Pggns\MidocoApi\Mis\StructType\FlightStatDTO
     */
    public function setItemPrice(?float $itemPrice = null): self
    {
        // validation for constraint: float
        if (!is_null($itemPrice) && !(is_float($itemPrice) || is_numeric($itemPrice))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($itemPrice, true), gettype($itemPrice)), __LINE__);
        }
        $this->itemPrice = $itemPrice;
        
        return $this;
    }
    /**
     * Get orderId value
     * @return int|null
     */
    public function getOrderId(): ?int
    {
        return $this->orderId;
    }
    /**
     * Set orderId value
     * @param int $orderId
     * @return \Pggns\MidocoApi\Mis\StructType\FlightStatDTO
     */
    public function setOrderId(?int $orderId = null): self
    {
        // validation for constraint: int
        if (!is_null($orderId) && !(is_int($orderId) || ctype_digit($orderId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($orderId, true), gettype($orderId)), __LINE__);
        }
        $this->orderId = $orderId;
        
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
     * @return \Pggns\MidocoApi\Mis\StructType\FlightStatDTO
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
     * Get tax value
     * @return float|null
     */
    public function getTax(): ?float
    {
        return $this->tax;
    }
    /**
     * Set tax value
     * @param float $tax
     * @return \Pggns\MidocoApi\Mis\StructType\FlightStatDTO
     */
    public function setTax(?float $tax = null): self
    {
        // validation for constraint: float
        if (!is_null($tax) && !(is_float($tax) || is_numeric($tax))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($tax, true), gettype($tax)), __LINE__);
        }
        $this->tax = $tax;
        
        return $this;
    }
    /**
     * Get ticketSellItemId value
     * @return int|null
     */
    public function getTicketSellItemId(): ?int
    {
        return $this->ticketSellItemId;
    }
    /**
     * Set ticketSellItemId value
     * @param int $ticketSellItemId
     * @return \Pggns\MidocoApi\Mis\StructType\FlightStatDTO
     */
    public function setTicketSellItemId(?int $ticketSellItemId = null): self
    {
        // validation for constraint: int
        if (!is_null($ticketSellItemId) && !(is_int($ticketSellItemId) || ctype_digit($ticketSellItemId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($ticketSellItemId, true), gettype($ticketSellItemId)), __LINE__);
        }
        $this->ticketSellItemId = $ticketSellItemId;
        
        return $this;
    }
    /**
     * Get travelDate value
     * @return string|null
     */
    public function getTravelDate(): ?string
    {
        return $this->travelDate;
    }
    /**
     * Set travelDate value
     * @param string $travelDate
     * @return \Pggns\MidocoApi\Mis\StructType\FlightStatDTO
     */
    public function setTravelDate(?string $travelDate = null): self
    {
        // validation for constraint: string
        if (!is_null($travelDate) && !is_string($travelDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($travelDate, true), gettype($travelDate)), __LINE__);
        }
        $this->travelDate = $travelDate;
        
        return $this;
    }
}
