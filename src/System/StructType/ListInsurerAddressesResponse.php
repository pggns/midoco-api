<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\System\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListInsurerAddressesResponse StructType
 * @subpackage Structs
 */
class ListInsurerAddressesResponse extends AbstractStructBase
{
    /**
     * The MidocoInsurerAddress
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoInsurerAddress
     * @var \Pggns\MidocoApi\Api\System\StructType\MidocoInsurerAddress[]
     */
    protected ?array $MidocoInsurerAddress = null;
    /**
     * Constructor method for ListInsurerAddressesResponse
     * @uses ListInsurerAddressesResponse::setMidocoInsurerAddress()
     * @param \Pggns\MidocoApi\Api\System\StructType\MidocoInsurerAddress[] $midocoInsurerAddress
     */
    public function __construct(?array $midocoInsurerAddress = null)
    {
        $this
            ->setMidocoInsurerAddress($midocoInsurerAddress);
    }
    /**
     * Get MidocoInsurerAddress value
     * @return \Pggns\MidocoApi\Api\System\StructType\MidocoInsurerAddress[]
     */
    public function getMidocoInsurerAddress(): ?array
    {
        return $this->MidocoInsurerAddress;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoInsurerAddress method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoInsurerAddress method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoInsurerAddressForArrayConstraintsFromSetMidocoInsurerAddress(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $listInsurerAddressesResponseMidocoInsurerAddressItem) {
            // validation for constraint: itemType
            if (!$listInsurerAddressesResponseMidocoInsurerAddressItem instanceof \Pggns\MidocoApi\Api\System\StructType\MidocoInsurerAddress) {
                $invalidValues[] = is_object($listInsurerAddressesResponseMidocoInsurerAddressItem) ? get_class($listInsurerAddressesResponseMidocoInsurerAddressItem) : sprintf('%s(%s)', gettype($listInsurerAddressesResponseMidocoInsurerAddressItem), var_export($listInsurerAddressesResponseMidocoInsurerAddressItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoInsurerAddress property can only contain items of type \Pggns\MidocoApi\Api\System\StructType\MidocoInsurerAddress, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoInsurerAddress value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\System\StructType\MidocoInsurerAddress[] $midocoInsurerAddress
     * @return \Pggns\MidocoApi\Api\System\StructType\ListInsurerAddressesResponse
     */
    public function setMidocoInsurerAddress(?array $midocoInsurerAddress = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoInsurerAddressArrayErrorMessage = self::validateMidocoInsurerAddressForArrayConstraintsFromSetMidocoInsurerAddress($midocoInsurerAddress))) {
            throw new InvalidArgumentException($midocoInsurerAddressArrayErrorMessage, __LINE__);
        }
        $this->MidocoInsurerAddress = $midocoInsurerAddress;
        
        return $this;
    }
    /**
     * Add item to MidocoInsurerAddress value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\System\StructType\MidocoInsurerAddress $item
     * @return \Pggns\MidocoApi\Api\System\StructType\ListInsurerAddressesResponse
     */
    public function addToMidocoInsurerAddress(\Pggns\MidocoApi\Api\System\StructType\MidocoInsurerAddress $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\System\StructType\MidocoInsurerAddress) {
            throw new InvalidArgumentException(sprintf('The MidocoInsurerAddress property can only contain items of type \Pggns\MidocoApi\Api\System\StructType\MidocoInsurerAddress, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoInsurerAddress[] = $item;
        
        return $this;
    }
}
