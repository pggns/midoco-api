<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\CrmSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMediaTypeDescriptionListResponse StructType
 * @subpackage Structs
 */
class GetMediaTypeDescriptionListResponse extends AbstractStructBase
{
    /**
     * The MidocoMediaTypeDescription
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoMediaTypeDescription
     * @var \Pggns\MidocoApi\Api\CrmSD\StructType\MediaTypeDescriptionDTO[]
     */
    protected ?array $MidocoMediaTypeDescription = null;
    /**
     * Constructor method for GetMediaTypeDescriptionListResponse
     * @uses GetMediaTypeDescriptionListResponse::setMidocoMediaTypeDescription()
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\MediaTypeDescriptionDTO[] $midocoMediaTypeDescription
     */
    public function __construct(?array $midocoMediaTypeDescription = null)
    {
        $this
            ->setMidocoMediaTypeDescription($midocoMediaTypeDescription);
    }
    /**
     * Get MidocoMediaTypeDescription value
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\MediaTypeDescriptionDTO[]
     */
    public function getMidocoMediaTypeDescription(): ?array
    {
        return $this->MidocoMediaTypeDescription;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoMediaTypeDescription method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoMediaTypeDescription method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoMediaTypeDescriptionForArrayConstraintsFromSetMidocoMediaTypeDescription(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getMediaTypeDescriptionListResponseMidocoMediaTypeDescriptionItem) {
            // validation for constraint: itemType
            if (!$getMediaTypeDescriptionListResponseMidocoMediaTypeDescriptionItem instanceof \Pggns\MidocoApi\Api\CrmSD\StructType\MediaTypeDescriptionDTO) {
                $invalidValues[] = is_object($getMediaTypeDescriptionListResponseMidocoMediaTypeDescriptionItem) ? get_class($getMediaTypeDescriptionListResponseMidocoMediaTypeDescriptionItem) : sprintf('%s(%s)', gettype($getMediaTypeDescriptionListResponseMidocoMediaTypeDescriptionItem), var_export($getMediaTypeDescriptionListResponseMidocoMediaTypeDescriptionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoMediaTypeDescription property can only contain items of type \Pggns\MidocoApi\Api\CrmSD\StructType\MediaTypeDescriptionDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoMediaTypeDescription value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\MediaTypeDescriptionDTO[] $midocoMediaTypeDescription
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\GetMediaTypeDescriptionListResponse
     */
    public function setMidocoMediaTypeDescription(?array $midocoMediaTypeDescription = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoMediaTypeDescriptionArrayErrorMessage = self::validateMidocoMediaTypeDescriptionForArrayConstraintsFromSetMidocoMediaTypeDescription($midocoMediaTypeDescription))) {
            throw new InvalidArgumentException($midocoMediaTypeDescriptionArrayErrorMessage, __LINE__);
        }
        $this->MidocoMediaTypeDescription = $midocoMediaTypeDescription;
        
        return $this;
    }
    /**
     * Add item to MidocoMediaTypeDescription value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\MediaTypeDescriptionDTO $item
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\GetMediaTypeDescriptionListResponse
     */
    public function addToMidocoMediaTypeDescription(\Pggns\MidocoApi\Api\CrmSD\StructType\MediaTypeDescriptionDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\CrmSD\StructType\MediaTypeDescriptionDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoMediaTypeDescription property can only contain items of type \Pggns\MidocoApi\Api\CrmSD\StructType\MediaTypeDescriptionDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoMediaTypeDescription[] = $item;
        
        return $this;
    }
}
