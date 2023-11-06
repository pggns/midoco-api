<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoCCSaleListCriteriaType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoCCSaleListCriteriaType extends AbstractStructBase
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
     * The CaptureDateFrom
     * @var string|null
     */
    protected ?string $CaptureDateFrom = null;
    /**
     * The CaptureDateTo
     * @var string|null
     */
    protected ?string $CaptureDateTo = null;
    /**
     * The ccType
     * @var string|null
     */
    protected ?string $ccType = null;
    /**
     * Constructor method for MidocoCCSaleListCriteriaType
     * @uses MidocoCCSaleListCriteriaType::setOrgUnits()
     * @uses MidocoCCSaleListCriteriaType::setCaptureDateFrom()
     * @uses MidocoCCSaleListCriteriaType::setCaptureDateTo()
     * @uses MidocoCCSaleListCriteriaType::setCcType()
     * @param string[] $orgUnits
     * @param string $captureDateFrom
     * @param string $captureDateTo
     * @param string $ccType
     */
    public function __construct(?array $orgUnits = null, ?string $captureDateFrom = null, ?string $captureDateTo = null, ?string $ccType = null)
    {
        $this
            ->setOrgUnits($orgUnits)
            ->setCaptureDateFrom($captureDateFrom)
            ->setCaptureDateTo($captureDateTo)
            ->setCcType($ccType);
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
        foreach ($values as $midocoCCSaleListCriteriaTypeOrgUnitsItem) {
            // validation for constraint: itemType
            if (!is_string($midocoCCSaleListCriteriaTypeOrgUnitsItem)) {
                $invalidValues[] = is_object($midocoCCSaleListCriteriaTypeOrgUnitsItem) ? get_class($midocoCCSaleListCriteriaTypeOrgUnitsItem) : sprintf('%s(%s)', gettype($midocoCCSaleListCriteriaTypeOrgUnitsItem), var_export($midocoCCSaleListCriteriaTypeOrgUnitsItem, true));
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
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoCCSaleListCriteriaType
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
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoCCSaleListCriteriaType
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
     * Get CaptureDateFrom value
     * @return string|null
     */
    public function getCaptureDateFrom(): ?string
    {
        return $this->CaptureDateFrom;
    }
    /**
     * Set CaptureDateFrom value
     * @param string $captureDateFrom
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoCCSaleListCriteriaType
     */
    public function setCaptureDateFrom(?string $captureDateFrom = null): self
    {
        // validation for constraint: string
        if (!is_null($captureDateFrom) && !is_string($captureDateFrom)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($captureDateFrom, true), gettype($captureDateFrom)), __LINE__);
        }
        $this->CaptureDateFrom = $captureDateFrom;
        
        return $this;
    }
    /**
     * Get CaptureDateTo value
     * @return string|null
     */
    public function getCaptureDateTo(): ?string
    {
        return $this->CaptureDateTo;
    }
    /**
     * Set CaptureDateTo value
     * @param string $captureDateTo
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoCCSaleListCriteriaType
     */
    public function setCaptureDateTo(?string $captureDateTo = null): self
    {
        // validation for constraint: string
        if (!is_null($captureDateTo) && !is_string($captureDateTo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($captureDateTo, true), gettype($captureDateTo)), __LINE__);
        }
        $this->CaptureDateTo = $captureDateTo;
        
        return $this;
    }
    /**
     * Get ccType value
     * @return string|null
     */
    public function getCcType(): ?string
    {
        return $this->ccType;
    }
    /**
     * Set ccType value
     * @param string $ccType
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoCCSaleListCriteriaType
     */
    public function setCcType(?string $ccType = null): self
    {
        // validation for constraint: string
        if (!is_null($ccType) && !is_string($ccType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ccType, true), gettype($ccType)), __LINE__);
        }
        $this->ccType = $ccType;
        
        return $this;
    }
}
