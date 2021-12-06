<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\OrderSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetTravelNumberVatSchemasResponse StructType
 * @subpackage Structs
 */
class GetTravelNumberVatSchemasResponse extends AbstractStructBase
{
    /**
     * The MidocoTravelNumberVatSchema
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoTravelNumberVatSchema
     * @var \Pggns\MidocoApi\Api\OrderSD\StructType\TravelNumberVatSchemaDTO[]
     */
    protected ?array $MidocoTravelNumberVatSchema = null;
    /**
     * Constructor method for GetTravelNumberVatSchemasResponse
     * @uses GetTravelNumberVatSchemasResponse::setMidocoTravelNumberVatSchema()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\TravelNumberVatSchemaDTO[] $midocoTravelNumberVatSchema
     */
    public function __construct(?array $midocoTravelNumberVatSchema = null)
    {
        $this
            ->setMidocoTravelNumberVatSchema($midocoTravelNumberVatSchema);
    }
    /**
     * Get MidocoTravelNumberVatSchema value
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\TravelNumberVatSchemaDTO[]
     */
    public function getMidocoTravelNumberVatSchema(): ?array
    {
        return $this->MidocoTravelNumberVatSchema;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoTravelNumberVatSchema method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoTravelNumberVatSchema method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoTravelNumberVatSchemaForArrayConstraintsFromSetMidocoTravelNumberVatSchema(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getTravelNumberVatSchemasResponseMidocoTravelNumberVatSchemaItem) {
            // validation for constraint: itemType
            if (!$getTravelNumberVatSchemasResponseMidocoTravelNumberVatSchemaItem instanceof \Pggns\MidocoApi\Api\OrderSD\StructType\TravelNumberVatSchemaDTO) {
                $invalidValues[] = is_object($getTravelNumberVatSchemasResponseMidocoTravelNumberVatSchemaItem) ? get_class($getTravelNumberVatSchemasResponseMidocoTravelNumberVatSchemaItem) : sprintf('%s(%s)', gettype($getTravelNumberVatSchemasResponseMidocoTravelNumberVatSchemaItem), var_export($getTravelNumberVatSchemasResponseMidocoTravelNumberVatSchemaItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoTravelNumberVatSchema property can only contain items of type \Pggns\MidocoApi\Api\OrderSD\StructType\TravelNumberVatSchemaDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoTravelNumberVatSchema value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\TravelNumberVatSchemaDTO[] $midocoTravelNumberVatSchema
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\GetTravelNumberVatSchemasResponse
     */
    public function setMidocoTravelNumberVatSchema(?array $midocoTravelNumberVatSchema = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoTravelNumberVatSchemaArrayErrorMessage = self::validateMidocoTravelNumberVatSchemaForArrayConstraintsFromSetMidocoTravelNumberVatSchema($midocoTravelNumberVatSchema))) {
            throw new InvalidArgumentException($midocoTravelNumberVatSchemaArrayErrorMessage, __LINE__);
        }
        $this->MidocoTravelNumberVatSchema = $midocoTravelNumberVatSchema;
        
        return $this;
    }
    /**
     * Add item to MidocoTravelNumberVatSchema value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\TravelNumberVatSchemaDTO $item
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\GetTravelNumberVatSchemasResponse
     */
    public function addToMidocoTravelNumberVatSchema(\Pggns\MidocoApi\Api\OrderSD\StructType\TravelNumberVatSchemaDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\OrderSD\StructType\TravelNumberVatSchemaDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoTravelNumberVatSchema property can only contain items of type \Pggns\MidocoApi\Api\OrderSD\StructType\TravelNumberVatSchemaDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoTravelNumberVatSchema[] = $item;
        
        return $this;
    }
}
