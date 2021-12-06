<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetTravelDocumentsResponse StructType
 * @subpackage Structs
 */
class GetTravelDocumentsResponse extends AbstractStructBase
{
    /**
     * The MidocoTravelDocument
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoTravelDocument
     * @var \Pggns\MidocoApi\Api\Order\StructType\MidocoTravelDocument[]
     */
    protected ?array $MidocoTravelDocument = null;
    /**
     * Constructor method for GetTravelDocumentsResponse
     * @uses GetTravelDocumentsResponse::setMidocoTravelDocument()
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoTravelDocument[] $midocoTravelDocument
     */
    public function __construct(?array $midocoTravelDocument = null)
    {
        $this
            ->setMidocoTravelDocument($midocoTravelDocument);
    }
    /**
     * Get MidocoTravelDocument value
     * @return \Pggns\MidocoApi\Api\Order\StructType\MidocoTravelDocument[]
     */
    public function getMidocoTravelDocument(): ?array
    {
        return $this->MidocoTravelDocument;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoTravelDocument method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoTravelDocument method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoTravelDocumentForArrayConstraintsFromSetMidocoTravelDocument(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getTravelDocumentsResponseMidocoTravelDocumentItem) {
            // validation for constraint: itemType
            if (!$getTravelDocumentsResponseMidocoTravelDocumentItem instanceof \Pggns\MidocoApi\Api\Order\StructType\MidocoTravelDocument) {
                $invalidValues[] = is_object($getTravelDocumentsResponseMidocoTravelDocumentItem) ? get_class($getTravelDocumentsResponseMidocoTravelDocumentItem) : sprintf('%s(%s)', gettype($getTravelDocumentsResponseMidocoTravelDocumentItem), var_export($getTravelDocumentsResponseMidocoTravelDocumentItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoTravelDocument property can only contain items of type \Pggns\MidocoApi\Api\Order\StructType\MidocoTravelDocument, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoTravelDocument value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoTravelDocument[] $midocoTravelDocument
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetTravelDocumentsResponse
     */
    public function setMidocoTravelDocument(?array $midocoTravelDocument = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoTravelDocumentArrayErrorMessage = self::validateMidocoTravelDocumentForArrayConstraintsFromSetMidocoTravelDocument($midocoTravelDocument))) {
            throw new InvalidArgumentException($midocoTravelDocumentArrayErrorMessage, __LINE__);
        }
        $this->MidocoTravelDocument = $midocoTravelDocument;
        
        return $this;
    }
    /**
     * Add item to MidocoTravelDocument value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoTravelDocument $item
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetTravelDocumentsResponse
     */
    public function addToMidocoTravelDocument(\Pggns\MidocoApi\Api\Order\StructType\MidocoTravelDocument $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\Order\StructType\MidocoTravelDocument) {
            throw new InvalidArgumentException(sprintf('The MidocoTravelDocument property can only contain items of type \Pggns\MidocoApi\Api\Order\StructType\MidocoTravelDocument, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoTravelDocument[] = $item;
        
        return $this;
    }
}
