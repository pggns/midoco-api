<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListSignatureDocsResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: listSignatureDocs --- retrieves a list of signature document, accordingly to the search criteria
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ListSignatureDocsResponse extends AbstractStructBase
{
    /**
     * The MidocoSignatureDoc
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoSignatureDoc
     * @var \Pggns\MidocoApi\Documents\StructType\MidocoSignatureDoc[]
     */
    protected ?array $MidocoSignatureDoc = null;
    /**
     * Constructor method for ListSignatureDocsResponse
     * @uses ListSignatureDocsResponse::setMidocoSignatureDoc()
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoSignatureDoc[] $midocoSignatureDoc
     */
    public function __construct(?array $midocoSignatureDoc = null)
    {
        $this
            ->setMidocoSignatureDoc($midocoSignatureDoc);
    }
    /**
     * Get MidocoSignatureDoc value
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoSignatureDoc[]
     */
    public function getMidocoSignatureDoc(): ?array
    {
        return $this->MidocoSignatureDoc;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoSignatureDoc method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoSignatureDoc method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoSignatureDocForArrayConstraintFromSetMidocoSignatureDoc(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $listSignatureDocsResponseMidocoSignatureDocItem) {
            // validation for constraint: itemType
            if (!$listSignatureDocsResponseMidocoSignatureDocItem instanceof \Pggns\MidocoApi\Documents\StructType\MidocoSignatureDoc) {
                $invalidValues[] = is_object($listSignatureDocsResponseMidocoSignatureDocItem) ? get_class($listSignatureDocsResponseMidocoSignatureDocItem) : sprintf('%s(%s)', gettype($listSignatureDocsResponseMidocoSignatureDocItem), var_export($listSignatureDocsResponseMidocoSignatureDocItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoSignatureDoc property can only contain items of type \Pggns\MidocoApi\Documents\StructType\MidocoSignatureDoc, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoSignatureDoc value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoSignatureDoc[] $midocoSignatureDoc
     * @return \Pggns\MidocoApi\Documents\StructType\ListSignatureDocsResponse
     */
    public function setMidocoSignatureDoc(?array $midocoSignatureDoc = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoSignatureDocArrayErrorMessage = self::validateMidocoSignatureDocForArrayConstraintFromSetMidocoSignatureDoc($midocoSignatureDoc))) {
            throw new InvalidArgumentException($midocoSignatureDocArrayErrorMessage, __LINE__);
        }
        $this->MidocoSignatureDoc = $midocoSignatureDoc;
        
        return $this;
    }
    /**
     * Add item to MidocoSignatureDoc value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoSignatureDoc $item
     * @return \Pggns\MidocoApi\Documents\StructType\ListSignatureDocsResponse
     */
    public function addToMidocoSignatureDoc(\Pggns\MidocoApi\Documents\StructType\MidocoSignatureDoc $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Documents\StructType\MidocoSignatureDoc) {
            throw new InvalidArgumentException(sprintf('The MidocoSignatureDoc property can only contain items of type \Pggns\MidocoApi\Documents\StructType\MidocoSignatureDoc, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoSignatureDoc[] = $item;
        
        return $this;
    }
}
