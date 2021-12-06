<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetDueMidocoChargesResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: getDueMidocoCharges --- get the charges to be included in the next settlement
 * @subpackage Structs
 */
class GetDueMidocoChargesResponse extends AbstractStructBase
{
    /**
     * The MidocoCrmMidocoChargeInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoCrmMidocoChargeInfo
     * @var \Pggns\MidocoApi\Crm\StructType\CrmMidocoChargeInfoType[]
     */
    protected ?array $MidocoCrmMidocoChargeInfo = null;
    /**
     * Constructor method for GetDueMidocoChargesResponse
     * @uses GetDueMidocoChargesResponse::setMidocoCrmMidocoChargeInfo()
     * @param \Pggns\MidocoApi\Crm\StructType\CrmMidocoChargeInfoType[] $midocoCrmMidocoChargeInfo
     */
    public function __construct(?array $midocoCrmMidocoChargeInfo = null)
    {
        $this
            ->setMidocoCrmMidocoChargeInfo($midocoCrmMidocoChargeInfo);
    }
    /**
     * Get MidocoCrmMidocoChargeInfo value
     * @return \Pggns\MidocoApi\Crm\StructType\CrmMidocoChargeInfoType[]
     */
    public function getMidocoCrmMidocoChargeInfo(): ?array
    {
        return $this->MidocoCrmMidocoChargeInfo;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoCrmMidocoChargeInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCrmMidocoChargeInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCrmMidocoChargeInfoForArrayConstraintsFromSetMidocoCrmMidocoChargeInfo(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getDueMidocoChargesResponseMidocoCrmMidocoChargeInfoItem) {
            // validation for constraint: itemType
            if (!$getDueMidocoChargesResponseMidocoCrmMidocoChargeInfoItem instanceof \Pggns\MidocoApi\Crm\StructType\CrmMidocoChargeInfoType) {
                $invalidValues[] = is_object($getDueMidocoChargesResponseMidocoCrmMidocoChargeInfoItem) ? get_class($getDueMidocoChargesResponseMidocoCrmMidocoChargeInfoItem) : sprintf('%s(%s)', gettype($getDueMidocoChargesResponseMidocoCrmMidocoChargeInfoItem), var_export($getDueMidocoChargesResponseMidocoCrmMidocoChargeInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCrmMidocoChargeInfo property can only contain items of type \Pggns\MidocoApi\Crm\StructType\CrmMidocoChargeInfoType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCrmMidocoChargeInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\CrmMidocoChargeInfoType[] $midocoCrmMidocoChargeInfo
     * @return \Pggns\MidocoApi\Crm\StructType\GetDueMidocoChargesResponse
     */
    public function setMidocoCrmMidocoChargeInfo(?array $midocoCrmMidocoChargeInfo = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCrmMidocoChargeInfoArrayErrorMessage = self::validateMidocoCrmMidocoChargeInfoForArrayConstraintsFromSetMidocoCrmMidocoChargeInfo($midocoCrmMidocoChargeInfo))) {
            throw new InvalidArgumentException($midocoCrmMidocoChargeInfoArrayErrorMessage, __LINE__);
        }
        $this->MidocoCrmMidocoChargeInfo = $midocoCrmMidocoChargeInfo;
        
        return $this;
    }
    /**
     * Add item to MidocoCrmMidocoChargeInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\CrmMidocoChargeInfoType $item
     * @return \Pggns\MidocoApi\Crm\StructType\GetDueMidocoChargesResponse
     */
    public function addToMidocoCrmMidocoChargeInfo(\Pggns\MidocoApi\Crm\StructType\CrmMidocoChargeInfoType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crm\StructType\CrmMidocoChargeInfoType) {
            throw new InvalidArgumentException(sprintf('The MidocoCrmMidocoChargeInfo property can only contain items of type \Pggns\MidocoApi\Crm\StructType\CrmMidocoChargeInfoType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCrmMidocoChargeInfo[] = $item;
        
        return $this;
    }
}
