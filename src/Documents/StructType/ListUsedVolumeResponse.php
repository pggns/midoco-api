<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListUsedVolumeResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ListUsedVolumeResponse extends AbstractStructBase
{
    /**
     * The MidocoUsedVolume
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoUsedVolume
     * @var \Pggns\MidocoApi\Documents\StructType\UsedVolumeDTO[]
     */
    protected ?array $MidocoUsedVolume = null;
    /**
     * Constructor method for ListUsedVolumeResponse
     * @uses ListUsedVolumeResponse::setMidocoUsedVolume()
     * @param \Pggns\MidocoApi\Documents\StructType\UsedVolumeDTO[] $midocoUsedVolume
     */
    public function __construct(?array $midocoUsedVolume = null)
    {
        $this
            ->setMidocoUsedVolume($midocoUsedVolume);
    }
    /**
     * Get MidocoUsedVolume value
     * @return \Pggns\MidocoApi\Documents\StructType\UsedVolumeDTO[]
     */
    public function getMidocoUsedVolume(): ?array
    {
        return $this->MidocoUsedVolume;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoUsedVolume method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoUsedVolume method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoUsedVolumeForArrayConstraintFromSetMidocoUsedVolume(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $listUsedVolumeResponseMidocoUsedVolumeItem) {
            // validation for constraint: itemType
            if (!$listUsedVolumeResponseMidocoUsedVolumeItem instanceof \Pggns\MidocoApi\Documents\StructType\UsedVolumeDTO) {
                $invalidValues[] = is_object($listUsedVolumeResponseMidocoUsedVolumeItem) ? get_class($listUsedVolumeResponseMidocoUsedVolumeItem) : sprintf('%s(%s)', gettype($listUsedVolumeResponseMidocoUsedVolumeItem), var_export($listUsedVolumeResponseMidocoUsedVolumeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoUsedVolume property can only contain items of type \Pggns\MidocoApi\Documents\StructType\UsedVolumeDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoUsedVolume value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Documents\StructType\UsedVolumeDTO[] $midocoUsedVolume
     * @return \Pggns\MidocoApi\Documents\StructType\ListUsedVolumeResponse
     */
    public function setMidocoUsedVolume(?array $midocoUsedVolume = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoUsedVolumeArrayErrorMessage = self::validateMidocoUsedVolumeForArrayConstraintFromSetMidocoUsedVolume($midocoUsedVolume))) {
            throw new InvalidArgumentException($midocoUsedVolumeArrayErrorMessage, __LINE__);
        }
        $this->MidocoUsedVolume = $midocoUsedVolume;
        
        return $this;
    }
    /**
     * Add item to MidocoUsedVolume value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Documents\StructType\UsedVolumeDTO $item
     * @return \Pggns\MidocoApi\Documents\StructType\ListUsedVolumeResponse
     */
    public function addToMidocoUsedVolume(\Pggns\MidocoApi\Documents\StructType\UsedVolumeDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Documents\StructType\UsedVolumeDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoUsedVolume property can only contain items of type \Pggns\MidocoApi\Documents\StructType\UsedVolumeDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoUsedVolume[] = $item;
        
        return $this;
    }
}
