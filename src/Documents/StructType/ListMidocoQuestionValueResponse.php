<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListMidocoQuestionValueResponse StructType
 * @subpackage Structs
 */
class ListMidocoQuestionValueResponse extends AbstractStructBase
{
    /**
     * The MidocoQuestionValue
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoQuestionValue
     * @var \Pggns\MidocoApi\Api\Documents\StructType\QuestionValueDTO[]
     */
    protected ?array $MidocoQuestionValue = null;
    /**
     * Constructor method for ListMidocoQuestionValueResponse
     * @uses ListMidocoQuestionValueResponse::setMidocoQuestionValue()
     * @param \Pggns\MidocoApi\Api\Documents\StructType\QuestionValueDTO[] $midocoQuestionValue
     */
    public function __construct(?array $midocoQuestionValue = null)
    {
        $this
            ->setMidocoQuestionValue($midocoQuestionValue);
    }
    /**
     * Get MidocoQuestionValue value
     * @return \Pggns\MidocoApi\Api\Documents\StructType\QuestionValueDTO[]
     */
    public function getMidocoQuestionValue(): ?array
    {
        return $this->MidocoQuestionValue;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoQuestionValue method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoQuestionValue method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoQuestionValueForArrayConstraintsFromSetMidocoQuestionValue(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $listMidocoQuestionValueResponseMidocoQuestionValueItem) {
            // validation for constraint: itemType
            if (!$listMidocoQuestionValueResponseMidocoQuestionValueItem instanceof \Pggns\MidocoApi\Api\Documents\StructType\QuestionValueDTO) {
                $invalidValues[] = is_object($listMidocoQuestionValueResponseMidocoQuestionValueItem) ? get_class($listMidocoQuestionValueResponseMidocoQuestionValueItem) : sprintf('%s(%s)', gettype($listMidocoQuestionValueResponseMidocoQuestionValueItem), var_export($listMidocoQuestionValueResponseMidocoQuestionValueItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoQuestionValue property can only contain items of type \Pggns\MidocoApi\Api\Documents\StructType\QuestionValueDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoQuestionValue value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Documents\StructType\QuestionValueDTO[] $midocoQuestionValue
     * @return \Pggns\MidocoApi\Api\Documents\StructType\ListMidocoQuestionValueResponse
     */
    public function setMidocoQuestionValue(?array $midocoQuestionValue = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoQuestionValueArrayErrorMessage = self::validateMidocoQuestionValueForArrayConstraintsFromSetMidocoQuestionValue($midocoQuestionValue))) {
            throw new InvalidArgumentException($midocoQuestionValueArrayErrorMessage, __LINE__);
        }
        $this->MidocoQuestionValue = $midocoQuestionValue;
        
        return $this;
    }
    /**
     * Add item to MidocoQuestionValue value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Documents\StructType\QuestionValueDTO $item
     * @return \Pggns\MidocoApi\Api\Documents\StructType\ListMidocoQuestionValueResponse
     */
    public function addToMidocoQuestionValue(\Pggns\MidocoApi\Api\Documents\StructType\QuestionValueDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\Documents\StructType\QuestionValueDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoQuestionValue property can only contain items of type \Pggns\MidocoApi\Api\Documents\StructType\QuestionValueDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoQuestionValue[] = $item;
        
        return $this;
    }
}
