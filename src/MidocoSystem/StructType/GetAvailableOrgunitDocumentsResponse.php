<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\MidocoSystem\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAvailableOrgunitDocumentsResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetAvailableOrgunitDocumentsResponse extends AbstractStructBase
{
    /**
     * The MidocoOrgunitDocument
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoOrgunitDocument
     * @var \Pggns\MidocoApi\MidocoSystem\StructType\MidocoOrgunitDocument[]
     */
    protected ?array $MidocoOrgunitDocument = null;
    /**
     * Constructor method for GetAvailableOrgunitDocumentsResponse
     * @uses GetAvailableOrgunitDocumentsResponse::setMidocoOrgunitDocument()
     * @param \Pggns\MidocoApi\MidocoSystem\StructType\MidocoOrgunitDocument[] $midocoOrgunitDocument
     */
    public function __construct(?array $midocoOrgunitDocument = null)
    {
        $this
            ->setMidocoOrgunitDocument($midocoOrgunitDocument);
    }
    /**
     * Get MidocoOrgunitDocument value
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\MidocoOrgunitDocument[]
     */
    public function getMidocoOrgunitDocument(): ?array
    {
        return $this->MidocoOrgunitDocument;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoOrgunitDocument method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoOrgunitDocument method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoOrgunitDocumentForArrayConstraintFromSetMidocoOrgunitDocument(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getAvailableOrgunitDocumentsResponseMidocoOrgunitDocumentItem) {
            // validation for constraint: itemType
            if (!$getAvailableOrgunitDocumentsResponseMidocoOrgunitDocumentItem instanceof \Pggns\MidocoApi\MidocoSystem\StructType\MidocoOrgunitDocument) {
                $invalidValues[] = is_object($getAvailableOrgunitDocumentsResponseMidocoOrgunitDocumentItem) ? get_class($getAvailableOrgunitDocumentsResponseMidocoOrgunitDocumentItem) : sprintf('%s(%s)', gettype($getAvailableOrgunitDocumentsResponseMidocoOrgunitDocumentItem), var_export($getAvailableOrgunitDocumentsResponseMidocoOrgunitDocumentItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoOrgunitDocument property can only contain items of type \Pggns\MidocoApi\MidocoSystem\StructType\MidocoOrgunitDocument, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoOrgunitDocument value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\MidocoSystem\StructType\MidocoOrgunitDocument[] $midocoOrgunitDocument
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\GetAvailableOrgunitDocumentsResponse
     */
    public function setMidocoOrgunitDocument(?array $midocoOrgunitDocument = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoOrgunitDocumentArrayErrorMessage = self::validateMidocoOrgunitDocumentForArrayConstraintFromSetMidocoOrgunitDocument($midocoOrgunitDocument))) {
            throw new InvalidArgumentException($midocoOrgunitDocumentArrayErrorMessage, __LINE__);
        }
        $this->MidocoOrgunitDocument = $midocoOrgunitDocument;
        
        return $this;
    }
    /**
     * Add item to MidocoOrgunitDocument value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\MidocoSystem\StructType\MidocoOrgunitDocument $item
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\GetAvailableOrgunitDocumentsResponse
     */
    public function addToMidocoOrgunitDocument(\Pggns\MidocoApi\MidocoSystem\StructType\MidocoOrgunitDocument $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\MidocoSystem\StructType\MidocoOrgunitDocument) {
            throw new InvalidArgumentException(sprintf('The MidocoOrgunitDocument property can only contain items of type \Pggns\MidocoApi\MidocoSystem\StructType\MidocoOrgunitDocument, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoOrgunitDocument[] = $item;
        
        return $this;
    }
}
