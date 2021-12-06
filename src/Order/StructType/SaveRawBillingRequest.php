<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveRawBillingRequest StructType
 * @subpackage Structs
 */
class SaveRawBillingRequest extends AbstractStructBase
{
    /**
     * The MidocoBillingDocument
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoBillingDocument
     * @var \Pggns\MidocoApi\Api\Order\StructType\MidocoBillingDocument|null
     */
    protected ?\Pggns\MidocoApi\Api\Order\StructType\MidocoBillingDocument $MidocoBillingDocument = null;
    /**
     * The MidocoBillingPosition
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoBillingPosition
     * @var \Pggns\MidocoApi\Api\Order\StructType\MidocoBillingPositionType[]
     */
    protected ?array $MidocoBillingPosition = null;
    /**
     * Constructor method for SaveRawBillingRequest
     * @uses SaveRawBillingRequest::setMidocoBillingDocument()
     * @uses SaveRawBillingRequest::setMidocoBillingPosition()
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoBillingDocument $midocoBillingDocument
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoBillingPositionType[] $midocoBillingPosition
     */
    public function __construct(?\Pggns\MidocoApi\Api\Order\StructType\MidocoBillingDocument $midocoBillingDocument = null, ?array $midocoBillingPosition = null)
    {
        $this
            ->setMidocoBillingDocument($midocoBillingDocument)
            ->setMidocoBillingPosition($midocoBillingPosition);
    }
    /**
     * Get MidocoBillingDocument value
     * @return \Pggns\MidocoApi\Api\Order\StructType\MidocoBillingDocument|null
     */
    public function getMidocoBillingDocument(): ?\Pggns\MidocoApi\Api\Order\StructType\MidocoBillingDocument
    {
        return $this->MidocoBillingDocument;
    }
    /**
     * Set MidocoBillingDocument value
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoBillingDocument $midocoBillingDocument
     * @return \Pggns\MidocoApi\Api\Order\StructType\SaveRawBillingRequest
     */
    public function setMidocoBillingDocument(?\Pggns\MidocoApi\Api\Order\StructType\MidocoBillingDocument $midocoBillingDocument = null): self
    {
        $this->MidocoBillingDocument = $midocoBillingDocument;
        
        return $this;
    }
    /**
     * Get MidocoBillingPosition value
     * @return \Pggns\MidocoApi\Api\Order\StructType\MidocoBillingPositionType[]
     */
    public function getMidocoBillingPosition(): ?array
    {
        return $this->MidocoBillingPosition;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoBillingPosition method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoBillingPosition method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoBillingPositionForArrayConstraintsFromSetMidocoBillingPosition(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $saveRawBillingRequestMidocoBillingPositionItem) {
            // validation for constraint: itemType
            if (!$saveRawBillingRequestMidocoBillingPositionItem instanceof \Pggns\MidocoApi\Api\Order\StructType\MidocoBillingPositionType) {
                $invalidValues[] = is_object($saveRawBillingRequestMidocoBillingPositionItem) ? get_class($saveRawBillingRequestMidocoBillingPositionItem) : sprintf('%s(%s)', gettype($saveRawBillingRequestMidocoBillingPositionItem), var_export($saveRawBillingRequestMidocoBillingPositionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoBillingPosition property can only contain items of type \Pggns\MidocoApi\Api\Order\StructType\MidocoBillingPositionType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoBillingPosition value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoBillingPositionType[] $midocoBillingPosition
     * @return \Pggns\MidocoApi\Api\Order\StructType\SaveRawBillingRequest
     */
    public function setMidocoBillingPosition(?array $midocoBillingPosition = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoBillingPositionArrayErrorMessage = self::validateMidocoBillingPositionForArrayConstraintsFromSetMidocoBillingPosition($midocoBillingPosition))) {
            throw new InvalidArgumentException($midocoBillingPositionArrayErrorMessage, __LINE__);
        }
        $this->MidocoBillingPosition = $midocoBillingPosition;
        
        return $this;
    }
    /**
     * Add item to MidocoBillingPosition value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoBillingPositionType $item
     * @return \Pggns\MidocoApi\Api\Order\StructType\SaveRawBillingRequest
     */
    public function addToMidocoBillingPosition(\Pggns\MidocoApi\Api\Order\StructType\MidocoBillingPositionType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\Order\StructType\MidocoBillingPositionType) {
            throw new InvalidArgumentException(sprintf('The MidocoBillingPosition property can only contain items of type \Pggns\MidocoApi\Api\Order\StructType\MidocoBillingPositionType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoBillingPosition[] = $item;
        
        return $this;
    }
}