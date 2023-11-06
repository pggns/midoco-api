<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchExternDocumentResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SearchExternDocumentResponse extends AbstractStructBase
{
    /**
     * The MidocoExternDocument
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoExternDocument
     * @var \Pggns\MidocoApi\Documents\StructType\MidocoExternDocument[]
     */
    protected ?array $MidocoExternDocument = null;
    /**
     * Constructor method for SearchExternDocumentResponse
     * @uses SearchExternDocumentResponse::setMidocoExternDocument()
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoExternDocument[] $midocoExternDocument
     */
    public function __construct(?array $midocoExternDocument = null)
    {
        $this
            ->setMidocoExternDocument($midocoExternDocument);
    }
    /**
     * Get MidocoExternDocument value
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoExternDocument[]
     */
    public function getMidocoExternDocument(): ?array
    {
        return $this->MidocoExternDocument;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoExternDocument method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoExternDocument method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoExternDocumentForArrayConstraintFromSetMidocoExternDocument(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $searchExternDocumentResponseMidocoExternDocumentItem) {
            // validation for constraint: itemType
            if (!$searchExternDocumentResponseMidocoExternDocumentItem instanceof \Pggns\MidocoApi\Documents\StructType\MidocoExternDocument) {
                $invalidValues[] = is_object($searchExternDocumentResponseMidocoExternDocumentItem) ? get_class($searchExternDocumentResponseMidocoExternDocumentItem) : sprintf('%s(%s)', gettype($searchExternDocumentResponseMidocoExternDocumentItem), var_export($searchExternDocumentResponseMidocoExternDocumentItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoExternDocument property can only contain items of type \Pggns\MidocoApi\Documents\StructType\MidocoExternDocument, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoExternDocument value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoExternDocument[] $midocoExternDocument
     * @return \Pggns\MidocoApi\Documents\StructType\SearchExternDocumentResponse
     */
    public function setMidocoExternDocument(?array $midocoExternDocument = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoExternDocumentArrayErrorMessage = self::validateMidocoExternDocumentForArrayConstraintFromSetMidocoExternDocument($midocoExternDocument))) {
            throw new InvalidArgumentException($midocoExternDocumentArrayErrorMessage, __LINE__);
        }
        $this->MidocoExternDocument = $midocoExternDocument;
        
        return $this;
    }
    /**
     * Add item to MidocoExternDocument value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoExternDocument $item
     * @return \Pggns\MidocoApi\Documents\StructType\SearchExternDocumentResponse
     */
    public function addToMidocoExternDocument(\Pggns\MidocoApi\Documents\StructType\MidocoExternDocument $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Documents\StructType\MidocoExternDocument) {
            throw new InvalidArgumentException(sprintf('The MidocoExternDocument property can only contain items of type \Pggns\MidocoApi\Documents\StructType\MidocoExternDocument, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoExternDocument[] = $item;
        
        return $this;
    }
}
