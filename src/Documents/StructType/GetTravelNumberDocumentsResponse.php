<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetTravelNumberDocumentsResponse StructType
 * @subpackage Structs
 */
class GetTravelNumberDocumentsResponse extends AbstractStructBase
{
    /**
     * The MidocoTravelNumberDocument
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoTravelNumberDocument
     * @var \Pggns\MidocoApi\Api\Documents\StructType\MidocoTravelNumberDocument[]
     */
    protected ?array $MidocoTravelNumberDocument = null;
    /**
     * Constructor method for GetTravelNumberDocumentsResponse
     * @uses GetTravelNumberDocumentsResponse::setMidocoTravelNumberDocument()
     * @param \Pggns\MidocoApi\Api\Documents\StructType\MidocoTravelNumberDocument[] $midocoTravelNumberDocument
     */
    public function __construct(?array $midocoTravelNumberDocument = null)
    {
        $this
            ->setMidocoTravelNumberDocument($midocoTravelNumberDocument);
    }
    /**
     * Get MidocoTravelNumberDocument value
     * @return \Pggns\MidocoApi\Api\Documents\StructType\MidocoTravelNumberDocument[]
     */
    public function getMidocoTravelNumberDocument(): ?array
    {
        return $this->MidocoTravelNumberDocument;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoTravelNumberDocument method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoTravelNumberDocument method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoTravelNumberDocumentForArrayConstraintsFromSetMidocoTravelNumberDocument(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getTravelNumberDocumentsResponseMidocoTravelNumberDocumentItem) {
            // validation for constraint: itemType
            if (!$getTravelNumberDocumentsResponseMidocoTravelNumberDocumentItem instanceof \Pggns\MidocoApi\Api\Documents\StructType\MidocoTravelNumberDocument) {
                $invalidValues[] = is_object($getTravelNumberDocumentsResponseMidocoTravelNumberDocumentItem) ? get_class($getTravelNumberDocumentsResponseMidocoTravelNumberDocumentItem) : sprintf('%s(%s)', gettype($getTravelNumberDocumentsResponseMidocoTravelNumberDocumentItem), var_export($getTravelNumberDocumentsResponseMidocoTravelNumberDocumentItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoTravelNumberDocument property can only contain items of type \Pggns\MidocoApi\Api\Documents\StructType\MidocoTravelNumberDocument, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoTravelNumberDocument value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Documents\StructType\MidocoTravelNumberDocument[] $midocoTravelNumberDocument
     * @return \Pggns\MidocoApi\Api\Documents\StructType\GetTravelNumberDocumentsResponse
     */
    public function setMidocoTravelNumberDocument(?array $midocoTravelNumberDocument = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoTravelNumberDocumentArrayErrorMessage = self::validateMidocoTravelNumberDocumentForArrayConstraintsFromSetMidocoTravelNumberDocument($midocoTravelNumberDocument))) {
            throw new InvalidArgumentException($midocoTravelNumberDocumentArrayErrorMessage, __LINE__);
        }
        $this->MidocoTravelNumberDocument = $midocoTravelNumberDocument;
        
        return $this;
    }
    /**
     * Add item to MidocoTravelNumberDocument value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Documents\StructType\MidocoTravelNumberDocument $item
     * @return \Pggns\MidocoApi\Api\Documents\StructType\GetTravelNumberDocumentsResponse
     */
    public function addToMidocoTravelNumberDocument(\Pggns\MidocoApi\Api\Documents\StructType\MidocoTravelNumberDocument $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\Documents\StructType\MidocoTravelNumberDocument) {
            throw new InvalidArgumentException(sprintf('The MidocoTravelNumberDocument property can only contain items of type \Pggns\MidocoApi\Api\Documents\StructType\MidocoTravelNumberDocument, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoTravelNumberDocument[] = $item;
        
        return $this;
    }
}
