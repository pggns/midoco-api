<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoQueryMetadata StructType
 * @subpackage Structs
 */
class MidocoQueryMetadata extends AbstractStructBase
{
    /**
     * The MidocoQueryField
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - ref: MidocoQueryField
     * @var \Pggns\MidocoApi\Documents\StructType\MidocoQueryField[]
     */
    protected ?array $MidocoQueryField = null;
    /**
     * Constructor method for MidocoQueryMetadata
     * @uses MidocoQueryMetadata::setMidocoQueryField()
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoQueryField[] $midocoQueryField
     */
    public function __construct(?array $midocoQueryField = null)
    {
        $this
            ->setMidocoQueryField($midocoQueryField);
    }
    /**
     * Get MidocoQueryField value
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoQueryField[]
     */
    public function getMidocoQueryField(): ?array
    {
        return $this->MidocoQueryField;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoQueryField method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoQueryField method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoQueryFieldForArrayConstraintsFromSetMidocoQueryField(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoQueryMetadataMidocoQueryFieldItem) {
            // validation for constraint: itemType
            if (!$midocoQueryMetadataMidocoQueryFieldItem instanceof \Pggns\MidocoApi\Documents\StructType\MidocoQueryField) {
                $invalidValues[] = is_object($midocoQueryMetadataMidocoQueryFieldItem) ? get_class($midocoQueryMetadataMidocoQueryFieldItem) : sprintf('%s(%s)', gettype($midocoQueryMetadataMidocoQueryFieldItem), var_export($midocoQueryMetadataMidocoQueryFieldItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoQueryField property can only contain items of type \Pggns\MidocoApi\Documents\StructType\MidocoQueryField, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoQueryField value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoQueryField[] $midocoQueryField
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoQueryMetadata
     */
    public function setMidocoQueryField(?array $midocoQueryField = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoQueryFieldArrayErrorMessage = self::validateMidocoQueryFieldForArrayConstraintsFromSetMidocoQueryField($midocoQueryField))) {
            throw new InvalidArgumentException($midocoQueryFieldArrayErrorMessage, __LINE__);
        }
        $this->MidocoQueryField = $midocoQueryField;
        
        return $this;
    }
    /**
     * Add item to MidocoQueryField value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoQueryField $item
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoQueryMetadata
     */
    public function addToMidocoQueryField(\Pggns\MidocoApi\Documents\StructType\MidocoQueryField $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Documents\StructType\MidocoQueryField) {
            throw new InvalidArgumentException(sprintf('The MidocoQueryField property can only contain items of type \Pggns\MidocoApi\Documents\StructType\MidocoQueryField, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoQueryField[] = $item;
        
        return $this;
    }
}
