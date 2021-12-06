<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoQuestion StructType
 * @subpackage Structs
 */
class MidocoQuestion extends QuestionDTO
{
    /**
     * The MidocoQmPrint
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Api\Order\StructType\QmPrintDTO[]
     */
    protected ?array $MidocoQmPrint = null;
    /**
     * Constructor method for MidocoQuestion
     * @uses MidocoQuestion::setMidocoQmPrint()
     * @param \Pggns\MidocoApi\Api\Order\StructType\QmPrintDTO[] $midocoQmPrint
     */
    public function __construct(?array $midocoQmPrint = null)
    {
        $this
            ->setMidocoQmPrint($midocoQmPrint);
    }
    /**
     * Get MidocoQmPrint value
     * @return \Pggns\MidocoApi\Api\Order\StructType\QmPrintDTO[]
     */
    public function getMidocoQmPrint(): ?array
    {
        return $this->MidocoQmPrint;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoQmPrint method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoQmPrint method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoQmPrintForArrayConstraintsFromSetMidocoQmPrint(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoQuestionMidocoQmPrintItem) {
            // validation for constraint: itemType
            if (!$midocoQuestionMidocoQmPrintItem instanceof \Pggns\MidocoApi\Api\Order\StructType\QmPrintDTO) {
                $invalidValues[] = is_object($midocoQuestionMidocoQmPrintItem) ? get_class($midocoQuestionMidocoQmPrintItem) : sprintf('%s(%s)', gettype($midocoQuestionMidocoQmPrintItem), var_export($midocoQuestionMidocoQmPrintItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoQmPrint property can only contain items of type \Pggns\MidocoApi\Api\Order\StructType\QmPrintDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoQmPrint value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Order\StructType\QmPrintDTO[] $midocoQmPrint
     * @return \Pggns\MidocoApi\Api\Order\StructType\MidocoQuestion
     */
    public function setMidocoQmPrint(?array $midocoQmPrint = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoQmPrintArrayErrorMessage = self::validateMidocoQmPrintForArrayConstraintsFromSetMidocoQmPrint($midocoQmPrint))) {
            throw new InvalidArgumentException($midocoQmPrintArrayErrorMessage, __LINE__);
        }
        $this->MidocoQmPrint = $midocoQmPrint;
        
        return $this;
    }
    /**
     * Add item to MidocoQmPrint value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Order\StructType\QmPrintDTO $item
     * @return \Pggns\MidocoApi\Api\Order\StructType\MidocoQuestion
     */
    public function addToMidocoQmPrint(\Pggns\MidocoApi\Api\Order\StructType\QmPrintDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\Order\StructType\QmPrintDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoQmPrint property can only contain items of type \Pggns\MidocoApi\Api\Order\StructType\QmPrintDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoQmPrint[] = $item;
        
        return $this;
    }
}
