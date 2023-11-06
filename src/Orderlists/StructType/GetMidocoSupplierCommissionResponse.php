<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMidocoSupplierCommissionResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetMidocoSupplierCommissionResponse extends AbstractStructBase
{
    /**
     * The MidocoSupplierCommission
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoSupplierCommission
     * @var \Pggns\MidocoApi\Orderlists\StructType\SupplierCommissionDTO[]
     */
    protected ?array $MidocoSupplierCommission = null;
    /**
     * Constructor method for GetMidocoSupplierCommissionResponse
     * @uses GetMidocoSupplierCommissionResponse::setMidocoSupplierCommission()
     * @param \Pggns\MidocoApi\Orderlists\StructType\SupplierCommissionDTO[] $midocoSupplierCommission
     */
    public function __construct(?array $midocoSupplierCommission = null)
    {
        $this
            ->setMidocoSupplierCommission($midocoSupplierCommission);
    }
    /**
     * Get MidocoSupplierCommission value
     * @return \Pggns\MidocoApi\Orderlists\StructType\SupplierCommissionDTO[]
     */
    public function getMidocoSupplierCommission(): ?array
    {
        return $this->MidocoSupplierCommission;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoSupplierCommission method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoSupplierCommission method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoSupplierCommissionForArrayConstraintFromSetMidocoSupplierCommission(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getMidocoSupplierCommissionResponseMidocoSupplierCommissionItem) {
            // validation for constraint: itemType
            if (!$getMidocoSupplierCommissionResponseMidocoSupplierCommissionItem instanceof \Pggns\MidocoApi\Orderlists\StructType\SupplierCommissionDTO) {
                $invalidValues[] = is_object($getMidocoSupplierCommissionResponseMidocoSupplierCommissionItem) ? get_class($getMidocoSupplierCommissionResponseMidocoSupplierCommissionItem) : sprintf('%s(%s)', gettype($getMidocoSupplierCommissionResponseMidocoSupplierCommissionItem), var_export($getMidocoSupplierCommissionResponseMidocoSupplierCommissionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoSupplierCommission property can only contain items of type \Pggns\MidocoApi\Orderlists\StructType\SupplierCommissionDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoSupplierCommission value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Orderlists\StructType\SupplierCommissionDTO[] $midocoSupplierCommission
     * @return \Pggns\MidocoApi\Orderlists\StructType\GetMidocoSupplierCommissionResponse
     */
    public function setMidocoSupplierCommission(?array $midocoSupplierCommission = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoSupplierCommissionArrayErrorMessage = self::validateMidocoSupplierCommissionForArrayConstraintFromSetMidocoSupplierCommission($midocoSupplierCommission))) {
            throw new InvalidArgumentException($midocoSupplierCommissionArrayErrorMessage, __LINE__);
        }
        $this->MidocoSupplierCommission = $midocoSupplierCommission;
        
        return $this;
    }
    /**
     * Add item to MidocoSupplierCommission value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Orderlists\StructType\SupplierCommissionDTO $item
     * @return \Pggns\MidocoApi\Orderlists\StructType\GetMidocoSupplierCommissionResponse
     */
    public function addToMidocoSupplierCommission(\Pggns\MidocoApi\Orderlists\StructType\SupplierCommissionDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Orderlists\StructType\SupplierCommissionDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoSupplierCommission property can only contain items of type \Pggns\MidocoApi\Orderlists\StructType\SupplierCommissionDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoSupplierCommission[] = $item;
        
        return $this;
    }
}
