<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAvailableComplaintTypeDescriptionsResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: return the available bonus card descriptions
 * @subpackage Structs
 */
class GetAvailableComplaintTypeDescriptionsResponse extends AbstractStructBase
{
    /**
     * The MidocoComplaintTypeDescription
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoComplaintTypeDescription
     * @var \Pggns\MidocoApi\Crm\StructType\ComplaintTypeDescrDTO[]
     */
    protected ?array $MidocoComplaintTypeDescription = null;
    /**
     * Constructor method for GetAvailableComplaintTypeDescriptionsResponse
     * @uses GetAvailableComplaintTypeDescriptionsResponse::setMidocoComplaintTypeDescription()
     * @param \Pggns\MidocoApi\Crm\StructType\ComplaintTypeDescrDTO[] $midocoComplaintTypeDescription
     */
    public function __construct(?array $midocoComplaintTypeDescription = null)
    {
        $this
            ->setMidocoComplaintTypeDescription($midocoComplaintTypeDescription);
    }
    /**
     * Get MidocoComplaintTypeDescription value
     * @return \Pggns\MidocoApi\Crm\StructType\ComplaintTypeDescrDTO[]
     */
    public function getMidocoComplaintTypeDescription(): ?array
    {
        return $this->MidocoComplaintTypeDescription;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoComplaintTypeDescription method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoComplaintTypeDescription method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoComplaintTypeDescriptionForArrayConstraintsFromSetMidocoComplaintTypeDescription(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getAvailableComplaintTypeDescriptionsResponseMidocoComplaintTypeDescriptionItem) {
            // validation for constraint: itemType
            if (!$getAvailableComplaintTypeDescriptionsResponseMidocoComplaintTypeDescriptionItem instanceof \Pggns\MidocoApi\Crm\StructType\ComplaintTypeDescrDTO) {
                $invalidValues[] = is_object($getAvailableComplaintTypeDescriptionsResponseMidocoComplaintTypeDescriptionItem) ? get_class($getAvailableComplaintTypeDescriptionsResponseMidocoComplaintTypeDescriptionItem) : sprintf('%s(%s)', gettype($getAvailableComplaintTypeDescriptionsResponseMidocoComplaintTypeDescriptionItem), var_export($getAvailableComplaintTypeDescriptionsResponseMidocoComplaintTypeDescriptionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoComplaintTypeDescription property can only contain items of type \Pggns\MidocoApi\Crm\StructType\ComplaintTypeDescrDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoComplaintTypeDescription value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\ComplaintTypeDescrDTO[] $midocoComplaintTypeDescription
     * @return \Pggns\MidocoApi\Crm\StructType\GetAvailableComplaintTypeDescriptionsResponse
     */
    public function setMidocoComplaintTypeDescription(?array $midocoComplaintTypeDescription = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoComplaintTypeDescriptionArrayErrorMessage = self::validateMidocoComplaintTypeDescriptionForArrayConstraintsFromSetMidocoComplaintTypeDescription($midocoComplaintTypeDescription))) {
            throw new InvalidArgumentException($midocoComplaintTypeDescriptionArrayErrorMessage, __LINE__);
        }
        $this->MidocoComplaintTypeDescription = $midocoComplaintTypeDescription;
        
        return $this;
    }
    /**
     * Add item to MidocoComplaintTypeDescription value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\ComplaintTypeDescrDTO $item
     * @return \Pggns\MidocoApi\Crm\StructType\GetAvailableComplaintTypeDescriptionsResponse
     */
    public function addToMidocoComplaintTypeDescription(\Pggns\MidocoApi\Crm\StructType\ComplaintTypeDescrDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crm\StructType\ComplaintTypeDescrDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoComplaintTypeDescription property can only contain items of type \Pggns\MidocoApi\Crm\StructType\ComplaintTypeDescrDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoComplaintTypeDescription[] = $item;
        
        return $this;
    }
}
