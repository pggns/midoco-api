<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoSalesListByPaymentTypeCriteriaType StructType
 * @subpackage Structs
 */
class MidocoSalesListByPaymentTypeCriteriaType extends AbstractStructBase
{
    /**
     * The paymentType
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $paymentType = null;
    /**
     * The paymentMethod
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $paymentMethod = null;
    /**
     * The ccCardType
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $ccCardType = null;
    /**
     * The orgUnitName
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $orgUnitName = null;
    /**
     * The receiptStartDate
     * @var string|null
     */
    protected ?string $receiptStartDate = null;
    /**
     * The receiptEndDate
     * @var string|null
     */
    protected ?string $receiptEndDate = null;
    /**
     * The employee
     * @var int|null
     */
    protected ?int $employee = null;
    /**
     * Constructor method for MidocoSalesListByPaymentTypeCriteriaType
     * @uses MidocoSalesListByPaymentTypeCriteriaType::setPaymentType()
     * @uses MidocoSalesListByPaymentTypeCriteriaType::setPaymentMethod()
     * @uses MidocoSalesListByPaymentTypeCriteriaType::setCcCardType()
     * @uses MidocoSalesListByPaymentTypeCriteriaType::setOrgUnitName()
     * @uses MidocoSalesListByPaymentTypeCriteriaType::setReceiptStartDate()
     * @uses MidocoSalesListByPaymentTypeCriteriaType::setReceiptEndDate()
     * @uses MidocoSalesListByPaymentTypeCriteriaType::setEmployee()
     * @param string[] $paymentType
     * @param string[] $paymentMethod
     * @param string[] $ccCardType
     * @param string[] $orgUnitName
     * @param string $receiptStartDate
     * @param string $receiptEndDate
     * @param int $employee
     */
    public function __construct(?array $paymentType = null, ?array $paymentMethod = null, ?array $ccCardType = null, ?array $orgUnitName = null, ?string $receiptStartDate = null, ?string $receiptEndDate = null, ?int $employee = null)
    {
        $this
            ->setPaymentType($paymentType)
            ->setPaymentMethod($paymentMethod)
            ->setCcCardType($ccCardType)
            ->setOrgUnitName($orgUnitName)
            ->setReceiptStartDate($receiptStartDate)
            ->setReceiptEndDate($receiptEndDate)
            ->setEmployee($employee);
    }
    /**
     * Get paymentType value
     * @return string[]
     */
    public function getPaymentType(): ?array
    {
        return $this->paymentType;
    }
    /**
     * This method is responsible for validating the values passed to the setPaymentType method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPaymentType method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePaymentTypeForArrayConstraintsFromSetPaymentType(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoSalesListByPaymentTypeCriteriaTypePaymentTypeItem) {
            // validation for constraint: itemType
            if (!is_string($midocoSalesListByPaymentTypeCriteriaTypePaymentTypeItem)) {
                $invalidValues[] = is_object($midocoSalesListByPaymentTypeCriteriaTypePaymentTypeItem) ? get_class($midocoSalesListByPaymentTypeCriteriaTypePaymentTypeItem) : sprintf('%s(%s)', gettype($midocoSalesListByPaymentTypeCriteriaTypePaymentTypeItem), var_export($midocoSalesListByPaymentTypeCriteriaTypePaymentTypeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The paymentType property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set paymentType value
     * @throws InvalidArgumentException
     * @param string[] $paymentType
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoSalesListByPaymentTypeCriteriaType
     */
    public function setPaymentType(?array $paymentType = null): self
    {
        // validation for constraint: array
        if ('' !== ($paymentTypeArrayErrorMessage = self::validatePaymentTypeForArrayConstraintsFromSetPaymentType($paymentType))) {
            throw new InvalidArgumentException($paymentTypeArrayErrorMessage, __LINE__);
        }
        $this->paymentType = $paymentType;
        
        return $this;
    }
    /**
     * Add item to paymentType value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoSalesListByPaymentTypeCriteriaType
     */
    public function addToPaymentType(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The paymentType property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->paymentType[] = $item;
        
        return $this;
    }
    /**
     * Get paymentMethod value
     * @return string[]
     */
    public function getPaymentMethod(): ?array
    {
        return $this->paymentMethod;
    }
    /**
     * This method is responsible for validating the values passed to the setPaymentMethod method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPaymentMethod method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePaymentMethodForArrayConstraintsFromSetPaymentMethod(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoSalesListByPaymentTypeCriteriaTypePaymentMethodItem) {
            // validation for constraint: itemType
            if (!is_string($midocoSalesListByPaymentTypeCriteriaTypePaymentMethodItem)) {
                $invalidValues[] = is_object($midocoSalesListByPaymentTypeCriteriaTypePaymentMethodItem) ? get_class($midocoSalesListByPaymentTypeCriteriaTypePaymentMethodItem) : sprintf('%s(%s)', gettype($midocoSalesListByPaymentTypeCriteriaTypePaymentMethodItem), var_export($midocoSalesListByPaymentTypeCriteriaTypePaymentMethodItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The paymentMethod property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set paymentMethod value
     * @throws InvalidArgumentException
     * @param string[] $paymentMethod
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoSalesListByPaymentTypeCriteriaType
     */
    public function setPaymentMethod(?array $paymentMethod = null): self
    {
        // validation for constraint: array
        if ('' !== ($paymentMethodArrayErrorMessage = self::validatePaymentMethodForArrayConstraintsFromSetPaymentMethod($paymentMethod))) {
            throw new InvalidArgumentException($paymentMethodArrayErrorMessage, __LINE__);
        }
        $this->paymentMethod = $paymentMethod;
        
        return $this;
    }
    /**
     * Add item to paymentMethod value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoSalesListByPaymentTypeCriteriaType
     */
    public function addToPaymentMethod(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The paymentMethod property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->paymentMethod[] = $item;
        
        return $this;
    }
    /**
     * Get ccCardType value
     * @return string[]
     */
    public function getCcCardType(): ?array
    {
        return $this->ccCardType;
    }
    /**
     * This method is responsible for validating the values passed to the setCcCardType method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCcCardType method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCcCardTypeForArrayConstraintsFromSetCcCardType(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoSalesListByPaymentTypeCriteriaTypeCcCardTypeItem) {
            // validation for constraint: itemType
            if (!is_string($midocoSalesListByPaymentTypeCriteriaTypeCcCardTypeItem)) {
                $invalidValues[] = is_object($midocoSalesListByPaymentTypeCriteriaTypeCcCardTypeItem) ? get_class($midocoSalesListByPaymentTypeCriteriaTypeCcCardTypeItem) : sprintf('%s(%s)', gettype($midocoSalesListByPaymentTypeCriteriaTypeCcCardTypeItem), var_export($midocoSalesListByPaymentTypeCriteriaTypeCcCardTypeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ccCardType property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ccCardType value
     * @throws InvalidArgumentException
     * @param string[] $ccCardType
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoSalesListByPaymentTypeCriteriaType
     */
    public function setCcCardType(?array $ccCardType = null): self
    {
        // validation for constraint: array
        if ('' !== ($ccCardTypeArrayErrorMessage = self::validateCcCardTypeForArrayConstraintsFromSetCcCardType($ccCardType))) {
            throw new InvalidArgumentException($ccCardTypeArrayErrorMessage, __LINE__);
        }
        $this->ccCardType = $ccCardType;
        
        return $this;
    }
    /**
     * Add item to ccCardType value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoSalesListByPaymentTypeCriteriaType
     */
    public function addToCcCardType(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The ccCardType property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->ccCardType[] = $item;
        
        return $this;
    }
    /**
     * Get orgUnitName value
     * @return string[]
     */
    public function getOrgUnitName(): ?array
    {
        return $this->orgUnitName;
    }
    /**
     * This method is responsible for validating the values passed to the setOrgUnitName method
     * This method is willingly generated in order to preserve the one-line inline validation within the setOrgUnitName method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateOrgUnitNameForArrayConstraintsFromSetOrgUnitName(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoSalesListByPaymentTypeCriteriaTypeOrgUnitNameItem) {
            // validation for constraint: itemType
            if (!is_string($midocoSalesListByPaymentTypeCriteriaTypeOrgUnitNameItem)) {
                $invalidValues[] = is_object($midocoSalesListByPaymentTypeCriteriaTypeOrgUnitNameItem) ? get_class($midocoSalesListByPaymentTypeCriteriaTypeOrgUnitNameItem) : sprintf('%s(%s)', gettype($midocoSalesListByPaymentTypeCriteriaTypeOrgUnitNameItem), var_export($midocoSalesListByPaymentTypeCriteriaTypeOrgUnitNameItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The orgUnitName property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set orgUnitName value
     * @throws InvalidArgumentException
     * @param string[] $orgUnitName
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoSalesListByPaymentTypeCriteriaType
     */
    public function setOrgUnitName(?array $orgUnitName = null): self
    {
        // validation for constraint: array
        if ('' !== ($orgUnitNameArrayErrorMessage = self::validateOrgUnitNameForArrayConstraintsFromSetOrgUnitName($orgUnitName))) {
            throw new InvalidArgumentException($orgUnitNameArrayErrorMessage, __LINE__);
        }
        $this->orgUnitName = $orgUnitName;
        
        return $this;
    }
    /**
     * Add item to orgUnitName value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoSalesListByPaymentTypeCriteriaType
     */
    public function addToOrgUnitName(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The orgUnitName property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->orgUnitName[] = $item;
        
        return $this;
    }
    /**
     * Get receiptStartDate value
     * @return string|null
     */
    public function getReceiptStartDate(): ?string
    {
        return $this->receiptStartDate;
    }
    /**
     * Set receiptStartDate value
     * @param string $receiptStartDate
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoSalesListByPaymentTypeCriteriaType
     */
    public function setReceiptStartDate(?string $receiptStartDate = null): self
    {
        // validation for constraint: string
        if (!is_null($receiptStartDate) && !is_string($receiptStartDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($receiptStartDate, true), gettype($receiptStartDate)), __LINE__);
        }
        $this->receiptStartDate = $receiptStartDate;
        
        return $this;
    }
    /**
     * Get receiptEndDate value
     * @return string|null
     */
    public function getReceiptEndDate(): ?string
    {
        return $this->receiptEndDate;
    }
    /**
     * Set receiptEndDate value
     * @param string $receiptEndDate
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoSalesListByPaymentTypeCriteriaType
     */
    public function setReceiptEndDate(?string $receiptEndDate = null): self
    {
        // validation for constraint: string
        if (!is_null($receiptEndDate) && !is_string($receiptEndDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($receiptEndDate, true), gettype($receiptEndDate)), __LINE__);
        }
        $this->receiptEndDate = $receiptEndDate;
        
        return $this;
    }
    /**
     * Get employee value
     * @return int|null
     */
    public function getEmployee(): ?int
    {
        return $this->employee;
    }
    /**
     * Set employee value
     * @param int $employee
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoSalesListByPaymentTypeCriteriaType
     */
    public function setEmployee(?int $employee = null): self
    {
        // validation for constraint: int
        if (!is_null($employee) && !(is_int($employee) || ctype_digit($employee))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($employee, true), gettype($employee)), __LINE__);
        }
        $this->employee = $employee;
        
        return $this;
    }
}
