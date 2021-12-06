<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\CrmSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSubjectElementsResponse StructType
 * @subpackage Structs
 */
class GetSubjectElementsResponse extends AbstractStructBase
{
    /**
     * The MidocoSubjectElement
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoSubjectElement
     * @var \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoSubjectElement[]
     */
    protected ?array $MidocoSubjectElement = null;
    /**
     * Constructor method for GetSubjectElementsResponse
     * @uses GetSubjectElementsResponse::setMidocoSubjectElement()
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoSubjectElement[] $midocoSubjectElement
     */
    public function __construct(?array $midocoSubjectElement = null)
    {
        $this
            ->setMidocoSubjectElement($midocoSubjectElement);
    }
    /**
     * Get MidocoSubjectElement value
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoSubjectElement[]
     */
    public function getMidocoSubjectElement(): ?array
    {
        return $this->MidocoSubjectElement;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoSubjectElement method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoSubjectElement method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoSubjectElementForArrayConstraintsFromSetMidocoSubjectElement(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getSubjectElementsResponseMidocoSubjectElementItem) {
            // validation for constraint: itemType
            if (!$getSubjectElementsResponseMidocoSubjectElementItem instanceof \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoSubjectElement) {
                $invalidValues[] = is_object($getSubjectElementsResponseMidocoSubjectElementItem) ? get_class($getSubjectElementsResponseMidocoSubjectElementItem) : sprintf('%s(%s)', gettype($getSubjectElementsResponseMidocoSubjectElementItem), var_export($getSubjectElementsResponseMidocoSubjectElementItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoSubjectElement property can only contain items of type \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoSubjectElement, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoSubjectElement value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoSubjectElement[] $midocoSubjectElement
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\GetSubjectElementsResponse
     */
    public function setMidocoSubjectElement(?array $midocoSubjectElement = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoSubjectElementArrayErrorMessage = self::validateMidocoSubjectElementForArrayConstraintsFromSetMidocoSubjectElement($midocoSubjectElement))) {
            throw new InvalidArgumentException($midocoSubjectElementArrayErrorMessage, __LINE__);
        }
        $this->MidocoSubjectElement = $midocoSubjectElement;
        
        return $this;
    }
    /**
     * Add item to MidocoSubjectElement value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoSubjectElement $item
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\GetSubjectElementsResponse
     */
    public function addToMidocoSubjectElement(\Pggns\MidocoApi\Api\CrmSD\StructType\MidocoSubjectElement $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoSubjectElement) {
            throw new InvalidArgumentException(sprintf('The MidocoSubjectElement property can only contain items of type \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoSubjectElement, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoSubjectElement[] = $item;
        
        return $this;
    }
}
