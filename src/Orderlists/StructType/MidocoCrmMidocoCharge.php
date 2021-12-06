<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoCrmMidocoCharge StructType
 * @subpackage Structs
 */
class MidocoCrmMidocoCharge extends CrmMidocoChargeDTO
{
    /**
     * The MidocoAssignedMidocoChargeOu
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoAssignedMidocoChargeOu
     * @var \Pggns\MidocoApi\Orderlists\StructType\AssignedMidocoChargeOuDTO[]
     */
    protected ?array $MidocoAssignedMidocoChargeOu = null;
    /**
     * Constructor method for MidocoCrmMidocoCharge
     * @uses MidocoCrmMidocoCharge::setMidocoAssignedMidocoChargeOu()
     * @param \Pggns\MidocoApi\Orderlists\StructType\AssignedMidocoChargeOuDTO[] $midocoAssignedMidocoChargeOu
     */
    public function __construct(?array $midocoAssignedMidocoChargeOu = null)
    {
        $this
            ->setMidocoAssignedMidocoChargeOu($midocoAssignedMidocoChargeOu);
    }
    /**
     * Get MidocoAssignedMidocoChargeOu value
     * @return \Pggns\MidocoApi\Orderlists\StructType\AssignedMidocoChargeOuDTO[]
     */
    public function getMidocoAssignedMidocoChargeOu(): ?array
    {
        return $this->MidocoAssignedMidocoChargeOu;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoAssignedMidocoChargeOu method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoAssignedMidocoChargeOu method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoAssignedMidocoChargeOuForArrayConstraintsFromSetMidocoAssignedMidocoChargeOu(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoCrmMidocoChargeMidocoAssignedMidocoChargeOuItem) {
            // validation for constraint: itemType
            if (!$midocoCrmMidocoChargeMidocoAssignedMidocoChargeOuItem instanceof \Pggns\MidocoApi\Orderlists\StructType\AssignedMidocoChargeOuDTO) {
                $invalidValues[] = is_object($midocoCrmMidocoChargeMidocoAssignedMidocoChargeOuItem) ? get_class($midocoCrmMidocoChargeMidocoAssignedMidocoChargeOuItem) : sprintf('%s(%s)', gettype($midocoCrmMidocoChargeMidocoAssignedMidocoChargeOuItem), var_export($midocoCrmMidocoChargeMidocoAssignedMidocoChargeOuItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoAssignedMidocoChargeOu property can only contain items of type \Pggns\MidocoApi\Orderlists\StructType\AssignedMidocoChargeOuDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoAssignedMidocoChargeOu value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Orderlists\StructType\AssignedMidocoChargeOuDTO[] $midocoAssignedMidocoChargeOu
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoCrmMidocoCharge
     */
    public function setMidocoAssignedMidocoChargeOu(?array $midocoAssignedMidocoChargeOu = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoAssignedMidocoChargeOuArrayErrorMessage = self::validateMidocoAssignedMidocoChargeOuForArrayConstraintsFromSetMidocoAssignedMidocoChargeOu($midocoAssignedMidocoChargeOu))) {
            throw new InvalidArgumentException($midocoAssignedMidocoChargeOuArrayErrorMessage, __LINE__);
        }
        $this->MidocoAssignedMidocoChargeOu = $midocoAssignedMidocoChargeOu;
        
        return $this;
    }
    /**
     * Add item to MidocoAssignedMidocoChargeOu value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Orderlists\StructType\AssignedMidocoChargeOuDTO $item
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoCrmMidocoCharge
     */
    public function addToMidocoAssignedMidocoChargeOu(\Pggns\MidocoApi\Orderlists\StructType\AssignedMidocoChargeOuDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Orderlists\StructType\AssignedMidocoChargeOuDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoAssignedMidocoChargeOu property can only contain items of type \Pggns\MidocoApi\Orderlists\StructType\AssignedMidocoChargeOuDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoAssignedMidocoChargeOu[] = $item;
        
        return $this;
    }
}
