<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListFIBUInvRbBalanceResponse StructType
 * @subpackage Structs
 */
class ListFIBUInvRbBalanceResponse extends AbstractStructBase
{
    /**
     * The FIBUInvRbBalanceLine
     * Meta information extracted from the WSDL
     * - choice: FIBUInvRbBalanceLine | FIBUInvRbBalanceCsvContent
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: FIBUInvRbBalanceLine
     * @var \Pggns\MidocoApi\Api\Orderlists\StructType\FIBUInvRbBalanceLineType[]
     */
    protected ?array $FIBUInvRbBalanceLine = null;
    /**
     * The FIBUInvRbBalanceCsvContent
     * Meta information extracted from the WSDL
     * - choice: FIBUInvRbBalanceLine | FIBUInvRbBalanceCsvContent
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $FIBUInvRbBalanceCsvContent = null;
    /**
     * Constructor method for ListFIBUInvRbBalanceResponse
     * @uses ListFIBUInvRbBalanceResponse::setFIBUInvRbBalanceLine()
     * @uses ListFIBUInvRbBalanceResponse::setFIBUInvRbBalanceCsvContent()
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\FIBUInvRbBalanceLineType[] $fIBUInvRbBalanceLine
     * @param string $fIBUInvRbBalanceCsvContent
     */
    public function __construct(?array $fIBUInvRbBalanceLine = null, ?string $fIBUInvRbBalanceCsvContent = null)
    {
        $this
            ->setFIBUInvRbBalanceLine($fIBUInvRbBalanceLine)
            ->setFIBUInvRbBalanceCsvContent($fIBUInvRbBalanceCsvContent);
    }
    /**
     * Get FIBUInvRbBalanceLine value
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\FIBUInvRbBalanceLineType[]
     */
    public function getFIBUInvRbBalanceLine(): ?array
    {
        return isset($this->FIBUInvRbBalanceLine) ? $this->FIBUInvRbBalanceLine : null;
    }
    /**
     * This method is responsible for validating the values passed to the setFIBUInvRbBalanceLine method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFIBUInvRbBalanceLine method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFIBUInvRbBalanceLineForArrayConstraintsFromSetFIBUInvRbBalanceLine(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $listFIBUInvRbBalanceResponseFIBUInvRbBalanceLineItem) {
            // validation for constraint: itemType
            if (!$listFIBUInvRbBalanceResponseFIBUInvRbBalanceLineItem instanceof \Pggns\MidocoApi\Api\Orderlists\StructType\FIBUInvRbBalanceLineType) {
                $invalidValues[] = is_object($listFIBUInvRbBalanceResponseFIBUInvRbBalanceLineItem) ? get_class($listFIBUInvRbBalanceResponseFIBUInvRbBalanceLineItem) : sprintf('%s(%s)', gettype($listFIBUInvRbBalanceResponseFIBUInvRbBalanceLineItem), var_export($listFIBUInvRbBalanceResponseFIBUInvRbBalanceLineItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The FIBUInvRbBalanceLine property can only contain items of type \Pggns\MidocoApi\Api\Orderlists\StructType\FIBUInvRbBalanceLineType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * This method is responsible for validating the value passed to the setFIBUInvRbBalanceLine method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFIBUInvRbBalanceLine method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateFIBUInvRbBalanceLineForChoiceConstraintsFromSetFIBUInvRbBalanceLine($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'FIBUInvRbBalanceCsvContent',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property FIBUInvRbBalanceLine can\'t be set as the property %s is already set. Only one property must be set among these properties: FIBUInvRbBalanceLine, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set FIBUInvRbBalanceLine value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\FIBUInvRbBalanceLineType[] $fIBUInvRbBalanceLine
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\ListFIBUInvRbBalanceResponse
     */
    public function setFIBUInvRbBalanceLine(?array $fIBUInvRbBalanceLine = null): self
    {
        // validation for constraint: array
        if ('' !== ($fIBUInvRbBalanceLineArrayErrorMessage = self::validateFIBUInvRbBalanceLineForArrayConstraintsFromSetFIBUInvRbBalanceLine($fIBUInvRbBalanceLine))) {
            throw new InvalidArgumentException($fIBUInvRbBalanceLineArrayErrorMessage, __LINE__);
        }
        // validation for constraint: choice(FIBUInvRbBalanceLine, FIBUInvRbBalanceCsvContent)
        if ('' !== ($fIBUInvRbBalanceLineChoiceErrorMessage = self::validateFIBUInvRbBalanceLineForChoiceConstraintsFromSetFIBUInvRbBalanceLine($fIBUInvRbBalanceLine))) {
            throw new InvalidArgumentException($fIBUInvRbBalanceLineChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($fIBUInvRbBalanceLine) && count($fIBUInvRbBalanceLine) > 1) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 1', count($fIBUInvRbBalanceLine)), __LINE__);
        }
        if (is_null($fIBUInvRbBalanceLine) || (is_array($fIBUInvRbBalanceLine) && empty($fIBUInvRbBalanceLine))) {
            unset($this->FIBUInvRbBalanceLine);
        } else {
            $this->FIBUInvRbBalanceLine = $fIBUInvRbBalanceLine;
        }
        
        return $this;
    }
    /**
     * This method is responsible for validating the value passed to the addToFIBUInvRbBalanceLine method
     * This method is willingly generated in order to preserve the one-line inline validation within the addToFIBUInvRbBalanceLine method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateItemForChoiceConstraintsFromAddToFIBUInvRbBalanceLine($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'FIBUInvRbBalanceCsvContent',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property FIBUInvRbBalanceLine can\'t be set as the property %s is already set. Only one property must be set among these properties: FIBUInvRbBalanceLine, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Add item to FIBUInvRbBalanceLine value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\FIBUInvRbBalanceLineType $item
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\ListFIBUInvRbBalanceResponse
     */
    public function addToFIBUInvRbBalanceLine(\Pggns\MidocoApi\Api\Orderlists\StructType\FIBUInvRbBalanceLineType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\Orderlists\StructType\FIBUInvRbBalanceLineType) {
            throw new InvalidArgumentException(sprintf('The FIBUInvRbBalanceLine property can only contain items of type \Pggns\MidocoApi\Api\Orderlists\StructType\FIBUInvRbBalanceLineType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: choice(FIBUInvRbBalanceLine, FIBUInvRbBalanceCsvContent)
        if ('' !== ($itemChoiceErrorMessage = self::validateItemForChoiceConstraintsFromAddToFIBUInvRbBalanceLine($item))) {
            throw new InvalidArgumentException($itemChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($this->FIBUInvRbBalanceLine) && count($this->FIBUInvRbBalanceLine) >= 1) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 1', count($this->FIBUInvRbBalanceLine)), __LINE__);
        }
        $this->FIBUInvRbBalanceLine[] = $item;
        
        return $this;
    }
    /**
     * Get FIBUInvRbBalanceCsvContent value
     * @return string|null
     */
    public function getFIBUInvRbBalanceCsvContent(): ?string
    {
        return isset($this->FIBUInvRbBalanceCsvContent) ? $this->FIBUInvRbBalanceCsvContent : null;
    }
    /**
     * This method is responsible for validating the value passed to the setFIBUInvRbBalanceCsvContent method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFIBUInvRbBalanceCsvContent method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateFIBUInvRbBalanceCsvContentForChoiceConstraintsFromSetFIBUInvRbBalanceCsvContent($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'FIBUInvRbBalanceLine',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property FIBUInvRbBalanceCsvContent can\'t be set as the property %s is already set. Only one property must be set among these properties: FIBUInvRbBalanceCsvContent, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set FIBUInvRbBalanceCsvContent value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param string $fIBUInvRbBalanceCsvContent
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\ListFIBUInvRbBalanceResponse
     */
    public function setFIBUInvRbBalanceCsvContent(?string $fIBUInvRbBalanceCsvContent = null): self
    {
        // validation for constraint: string
        if (!is_null($fIBUInvRbBalanceCsvContent) && !is_string($fIBUInvRbBalanceCsvContent)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fIBUInvRbBalanceCsvContent, true), gettype($fIBUInvRbBalanceCsvContent)), __LINE__);
        }
        // validation for constraint: choice(FIBUInvRbBalanceLine, FIBUInvRbBalanceCsvContent)
        if ('' !== ($fIBUInvRbBalanceCsvContentChoiceErrorMessage = self::validateFIBUInvRbBalanceCsvContentForChoiceConstraintsFromSetFIBUInvRbBalanceCsvContent($fIBUInvRbBalanceCsvContent))) {
            throw new InvalidArgumentException($fIBUInvRbBalanceCsvContentChoiceErrorMessage, __LINE__);
        }
        if (is_null($fIBUInvRbBalanceCsvContent) || (is_array($fIBUInvRbBalanceCsvContent) && empty($fIBUInvRbBalanceCsvContent))) {
            unset($this->FIBUInvRbBalanceCsvContent);
        } else {
            $this->FIBUInvRbBalanceCsvContent = $fIBUInvRbBalanceCsvContent;
        }
        
        return $this;
    }
}
