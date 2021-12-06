<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAutoRemarksResponse StructType
 * @subpackage Structs
 */
class GetAutoRemarksResponse extends AbstractStructBase
{
    /**
     * The MidocoSupplierAutoRemark
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoSupplierAutoRemark
     * @var \Pggns\MidocoApi\Api\Orderlists\StructType\SupplierAutoRemarkDTO[]
     */
    protected ?array $MidocoSupplierAutoRemark = null;
    /**
     * Constructor method for GetAutoRemarksResponse
     * @uses GetAutoRemarksResponse::setMidocoSupplierAutoRemark()
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\SupplierAutoRemarkDTO[] $midocoSupplierAutoRemark
     */
    public function __construct(?array $midocoSupplierAutoRemark = null)
    {
        $this
            ->setMidocoSupplierAutoRemark($midocoSupplierAutoRemark);
    }
    /**
     * Get MidocoSupplierAutoRemark value
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\SupplierAutoRemarkDTO[]
     */
    public function getMidocoSupplierAutoRemark(): ?array
    {
        return $this->MidocoSupplierAutoRemark;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoSupplierAutoRemark method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoSupplierAutoRemark method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoSupplierAutoRemarkForArrayConstraintsFromSetMidocoSupplierAutoRemark(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getAutoRemarksResponseMidocoSupplierAutoRemarkItem) {
            // validation for constraint: itemType
            if (!$getAutoRemarksResponseMidocoSupplierAutoRemarkItem instanceof \Pggns\MidocoApi\Api\Orderlists\StructType\SupplierAutoRemarkDTO) {
                $invalidValues[] = is_object($getAutoRemarksResponseMidocoSupplierAutoRemarkItem) ? get_class($getAutoRemarksResponseMidocoSupplierAutoRemarkItem) : sprintf('%s(%s)', gettype($getAutoRemarksResponseMidocoSupplierAutoRemarkItem), var_export($getAutoRemarksResponseMidocoSupplierAutoRemarkItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoSupplierAutoRemark property can only contain items of type \Pggns\MidocoApi\Api\Orderlists\StructType\SupplierAutoRemarkDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoSupplierAutoRemark value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\SupplierAutoRemarkDTO[] $midocoSupplierAutoRemark
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\GetAutoRemarksResponse
     */
    public function setMidocoSupplierAutoRemark(?array $midocoSupplierAutoRemark = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoSupplierAutoRemarkArrayErrorMessage = self::validateMidocoSupplierAutoRemarkForArrayConstraintsFromSetMidocoSupplierAutoRemark($midocoSupplierAutoRemark))) {
            throw new InvalidArgumentException($midocoSupplierAutoRemarkArrayErrorMessage, __LINE__);
        }
        $this->MidocoSupplierAutoRemark = $midocoSupplierAutoRemark;
        
        return $this;
    }
    /**
     * Add item to MidocoSupplierAutoRemark value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\SupplierAutoRemarkDTO $item
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\GetAutoRemarksResponse
     */
    public function addToMidocoSupplierAutoRemark(\Pggns\MidocoApi\Api\Orderlists\StructType\SupplierAutoRemarkDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\Orderlists\StructType\SupplierAutoRemarkDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoSupplierAutoRemark property can only contain items of type \Pggns\MidocoApi\Api\Orderlists\StructType\SupplierAutoRemarkDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoSupplierAutoRemark[] = $item;
        
        return $this;
    }
}
