<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoDepositListCriteriaType StructType
 * @subpackage Structs
 */
class MidocoDepositListCriteriaType extends AbstractStructBase
{
    /**
     * The orgUnits
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $orgUnits = null;
    /**
     * The creationDate
     * @var string|null
     */
    protected ?string $creationDate = null;
    /**
     * The debitorFrom
     * @var string|null
     */
    protected ?string $debitorFrom = null;
    /**
     * The debitorTo
     * @var string|null
     */
    protected ?string $debitorTo = null;
    /**
     * The orderNo
     * @var int|null
     */
    protected ?int $orderNo = null;
    /**
     * The inclusiveNotInvoiced
     * @var bool|null
     */
    protected ?bool $inclusiveNotInvoiced = null;
    /**
     * Constructor method for MidocoDepositListCriteriaType
     * @uses MidocoDepositListCriteriaType::setOrgUnits()
     * @uses MidocoDepositListCriteriaType::setCreationDate()
     * @uses MidocoDepositListCriteriaType::setDebitorFrom()
     * @uses MidocoDepositListCriteriaType::setDebitorTo()
     * @uses MidocoDepositListCriteriaType::setOrderNo()
     * @uses MidocoDepositListCriteriaType::setInclusiveNotInvoiced()
     * @param string[] $orgUnits
     * @param string $creationDate
     * @param string $debitorFrom
     * @param string $debitorTo
     * @param int $orderNo
     * @param bool $inclusiveNotInvoiced
     */
    public function __construct(?array $orgUnits = null, ?string $creationDate = null, ?string $debitorFrom = null, ?string $debitorTo = null, ?int $orderNo = null, ?bool $inclusiveNotInvoiced = null)
    {
        $this
            ->setOrgUnits($orgUnits)
            ->setCreationDate($creationDate)
            ->setDebitorFrom($debitorFrom)
            ->setDebitorTo($debitorTo)
            ->setOrderNo($orderNo)
            ->setInclusiveNotInvoiced($inclusiveNotInvoiced);
    }
    /**
     * Get orgUnits value
     * @return string[]
     */
    public function getOrgUnits(): ?array
    {
        return $this->orgUnits;
    }
    /**
     * This method is responsible for validating the values passed to the setOrgUnits method
     * This method is willingly generated in order to preserve the one-line inline validation within the setOrgUnits method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateOrgUnitsForArrayConstraintsFromSetOrgUnits(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoDepositListCriteriaTypeOrgUnitsItem) {
            // validation for constraint: itemType
            if (!is_string($midocoDepositListCriteriaTypeOrgUnitsItem)) {
                $invalidValues[] = is_object($midocoDepositListCriteriaTypeOrgUnitsItem) ? get_class($midocoDepositListCriteriaTypeOrgUnitsItem) : sprintf('%s(%s)', gettype($midocoDepositListCriteriaTypeOrgUnitsItem), var_export($midocoDepositListCriteriaTypeOrgUnitsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The orgUnits property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set orgUnits value
     * @throws InvalidArgumentException
     * @param string[] $orgUnits
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoDepositListCriteriaType
     */
    public function setOrgUnits(?array $orgUnits = null): self
    {
        // validation for constraint: array
        if ('' !== ($orgUnitsArrayErrorMessage = self::validateOrgUnitsForArrayConstraintsFromSetOrgUnits($orgUnits))) {
            throw new InvalidArgumentException($orgUnitsArrayErrorMessage, __LINE__);
        }
        $this->orgUnits = $orgUnits;
        
        return $this;
    }
    /**
     * Add item to orgUnits value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoDepositListCriteriaType
     */
    public function addToOrgUnits(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The orgUnits property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->orgUnits[] = $item;
        
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
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoDepositListCriteriaType
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
     * Get debitorFrom value
     * @return string|null
     */
    public function getDebitorFrom(): ?string
    {
        return $this->debitorFrom;
    }
    /**
     * Set debitorFrom value
     * @param string $debitorFrom
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoDepositListCriteriaType
     */
    public function setDebitorFrom(?string $debitorFrom = null): self
    {
        // validation for constraint: string
        if (!is_null($debitorFrom) && !is_string($debitorFrom)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($debitorFrom, true), gettype($debitorFrom)), __LINE__);
        }
        $this->debitorFrom = $debitorFrom;
        
        return $this;
    }
    /**
     * Get debitorTo value
     * @return string|null
     */
    public function getDebitorTo(): ?string
    {
        return $this->debitorTo;
    }
    /**
     * Set debitorTo value
     * @param string $debitorTo
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoDepositListCriteriaType
     */
    public function setDebitorTo(?string $debitorTo = null): self
    {
        // validation for constraint: string
        if (!is_null($debitorTo) && !is_string($debitorTo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($debitorTo, true), gettype($debitorTo)), __LINE__);
        }
        $this->debitorTo = $debitorTo;
        
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
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoDepositListCriteriaType
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
     * Get inclusiveNotInvoiced value
     * @return bool|null
     */
    public function getInclusiveNotInvoiced(): ?bool
    {
        return $this->inclusiveNotInvoiced;
    }
    /**
     * Set inclusiveNotInvoiced value
     * @param bool $inclusiveNotInvoiced
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoDepositListCriteriaType
     */
    public function setInclusiveNotInvoiced(?bool $inclusiveNotInvoiced = null): self
    {
        // validation for constraint: boolean
        if (!is_null($inclusiveNotInvoiced) && !is_bool($inclusiveNotInvoiced)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($inclusiveNotInvoiced, true), gettype($inclusiveNotInvoiced)), __LINE__);
        }
        $this->inclusiveNotInvoiced = $inclusiveNotInvoiced;
        
        return $this;
    }
}
