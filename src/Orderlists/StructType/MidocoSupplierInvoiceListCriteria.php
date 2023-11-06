<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoSupplierInvoiceListCriteria StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoSupplierInvoiceListCriteria extends AbstractStructBase
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
     * The createdStart
     * @var string|null
     */
    protected ?string $createdStart = null;
    /**
     * The createdEnd
     * @var string|null
     */
    protected ?string $createdEnd = null;
    /**
     * The creationUserId
     * @var int|null
     */
    protected ?int $creationUserId = null;
    /**
     * Constructor method for MidocoSupplierInvoiceListCriteria
     * @uses MidocoSupplierInvoiceListCriteria::setOrgUnits()
     * @uses MidocoSupplierInvoiceListCriteria::setCreatedStart()
     * @uses MidocoSupplierInvoiceListCriteria::setCreatedEnd()
     * @uses MidocoSupplierInvoiceListCriteria::setCreationUserId()
     * @param string[] $orgUnits
     * @param string $createdStart
     * @param string $createdEnd
     * @param int $creationUserId
     */
    public function __construct(?array $orgUnits = null, ?string $createdStart = null, ?string $createdEnd = null, ?int $creationUserId = null)
    {
        $this
            ->setOrgUnits($orgUnits)
            ->setCreatedStart($createdStart)
            ->setCreatedEnd($createdEnd)
            ->setCreationUserId($creationUserId);
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
     * This method is responsible for validating the value(s) passed to the setOrgUnits method
     * This method is willingly generated in order to preserve the one-line inline validation within the setOrgUnits method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateOrgUnitsForArrayConstraintFromSetOrgUnits(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoSupplierInvoiceListCriteriaOrgUnitsItem) {
            // validation for constraint: itemType
            if (!is_string($midocoSupplierInvoiceListCriteriaOrgUnitsItem)) {
                $invalidValues[] = is_object($midocoSupplierInvoiceListCriteriaOrgUnitsItem) ? get_class($midocoSupplierInvoiceListCriteriaOrgUnitsItem) : sprintf('%s(%s)', gettype($midocoSupplierInvoiceListCriteriaOrgUnitsItem), var_export($midocoSupplierInvoiceListCriteriaOrgUnitsItem, true));
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
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoSupplierInvoiceListCriteria
     */
    public function setOrgUnits(?array $orgUnits = null): self
    {
        // validation for constraint: array
        if ('' !== ($orgUnitsArrayErrorMessage = self::validateOrgUnitsForArrayConstraintFromSetOrgUnits($orgUnits))) {
            throw new InvalidArgumentException($orgUnitsArrayErrorMessage, __LINE__);
        }
        $this->orgUnits = $orgUnits;
        
        return $this;
    }
    /**
     * Add item to orgUnits value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoSupplierInvoiceListCriteria
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
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoSupplierInvoiceListCriteria
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
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoSupplierInvoiceListCriteria
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
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoSupplierInvoiceListCriteria
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
}
