<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCustomerAddressesResponse StructType
 * @subpackage Structs
 */
class GetCustomerAddressesResponse extends AbstractStructBase
{
    /**
     * The MidocoCrmAddress
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoCrmAddress
     * @var \Pggns\MidocoApi\Crm\StructType\MidocoCrmAddress[]
     */
    protected ?array $MidocoCrmAddress = null;
    /**
     * Constructor method for GetCustomerAddressesResponse
     * @uses GetCustomerAddressesResponse::setMidocoCrmAddress()
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoCrmAddress[] $midocoCrmAddress
     */
    public function __construct(?array $midocoCrmAddress = null)
    {
        $this
            ->setMidocoCrmAddress($midocoCrmAddress);
    }
    /**
     * Get MidocoCrmAddress value
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoCrmAddress[]
     */
    public function getMidocoCrmAddress(): ?array
    {
        return $this->MidocoCrmAddress;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoCrmAddress method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCrmAddress method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCrmAddressForArrayConstraintsFromSetMidocoCrmAddress(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getCustomerAddressesResponseMidocoCrmAddressItem) {
            // validation for constraint: itemType
            if (!$getCustomerAddressesResponseMidocoCrmAddressItem instanceof \Pggns\MidocoApi\Crm\StructType\MidocoCrmAddress) {
                $invalidValues[] = is_object($getCustomerAddressesResponseMidocoCrmAddressItem) ? get_class($getCustomerAddressesResponseMidocoCrmAddressItem) : sprintf('%s(%s)', gettype($getCustomerAddressesResponseMidocoCrmAddressItem), var_export($getCustomerAddressesResponseMidocoCrmAddressItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCrmAddress property can only contain items of type \Pggns\MidocoApi\Crm\StructType\MidocoCrmAddress, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCrmAddress value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoCrmAddress[] $midocoCrmAddress
     * @return \Pggns\MidocoApi\Crm\StructType\GetCustomerAddressesResponse
     */
    public function setMidocoCrmAddress(?array $midocoCrmAddress = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCrmAddressArrayErrorMessage = self::validateMidocoCrmAddressForArrayConstraintsFromSetMidocoCrmAddress($midocoCrmAddress))) {
            throw new InvalidArgumentException($midocoCrmAddressArrayErrorMessage, __LINE__);
        }
        $this->MidocoCrmAddress = $midocoCrmAddress;
        
        return $this;
    }
    /**
     * Add item to MidocoCrmAddress value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoCrmAddress $item
     * @return \Pggns\MidocoApi\Crm\StructType\GetCustomerAddressesResponse
     */
    public function addToMidocoCrmAddress(\Pggns\MidocoApi\Crm\StructType\MidocoCrmAddress $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crm\StructType\MidocoCrmAddress) {
            throw new InvalidArgumentException(sprintf('The MidocoCrmAddress property can only contain items of type \Pggns\MidocoApi\Crm\StructType\MidocoCrmAddress, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCrmAddress[] = $item;
        
        return $this;
    }
}
