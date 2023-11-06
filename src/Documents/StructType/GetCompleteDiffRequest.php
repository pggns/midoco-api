<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCompleteDiffRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetCompleteDiffRequest extends AbstractStructBase
{
    /**
     * The DiffDocumentRefId
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: DiffDocumentRefId
     * @var \Pggns\MidocoApi\Documents\StructType\DiffDocumentRefId[]
     */
    protected ?array $DiffDocumentRefId = null;
    /**
     * The dtoType
     * @var string|null
     */
    protected ?string $dtoType = null;
    /**
     * Constructor method for GetCompleteDiffRequest
     * @uses GetCompleteDiffRequest::setDiffDocumentRefId()
     * @uses GetCompleteDiffRequest::setDtoType()
     * @param \Pggns\MidocoApi\Documents\StructType\DiffDocumentRefId[] $diffDocumentRefId
     * @param string $dtoType
     */
    public function __construct(?array $diffDocumentRefId = null, ?string $dtoType = null)
    {
        $this
            ->setDiffDocumentRefId($diffDocumentRefId)
            ->setDtoType($dtoType);
    }
    /**
     * Get DiffDocumentRefId value
     * @return \Pggns\MidocoApi\Documents\StructType\DiffDocumentRefId[]
     */
    public function getDiffDocumentRefId(): ?array
    {
        return $this->DiffDocumentRefId;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setDiffDocumentRefId method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDiffDocumentRefId method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDiffDocumentRefIdForArrayConstraintFromSetDiffDocumentRefId(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getCompleteDiffRequestDiffDocumentRefIdItem) {
            // validation for constraint: itemType
            if (!$getCompleteDiffRequestDiffDocumentRefIdItem instanceof \Pggns\MidocoApi\Documents\StructType\DiffDocumentRefId) {
                $invalidValues[] = is_object($getCompleteDiffRequestDiffDocumentRefIdItem) ? get_class($getCompleteDiffRequestDiffDocumentRefIdItem) : sprintf('%s(%s)', gettype($getCompleteDiffRequestDiffDocumentRefIdItem), var_export($getCompleteDiffRequestDiffDocumentRefIdItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The DiffDocumentRefId property can only contain items of type \Pggns\MidocoApi\Documents\StructType\DiffDocumentRefId, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set DiffDocumentRefId value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Documents\StructType\DiffDocumentRefId[] $diffDocumentRefId
     * @return \Pggns\MidocoApi\Documents\StructType\GetCompleteDiffRequest
     */
    public function setDiffDocumentRefId(?array $diffDocumentRefId = null): self
    {
        // validation for constraint: array
        if ('' !== ($diffDocumentRefIdArrayErrorMessage = self::validateDiffDocumentRefIdForArrayConstraintFromSetDiffDocumentRefId($diffDocumentRefId))) {
            throw new InvalidArgumentException($diffDocumentRefIdArrayErrorMessage, __LINE__);
        }
        $this->DiffDocumentRefId = $diffDocumentRefId;
        
        return $this;
    }
    /**
     * Add item to DiffDocumentRefId value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Documents\StructType\DiffDocumentRefId $item
     * @return \Pggns\MidocoApi\Documents\StructType\GetCompleteDiffRequest
     */
    public function addToDiffDocumentRefId(\Pggns\MidocoApi\Documents\StructType\DiffDocumentRefId $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Documents\StructType\DiffDocumentRefId) {
            throw new InvalidArgumentException(sprintf('The DiffDocumentRefId property can only contain items of type \Pggns\MidocoApi\Documents\StructType\DiffDocumentRefId, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->DiffDocumentRefId[] = $item;
        
        return $this;
    }
    /**
     * Get dtoType value
     * @return string|null
     */
    public function getDtoType(): ?string
    {
        return $this->dtoType;
    }
    /**
     * Set dtoType value
     * @param string $dtoType
     * @return \Pggns\MidocoApi\Documents\StructType\GetCompleteDiffRequest
     */
    public function setDtoType(?string $dtoType = null): self
    {
        // validation for constraint: string
        if (!is_null($dtoType) && !is_string($dtoType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dtoType, true), gettype($dtoType)), __LINE__);
        }
        $this->dtoType = $dtoType;
        
        return $this;
    }
}
