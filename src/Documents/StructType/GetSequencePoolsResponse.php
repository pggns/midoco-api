<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSequencePoolsResponse StructType
 * @subpackage Structs
 */
class GetSequencePoolsResponse extends AbstractStructBase
{
    /**
     * The MidocoSequencePool
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoSequencePool
     * @var \Pggns\MidocoApi\Api\Documents\StructType\SequencePoolDTO[]
     */
    protected ?array $MidocoSequencePool = null;
    /**
     * Constructor method for GetSequencePoolsResponse
     * @uses GetSequencePoolsResponse::setMidocoSequencePool()
     * @param \Pggns\MidocoApi\Api\Documents\StructType\SequencePoolDTO[] $midocoSequencePool
     */
    public function __construct(?array $midocoSequencePool = null)
    {
        $this
            ->setMidocoSequencePool($midocoSequencePool);
    }
    /**
     * Get MidocoSequencePool value
     * @return \Pggns\MidocoApi\Api\Documents\StructType\SequencePoolDTO[]
     */
    public function getMidocoSequencePool(): ?array
    {
        return $this->MidocoSequencePool;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoSequencePool method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoSequencePool method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoSequencePoolForArrayConstraintsFromSetMidocoSequencePool(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getSequencePoolsResponseMidocoSequencePoolItem) {
            // validation for constraint: itemType
            if (!$getSequencePoolsResponseMidocoSequencePoolItem instanceof \Pggns\MidocoApi\Api\Documents\StructType\SequencePoolDTO) {
                $invalidValues[] = is_object($getSequencePoolsResponseMidocoSequencePoolItem) ? get_class($getSequencePoolsResponseMidocoSequencePoolItem) : sprintf('%s(%s)', gettype($getSequencePoolsResponseMidocoSequencePoolItem), var_export($getSequencePoolsResponseMidocoSequencePoolItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoSequencePool property can only contain items of type \Pggns\MidocoApi\Api\Documents\StructType\SequencePoolDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoSequencePool value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Documents\StructType\SequencePoolDTO[] $midocoSequencePool
     * @return \Pggns\MidocoApi\Api\Documents\StructType\GetSequencePoolsResponse
     */
    public function setMidocoSequencePool(?array $midocoSequencePool = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoSequencePoolArrayErrorMessage = self::validateMidocoSequencePoolForArrayConstraintsFromSetMidocoSequencePool($midocoSequencePool))) {
            throw new InvalidArgumentException($midocoSequencePoolArrayErrorMessage, __LINE__);
        }
        $this->MidocoSequencePool = $midocoSequencePool;
        
        return $this;
    }
    /**
     * Add item to MidocoSequencePool value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Documents\StructType\SequencePoolDTO $item
     * @return \Pggns\MidocoApi\Api\Documents\StructType\GetSequencePoolsResponse
     */
    public function addToMidocoSequencePool(\Pggns\MidocoApi\Api\Documents\StructType\SequencePoolDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\Documents\StructType\SequencePoolDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoSequencePool property can only contain items of type \Pggns\MidocoApi\Api\Documents\StructType\SequencePoolDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoSequencePool[] = $item;
        
        return $this;
    }
}
