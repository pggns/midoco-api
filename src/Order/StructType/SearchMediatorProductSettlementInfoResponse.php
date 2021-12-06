<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchMediatorProductSettlementInfoResponse StructType
 * @subpackage Structs
 */
class SearchMediatorProductSettlementInfoResponse extends AbstractStructBase
{
    /**
     * The MidocoMediatorProductSettlementInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoMediatorProductSettlementInfo
     * @var \Pggns\MidocoApi\Api\Order\StructType\MidocoMediatorProductSettlementInfo[]
     */
    protected ?array $MidocoMediatorProductSettlementInfo = null;
    /**
     * Constructor method for SearchMediatorProductSettlementInfoResponse
     * @uses SearchMediatorProductSettlementInfoResponse::setMidocoMediatorProductSettlementInfo()
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoMediatorProductSettlementInfo[] $midocoMediatorProductSettlementInfo
     */
    public function __construct(?array $midocoMediatorProductSettlementInfo = null)
    {
        $this
            ->setMidocoMediatorProductSettlementInfo($midocoMediatorProductSettlementInfo);
    }
    /**
     * Get MidocoMediatorProductSettlementInfo value
     * @return \Pggns\MidocoApi\Api\Order\StructType\MidocoMediatorProductSettlementInfo[]
     */
    public function getMidocoMediatorProductSettlementInfo(): ?array
    {
        return $this->MidocoMediatorProductSettlementInfo;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoMediatorProductSettlementInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoMediatorProductSettlementInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoMediatorProductSettlementInfoForArrayConstraintsFromSetMidocoMediatorProductSettlementInfo(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $searchMediatorProductSettlementInfoResponseMidocoMediatorProductSettlementInfoItem) {
            // validation for constraint: itemType
            if (!$searchMediatorProductSettlementInfoResponseMidocoMediatorProductSettlementInfoItem instanceof \Pggns\MidocoApi\Api\Order\StructType\MidocoMediatorProductSettlementInfo) {
                $invalidValues[] = is_object($searchMediatorProductSettlementInfoResponseMidocoMediatorProductSettlementInfoItem) ? get_class($searchMediatorProductSettlementInfoResponseMidocoMediatorProductSettlementInfoItem) : sprintf('%s(%s)', gettype($searchMediatorProductSettlementInfoResponseMidocoMediatorProductSettlementInfoItem), var_export($searchMediatorProductSettlementInfoResponseMidocoMediatorProductSettlementInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoMediatorProductSettlementInfo property can only contain items of type \Pggns\MidocoApi\Api\Order\StructType\MidocoMediatorProductSettlementInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoMediatorProductSettlementInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoMediatorProductSettlementInfo[] $midocoMediatorProductSettlementInfo
     * @return \Pggns\MidocoApi\Api\Order\StructType\SearchMediatorProductSettlementInfoResponse
     */
    public function setMidocoMediatorProductSettlementInfo(?array $midocoMediatorProductSettlementInfo = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoMediatorProductSettlementInfoArrayErrorMessage = self::validateMidocoMediatorProductSettlementInfoForArrayConstraintsFromSetMidocoMediatorProductSettlementInfo($midocoMediatorProductSettlementInfo))) {
            throw new InvalidArgumentException($midocoMediatorProductSettlementInfoArrayErrorMessage, __LINE__);
        }
        $this->MidocoMediatorProductSettlementInfo = $midocoMediatorProductSettlementInfo;
        
        return $this;
    }
    /**
     * Add item to MidocoMediatorProductSettlementInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoMediatorProductSettlementInfo $item
     * @return \Pggns\MidocoApi\Api\Order\StructType\SearchMediatorProductSettlementInfoResponse
     */
    public function addToMidocoMediatorProductSettlementInfo(\Pggns\MidocoApi\Api\Order\StructType\MidocoMediatorProductSettlementInfo $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\Order\StructType\MidocoMediatorProductSettlementInfo) {
            throw new InvalidArgumentException(sprintf('The MidocoMediatorProductSettlementInfo property can only contain items of type \Pggns\MidocoApi\Api\Order\StructType\MidocoMediatorProductSettlementInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoMediatorProductSettlementInfo[] = $item;
        
        return $this;
    }
}
