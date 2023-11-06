<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoConnectedCustomerListCriteria StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoConnectedCustomerListCriteria extends AbstractStructBase
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
     * The creationUserId
     * @var int|null
     */
    protected ?int $creationUserId = null;
    /**
     * The creationDateFrom
     * @var string|null
     */
    protected ?string $creationDateFrom = null;
    /**
     * The creationDateUntil
     * @var string|null
     */
    protected ?string $creationDateUntil = null;
    /**
     * The connectionType
     * @var int|null
     */
    protected ?int $connectionType = null;
    /**
     * Constructor method for MidocoConnectedCustomerListCriteria
     * @uses MidocoConnectedCustomerListCriteria::setOrgUnits()
     * @uses MidocoConnectedCustomerListCriteria::setCreationUserId()
     * @uses MidocoConnectedCustomerListCriteria::setCreationDateFrom()
     * @uses MidocoConnectedCustomerListCriteria::setCreationDateUntil()
     * @uses MidocoConnectedCustomerListCriteria::setConnectionType()
     * @param string[] $orgUnits
     * @param int $creationUserId
     * @param string $creationDateFrom
     * @param string $creationDateUntil
     * @param int $connectionType
     */
    public function __construct(?array $orgUnits = null, ?int $creationUserId = null, ?string $creationDateFrom = null, ?string $creationDateUntil = null, ?int $connectionType = null)
    {
        $this
            ->setOrgUnits($orgUnits)
            ->setCreationUserId($creationUserId)
            ->setCreationDateFrom($creationDateFrom)
            ->setCreationDateUntil($creationDateUntil)
            ->setConnectionType($connectionType);
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
        foreach ($values as $midocoConnectedCustomerListCriteriaOrgUnitsItem) {
            // validation for constraint: itemType
            if (!is_string($midocoConnectedCustomerListCriteriaOrgUnitsItem)) {
                $invalidValues[] = is_object($midocoConnectedCustomerListCriteriaOrgUnitsItem) ? get_class($midocoConnectedCustomerListCriteriaOrgUnitsItem) : sprintf('%s(%s)', gettype($midocoConnectedCustomerListCriteriaOrgUnitsItem), var_export($midocoConnectedCustomerListCriteriaOrgUnitsItem, true));
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
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoConnectedCustomerListCriteria
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
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoConnectedCustomerListCriteria
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
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoConnectedCustomerListCriteria
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
     * Get creationDateFrom value
     * @return string|null
     */
    public function getCreationDateFrom(): ?string
    {
        return $this->creationDateFrom;
    }
    /**
     * Set creationDateFrom value
     * @param string $creationDateFrom
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoConnectedCustomerListCriteria
     */
    public function setCreationDateFrom(?string $creationDateFrom = null): self
    {
        // validation for constraint: string
        if (!is_null($creationDateFrom) && !is_string($creationDateFrom)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creationDateFrom, true), gettype($creationDateFrom)), __LINE__);
        }
        $this->creationDateFrom = $creationDateFrom;
        
        return $this;
    }
    /**
     * Get creationDateUntil value
     * @return string|null
     */
    public function getCreationDateUntil(): ?string
    {
        return $this->creationDateUntil;
    }
    /**
     * Set creationDateUntil value
     * @param string $creationDateUntil
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoConnectedCustomerListCriteria
     */
    public function setCreationDateUntil(?string $creationDateUntil = null): self
    {
        // validation for constraint: string
        if (!is_null($creationDateUntil) && !is_string($creationDateUntil)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creationDateUntil, true), gettype($creationDateUntil)), __LINE__);
        }
        $this->creationDateUntil = $creationDateUntil;
        
        return $this;
    }
    /**
     * Get connectionType value
     * @return int|null
     */
    public function getConnectionType(): ?int
    {
        return $this->connectionType;
    }
    /**
     * Set connectionType value
     * @param int $connectionType
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoConnectedCustomerListCriteria
     */
    public function setConnectionType(?int $connectionType = null): self
    {
        // validation for constraint: int
        if (!is_null($connectionType) && !(is_int($connectionType) || ctype_digit($connectionType))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($connectionType, true), gettype($connectionType)), __LINE__);
        }
        $this->connectionType = $connectionType;
        
        return $this;
    }
}
