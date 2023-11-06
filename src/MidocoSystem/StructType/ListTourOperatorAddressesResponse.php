<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\MidocoSystem\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListTourOperatorAddressesResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ListTourOperatorAddressesResponse extends AbstractStructBase
{
    /**
     * The MidocoTourOperatorAddress
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoTourOperatorAddress
     * @var \Pggns\MidocoApi\MidocoSystem\StructType\MidocoTourOperatorAddress[]
     */
    protected ?array $MidocoTourOperatorAddress = null;
    /**
     * Constructor method for ListTourOperatorAddressesResponse
     * @uses ListTourOperatorAddressesResponse::setMidocoTourOperatorAddress()
     * @param \Pggns\MidocoApi\MidocoSystem\StructType\MidocoTourOperatorAddress[] $midocoTourOperatorAddress
     */
    public function __construct(?array $midocoTourOperatorAddress = null)
    {
        $this
            ->setMidocoTourOperatorAddress($midocoTourOperatorAddress);
    }
    /**
     * Get MidocoTourOperatorAddress value
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\MidocoTourOperatorAddress[]
     */
    public function getMidocoTourOperatorAddress(): ?array
    {
        return $this->MidocoTourOperatorAddress;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoTourOperatorAddress method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoTourOperatorAddress method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoTourOperatorAddressForArrayConstraintFromSetMidocoTourOperatorAddress(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $listTourOperatorAddressesResponseMidocoTourOperatorAddressItem) {
            // validation for constraint: itemType
            if (!$listTourOperatorAddressesResponseMidocoTourOperatorAddressItem instanceof \Pggns\MidocoApi\MidocoSystem\StructType\MidocoTourOperatorAddress) {
                $invalidValues[] = is_object($listTourOperatorAddressesResponseMidocoTourOperatorAddressItem) ? get_class($listTourOperatorAddressesResponseMidocoTourOperatorAddressItem) : sprintf('%s(%s)', gettype($listTourOperatorAddressesResponseMidocoTourOperatorAddressItem), var_export($listTourOperatorAddressesResponseMidocoTourOperatorAddressItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoTourOperatorAddress property can only contain items of type \Pggns\MidocoApi\MidocoSystem\StructType\MidocoTourOperatorAddress, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoTourOperatorAddress value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\MidocoSystem\StructType\MidocoTourOperatorAddress[] $midocoTourOperatorAddress
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\ListTourOperatorAddressesResponse
     */
    public function setMidocoTourOperatorAddress(?array $midocoTourOperatorAddress = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoTourOperatorAddressArrayErrorMessage = self::validateMidocoTourOperatorAddressForArrayConstraintFromSetMidocoTourOperatorAddress($midocoTourOperatorAddress))) {
            throw new InvalidArgumentException($midocoTourOperatorAddressArrayErrorMessage, __LINE__);
        }
        $this->MidocoTourOperatorAddress = $midocoTourOperatorAddress;
        
        return $this;
    }
    /**
     * Add item to MidocoTourOperatorAddress value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\MidocoSystem\StructType\MidocoTourOperatorAddress $item
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\ListTourOperatorAddressesResponse
     */
    public function addToMidocoTourOperatorAddress(\Pggns\MidocoApi\MidocoSystem\StructType\MidocoTourOperatorAddress $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\MidocoSystem\StructType\MidocoTourOperatorAddress) {
            throw new InvalidArgumentException(sprintf('The MidocoTourOperatorAddress property can only contain items of type \Pggns\MidocoApi\MidocoSystem\StructType\MidocoTourOperatorAddress, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoTourOperatorAddress[] = $item;
        
        return $this;
    }
}
