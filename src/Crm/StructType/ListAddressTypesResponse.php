<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListAddressTypesResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ListAddressTypesResponse extends AbstractStructBase
{
    /**
     * The MidocoAddressTypeDescription
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoAddressTypeDescription
     * @var \Pggns\MidocoApi\Crm\StructType\AddressTypeDescriptionDTO[]
     */
    protected ?array $MidocoAddressTypeDescription = null;
    /**
     * Constructor method for ListAddressTypesResponse
     * @uses ListAddressTypesResponse::setMidocoAddressTypeDescription()
     * @param \Pggns\MidocoApi\Crm\StructType\AddressTypeDescriptionDTO[] $midocoAddressTypeDescription
     */
    public function __construct(?array $midocoAddressTypeDescription = null)
    {
        $this
            ->setMidocoAddressTypeDescription($midocoAddressTypeDescription);
    }
    /**
     * Get MidocoAddressTypeDescription value
     * @return \Pggns\MidocoApi\Crm\StructType\AddressTypeDescriptionDTO[]
     */
    public function getMidocoAddressTypeDescription(): ?array
    {
        return $this->MidocoAddressTypeDescription;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoAddressTypeDescription method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoAddressTypeDescription method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoAddressTypeDescriptionForArrayConstraintFromSetMidocoAddressTypeDescription(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $listAddressTypesResponseMidocoAddressTypeDescriptionItem) {
            // validation for constraint: itemType
            if (!$listAddressTypesResponseMidocoAddressTypeDescriptionItem instanceof \Pggns\MidocoApi\Crm\StructType\AddressTypeDescriptionDTO) {
                $invalidValues[] = is_object($listAddressTypesResponseMidocoAddressTypeDescriptionItem) ? get_class($listAddressTypesResponseMidocoAddressTypeDescriptionItem) : sprintf('%s(%s)', gettype($listAddressTypesResponseMidocoAddressTypeDescriptionItem), var_export($listAddressTypesResponseMidocoAddressTypeDescriptionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoAddressTypeDescription property can only contain items of type \Pggns\MidocoApi\Crm\StructType\AddressTypeDescriptionDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoAddressTypeDescription value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\AddressTypeDescriptionDTO[] $midocoAddressTypeDescription
     * @return \Pggns\MidocoApi\Crm\StructType\ListAddressTypesResponse
     */
    public function setMidocoAddressTypeDescription(?array $midocoAddressTypeDescription = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoAddressTypeDescriptionArrayErrorMessage = self::validateMidocoAddressTypeDescriptionForArrayConstraintFromSetMidocoAddressTypeDescription($midocoAddressTypeDescription))) {
            throw new InvalidArgumentException($midocoAddressTypeDescriptionArrayErrorMessage, __LINE__);
        }
        $this->MidocoAddressTypeDescription = $midocoAddressTypeDescription;
        
        return $this;
    }
    /**
     * Add item to MidocoAddressTypeDescription value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\AddressTypeDescriptionDTO $item
     * @return \Pggns\MidocoApi\Crm\StructType\ListAddressTypesResponse
     */
    public function addToMidocoAddressTypeDescription(\Pggns\MidocoApi\Crm\StructType\AddressTypeDescriptionDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crm\StructType\AddressTypeDescriptionDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoAddressTypeDescription property can only contain items of type \Pggns\MidocoApi\Crm\StructType\AddressTypeDescriptionDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoAddressTypeDescription[] = $item;
        
        return $this;
    }
}
