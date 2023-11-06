<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetInfoForCustomerRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetInfoForCustomerRequest extends AbstractStructBase
{
    /**
     * The customerId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $customerId = null;
    /**
     * The travelStart
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $travelStart = null;
    /**
     * The travelEnd
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $travelEnd = null;
    /**
     * The createdStart
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $createdStart = null;
    /**
     * The createdEnd
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $createdEnd = null;
    /**
     * The employee
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $employee = null;
    /**
     * The unitName
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $unitName = null;
    /**
     * Constructor method for GetInfoForCustomerRequest
     * @uses GetInfoForCustomerRequest::setCustomerId()
     * @uses GetInfoForCustomerRequest::setTravelStart()
     * @uses GetInfoForCustomerRequest::setTravelEnd()
     * @uses GetInfoForCustomerRequest::setCreatedStart()
     * @uses GetInfoForCustomerRequest::setCreatedEnd()
     * @uses GetInfoForCustomerRequest::setEmployee()
     * @uses GetInfoForCustomerRequest::setUnitName()
     * @param int $customerId
     * @param string $travelStart
     * @param string $travelEnd
     * @param string $createdStart
     * @param string $createdEnd
     * @param int $employee
     * @param string[] $unitName
     */
    public function __construct(?int $customerId = null, ?string $travelStart = null, ?string $travelEnd = null, ?string $createdStart = null, ?string $createdEnd = null, ?int $employee = null, ?array $unitName = null)
    {
        $this
            ->setCustomerId($customerId)
            ->setTravelStart($travelStart)
            ->setTravelEnd($travelEnd)
            ->setCreatedStart($createdStart)
            ->setCreatedEnd($createdEnd)
            ->setEmployee($employee)
            ->setUnitName($unitName);
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
     * @return \Pggns\MidocoApi\Orderlists\StructType\GetInfoForCustomerRequest
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
     * Get travelStart value
     * @return string|null
     */
    public function getTravelStart(): ?string
    {
        return $this->travelStart;
    }
    /**
     * Set travelStart value
     * @param string $travelStart
     * @return \Pggns\MidocoApi\Orderlists\StructType\GetInfoForCustomerRequest
     */
    public function setTravelStart(?string $travelStart = null): self
    {
        // validation for constraint: string
        if (!is_null($travelStart) && !is_string($travelStart)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($travelStart, true), gettype($travelStart)), __LINE__);
        }
        $this->travelStart = $travelStart;
        
        return $this;
    }
    /**
     * Get travelEnd value
     * @return string|null
     */
    public function getTravelEnd(): ?string
    {
        return $this->travelEnd;
    }
    /**
     * Set travelEnd value
     * @param string $travelEnd
     * @return \Pggns\MidocoApi\Orderlists\StructType\GetInfoForCustomerRequest
     */
    public function setTravelEnd(?string $travelEnd = null): self
    {
        // validation for constraint: string
        if (!is_null($travelEnd) && !is_string($travelEnd)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($travelEnd, true), gettype($travelEnd)), __LINE__);
        }
        $this->travelEnd = $travelEnd;
        
        return $this;
    }
    /**
     * Get createdStart value
     * @return string|null
     */
    public function getCreatedStart(): ?string
    {
        return $this->createdStart;
    }
    /**
     * Set createdStart value
     * @param string $createdStart
     * @return \Pggns\MidocoApi\Orderlists\StructType\GetInfoForCustomerRequest
     */
    public function setCreatedStart(?string $createdStart = null): self
    {
        // validation for constraint: string
        if (!is_null($createdStart) && !is_string($createdStart)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($createdStart, true), gettype($createdStart)), __LINE__);
        }
        $this->createdStart = $createdStart;
        
        return $this;
    }
    /**
     * Get createdEnd value
     * @return string|null
     */
    public function getCreatedEnd(): ?string
    {
        return $this->createdEnd;
    }
    /**
     * Set createdEnd value
     * @param string $createdEnd
     * @return \Pggns\MidocoApi\Orderlists\StructType\GetInfoForCustomerRequest
     */
    public function setCreatedEnd(?string $createdEnd = null): self
    {
        // validation for constraint: string
        if (!is_null($createdEnd) && !is_string($createdEnd)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($createdEnd, true), gettype($createdEnd)), __LINE__);
        }
        $this->createdEnd = $createdEnd;
        
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
     * @return \Pggns\MidocoApi\Orderlists\StructType\GetInfoForCustomerRequest
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
        foreach ($values as $getInfoForCustomerRequestUnitNameItem) {
            // validation for constraint: itemType
            if (!is_string($getInfoForCustomerRequestUnitNameItem)) {
                $invalidValues[] = is_object($getInfoForCustomerRequestUnitNameItem) ? get_class($getInfoForCustomerRequestUnitNameItem) : sprintf('%s(%s)', gettype($getInfoForCustomerRequestUnitNameItem), var_export($getInfoForCustomerRequestUnitNameItem, true));
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
     * @return \Pggns\MidocoApi\Orderlists\StructType\GetInfoForCustomerRequest
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
     * @return \Pggns\MidocoApi\Orderlists\StructType\GetInfoForCustomerRequest
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
}
