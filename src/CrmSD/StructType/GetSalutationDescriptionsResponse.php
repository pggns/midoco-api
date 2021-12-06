<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\CrmSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSalutationDescriptionsResponse StructType
 * @subpackage Structs
 */
class GetSalutationDescriptionsResponse extends AbstractStructBase
{
    /**
     * The MidocoSalutationDescription
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoSalutationDescription
     * @var \Pggns\MidocoApi\CrmSD\StructType\SalutationDescriptionDTO[]
     */
    protected ?array $MidocoSalutationDescription = null;
    /**
     * Constructor method for GetSalutationDescriptionsResponse
     * @uses GetSalutationDescriptionsResponse::setMidocoSalutationDescription()
     * @param \Pggns\MidocoApi\CrmSD\StructType\SalutationDescriptionDTO[] $midocoSalutationDescription
     */
    public function __construct(?array $midocoSalutationDescription = null)
    {
        $this
            ->setMidocoSalutationDescription($midocoSalutationDescription);
    }
    /**
     * Get MidocoSalutationDescription value
     * @return \Pggns\MidocoApi\CrmSD\StructType\SalutationDescriptionDTO[]
     */
    public function getMidocoSalutationDescription(): ?array
    {
        return $this->MidocoSalutationDescription;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoSalutationDescription method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoSalutationDescription method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoSalutationDescriptionForArrayConstraintsFromSetMidocoSalutationDescription(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getSalutationDescriptionsResponseMidocoSalutationDescriptionItem) {
            // validation for constraint: itemType
            if (!$getSalutationDescriptionsResponseMidocoSalutationDescriptionItem instanceof \Pggns\MidocoApi\CrmSD\StructType\SalutationDescriptionDTO) {
                $invalidValues[] = is_object($getSalutationDescriptionsResponseMidocoSalutationDescriptionItem) ? get_class($getSalutationDescriptionsResponseMidocoSalutationDescriptionItem) : sprintf('%s(%s)', gettype($getSalutationDescriptionsResponseMidocoSalutationDescriptionItem), var_export($getSalutationDescriptionsResponseMidocoSalutationDescriptionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoSalutationDescription property can only contain items of type \Pggns\MidocoApi\CrmSD\StructType\SalutationDescriptionDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoSalutationDescription value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\CrmSD\StructType\SalutationDescriptionDTO[] $midocoSalutationDescription
     * @return \Pggns\MidocoApi\CrmSD\StructType\GetSalutationDescriptionsResponse
     */
    public function setMidocoSalutationDescription(?array $midocoSalutationDescription = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoSalutationDescriptionArrayErrorMessage = self::validateMidocoSalutationDescriptionForArrayConstraintsFromSetMidocoSalutationDescription($midocoSalutationDescription))) {
            throw new InvalidArgumentException($midocoSalutationDescriptionArrayErrorMessage, __LINE__);
        }
        $this->MidocoSalutationDescription = $midocoSalutationDescription;
        
        return $this;
    }
    /**
     * Add item to MidocoSalutationDescription value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\CrmSD\StructType\SalutationDescriptionDTO $item
     * @return \Pggns\MidocoApi\CrmSD\StructType\GetSalutationDescriptionsResponse
     */
    public function addToMidocoSalutationDescription(\Pggns\MidocoApi\CrmSD\StructType\SalutationDescriptionDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\CrmSD\StructType\SalutationDescriptionDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoSalutationDescription property can only contain items of type \Pggns\MidocoApi\CrmSD\StructType\SalutationDescriptionDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoSalutationDescription[] = $item;
        
        return $this;
    }
}
