<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetBillingStatsResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetBillingStatsResponse extends AbstractStructBase
{
    /**
     * The MidocoBillingStat
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoBillingStat
     * @var \Pggns\MidocoApi\Orderlists\StructType\BillingStatType[]
     */
    protected ?array $MidocoBillingStat = null;
    /**
     * The MidocoBillingStatSum
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoBillingStatSum
     * @var \Pggns\MidocoApi\Orderlists\StructType\BillingStatType|null
     */
    protected ?\Pggns\MidocoApi\Orderlists\StructType\BillingStatType $MidocoBillingStatSum = null;
    /**
     * Constructor method for GetBillingStatsResponse
     * @uses GetBillingStatsResponse::setMidocoBillingStat()
     * @uses GetBillingStatsResponse::setMidocoBillingStatSum()
     * @param \Pggns\MidocoApi\Orderlists\StructType\BillingStatType[] $midocoBillingStat
     * @param \Pggns\MidocoApi\Orderlists\StructType\BillingStatType $midocoBillingStatSum
     */
    public function __construct(?array $midocoBillingStat = null, ?\Pggns\MidocoApi\Orderlists\StructType\BillingStatType $midocoBillingStatSum = null)
    {
        $this
            ->setMidocoBillingStat($midocoBillingStat)
            ->setMidocoBillingStatSum($midocoBillingStatSum);
    }
    /**
     * Get MidocoBillingStat value
     * @return \Pggns\MidocoApi\Orderlists\StructType\BillingStatType[]
     */
    public function getMidocoBillingStat(): ?array
    {
        return $this->MidocoBillingStat;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoBillingStat method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoBillingStat method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoBillingStatForArrayConstraintFromSetMidocoBillingStat(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getBillingStatsResponseMidocoBillingStatItem) {
            // validation for constraint: itemType
            if (!$getBillingStatsResponseMidocoBillingStatItem instanceof \Pggns\MidocoApi\Orderlists\StructType\BillingStatType) {
                $invalidValues[] = is_object($getBillingStatsResponseMidocoBillingStatItem) ? get_class($getBillingStatsResponseMidocoBillingStatItem) : sprintf('%s(%s)', gettype($getBillingStatsResponseMidocoBillingStatItem), var_export($getBillingStatsResponseMidocoBillingStatItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoBillingStat property can only contain items of type \Pggns\MidocoApi\Orderlists\StructType\BillingStatType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoBillingStat value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Orderlists\StructType\BillingStatType[] $midocoBillingStat
     * @return \Pggns\MidocoApi\Orderlists\StructType\GetBillingStatsResponse
     */
    public function setMidocoBillingStat(?array $midocoBillingStat = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoBillingStatArrayErrorMessage = self::validateMidocoBillingStatForArrayConstraintFromSetMidocoBillingStat($midocoBillingStat))) {
            throw new InvalidArgumentException($midocoBillingStatArrayErrorMessage, __LINE__);
        }
        $this->MidocoBillingStat = $midocoBillingStat;
        
        return $this;
    }
    /**
     * Add item to MidocoBillingStat value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Orderlists\StructType\BillingStatType $item
     * @return \Pggns\MidocoApi\Orderlists\StructType\GetBillingStatsResponse
     */
    public function addToMidocoBillingStat(\Pggns\MidocoApi\Orderlists\StructType\BillingStatType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Orderlists\StructType\BillingStatType) {
            throw new InvalidArgumentException(sprintf('The MidocoBillingStat property can only contain items of type \Pggns\MidocoApi\Orderlists\StructType\BillingStatType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoBillingStat[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoBillingStatSum value
     * @return \Pggns\MidocoApi\Orderlists\StructType\BillingStatType|null
     */
    public function getMidocoBillingStatSum(): ?\Pggns\MidocoApi\Orderlists\StructType\BillingStatType
    {
        return $this->MidocoBillingStatSum;
    }
    /**
     * Set MidocoBillingStatSum value
     * @param \Pggns\MidocoApi\Orderlists\StructType\BillingStatType $midocoBillingStatSum
     * @return \Pggns\MidocoApi\Orderlists\StructType\GetBillingStatsResponse
     */
    public function setMidocoBillingStatSum(?\Pggns\MidocoApi\Orderlists\StructType\BillingStatType $midocoBillingStatSum = null): self
    {
        $this->MidocoBillingStatSum = $midocoBillingStatSum;
        
        return $this;
    }
}
