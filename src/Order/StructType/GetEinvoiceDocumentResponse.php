<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetEinvoiceDocumentResponse StructType
 * @subpackage Structs
 */
class GetEinvoiceDocumentResponse extends AbstractStructBase
{
    /**
     * The MidocoEinvoiceDocument
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoEinvoiceDocument
     * @var \Pggns\MidocoApi\Api\Order\StructType\MidocoEinvoiceDocument[]
     */
    protected ?array $MidocoEinvoiceDocument = null;
    /**
     * Constructor method for GetEinvoiceDocumentResponse
     * @uses GetEinvoiceDocumentResponse::setMidocoEinvoiceDocument()
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoEinvoiceDocument[] $midocoEinvoiceDocument
     */
    public function __construct(?array $midocoEinvoiceDocument = null)
    {
        $this
            ->setMidocoEinvoiceDocument($midocoEinvoiceDocument);
    }
    /**
     * Get MidocoEinvoiceDocument value
     * @return \Pggns\MidocoApi\Api\Order\StructType\MidocoEinvoiceDocument[]
     */
    public function getMidocoEinvoiceDocument(): ?array
    {
        return $this->MidocoEinvoiceDocument;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoEinvoiceDocument method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoEinvoiceDocument method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoEinvoiceDocumentForArrayConstraintsFromSetMidocoEinvoiceDocument(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getEinvoiceDocumentResponseMidocoEinvoiceDocumentItem) {
            // validation for constraint: itemType
            if (!$getEinvoiceDocumentResponseMidocoEinvoiceDocumentItem instanceof \Pggns\MidocoApi\Api\Order\StructType\MidocoEinvoiceDocument) {
                $invalidValues[] = is_object($getEinvoiceDocumentResponseMidocoEinvoiceDocumentItem) ? get_class($getEinvoiceDocumentResponseMidocoEinvoiceDocumentItem) : sprintf('%s(%s)', gettype($getEinvoiceDocumentResponseMidocoEinvoiceDocumentItem), var_export($getEinvoiceDocumentResponseMidocoEinvoiceDocumentItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoEinvoiceDocument property can only contain items of type \Pggns\MidocoApi\Api\Order\StructType\MidocoEinvoiceDocument, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoEinvoiceDocument value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoEinvoiceDocument[] $midocoEinvoiceDocument
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetEinvoiceDocumentResponse
     */
    public function setMidocoEinvoiceDocument(?array $midocoEinvoiceDocument = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoEinvoiceDocumentArrayErrorMessage = self::validateMidocoEinvoiceDocumentForArrayConstraintsFromSetMidocoEinvoiceDocument($midocoEinvoiceDocument))) {
            throw new InvalidArgumentException($midocoEinvoiceDocumentArrayErrorMessage, __LINE__);
        }
        $this->MidocoEinvoiceDocument = $midocoEinvoiceDocument;
        
        return $this;
    }
    /**
     * Add item to MidocoEinvoiceDocument value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoEinvoiceDocument $item
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetEinvoiceDocumentResponse
     */
    public function addToMidocoEinvoiceDocument(\Pggns\MidocoApi\Api\Order\StructType\MidocoEinvoiceDocument $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\Order\StructType\MidocoEinvoiceDocument) {
            throw new InvalidArgumentException(sprintf('The MidocoEinvoiceDocument property can only contain items of type \Pggns\MidocoApi\Api\Order\StructType\MidocoEinvoiceDocument, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoEinvoiceDocument[] = $item;
        
        return $this;
    }
}
