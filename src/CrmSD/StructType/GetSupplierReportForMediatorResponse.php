<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\CrmSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSupplierReportForMediatorResponse StructType
 * @subpackage Structs
 */
class GetSupplierReportForMediatorResponse extends AbstractStructBase
{
    /**
     * The MidocoMediatorRevenue
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoMediatorRevenue
     * @var \Pggns\MidocoApi\CrmSD\StructType\MidocoMediatorRevenue[]
     */
    protected ?array $MidocoMediatorRevenue = null;
    /**
     * Constructor method for GetSupplierReportForMediatorResponse
     * @uses GetSupplierReportForMediatorResponse::setMidocoMediatorRevenue()
     * @param \Pggns\MidocoApi\CrmSD\StructType\MidocoMediatorRevenue[] $midocoMediatorRevenue
     */
    public function __construct(?array $midocoMediatorRevenue = null)
    {
        $this
            ->setMidocoMediatorRevenue($midocoMediatorRevenue);
    }
    /**
     * Get MidocoMediatorRevenue value
     * @return \Pggns\MidocoApi\CrmSD\StructType\MidocoMediatorRevenue[]
     */
    public function getMidocoMediatorRevenue(): ?array
    {
        return $this->MidocoMediatorRevenue;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoMediatorRevenue method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoMediatorRevenue method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoMediatorRevenueForArrayConstraintsFromSetMidocoMediatorRevenue(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getSupplierReportForMediatorResponseMidocoMediatorRevenueItem) {
            // validation for constraint: itemType
            if (!$getSupplierReportForMediatorResponseMidocoMediatorRevenueItem instanceof \Pggns\MidocoApi\CrmSD\StructType\MidocoMediatorRevenue) {
                $invalidValues[] = is_object($getSupplierReportForMediatorResponseMidocoMediatorRevenueItem) ? get_class($getSupplierReportForMediatorResponseMidocoMediatorRevenueItem) : sprintf('%s(%s)', gettype($getSupplierReportForMediatorResponseMidocoMediatorRevenueItem), var_export($getSupplierReportForMediatorResponseMidocoMediatorRevenueItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoMediatorRevenue property can only contain items of type \Pggns\MidocoApi\CrmSD\StructType\MidocoMediatorRevenue, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoMediatorRevenue value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\CrmSD\StructType\MidocoMediatorRevenue[] $midocoMediatorRevenue
     * @return \Pggns\MidocoApi\CrmSD\StructType\GetSupplierReportForMediatorResponse
     */
    public function setMidocoMediatorRevenue(?array $midocoMediatorRevenue = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoMediatorRevenueArrayErrorMessage = self::validateMidocoMediatorRevenueForArrayConstraintsFromSetMidocoMediatorRevenue($midocoMediatorRevenue))) {
            throw new InvalidArgumentException($midocoMediatorRevenueArrayErrorMessage, __LINE__);
        }
        $this->MidocoMediatorRevenue = $midocoMediatorRevenue;
        
        return $this;
    }
    /**
     * Add item to MidocoMediatorRevenue value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\CrmSD\StructType\MidocoMediatorRevenue $item
     * @return \Pggns\MidocoApi\CrmSD\StructType\GetSupplierReportForMediatorResponse
     */
    public function addToMidocoMediatorRevenue(\Pggns\MidocoApi\CrmSD\StructType\MidocoMediatorRevenue $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\CrmSD\StructType\MidocoMediatorRevenue) {
            throw new InvalidArgumentException(sprintf('The MidocoMediatorRevenue property can only contain items of type \Pggns\MidocoApi\CrmSD\StructType\MidocoMediatorRevenue, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoMediatorRevenue[] = $item;
        
        return $this;
    }
}
