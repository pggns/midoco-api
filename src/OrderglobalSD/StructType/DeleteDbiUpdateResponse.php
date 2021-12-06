<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\OrderglobalSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteDbiUpdateResponse StructType
 * @subpackage Structs
 */
class DeleteDbiUpdateResponse extends AbstractStructBase
{
    /**
     * The MidocoDbiUpdate
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoDbiUpdate
     * @var \Pggns\MidocoApi\Api\OrderglobalSD\StructType\DbiUpdateDTO[]
     */
    protected ?array $MidocoDbiUpdate = null;
    /**
     * Constructor method for DeleteDbiUpdateResponse
     * @uses DeleteDbiUpdateResponse::setMidocoDbiUpdate()
     * @param \Pggns\MidocoApi\Api\OrderglobalSD\StructType\DbiUpdateDTO[] $midocoDbiUpdate
     */
    public function __construct(?array $midocoDbiUpdate = null)
    {
        $this
            ->setMidocoDbiUpdate($midocoDbiUpdate);
    }
    /**
     * Get MidocoDbiUpdate value
     * @return \Pggns\MidocoApi\Api\OrderglobalSD\StructType\DbiUpdateDTO[]
     */
    public function getMidocoDbiUpdate(): ?array
    {
        return $this->MidocoDbiUpdate;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoDbiUpdate method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoDbiUpdate method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoDbiUpdateForArrayConstraintsFromSetMidocoDbiUpdate(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $deleteDbiUpdateResponseMidocoDbiUpdateItem) {
            // validation for constraint: itemType
            if (!$deleteDbiUpdateResponseMidocoDbiUpdateItem instanceof \Pggns\MidocoApi\Api\OrderglobalSD\StructType\DbiUpdateDTO) {
                $invalidValues[] = is_object($deleteDbiUpdateResponseMidocoDbiUpdateItem) ? get_class($deleteDbiUpdateResponseMidocoDbiUpdateItem) : sprintf('%s(%s)', gettype($deleteDbiUpdateResponseMidocoDbiUpdateItem), var_export($deleteDbiUpdateResponseMidocoDbiUpdateItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoDbiUpdate property can only contain items of type \Pggns\MidocoApi\Api\OrderglobalSD\StructType\DbiUpdateDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoDbiUpdate value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\OrderglobalSD\StructType\DbiUpdateDTO[] $midocoDbiUpdate
     * @return \Pggns\MidocoApi\Api\OrderglobalSD\StructType\DeleteDbiUpdateResponse
     */
    public function setMidocoDbiUpdate(?array $midocoDbiUpdate = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoDbiUpdateArrayErrorMessage = self::validateMidocoDbiUpdateForArrayConstraintsFromSetMidocoDbiUpdate($midocoDbiUpdate))) {
            throw new InvalidArgumentException($midocoDbiUpdateArrayErrorMessage, __LINE__);
        }
        $this->MidocoDbiUpdate = $midocoDbiUpdate;
        
        return $this;
    }
    /**
     * Add item to MidocoDbiUpdate value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\OrderglobalSD\StructType\DbiUpdateDTO $item
     * @return \Pggns\MidocoApi\Api\OrderglobalSD\StructType\DeleteDbiUpdateResponse
     */
    public function addToMidocoDbiUpdate(\Pggns\MidocoApi\Api\OrderglobalSD\StructType\DbiUpdateDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\OrderglobalSD\StructType\DbiUpdateDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoDbiUpdate property can only contain items of type \Pggns\MidocoApi\Api\OrderglobalSD\StructType\DbiUpdateDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoDbiUpdate[] = $item;
        
        return $this;
    }
}
