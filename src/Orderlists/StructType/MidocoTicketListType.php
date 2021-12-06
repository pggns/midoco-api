<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoTicketListType StructType
 * @subpackage Structs
 */
class MidocoTicketListType extends AbstractStructBase
{
    /**
     * The ticketNo
     * @var string|null
     */
    protected ?string $ticketNo = null;
    /**
     * The ticketType
     * @var string|null
     */
    protected ?string $ticketType = null;
    /**
     * The filekey
     * @var string|null
     */
    protected ?string $filekey = null;
    /**
     * The issueDate
     * @var string|null
     */
    protected ?string $issueDate = null;
    /**
     * The ticketValidator
     * @var string|null
     */
    protected ?string $ticketValidator = null;
    /**
     * The farePrice
     * @var float|null
     */
    protected ?float $farePrice = null;
    /**
     * The tax
     * @var float|null
     */
    protected ?float $tax = null;
    /**
     * The ticketPrice
     * @var float|null
     */
    protected ?float $ticketPrice = null;
    /**
     * The ticketInkasso
     * @var string|null
     */
    protected ?string $ticketInkasso = null;
    /**
     * The fareType
     * @var string|null
     */
    protected ?string $fareType = null;
    /**
     * The orderNo
     * @var int|null
     */
    protected ?int $orderNo = null;
    /**
     * The hiddenFee
     * @var float|null
     */
    protected ?float $hiddenFee = null;
    /**
     * The explicitFee
     * @var float|null
     */
    protected ?float $explicitFee = null;
    /**
     * The debitorNo
     * @var string|null
     */
    protected ?string $debitorNo = null;
    /**
     * The route
     * @var string|null
     */
    protected ?string $route = null;
    /**
     * The carrier
     * @var string|null
     */
    protected ?string $carrier = null;
    /**
     * The flightNo
     * @var string|null
     */
    protected ?string $flightNo = null;
    /**
     * The supplierId
     * @var string|null
     */
    protected ?string $supplierId = null;
    /**
     * The bookingDate
     * @var string|null
     */
    protected ?string $bookingDate = null;
    /**
     * The startDate
     * @var string|null
     */
    protected ?string $startDate = null;
    /**
     * Constructor method for MidocoTicketListType
     * @uses MidocoTicketListType::setTicketNo()
     * @uses MidocoTicketListType::setTicketType()
     * @uses MidocoTicketListType::setFilekey()
     * @uses MidocoTicketListType::setIssueDate()
     * @uses MidocoTicketListType::setTicketValidator()
     * @uses MidocoTicketListType::setFarePrice()
     * @uses MidocoTicketListType::setTax()
     * @uses MidocoTicketListType::setTicketPrice()
     * @uses MidocoTicketListType::setTicketInkasso()
     * @uses MidocoTicketListType::setFareType()
     * @uses MidocoTicketListType::setOrderNo()
     * @uses MidocoTicketListType::setHiddenFee()
     * @uses MidocoTicketListType::setExplicitFee()
     * @uses MidocoTicketListType::setDebitorNo()
     * @uses MidocoTicketListType::setRoute()
     * @uses MidocoTicketListType::setCarrier()
     * @uses MidocoTicketListType::setFlightNo()
     * @uses MidocoTicketListType::setSupplierId()
     * @uses MidocoTicketListType::setBookingDate()
     * @uses MidocoTicketListType::setStartDate()
     * @param string $ticketNo
     * @param string $ticketType
     * @param string $filekey
     * @param string $issueDate
     * @param string $ticketValidator
     * @param float $farePrice
     * @param float $tax
     * @param float $ticketPrice
     * @param string $ticketInkasso
     * @param string $fareType
     * @param int $orderNo
     * @param float $hiddenFee
     * @param float $explicitFee
     * @param string $debitorNo
     * @param string $route
     * @param string $carrier
     * @param string $flightNo
     * @param string $supplierId
     * @param string $bookingDate
     * @param string $startDate
     */
    public function __construct(?string $ticketNo = null, ?string $ticketType = null, ?string $filekey = null, ?string $issueDate = null, ?string $ticketValidator = null, ?float $farePrice = null, ?float $tax = null, ?float $ticketPrice = null, ?string $ticketInkasso = null, ?string $fareType = null, ?int $orderNo = null, ?float $hiddenFee = null, ?float $explicitFee = null, ?string $debitorNo = null, ?string $route = null, ?string $carrier = null, ?string $flightNo = null, ?string $supplierId = null, ?string $bookingDate = null, ?string $startDate = null)
    {
        $this
            ->setTicketNo($ticketNo)
            ->setTicketType($ticketType)
            ->setFilekey($filekey)
            ->setIssueDate($issueDate)
            ->setTicketValidator($ticketValidator)
            ->setFarePrice($farePrice)
            ->setTax($tax)
            ->setTicketPrice($ticketPrice)
            ->setTicketInkasso($ticketInkasso)
            ->setFareType($fareType)
            ->setOrderNo($orderNo)
            ->setHiddenFee($hiddenFee)
            ->setExplicitFee($explicitFee)
            ->setDebitorNo($debitorNo)
            ->setRoute($route)
            ->setCarrier($carrier)
            ->setFlightNo($flightNo)
            ->setSupplierId($supplierId)
            ->setBookingDate($bookingDate)
            ->setStartDate($startDate);
    }
    /**
     * Get ticketNo value
     * @return string|null
     */
    public function getTicketNo(): ?string
    {
        return $this->ticketNo;
    }
    /**
     * Set ticketNo value
     * @param string $ticketNo
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoTicketListType
     */
    public function setTicketNo(?string $ticketNo = null): self
    {
        // validation for constraint: string
        if (!is_null($ticketNo) && !is_string($ticketNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ticketNo, true), gettype($ticketNo)), __LINE__);
        }
        $this->ticketNo = $ticketNo;
        
        return $this;
    }
    /**
     * Get ticketType value
     * @return string|null
     */
    public function getTicketType(): ?string
    {
        return $this->ticketType;
    }
    /**
     * Set ticketType value
     * @param string $ticketType
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoTicketListType
     */
    public function setTicketType(?string $ticketType = null): self
    {
        // validation for constraint: string
        if (!is_null($ticketType) && !is_string($ticketType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ticketType, true), gettype($ticketType)), __LINE__);
        }
        $this->ticketType = $ticketType;
        
        return $this;
    }
    /**
     * Get filekey value
     * @return string|null
     */
    public function getFilekey(): ?string
    {
        return $this->filekey;
    }
    /**
     * Set filekey value
     * @param string $filekey
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoTicketListType
     */
    public function setFilekey(?string $filekey = null): self
    {
        // validation for constraint: string
        if (!is_null($filekey) && !is_string($filekey)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($filekey, true), gettype($filekey)), __LINE__);
        }
        $this->filekey = $filekey;
        
        return $this;
    }
    /**
     * Get issueDate value
     * @return string|null
     */
    public function getIssueDate(): ?string
    {
        return $this->issueDate;
    }
    /**
     * Set issueDate value
     * @param string $issueDate
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoTicketListType
     */
    public function setIssueDate(?string $issueDate = null): self
    {
        // validation for constraint: string
        if (!is_null($issueDate) && !is_string($issueDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($issueDate, true), gettype($issueDate)), __LINE__);
        }
        $this->issueDate = $issueDate;
        
        return $this;
    }
    /**
     * Get ticketValidator value
     * @return string|null
     */
    public function getTicketValidator(): ?string
    {
        return $this->ticketValidator;
    }
    /**
     * Set ticketValidator value
     * @param string $ticketValidator
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoTicketListType
     */
    public function setTicketValidator(?string $ticketValidator = null): self
    {
        // validation for constraint: string
        if (!is_null($ticketValidator) && !is_string($ticketValidator)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ticketValidator, true), gettype($ticketValidator)), __LINE__);
        }
        $this->ticketValidator = $ticketValidator;
        
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
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoTicketListType
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
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoTicketListType
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
     * Get ticketPrice value
     * @return float|null
     */
    public function getTicketPrice(): ?float
    {
        return $this->ticketPrice;
    }
    /**
     * Set ticketPrice value
     * @param float $ticketPrice
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoTicketListType
     */
    public function setTicketPrice(?float $ticketPrice = null): self
    {
        // validation for constraint: float
        if (!is_null($ticketPrice) && !(is_float($ticketPrice) || is_numeric($ticketPrice))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($ticketPrice, true), gettype($ticketPrice)), __LINE__);
        }
        $this->ticketPrice = $ticketPrice;
        
        return $this;
    }
    /**
     * Get ticketInkasso value
     * @return string|null
     */
    public function getTicketInkasso(): ?string
    {
        return $this->ticketInkasso;
    }
    /**
     * Set ticketInkasso value
     * @param string $ticketInkasso
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoTicketListType
     */
    public function setTicketInkasso(?string $ticketInkasso = null): self
    {
        // validation for constraint: string
        if (!is_null($ticketInkasso) && !is_string($ticketInkasso)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ticketInkasso, true), gettype($ticketInkasso)), __LINE__);
        }
        $this->ticketInkasso = $ticketInkasso;
        
        return $this;
    }
    /**
     * Get fareType value
     * @return string|null
     */
    public function getFareType(): ?string
    {
        return $this->fareType;
    }
    /**
     * Set fareType value
     * @param string $fareType
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoTicketListType
     */
    public function setFareType(?string $fareType = null): self
    {
        // validation for constraint: string
        if (!is_null($fareType) && !is_string($fareType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fareType, true), gettype($fareType)), __LINE__);
        }
        $this->fareType = $fareType;
        
        return $this;
    }
    /**
     * Get orderNo value
     * @return int|null
     */
    public function getOrderNo(): ?int
    {
        return $this->orderNo;
    }
    /**
     * Set orderNo value
     * @param int $orderNo
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoTicketListType
     */
    public function setOrderNo(?int $orderNo = null): self
    {
        // validation for constraint: int
        if (!is_null($orderNo) && !(is_int($orderNo) || ctype_digit($orderNo))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($orderNo, true), gettype($orderNo)), __LINE__);
        }
        $this->orderNo = $orderNo;
        
        return $this;
    }
    /**
     * Get hiddenFee value
     * @return float|null
     */
    public function getHiddenFee(): ?float
    {
        return $this->hiddenFee;
    }
    /**
     * Set hiddenFee value
     * @param float $hiddenFee
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoTicketListType
     */
    public function setHiddenFee(?float $hiddenFee = null): self
    {
        // validation for constraint: float
        if (!is_null($hiddenFee) && !(is_float($hiddenFee) || is_numeric($hiddenFee))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($hiddenFee, true), gettype($hiddenFee)), __LINE__);
        }
        $this->hiddenFee = $hiddenFee;
        
        return $this;
    }
    /**
     * Get explicitFee value
     * @return float|null
     */
    public function getExplicitFee(): ?float
    {
        return $this->explicitFee;
    }
    /**
     * Set explicitFee value
     * @param float $explicitFee
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoTicketListType
     */
    public function setExplicitFee(?float $explicitFee = null): self
    {
        // validation for constraint: float
        if (!is_null($explicitFee) && !(is_float($explicitFee) || is_numeric($explicitFee))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($explicitFee, true), gettype($explicitFee)), __LINE__);
        }
        $this->explicitFee = $explicitFee;
        
        return $this;
    }
    /**
     * Get debitorNo value
     * @return string|null
     */
    public function getDebitorNo(): ?string
    {
        return $this->debitorNo;
    }
    /**
     * Set debitorNo value
     * @param string $debitorNo
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoTicketListType
     */
    public function setDebitorNo(?string $debitorNo = null): self
    {
        // validation for constraint: string
        if (!is_null($debitorNo) && !is_string($debitorNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($debitorNo, true), gettype($debitorNo)), __LINE__);
        }
        $this->debitorNo = $debitorNo;
        
        return $this;
    }
    /**
     * Get route value
     * @return string|null
     */
    public function getRoute(): ?string
    {
        return $this->route;
    }
    /**
     * Set route value
     * @param string $route
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoTicketListType
     */
    public function setRoute(?string $route = null): self
    {
        // validation for constraint: string
        if (!is_null($route) && !is_string($route)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($route, true), gettype($route)), __LINE__);
        }
        $this->route = $route;
        
        return $this;
    }
    /**
     * Get carrier value
     * @return string|null
     */
    public function getCarrier(): ?string
    {
        return $this->carrier;
    }
    /**
     * Set carrier value
     * @param string $carrier
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoTicketListType
     */
    public function setCarrier(?string $carrier = null): self
    {
        // validation for constraint: string
        if (!is_null($carrier) && !is_string($carrier)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($carrier, true), gettype($carrier)), __LINE__);
        }
        $this->carrier = $carrier;
        
        return $this;
    }
    /**
     * Get flightNo value
     * @return string|null
     */
    public function getFlightNo(): ?string
    {
        return $this->flightNo;
    }
    /**
     * Set flightNo value
     * @param string $flightNo
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoTicketListType
     */
    public function setFlightNo(?string $flightNo = null): self
    {
        // validation for constraint: string
        if (!is_null($flightNo) && !is_string($flightNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($flightNo, true), gettype($flightNo)), __LINE__);
        }
        $this->flightNo = $flightNo;
        
        return $this;
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
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoTicketListType
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
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoTicketListType
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
     * Get startDate value
     * @return string|null
     */
    public function getStartDate(): ?string
    {
        return $this->startDate;
    }
    /**
     * Set startDate value
     * @param string $startDate
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoTicketListType
     */
    public function setStartDate(?string $startDate = null): self
    {
        // validation for constraint: string
        if (!is_null($startDate) && !is_string($startDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($startDate, true), gettype($startDate)), __LINE__);
        }
        $this->startDate = $startDate;
        
        return $this;
    }
}
