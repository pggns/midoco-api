<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\OrderglobalSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoDbiDefinitionType StructType
 * @subpackage Structs
 */
class MidocoDbiDefinitionType extends AbstractStructBase
{
    /**
     * The MidocoDbiUpdate
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - ref: MidocoDbiUpdate
     * @var \Pggns\MidocoApi\Api\OrderglobalSD\StructType\DbiUpdateDTO
     */
    protected \Pggns\MidocoApi\Api\OrderglobalSD\StructType\DbiUpdateDTO $MidocoDbiUpdate;
    /**
     * The MidocoDbiDefs
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoDbiDefs
     * @var \Pggns\MidocoApi\Api\OrderglobalSD\StructType\MidocoDbiDefs[]
     */
    protected ?array $MidocoDbiDefs = null;
    /**
     * Constructor method for MidocoDbiDefinitionType
     * @uses MidocoDbiDefinitionType::setMidocoDbiUpdate()
     * @uses MidocoDbiDefinitionType::setMidocoDbiDefs()
     * @param \Pggns\MidocoApi\Api\OrderglobalSD\StructType\DbiUpdateDTO $midocoDbiUpdate
     * @param \Pggns\MidocoApi\Api\OrderglobalSD\StructType\MidocoDbiDefs[] $midocoDbiDefs
     */
    public function __construct(\Pggns\MidocoApi\Api\OrderglobalSD\StructType\DbiUpdateDTO $midocoDbiUpdate, ?array $midocoDbiDefs = null)
    {
        $this
            ->setMidocoDbiUpdate($midocoDbiUpdate)
            ->setMidocoDbiDefs($midocoDbiDefs);
    }
    /**
     * Get MidocoDbiUpdate value
     * @return \Pggns\MidocoApi\Api\OrderglobalSD\StructType\DbiUpdateDTO
     */
    public function getMidocoDbiUpdate(): \Pggns\MidocoApi\Api\OrderglobalSD\StructType\DbiUpdateDTO
    {
        return $this->MidocoDbiUpdate;
    }
    /**
     * Set MidocoDbiUpdate value
     * @param \Pggns\MidocoApi\Api\OrderglobalSD\StructType\DbiUpdateDTO $midocoDbiUpdate
     * @return \Pggns\MidocoApi\Api\OrderglobalSD\StructType\MidocoDbiDefinitionType
     */
    public function setMidocoDbiUpdate(\Pggns\MidocoApi\Api\OrderglobalSD\StructType\DbiUpdateDTO $midocoDbiUpdate): self
    {
        $this->MidocoDbiUpdate = $midocoDbiUpdate;
        
        return $this;
    }
    /**
     * Get MidocoDbiDefs value
     * @return \Pggns\MidocoApi\Api\OrderglobalSD\StructType\MidocoDbiDefs[]
     */
    public function getMidocoDbiDefs(): ?array
    {
        return $this->MidocoDbiDefs;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoDbiDefs method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoDbiDefs method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoDbiDefsForArrayConstraintsFromSetMidocoDbiDefs(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoDbiDefinitionTypeMidocoDbiDefsItem) {
            // validation for constraint: itemType
            if (!$midocoDbiDefinitionTypeMidocoDbiDefsItem instanceof \Pggns\MidocoApi\Api\OrderglobalSD\StructType\MidocoDbiDefs) {
                $invalidValues[] = is_object($midocoDbiDefinitionTypeMidocoDbiDefsItem) ? get_class($midocoDbiDefinitionTypeMidocoDbiDefsItem) : sprintf('%s(%s)', gettype($midocoDbiDefinitionTypeMidocoDbiDefsItem), var_export($midocoDbiDefinitionTypeMidocoDbiDefsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoDbiDefs property can only contain items of type \Pggns\MidocoApi\Api\OrderglobalSD\StructType\MidocoDbiDefs, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoDbiDefs value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\OrderglobalSD\StructType\MidocoDbiDefs[] $midocoDbiDefs
     * @return \Pggns\MidocoApi\Api\OrderglobalSD\StructType\MidocoDbiDefinitionType
     */
    public function setMidocoDbiDefs(?array $midocoDbiDefs = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoDbiDefsArrayErrorMessage = self::validateMidocoDbiDefsForArrayConstraintsFromSetMidocoDbiDefs($midocoDbiDefs))) {
            throw new InvalidArgumentException($midocoDbiDefsArrayErrorMessage, __LINE__);
        }
        $this->MidocoDbiDefs = $midocoDbiDefs;
        
        return $this;
    }
    /**
     * Add item to MidocoDbiDefs value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\OrderglobalSD\StructType\MidocoDbiDefs $item
     * @return \Pggns\MidocoApi\Api\OrderglobalSD\StructType\MidocoDbiDefinitionType
     */
    public function addToMidocoDbiDefs(\Pggns\MidocoApi\Api\OrderglobalSD\StructType\MidocoDbiDefs $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\OrderglobalSD\StructType\MidocoDbiDefs) {
            throw new InvalidArgumentException(sprintf('The MidocoDbiDefs property can only contain items of type \Pggns\MidocoApi\Api\OrderglobalSD\StructType\MidocoDbiDefs, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoDbiDefs[] = $item;
        
        return $this;
    }
}
