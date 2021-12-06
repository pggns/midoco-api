<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\CrmSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCooperationsResponse StructType
 * @subpackage Structs
 */
class GetCooperationsResponse extends AbstractStructBase
{
    /**
     * The MidocoCooperationInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoCooperationInfo
     * @var \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoCooperationInfo[]
     */
    protected ?array $MidocoCooperationInfo = null;
    /**
     * Constructor method for GetCooperationsResponse
     * @uses GetCooperationsResponse::setMidocoCooperationInfo()
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoCooperationInfo[] $midocoCooperationInfo
     */
    public function __construct(?array $midocoCooperationInfo = null)
    {
        $this
            ->setMidocoCooperationInfo($midocoCooperationInfo);
    }
    /**
     * Get MidocoCooperationInfo value
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoCooperationInfo[]
     */
    public function getMidocoCooperationInfo(): ?array
    {
        return $this->MidocoCooperationInfo;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoCooperationInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCooperationInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCooperationInfoForArrayConstraintsFromSetMidocoCooperationInfo(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getCooperationsResponseMidocoCooperationInfoItem) {
            // validation for constraint: itemType
            if (!$getCooperationsResponseMidocoCooperationInfoItem instanceof \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoCooperationInfo) {
                $invalidValues[] = is_object($getCooperationsResponseMidocoCooperationInfoItem) ? get_class($getCooperationsResponseMidocoCooperationInfoItem) : sprintf('%s(%s)', gettype($getCooperationsResponseMidocoCooperationInfoItem), var_export($getCooperationsResponseMidocoCooperationInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCooperationInfo property can only contain items of type \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoCooperationInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCooperationInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoCooperationInfo[] $midocoCooperationInfo
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\GetCooperationsResponse
     */
    public function setMidocoCooperationInfo(?array $midocoCooperationInfo = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCooperationInfoArrayErrorMessage = self::validateMidocoCooperationInfoForArrayConstraintsFromSetMidocoCooperationInfo($midocoCooperationInfo))) {
            throw new InvalidArgumentException($midocoCooperationInfoArrayErrorMessage, __LINE__);
        }
        $this->MidocoCooperationInfo = $midocoCooperationInfo;
        
        return $this;
    }
    /**
     * Add item to MidocoCooperationInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoCooperationInfo $item
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\GetCooperationsResponse
     */
    public function addToMidocoCooperationInfo(\Pggns\MidocoApi\Api\CrmSD\StructType\MidocoCooperationInfo $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoCooperationInfo) {
            throw new InvalidArgumentException(sprintf('The MidocoCooperationInfo property can only contain items of type \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoCooperationInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCooperationInfo[] = $item;
        
        return $this;
    }
}
