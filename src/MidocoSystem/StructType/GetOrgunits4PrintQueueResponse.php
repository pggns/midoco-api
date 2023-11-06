<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\MidocoSystem\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetOrgunits4PrintQueueResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetOrgunits4PrintQueueResponse extends AbstractStructBase
{
    /**
     * The MidocoOrgunit
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoOrgunit
     * @var \Pggns\MidocoApi\MidocoSystem\StructType\OrgunitDTO[]
     */
    protected ?array $MidocoOrgunit = null;
    /**
     * Constructor method for GetOrgunits4PrintQueueResponse
     * @uses GetOrgunits4PrintQueueResponse::setMidocoOrgunit()
     * @param \Pggns\MidocoApi\MidocoSystem\StructType\OrgunitDTO[] $midocoOrgunit
     */
    public function __construct(?array $midocoOrgunit = null)
    {
        $this
            ->setMidocoOrgunit($midocoOrgunit);
    }
    /**
     * Get MidocoOrgunit value
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\OrgunitDTO[]
     */
    public function getMidocoOrgunit(): ?array
    {
        return $this->MidocoOrgunit;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoOrgunit method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoOrgunit method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoOrgunitForArrayConstraintFromSetMidocoOrgunit(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getOrgunits4PrintQueueResponseMidocoOrgunitItem) {
            // validation for constraint: itemType
            if (!$getOrgunits4PrintQueueResponseMidocoOrgunitItem instanceof \Pggns\MidocoApi\MidocoSystem\StructType\OrgunitDTO) {
                $invalidValues[] = is_object($getOrgunits4PrintQueueResponseMidocoOrgunitItem) ? get_class($getOrgunits4PrintQueueResponseMidocoOrgunitItem) : sprintf('%s(%s)', gettype($getOrgunits4PrintQueueResponseMidocoOrgunitItem), var_export($getOrgunits4PrintQueueResponseMidocoOrgunitItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoOrgunit property can only contain items of type \Pggns\MidocoApi\MidocoSystem\StructType\OrgunitDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoOrgunit value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\MidocoSystem\StructType\OrgunitDTO[] $midocoOrgunit
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\GetOrgunits4PrintQueueResponse
     */
    public function setMidocoOrgunit(?array $midocoOrgunit = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoOrgunitArrayErrorMessage = self::validateMidocoOrgunitForArrayConstraintFromSetMidocoOrgunit($midocoOrgunit))) {
            throw new InvalidArgumentException($midocoOrgunitArrayErrorMessage, __LINE__);
        }
        $this->MidocoOrgunit = $midocoOrgunit;
        
        return $this;
    }
    /**
     * Add item to MidocoOrgunit value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\MidocoSystem\StructType\OrgunitDTO $item
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\GetOrgunits4PrintQueueResponse
     */
    public function addToMidocoOrgunit(\Pggns\MidocoApi\MidocoSystem\StructType\OrgunitDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\MidocoSystem\StructType\OrgunitDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoOrgunit property can only contain items of type \Pggns\MidocoApi\MidocoSystem\StructType\OrgunitDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoOrgunit[] = $item;
        
        return $this;
    }
}
