<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateAsyncDiffsResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CreateAsyncDiffsResponse extends AbstractStructBase
{
    /**
     * The DiffDocumentType
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: DiffDocumentType
     * @var \Pggns\MidocoApi\Documents\StructType\DiffDocumentType[]
     */
    protected ?array $DiffDocumentType = null;
    /**
     * Constructor method for CreateAsyncDiffsResponse
     * @uses CreateAsyncDiffsResponse::setDiffDocumentType()
     * @param \Pggns\MidocoApi\Documents\StructType\DiffDocumentType[] $diffDocumentType
     */
    public function __construct(?array $diffDocumentType = null)
    {
        $this
            ->setDiffDocumentType($diffDocumentType);
    }
    /**
     * Get DiffDocumentType value
     * @return \Pggns\MidocoApi\Documents\StructType\DiffDocumentType[]
     */
    public function getDiffDocumentType(): ?array
    {
        return $this->DiffDocumentType;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setDiffDocumentType method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDiffDocumentType method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDiffDocumentTypeForArrayConstraintFromSetDiffDocumentType(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $createAsyncDiffsResponseDiffDocumentTypeItem) {
            // validation for constraint: itemType
            if (!$createAsyncDiffsResponseDiffDocumentTypeItem instanceof \Pggns\MidocoApi\Documents\StructType\DiffDocumentType) {
                $invalidValues[] = is_object($createAsyncDiffsResponseDiffDocumentTypeItem) ? get_class($createAsyncDiffsResponseDiffDocumentTypeItem) : sprintf('%s(%s)', gettype($createAsyncDiffsResponseDiffDocumentTypeItem), var_export($createAsyncDiffsResponseDiffDocumentTypeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The DiffDocumentType property can only contain items of type \Pggns\MidocoApi\Documents\StructType\DiffDocumentType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set DiffDocumentType value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Documents\StructType\DiffDocumentType[] $diffDocumentType
     * @return \Pggns\MidocoApi\Documents\StructType\CreateAsyncDiffsResponse
     */
    public function setDiffDocumentType(?array $diffDocumentType = null): self
    {
        // validation for constraint: array
        if ('' !== ($diffDocumentTypeArrayErrorMessage = self::validateDiffDocumentTypeForArrayConstraintFromSetDiffDocumentType($diffDocumentType))) {
            throw new InvalidArgumentException($diffDocumentTypeArrayErrorMessage, __LINE__);
        }
        $this->DiffDocumentType = $diffDocumentType;
        
        return $this;
    }
    /**
     * Add item to DiffDocumentType value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Documents\StructType\DiffDocumentType $item
     * @return \Pggns\MidocoApi\Documents\StructType\CreateAsyncDiffsResponse
     */
    public function addToDiffDocumentType(\Pggns\MidocoApi\Documents\StructType\DiffDocumentType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Documents\StructType\DiffDocumentType) {
            throw new InvalidArgumentException(sprintf('The DiffDocumentType property can only contain items of type \Pggns\MidocoApi\Documents\StructType\DiffDocumentType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->DiffDocumentType[] = $item;
        
        return $this;
    }
}
