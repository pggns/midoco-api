<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoDbiDefinitionType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoDbiDefinitionType extends AbstractStructBase
{
    /**
     * The MidocoDbiUpdate
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - ref: MidocoDbiUpdate
     * @var \Pggns\MidocoApi\Documents\StructType\DbiUpdateDTO
     */
    protected \Pggns\MidocoApi\Documents\StructType\DbiUpdateDTO $MidocoDbiUpdate;
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
     * Constructor method for MidocoDbiDefinitionType
     * @uses MidocoDbiDefinitionType::setMidocoDbiUpdate()
     * @uses MidocoDbiDefinitionType::setMidocoDbiDefs()
     * @param \Pggns\MidocoApi\Documents\StructType\DbiUpdateDTO $midocoDbiUpdate
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoDbiDefs[] $midocoDbiDefs
     */
    public function __construct(\Pggns\MidocoApi\Documents\StructType\DbiUpdateDTO $midocoDbiUpdate, ?array $midocoDbiDefs = null)
    {
        $this
            ->setMidocoDbiUpdate($midocoDbiUpdate)
            ->setMidocoDbiDefs($midocoDbiDefs);
    }
    /**
     * Get MidocoDbiUpdate value
     * @return \Pggns\MidocoApi\Documents\StructType\DbiUpdateDTO
     */
    public function getMidocoDbiUpdate(): \Pggns\MidocoApi\Documents\StructType\DbiUpdateDTO
    {
        return $this->MidocoDbiUpdate;
    }
    /**
     * Set MidocoDbiUpdate value
     * @param \Pggns\MidocoApi\Documents\StructType\DbiUpdateDTO $midocoDbiUpdate
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoDbiDefinitionType
     */
    public function setMidocoDbiUpdate(\Pggns\MidocoApi\Documents\StructType\DbiUpdateDTO $midocoDbiUpdate): self
    {
        $this->MidocoDbiUpdate = $midocoDbiUpdate;
        
        return $this;
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
        foreach ($values as $midocoDbiDefinitionTypeMidocoDbiDefsItem) {
            // validation for constraint: itemType
            if (!$midocoDbiDefinitionTypeMidocoDbiDefsItem instanceof \Pggns\MidocoApi\Documents\StructType\MidocoDbiDefs) {
                $invalidValues[] = is_object($midocoDbiDefinitionTypeMidocoDbiDefsItem) ? get_class($midocoDbiDefinitionTypeMidocoDbiDefsItem) : sprintf('%s(%s)', gettype($midocoDbiDefinitionTypeMidocoDbiDefsItem), var_export($midocoDbiDefinitionTypeMidocoDbiDefsItem, true));
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
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoDbiDefinitionType
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
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoDbiDefinitionType
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
