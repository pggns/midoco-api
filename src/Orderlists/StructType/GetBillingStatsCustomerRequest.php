<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetBillingStatsCustomerRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetBillingStatsCustomerRequest extends AbstractStructBase
{
    /**
     * The supplier
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $supplier = null;
    /**
     * The unitName
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $unitName = null;
    /**
     * The receiptDateFrom
     * @var string|null
     */
    protected ?string $receiptDateFrom = null;
    /**
     * The receiptDateTo
     * @var string|null
     */
    protected ?string $receiptDateTo = null;
    /**
     * The debitorNo
     * @var string|null
     */
    protected ?string $debitorNo = null;
    /**
     * The startTravelFrom
     * @var string|null
     */
    protected ?string $startTravelFrom = null;
    /**
     * The startTravelTo
     * @var string|null
     */
    protected ?string $startTravelTo = null;
    /**
     * The customerId
     * @var int|null
     */
    protected ?int $customerId = null;
    /**
     * The orderNo
     * @var int|null
     */
    protected ?int $orderNo = null;
    /**
     * The creationUser
     * @var int|null
     */
    protected ?int $creationUser = null;
    /**
     * The accrualNonZero
     * @var bool|null
     */
    protected ?bool $accrualNonZero = null;
    /**
     * Constructor method for GetBillingStatsCustomerRequest
     * @uses GetBillingStatsCustomerRequest::setSupplier()
     * @uses GetBillingStatsCustomerRequest::setUnitName()
     * @uses GetBillingStatsCustomerRequest::setReceiptDateFrom()
     * @uses GetBillingStatsCustomerRequest::setReceiptDateTo()
     * @uses GetBillingStatsCustomerRequest::setDebitorNo()
     * @uses GetBillingStatsCustomerRequest::setStartTravelFrom()
     * @uses GetBillingStatsCustomerRequest::setStartTravelTo()
     * @uses GetBillingStatsCustomerRequest::setCustomerId()
     * @uses GetBillingStatsCustomerRequest::setOrderNo()
     * @uses GetBillingStatsCustomerRequest::setCreationUser()
     * @uses GetBillingStatsCustomerRequest::setAccrualNonZero()
     * @param string[] $supplier
     * @param string[] $unitName
     * @param string $receiptDateFrom
     * @param string $receiptDateTo
     * @param string $debitorNo
     * @param string $startTravelFrom
     * @param string $startTravelTo
     * @param int $customerId
     * @param int $orderNo
     * @param int $creationUser
     * @param bool $accrualNonZero
     */
    public function __construct(?array $supplier = null, ?array $unitName = null, ?string $receiptDateFrom = null, ?string $receiptDateTo = null, ?string $debitorNo = null, ?string $startTravelFrom = null, ?string $startTravelTo = null, ?int $customerId = null, ?int $orderNo = null, ?int $creationUser = null, ?bool $accrualNonZero = null)
    {
        $this
            ->setSupplier($supplier)
            ->setUnitName($unitName)
            ->setReceiptDateFrom($receiptDateFrom)
            ->setReceiptDateTo($receiptDateTo)
            ->setDebitorNo($debitorNo)
            ->setStartTravelFrom($startTravelFrom)
            ->setStartTravelTo($startTravelTo)
            ->setCustomerId($customerId)
            ->setOrderNo($orderNo)
            ->setCreationUser($creationUser)
            ->setAccrualNonZero($accrualNonZero);
    }
    /**
     * Get supplier value
     * @return string[]
     */
    public function getSupplier(): ?array
    {
        return $this->supplier;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setSupplier method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSupplier method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSupplierForArrayConstraintFromSetSupplier(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getBillingStatsCustomerRequestSupplierItem) {
            // validation for constraint: itemType
            if (!is_string($getBillingStatsCustomerRequestSupplierItem)) {
                $invalidValues[] = is_object($getBillingStatsCustomerRequestSupplierItem) ? get_class($getBillingStatsCustomerRequestSupplierItem) : sprintf('%s(%s)', gettype($getBillingStatsCustomerRequestSupplierItem), var_export($getBillingStatsCustomerRequestSupplierItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The supplier property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set supplier value
     * @throws InvalidArgumentException
     * @param string[] $supplier
     * @return \Pggns\MidocoApi\Orderlists\StructType\GetBillingStatsCustomerRequest
     */
    public function setSupplier(?array $supplier = null): self
    {
        // validation for constraint: array
        if ('' !== ($supplierArrayErrorMessage = self::validateSupplierForArrayConstraintFromSetSupplier($supplier))) {
            throw new InvalidArgumentException($supplierArrayErrorMessage, __LINE__);
        }
        $this->supplier = $supplier;
        
        return $this;
    }
    /**
     * Add item to supplier value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Pggns\MidocoApi\Orderlists\StructType\GetBillingStatsCustomerRequest
     */
    public function addToSupplier(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The supplier property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->supplier[] = $item;
        
        return $this;
    }
    /**
     * Get unitName value
     * @return string[]
     */
    public function getUnitName(): ?array
    {
        return $this->unitName;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setUnitName method
     * This method is willingly generated in order to preserve the one-line inline validation within the setUnitName method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateUnitNameForArrayConstraintFromSetUnitName(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getBillingStatsCustomerRequestUnitNameItem) {
            // validation for constraint: itemType
            if (!is_string($getBillingStatsCustomerRequestUnitNameItem)) {
                $invalidValues[] = is_object($getBillingStatsCustomerRequestUnitNameItem) ? get_class($getBillingStatsCustomerRequestUnitNameItem) : sprintf('%s(%s)', gettype($getBillingStatsCustomerRequestUnitNameItem), var_export($getBillingStatsCustomerRequestUnitNameItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The unitName property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set unitName value
     * @throws InvalidArgumentException
     * @param string[] $unitName
     * @return \Pggns\MidocoApi\Orderlists\StructType\GetBillingStatsCustomerRequest
     */
    public function setUnitName(?array $unitName = null): self
    {
        // validation for constraint: array
        if ('' !== ($unitNameArrayErrorMessage = self::validateUnitNameForArrayConstraintFromSetUnitName($unitName))) {
            throw new InvalidArgumentException($unitNameArrayErrorMessage, __LINE__);
        }
        $this->unitName = $unitName;
        
        return $this;
    }
    /**
     * Add item to unitName value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Pggns\MidocoApi\Orderlists\StructType\GetBillingStatsCustomerRequest
     */
    public function addToUnitName(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The unitName property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->unitName[] = $item;
        
        return $this;
    }
    /**
     * Get receiptDateFrom value
     * @return string|null
     */
    public function getReceiptDateFrom(): ?string
    {
        return $this->receiptDateFrom;
    }
    /**
     * Set receiptDateFrom value
     * @param string $receiptDateFrom
     * @return \Pggns\MidocoApi\Orderlists\StructType\GetBillingStatsCustomerRequest
     */
    public function setReceiptDateFrom(?string $receiptDateFrom = null): self
    {
        // validation for constraint: string
        if (!is_null($receiptDateFrom) && !is_string($receiptDateFrom)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($receiptDateFrom, true), gettype($receiptDateFrom)), __LINE__);
        }
        $this->receiptDateFrom = $receiptDateFrom;
        
        return $this;
    }
    /**
     * Get receiptDateTo value
     * @return string|null
     */
    public function getReceiptDateTo(): ?string
    {
        return $this->receiptDateTo;
    }
    /**
     * Set receiptDateTo value
     * @param string $receiptDateTo
     * @return \Pggns\MidocoApi\Orderlists\StructType\GetBillingStatsCustomerRequest
     */
    public function setReceiptDateTo(?string $receiptDateTo = null): self
    {
        // validation for constraint: string
        if (!is_null($receiptDateTo) && !is_string($receiptDateTo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($receiptDateTo, true), gettype($receiptDateTo)), __LINE__);
        }
        $this->receiptDateTo = $receiptDateTo;
        
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
     * @return \Pggns\MidocoApi\Orderlists\StructType\GetBillingStatsCustomerRequest
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
     * Get startTravelFrom value
     * @return string|null
     */
    public function getStartTravelFrom(): ?string
    {
        return $this->startTravelFrom;
    }
    /**
     * Set startTravelFrom value
     * @param string $startTravelFrom
     * @return \Pggns\MidocoApi\Orderlists\StructType\GetBillingStatsCustomerRequest
     */
    public function setStartTravelFrom(?string $startTravelFrom = null): self
    {
        // validation for constraint: string
        if (!is_null($startTravelFrom) && !is_string($startTravelFrom)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($startTravelFrom, true), gettype($startTravelFrom)), __LINE__);
        }
        $this->startTravelFrom = $startTravelFrom;
        
        return $this;
    }
    /**
     * Get startTravelTo value
     * @return string|null
     */
    public function getStartTravelTo(): ?string
    {
        return $this->startTravelTo;
    }
    /**
     * Set startTravelTo value
     * @param string $startTravelTo
     * @return \Pggns\MidocoApi\Orderlists\StructType\GetBillingStatsCustomerRequest
     */
    public function setStartTravelTo(?string $startTravelTo = null): self
    {
        // validation for constraint: string
        if (!is_null($startTravelTo) && !is_string($startTravelTo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($startTravelTo, true), gettype($startTravelTo)), __LINE__);
        }
        $this->startTravelTo = $startTravelTo;
        
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
     * @return \Pggns\MidocoApi\Orderlists\StructType\GetBillingStatsCustomerRequest
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
     * @return \Pggns\MidocoApi\Orderlists\StructType\GetBillingStatsCustomerRequest
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
     * Get creationUser value
     * @return int|null
     */
    public function getCreationUser(): ?int
    {
        return $this->creationUser;
    }
    /**
     * Set creationUser value
     * @param int $creationUser
     * @return \Pggns\MidocoApi\Orderlists\StructType\GetBillingStatsCustomerRequest
     */
    public function setCreationUser(?int $creationUser = null): self
    {
        // validation for constraint: int
        if (!is_null($creationUser) && !(is_int($creationUser) || ctype_digit($creationUser))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($creationUser, true), gettype($creationUser)), __LINE__);
        }
        $this->creationUser = $creationUser;
        
        return $this;
    }
    /**
     * Get accrualNonZero value
     * @return bool|null
     */
    public function getAccrualNonZero(): ?bool
    {
        return $this->accrualNonZero;
    }
    /**
     * Set accrualNonZero value
     * @param bool $accrualNonZero
     * @return \Pggns\MidocoApi\Orderlists\StructType\GetBillingStatsCustomerRequest
     */
    public function setAccrualNonZero(?bool $accrualNonZero = null): self
    {
        // validation for constraint: boolean
        if (!is_null($accrualNonZero) && !is_bool($accrualNonZero)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($accrualNonZero, true), gettype($accrualNonZero)), __LINE__);
        }
        $this->accrualNonZero = $accrualNonZero;
        
        return $this;
    }
}
