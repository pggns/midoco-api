<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoOpenErOutputListType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoOpenErOutputListType extends AbstractStructBase
{
    /**
     * The filiale
     * @var string|null
     */
    protected ?string $filiale = null;
    /**
     * The userEmail
     * @var string|null
     */
    protected ?string $userEmail = null;
    /**
     * The customerId
     * @var int|null
     */
    protected ?int $customerId = null;
    /**
     * The customerName
     * @var string|null
     */
    protected ?string $customerName = null;
    /**
     * The customerForename
     * @var string|null
     */
    protected ?string $customerForename = null;
    /**
     * The orderNo
     * @var int|null
     */
    protected ?int $orderNo = null;
    /**
     * The startTravel
     * @var string|null
     */
    protected ?string $startTravel = null;
    /**
     * The bookingDate
     * @var string|null
     */
    protected ?string $bookingDate = null;
    /**
     * The supplierId
     * @var string|null
     */
    protected ?string $supplierId = null;
    /**
     * The amount
     * @var float|null
     */
    protected ?float $amount = null;
    /**
     * Constructor method for MidocoOpenErOutputListType
     * @uses MidocoOpenErOutputListType::setFiliale()
     * @uses MidocoOpenErOutputListType::setUserEmail()
     * @uses MidocoOpenErOutputListType::setCustomerId()
     * @uses MidocoOpenErOutputListType::setCustomerName()
     * @uses MidocoOpenErOutputListType::setCustomerForename()
     * @uses MidocoOpenErOutputListType::setOrderNo()
     * @uses MidocoOpenErOutputListType::setStartTravel()
     * @uses MidocoOpenErOutputListType::setBookingDate()
     * @uses MidocoOpenErOutputListType::setSupplierId()
     * @uses MidocoOpenErOutputListType::setAmount()
     * @param string $filiale
     * @param string $userEmail
     * @param int $customerId
     * @param string $customerName
     * @param string $customerForename
     * @param int $orderNo
     * @param string $startTravel
     * @param string $bookingDate
     * @param string $supplierId
     * @param float $amount
     */
    public function __construct(?string $filiale = null, ?string $userEmail = null, ?int $customerId = null, ?string $customerName = null, ?string $customerForename = null, ?int $orderNo = null, ?string $startTravel = null, ?string $bookingDate = null, ?string $supplierId = null, ?float $amount = null)
    {
        $this
            ->setFiliale($filiale)
            ->setUserEmail($userEmail)
            ->setCustomerId($customerId)
            ->setCustomerName($customerName)
            ->setCustomerForename($customerForename)
            ->setOrderNo($orderNo)
            ->setStartTravel($startTravel)
            ->setBookingDate($bookingDate)
            ->setSupplierId($supplierId)
            ->setAmount($amount);
    }
    /**
     * Get filiale value
     * @return string|null
     */
    public function getFiliale(): ?string
    {
        return $this->filiale;
    }
    /**
     * Set filiale value
     * @param string $filiale
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoOpenErOutputListType
     */
    public function setFiliale(?string $filiale = null): self
    {
        // validation for constraint: string
        if (!is_null($filiale) && !is_string($filiale)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($filiale, true), gettype($filiale)), __LINE__);
        }
        $this->filiale = $filiale;
        
        return $this;
    }
    /**
     * Get userEmail value
     * @return string|null
     */
    public function getUserEmail(): ?string
    {
        return $this->userEmail;
    }
    /**
     * Set userEmail value
     * @param string $userEmail
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoOpenErOutputListType
     */
    public function setUserEmail(?string $userEmail = null): self
    {
        // validation for constraint: string
        if (!is_null($userEmail) && !is_string($userEmail)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($userEmail, true), gettype($userEmail)), __LINE__);
        }
        $this->userEmail = $userEmail;
        
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
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoOpenErOutputListType
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
     * Get customerName value
     * @return string|null
     */
    public function getCustomerName(): ?string
    {
        return $this->customerName;
    }
    /**
     * Set customerName value
     * @param string $customerName
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoOpenErOutputListType
     */
    public function setCustomerName(?string $customerName = null): self
    {
        // validation for constraint: string
        if (!is_null($customerName) && !is_string($customerName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerName, true), gettype($customerName)), __LINE__);
        }
        $this->customerName = $customerName;
        
        return $this;
    }
    /**
     * Get customerForename value
     * @return string|null
     */
    public function getCustomerForename(): ?string
    {
        return $this->customerForename;
    }
    /**
     * Set customerForename value
     * @param string $customerForename
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoOpenErOutputListType
     */
    public function setCustomerForename(?string $customerForename = null): self
    {
        // validation for constraint: string
        if (!is_null($customerForename) && !is_string($customerForename)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerForename, true), gettype($customerForename)), __LINE__);
        }
        $this->customerForename = $customerForename;
        
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
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoOpenErOutputListType
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
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoOpenErOutputListType
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
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoOpenErOutputListType
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
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoOpenErOutputListType
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
     * Get amount value
     * @return float|null
     */
    public function getAmount(): ?float
    {
        return $this->amount;
    }
    /**
     * Set amount value
     * @param float $amount
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoOpenErOutputListType
     */
    public function setAmount(?float $amount = null): self
    {
        // validation for constraint: float
        if (!is_null($amount) && !(is_float($amount) || is_numeric($amount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($amount, true), gettype($amount)), __LINE__);
        }
        $this->amount = $amount;
        
        return $this;
    }
}
