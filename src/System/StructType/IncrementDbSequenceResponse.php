<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\System\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for IncrementDbSequenceResponse StructType
 * @subpackage Structs
 */
class IncrementDbSequenceResponse extends AbstractStructBase
{
    /**
     * The IdValue
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var int[]
     */
    protected ?array $IdValue = null;
    /**
     * Constructor method for IncrementDbSequenceResponse
     * @uses IncrementDbSequenceResponse::setIdValue()
     * @param int[] $idValue
     */
    public function __construct(?array $idValue = null)
    {
        $this
            ->setIdValue($idValue);
    }
    /**
     * Get IdValue value
     * @return int[]
     */
    public function getIdValue(): ?array
    {
        return $this->IdValue;
    }
    /**
     * This method is responsible for validating the values passed to the setIdValue method
     * This method is willingly generated in order to preserve the one-line inline validation within the setIdValue method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateIdValueForArrayConstraintsFromSetIdValue(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $incrementDbSequenceResponseIdValueItem) {
            // validation for constraint: itemType
            if (!(is_int($incrementDbSequenceResponseIdValueItem) || ctype_digit($incrementDbSequenceResponseIdValueItem))) {
                $invalidValues[] = is_object($incrementDbSequenceResponseIdValueItem) ? get_class($incrementDbSequenceResponseIdValueItem) : sprintf('%s(%s)', gettype($incrementDbSequenceResponseIdValueItem), var_export($incrementDbSequenceResponseIdValueItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The IdValue property can only contain items of type int, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set IdValue value
     * @throws InvalidArgumentException
     * @param int[] $idValue
     * @return \Pggns\MidocoApi\System\StructType\IncrementDbSequenceResponse
     */
    public function setIdValue(?array $idValue = null): self
    {
        // validation for constraint: array
        if ('' !== ($idValueArrayErrorMessage = self::validateIdValueForArrayConstraintsFromSetIdValue($idValue))) {
            throw new InvalidArgumentException($idValueArrayErrorMessage, __LINE__);
        }
        $this->IdValue = $idValue;
        
        return $this;
    }
    /**
     * Add item to IdValue value
     * @throws InvalidArgumentException
     * @param int $item
     * @return \Pggns\MidocoApi\System\StructType\IncrementDbSequenceResponse
     */
    public function addToIdValue(int $item): self
    {
        // validation for constraint: itemType
        if (!(is_int($item) || ctype_digit($item))) {
            throw new InvalidArgumentException(sprintf('The IdValue property can only contain items of type int, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->IdValue[] = $item;
        
        return $this;
    }
}
