<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteDbiDefsResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeleteDbiDefsResponse extends AbstractStructBase
{
    /**
     * The MidocoDbiDefs
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoDbiDefs
     * @var \Pggns\MidocoApi\Documents\StructType\MidocoDbiDefs[]
     */
    protected ?array $MidocoDbiDefs = null;
    /**
     * Constructor method for DeleteDbiDefsResponse
     * @uses DeleteDbiDefsResponse::setMidocoDbiDefs()
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoDbiDefs[] $midocoDbiDefs
     */
    public function __construct(?array $midocoDbiDefs = null)
    {
        $this
            ->setMidocoDbiDefs($midocoDbiDefs);
    }
    /**
     * Get MidocoDbiDefs value
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoDbiDefs[]
     */
    public function getMidocoDbiDefs(): ?array
    {
        return $this->MidocoDbiDefs;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoDbiDefs method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoDbiDefs method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoDbiDefsForArrayConstraintFromSetMidocoDbiDefs(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $deleteDbiDefsResponseMidocoDbiDefsItem) {
            // validation for constraint: itemType
            if (!$deleteDbiDefsResponseMidocoDbiDefsItem instanceof \Pggns\MidocoApi\Documents\StructType\MidocoDbiDefs) {
                $invalidValues[] = is_object($deleteDbiDefsResponseMidocoDbiDefsItem) ? get_class($deleteDbiDefsResponseMidocoDbiDefsItem) : sprintf('%s(%s)', gettype($deleteDbiDefsResponseMidocoDbiDefsItem), var_export($deleteDbiDefsResponseMidocoDbiDefsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoDbiDefs property can only contain items of type \Pggns\MidocoApi\Documents\StructType\MidocoDbiDefs, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoDbiDefs value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoDbiDefs[] $midocoDbiDefs
     * @return \Pggns\MidocoApi\Documents\StructType\DeleteDbiDefsResponse
     */
    public function setMidocoDbiDefs(?array $midocoDbiDefs = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoDbiDefsArrayErrorMessage = self::validateMidocoDbiDefsForArrayConstraintFromSetMidocoDbiDefs($midocoDbiDefs))) {
            throw new InvalidArgumentException($midocoDbiDefsArrayErrorMessage, __LINE__);
        }
        $this->MidocoDbiDefs = $midocoDbiDefs;
        
        return $this;
    }
    /**
     * Add item to MidocoDbiDefs value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoDbiDefs $item
     * @return \Pggns\MidocoApi\Documents\StructType\DeleteDbiDefsResponse
     */
    public function addToMidocoDbiDefs(\Pggns\MidocoApi\Documents\StructType\MidocoDbiDefs $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Documents\StructType\MidocoDbiDefs) {
            throw new InvalidArgumentException(sprintf('The MidocoDbiDefs property can only contain items of type \Pggns\MidocoApi\Documents\StructType\MidocoDbiDefs, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoDbiDefs[] = $item;
        
        return $this;
    }
}
