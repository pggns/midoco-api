<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteDbiUpdateResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeleteDbiUpdateResponse extends AbstractStructBase
{
    /**
     * The MidocoDbiUpdate
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoDbiUpdate
     * @var \Pggns\MidocoApi\Documents\StructType\DbiUpdateDTO[]
     */
    protected ?array $MidocoDbiUpdate = null;
    /**
     * Constructor method for DeleteDbiUpdateResponse
     * @uses DeleteDbiUpdateResponse::setMidocoDbiUpdate()
     * @param \Pggns\MidocoApi\Documents\StructType\DbiUpdateDTO[] $midocoDbiUpdate
     */
    public function __construct(?array $midocoDbiUpdate = null)
    {
        $this
            ->setMidocoDbiUpdate($midocoDbiUpdate);
    }
    /**
     * Get MidocoDbiUpdate value
     * @return \Pggns\MidocoApi\Documents\StructType\DbiUpdateDTO[]
     */
    public function getMidocoDbiUpdate(): ?array
    {
        return $this->MidocoDbiUpdate;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoDbiUpdate method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoDbiUpdate method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoDbiUpdateForArrayConstraintFromSetMidocoDbiUpdate(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $deleteDbiUpdateResponseMidocoDbiUpdateItem) {
            // validation for constraint: itemType
            if (!$deleteDbiUpdateResponseMidocoDbiUpdateItem instanceof \Pggns\MidocoApi\Documents\StructType\DbiUpdateDTO) {
                $invalidValues[] = is_object($deleteDbiUpdateResponseMidocoDbiUpdateItem) ? get_class($deleteDbiUpdateResponseMidocoDbiUpdateItem) : sprintf('%s(%s)', gettype($deleteDbiUpdateResponseMidocoDbiUpdateItem), var_export($deleteDbiUpdateResponseMidocoDbiUpdateItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoDbiUpdate property can only contain items of type \Pggns\MidocoApi\Documents\StructType\DbiUpdateDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoDbiUpdate value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Documents\StructType\DbiUpdateDTO[] $midocoDbiUpdate
     * @return \Pggns\MidocoApi\Documents\StructType\DeleteDbiUpdateResponse
     */
    public function setMidocoDbiUpdate(?array $midocoDbiUpdate = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoDbiUpdateArrayErrorMessage = self::validateMidocoDbiUpdateForArrayConstraintFromSetMidocoDbiUpdate($midocoDbiUpdate))) {
            throw new InvalidArgumentException($midocoDbiUpdateArrayErrorMessage, __LINE__);
        }
        $this->MidocoDbiUpdate = $midocoDbiUpdate;
        
        return $this;
    }
    /**
     * Add item to MidocoDbiUpdate value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Documents\StructType\DbiUpdateDTO $item
     * @return \Pggns\MidocoApi\Documents\StructType\DeleteDbiUpdateResponse
     */
    public function addToMidocoDbiUpdate(\Pggns\MidocoApi\Documents\StructType\DbiUpdateDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Documents\StructType\DbiUpdateDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoDbiUpdate property can only contain items of type \Pggns\MidocoApi\Documents\StructType\DbiUpdateDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoDbiUpdate[] = $item;
        
        return $this;
    }
}
