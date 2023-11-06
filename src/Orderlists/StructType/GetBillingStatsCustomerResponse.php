<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetBillingStatsCustomerResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetBillingStatsCustomerResponse extends AbstractStructBase
{
    /**
     * The MidocoBillingStatCustomer
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoBillingStatCustomer
     * @var \Pggns\MidocoApi\Orderlists\StructType\BillingStatType[]
     */
    protected ?array $MidocoBillingStatCustomer = null;
    /**
     * The MidocoBillingStatHeader
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Orderlists\StructType\BillingStatHeaderType|null
     */
    protected ?\Pggns\MidocoApi\Orderlists\StructType\BillingStatHeaderType $MidocoBillingStatHeader = null;
    /**
     * The MidocoBillingStatCustomerSum
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoBillingStatCustomerSum
     * @var \Pggns\MidocoApi\Orderlists\StructType\BillingStatType|null
     */
    protected ?\Pggns\MidocoApi\Orderlists\StructType\BillingStatType $MidocoBillingStatCustomerSum = null;
    /**
     * Constructor method for GetBillingStatsCustomerResponse
     * @uses GetBillingStatsCustomerResponse::setMidocoBillingStatCustomer()
     * @uses GetBillingStatsCustomerResponse::setMidocoBillingStatHeader()
     * @uses GetBillingStatsCustomerResponse::setMidocoBillingStatCustomerSum()
     * @param \Pggns\MidocoApi\Orderlists\StructType\BillingStatType[] $midocoBillingStatCustomer
     * @param \Pggns\MidocoApi\Orderlists\StructType\BillingStatHeaderType $midocoBillingStatHeader
     * @param \Pggns\MidocoApi\Orderlists\StructType\BillingStatType $midocoBillingStatCustomerSum
     */
    public function __construct(?array $midocoBillingStatCustomer = null, ?\Pggns\MidocoApi\Orderlists\StructType\BillingStatHeaderType $midocoBillingStatHeader = null, ?\Pggns\MidocoApi\Orderlists\StructType\BillingStatType $midocoBillingStatCustomerSum = null)
    {
        $this
            ->setMidocoBillingStatCustomer($midocoBillingStatCustomer)
            ->setMidocoBillingStatHeader($midocoBillingStatHeader)
            ->setMidocoBillingStatCustomerSum($midocoBillingStatCustomerSum);
    }
    /**
     * Get MidocoBillingStatCustomer value
     * @return \Pggns\MidocoApi\Orderlists\StructType\BillingStatType[]
     */
    public function getMidocoBillingStatCustomer(): ?array
    {
        return $this->MidocoBillingStatCustomer;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoBillingStatCustomer method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoBillingStatCustomer method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoBillingStatCustomerForArrayConstraintFromSetMidocoBillingStatCustomer(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getBillingStatsCustomerResponseMidocoBillingStatCustomerItem) {
            // validation for constraint: itemType
            if (!$getBillingStatsCustomerResponseMidocoBillingStatCustomerItem instanceof \Pggns\MidocoApi\Orderlists\StructType\BillingStatType) {
                $invalidValues[] = is_object($getBillingStatsCustomerResponseMidocoBillingStatCustomerItem) ? get_class($getBillingStatsCustomerResponseMidocoBillingStatCustomerItem) : sprintf('%s(%s)', gettype($getBillingStatsCustomerResponseMidocoBillingStatCustomerItem), var_export($getBillingStatsCustomerResponseMidocoBillingStatCustomerItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoBillingStatCustomer property can only contain items of type \Pggns\MidocoApi\Orderlists\StructType\BillingStatType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoBillingStatCustomer value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Orderlists\StructType\BillingStatType[] $midocoBillingStatCustomer
     * @return \Pggns\MidocoApi\Orderlists\StructType\GetBillingStatsCustomerResponse
     */
    public function setMidocoBillingStatCustomer(?array $midocoBillingStatCustomer = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoBillingStatCustomerArrayErrorMessage = self::validateMidocoBillingStatCustomerForArrayConstraintFromSetMidocoBillingStatCustomer($midocoBillingStatCustomer))) {
            throw new InvalidArgumentException($midocoBillingStatCustomerArrayErrorMessage, __LINE__);
        }
        $this->MidocoBillingStatCustomer = $midocoBillingStatCustomer;
        
        return $this;
    }
    /**
     * Add item to MidocoBillingStatCustomer value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Orderlists\StructType\BillingStatType $item
     * @return \Pggns\MidocoApi\Orderlists\StructType\GetBillingStatsCustomerResponse
     */
    public function addToMidocoBillingStatCustomer(\Pggns\MidocoApi\Orderlists\StructType\BillingStatType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Orderlists\StructType\BillingStatType) {
            throw new InvalidArgumentException(sprintf('The MidocoBillingStatCustomer property can only contain items of type \Pggns\MidocoApi\Orderlists\StructType\BillingStatType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoBillingStatCustomer[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoBillingStatHeader value
     * @return \Pggns\MidocoApi\Orderlists\StructType\BillingStatHeaderType|null
     */
    public function getMidocoBillingStatHeader(): ?\Pggns\MidocoApi\Orderlists\StructType\BillingStatHeaderType
    {
        return $this->MidocoBillingStatHeader;
    }
    /**
     * Set MidocoBillingStatHeader value
     * @param \Pggns\MidocoApi\Orderlists\StructType\BillingStatHeaderType $midocoBillingStatHeader
     * @return \Pggns\MidocoApi\Orderlists\StructType\GetBillingStatsCustomerResponse
     */
    public function setMidocoBillingStatHeader(?\Pggns\MidocoApi\Orderlists\StructType\BillingStatHeaderType $midocoBillingStatHeader = null): self
    {
        $this->MidocoBillingStatHeader = $midocoBillingStatHeader;
        
        return $this;
    }
    /**
     * Get MidocoBillingStatCustomerSum value
     * @return \Pggns\MidocoApi\Orderlists\StructType\BillingStatType|null
     */
    public function getMidocoBillingStatCustomerSum(): ?\Pggns\MidocoApi\Orderlists\StructType\BillingStatType
    {
        return $this->MidocoBillingStatCustomerSum;
    }
    /**
     * Set MidocoBillingStatCustomerSum value
     * @param \Pggns\MidocoApi\Orderlists\StructType\BillingStatType $midocoBillingStatCustomerSum
     * @return \Pggns\MidocoApi\Orderlists\StructType\GetBillingStatsCustomerResponse
     */
    public function setMidocoBillingStatCustomerSum(?\Pggns\MidocoApi\Orderlists\StructType\BillingStatType $midocoBillingStatCustomerSum = null): self
    {
        $this->MidocoBillingStatCustomerSum = $midocoBillingStatCustomerSum;
        
        return $this;
    }
}
