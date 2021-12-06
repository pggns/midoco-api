<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ClientPerformanceLogListResponse StructType
 * @subpackage Structs
 */
class ClientPerformanceLogListResponse extends AbstractStructBase
{
    /**
     * The ClientPerformanceLogInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Orderlists\StructType\ClientPerformanceLogInfoType[]
     */
    protected ?array $ClientPerformanceLogInfo = null;
    /**
     * The ClientPerformanceLogSumInfo
     * @var \Pggns\MidocoApi\Orderlists\StructType\ClientPerformanceLogSumInfoType|null
     */
    protected ?\Pggns\MidocoApi\Orderlists\StructType\ClientPerformanceLogSumInfoType $ClientPerformanceLogSumInfo = null;
    /**
     * Constructor method for ClientPerformanceLogListResponse
     * @uses ClientPerformanceLogListResponse::setClientPerformanceLogInfo()
     * @uses ClientPerformanceLogListResponse::setClientPerformanceLogSumInfo()
     * @param \Pggns\MidocoApi\Orderlists\StructType\ClientPerformanceLogInfoType[] $clientPerformanceLogInfo
     * @param \Pggns\MidocoApi\Orderlists\StructType\ClientPerformanceLogSumInfoType $clientPerformanceLogSumInfo
     */
    public function __construct(?array $clientPerformanceLogInfo = null, ?\Pggns\MidocoApi\Orderlists\StructType\ClientPerformanceLogSumInfoType $clientPerformanceLogSumInfo = null)
    {
        $this
            ->setClientPerformanceLogInfo($clientPerformanceLogInfo)
            ->setClientPerformanceLogSumInfo($clientPerformanceLogSumInfo);
    }
    /**
     * Get ClientPerformanceLogInfo value
     * @return \Pggns\MidocoApi\Orderlists\StructType\ClientPerformanceLogInfoType[]
     */
    public function getClientPerformanceLogInfo(): ?array
    {
        return $this->ClientPerformanceLogInfo;
    }
    /**
     * This method is responsible for validating the values passed to the setClientPerformanceLogInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setClientPerformanceLogInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateClientPerformanceLogInfoForArrayConstraintsFromSetClientPerformanceLogInfo(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $clientPerformanceLogListResponseClientPerformanceLogInfoItem) {
            // validation for constraint: itemType
            if (!$clientPerformanceLogListResponseClientPerformanceLogInfoItem instanceof \Pggns\MidocoApi\Orderlists\StructType\ClientPerformanceLogInfoType) {
                $invalidValues[] = is_object($clientPerformanceLogListResponseClientPerformanceLogInfoItem) ? get_class($clientPerformanceLogListResponseClientPerformanceLogInfoItem) : sprintf('%s(%s)', gettype($clientPerformanceLogListResponseClientPerformanceLogInfoItem), var_export($clientPerformanceLogListResponseClientPerformanceLogInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ClientPerformanceLogInfo property can only contain items of type \Pggns\MidocoApi\Orderlists\StructType\ClientPerformanceLogInfoType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ClientPerformanceLogInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Orderlists\StructType\ClientPerformanceLogInfoType[] $clientPerformanceLogInfo
     * @return \Pggns\MidocoApi\Orderlists\StructType\ClientPerformanceLogListResponse
     */
    public function setClientPerformanceLogInfo(?array $clientPerformanceLogInfo = null): self
    {
        // validation for constraint: array
        if ('' !== ($clientPerformanceLogInfoArrayErrorMessage = self::validateClientPerformanceLogInfoForArrayConstraintsFromSetClientPerformanceLogInfo($clientPerformanceLogInfo))) {
            throw new InvalidArgumentException($clientPerformanceLogInfoArrayErrorMessage, __LINE__);
        }
        $this->ClientPerformanceLogInfo = $clientPerformanceLogInfo;
        
        return $this;
    }
    /**
     * Add item to ClientPerformanceLogInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Orderlists\StructType\ClientPerformanceLogInfoType $item
     * @return \Pggns\MidocoApi\Orderlists\StructType\ClientPerformanceLogListResponse
     */
    public function addToClientPerformanceLogInfo(\Pggns\MidocoApi\Orderlists\StructType\ClientPerformanceLogInfoType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Orderlists\StructType\ClientPerformanceLogInfoType) {
            throw new InvalidArgumentException(sprintf('The ClientPerformanceLogInfo property can only contain items of type \Pggns\MidocoApi\Orderlists\StructType\ClientPerformanceLogInfoType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->ClientPerformanceLogInfo[] = $item;
        
        return $this;
    }
    /**
     * Get ClientPerformanceLogSumInfo value
     * @return \Pggns\MidocoApi\Orderlists\StructType\ClientPerformanceLogSumInfoType|null
     */
    public function getClientPerformanceLogSumInfo(): ?\Pggns\MidocoApi\Orderlists\StructType\ClientPerformanceLogSumInfoType
    {
        return $this->ClientPerformanceLogSumInfo;
    }
    /**
     * Set ClientPerformanceLogSumInfo value
     * @param \Pggns\MidocoApi\Orderlists\StructType\ClientPerformanceLogSumInfoType $clientPerformanceLogSumInfo
     * @return \Pggns\MidocoApi\Orderlists\StructType\ClientPerformanceLogListResponse
     */
    public function setClientPerformanceLogSumInfo(?\Pggns\MidocoApi\Orderlists\StructType\ClientPerformanceLogSumInfoType $clientPerformanceLogSumInfo = null): self
    {
        $this->ClientPerformanceLogSumInfo = $clientPerformanceLogSumInfo;
        
        return $this;
    }
}
