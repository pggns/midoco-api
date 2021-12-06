<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\CrmSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAddressTypeDescriptionsResponse StructType
 * @subpackage Structs
 */
class GetAddressTypeDescriptionsResponse extends AbstractStructBase
{
    /**
     * The MidocoAddressTypeDescription
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoAddressTypeDescription
     * @var \Pggns\MidocoApi\CrmSD\StructType\AddressTypeDescriptionDTO[]
     */
    protected ?array $MidocoAddressTypeDescription = null;
    /**
     * Constructor method for GetAddressTypeDescriptionsResponse
     * @uses GetAddressTypeDescriptionsResponse::setMidocoAddressTypeDescription()
     * @param \Pggns\MidocoApi\CrmSD\StructType\AddressTypeDescriptionDTO[] $midocoAddressTypeDescription
     */
    public function __construct(?array $midocoAddressTypeDescription = null)
    {
        $this
            ->setMidocoAddressTypeDescription($midocoAddressTypeDescription);
    }
    /**
     * Get MidocoAddressTypeDescription value
     * @return \Pggns\MidocoApi\CrmSD\StructType\AddressTypeDescriptionDTO[]
     */
    public function getMidocoAddressTypeDescription(): ?array
    {
        return $this->MidocoAddressTypeDescription;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoAddressTypeDescription method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoAddressTypeDescription method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoAddressTypeDescriptionForArrayConstraintsFromSetMidocoAddressTypeDescription(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getAddressTypeDescriptionsResponseMidocoAddressTypeDescriptionItem) {
            // validation for constraint: itemType
            if (!$getAddressTypeDescriptionsResponseMidocoAddressTypeDescriptionItem instanceof \Pggns\MidocoApi\CrmSD\StructType\AddressTypeDescriptionDTO) {
                $invalidValues[] = is_object($getAddressTypeDescriptionsResponseMidocoAddressTypeDescriptionItem) ? get_class($getAddressTypeDescriptionsResponseMidocoAddressTypeDescriptionItem) : sprintf('%s(%s)', gettype($getAddressTypeDescriptionsResponseMidocoAddressTypeDescriptionItem), var_export($getAddressTypeDescriptionsResponseMidocoAddressTypeDescriptionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoAddressTypeDescription property can only contain items of type \Pggns\MidocoApi\CrmSD\StructType\AddressTypeDescriptionDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoAddressTypeDescription value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\CrmSD\StructType\AddressTypeDescriptionDTO[] $midocoAddressTypeDescription
     * @return \Pggns\MidocoApi\CrmSD\StructType\GetAddressTypeDescriptionsResponse
     */
    public function setMidocoAddressTypeDescription(?array $midocoAddressTypeDescription = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoAddressTypeDescriptionArrayErrorMessage = self::validateMidocoAddressTypeDescriptionForArrayConstraintsFromSetMidocoAddressTypeDescription($midocoAddressTypeDescription))) {
            throw new InvalidArgumentException($midocoAddressTypeDescriptionArrayErrorMessage, __LINE__);
        }
        $this->MidocoAddressTypeDescription = $midocoAddressTypeDescription;
        
        return $this;
    }
    /**
     * Add item to MidocoAddressTypeDescription value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\CrmSD\StructType\AddressTypeDescriptionDTO $item
     * @return \Pggns\MidocoApi\CrmSD\StructType\GetAddressTypeDescriptionsResponse
     */
    public function addToMidocoAddressTypeDescription(\Pggns\MidocoApi\CrmSD\StructType\AddressTypeDescriptionDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\CrmSD\StructType\AddressTypeDescriptionDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoAddressTypeDescription property can only contain items of type \Pggns\MidocoApi\CrmSD\StructType\AddressTypeDescriptionDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoAddressTypeDescription[] = $item;
        
        return $this;
    }
}
