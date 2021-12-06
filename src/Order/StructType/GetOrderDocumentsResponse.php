<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetOrderDocumentsResponse StructType
 * @subpackage Structs
 */
class GetOrderDocumentsResponse extends AbstractStructBase
{
    /**
     * The MidocoOrderDocument
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoOrderDocument
     * @var \Pggns\MidocoApi\Api\Order\StructType\MidocoOrderDocument[]
     */
    protected ?array $MidocoOrderDocument = null;
    /**
     * Constructor method for GetOrderDocumentsResponse
     * @uses GetOrderDocumentsResponse::setMidocoOrderDocument()
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoOrderDocument[] $midocoOrderDocument
     */
    public function __construct(?array $midocoOrderDocument = null)
    {
        $this
            ->setMidocoOrderDocument($midocoOrderDocument);
    }
    /**
     * Get MidocoOrderDocument value
     * @return \Pggns\MidocoApi\Api\Order\StructType\MidocoOrderDocument[]
     */
    public function getMidocoOrderDocument(): ?array
    {
        return $this->MidocoOrderDocument;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoOrderDocument method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoOrderDocument method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoOrderDocumentForArrayConstraintsFromSetMidocoOrderDocument(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getOrderDocumentsResponseMidocoOrderDocumentItem) {
            // validation for constraint: itemType
            if (!$getOrderDocumentsResponseMidocoOrderDocumentItem instanceof \Pggns\MidocoApi\Api\Order\StructType\MidocoOrderDocument) {
                $invalidValues[] = is_object($getOrderDocumentsResponseMidocoOrderDocumentItem) ? get_class($getOrderDocumentsResponseMidocoOrderDocumentItem) : sprintf('%s(%s)', gettype($getOrderDocumentsResponseMidocoOrderDocumentItem), var_export($getOrderDocumentsResponseMidocoOrderDocumentItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoOrderDocument property can only contain items of type \Pggns\MidocoApi\Api\Order\StructType\MidocoOrderDocument, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoOrderDocument value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoOrderDocument[] $midocoOrderDocument
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetOrderDocumentsResponse
     */
    public function setMidocoOrderDocument(?array $midocoOrderDocument = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoOrderDocumentArrayErrorMessage = self::validateMidocoOrderDocumentForArrayConstraintsFromSetMidocoOrderDocument($midocoOrderDocument))) {
            throw new InvalidArgumentException($midocoOrderDocumentArrayErrorMessage, __LINE__);
        }
        $this->MidocoOrderDocument = $midocoOrderDocument;
        
        return $this;
    }
    /**
     * Add item to MidocoOrderDocument value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoOrderDocument $item
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetOrderDocumentsResponse
     */
    public function addToMidocoOrderDocument(\Pggns\MidocoApi\Api\Order\StructType\MidocoOrderDocument $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\Order\StructType\MidocoOrderDocument) {
            throw new InvalidArgumentException(sprintf('The MidocoOrderDocument property can only contain items of type \Pggns\MidocoApi\Api\Order\StructType\MidocoOrderDocument, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoOrderDocument[] = $item;
        
        return $this;
    }
}
