<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetOrderAccountingInfosResponse StructType
 * @subpackage Structs
 */
class GetOrderAccountingInfosResponse extends AbstractStructBase
{
    /**
     * The AccountingInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: AccountingInfo
     * @var \Pggns\MidocoApi\Order\StructType\AccountingInfoType[]
     */
    protected ?array $AccountingInfo = null;
    /**
     * Constructor method for GetOrderAccountingInfosResponse
     * @uses GetOrderAccountingInfosResponse::setAccountingInfo()
     * @param \Pggns\MidocoApi\Order\StructType\AccountingInfoType[] $accountingInfo
     */
    public function __construct(?array $accountingInfo = null)
    {
        $this
            ->setAccountingInfo($accountingInfo);
    }
    /**
     * Get AccountingInfo value
     * @return \Pggns\MidocoApi\Order\StructType\AccountingInfoType[]
     */
    public function getAccountingInfo(): ?array
    {
        return $this->AccountingInfo;
    }
    /**
     * This method is responsible for validating the values passed to the setAccountingInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAccountingInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAccountingInfoForArrayConstraintsFromSetAccountingInfo(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getOrderAccountingInfosResponseAccountingInfoItem) {
            // validation for constraint: itemType
            if (!$getOrderAccountingInfosResponseAccountingInfoItem instanceof \Pggns\MidocoApi\Order\StructType\AccountingInfoType) {
                $invalidValues[] = is_object($getOrderAccountingInfosResponseAccountingInfoItem) ? get_class($getOrderAccountingInfosResponseAccountingInfoItem) : sprintf('%s(%s)', gettype($getOrderAccountingInfosResponseAccountingInfoItem), var_export($getOrderAccountingInfosResponseAccountingInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AccountingInfo property can only contain items of type \Pggns\MidocoApi\Order\StructType\AccountingInfoType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set AccountingInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\AccountingInfoType[] $accountingInfo
     * @return \Pggns\MidocoApi\Order\StructType\GetOrderAccountingInfosResponse
     */
    public function setAccountingInfo(?array $accountingInfo = null): self
    {
        // validation for constraint: array
        if ('' !== ($accountingInfoArrayErrorMessage = self::validateAccountingInfoForArrayConstraintsFromSetAccountingInfo($accountingInfo))) {
            throw new InvalidArgumentException($accountingInfoArrayErrorMessage, __LINE__);
        }
        $this->AccountingInfo = $accountingInfo;
        
        return $this;
    }
    /**
     * Add item to AccountingInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\AccountingInfoType $item
     * @return \Pggns\MidocoApi\Order\StructType\GetOrderAccountingInfosResponse
     */
    public function addToAccountingInfo(\Pggns\MidocoApi\Order\StructType\AccountingInfoType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\AccountingInfoType) {
            throw new InvalidArgumentException(sprintf('The AccountingInfo property can only contain items of type \Pggns\MidocoApi\Order\StructType\AccountingInfoType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->AccountingInfo[] = $item;
        
        return $this;
    }
}
