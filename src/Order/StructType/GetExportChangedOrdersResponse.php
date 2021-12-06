<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetExportChangedOrdersResponse StructType
 * @subpackage Structs
 */
class GetExportChangedOrdersResponse extends AbstractStructBase
{
    /**
     * The MidocoExportChangedOrdersLog
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoExportChangedOrdersLog
     * @var \Pggns\MidocoApi\Api\Order\StructType\ExportChangedOrdersLogDTO[]
     */
    protected ?array $MidocoExportChangedOrdersLog = null;
    /**
     * Constructor method for GetExportChangedOrdersResponse
     * @uses GetExportChangedOrdersResponse::setMidocoExportChangedOrdersLog()
     * @param \Pggns\MidocoApi\Api\Order\StructType\ExportChangedOrdersLogDTO[] $midocoExportChangedOrdersLog
     */
    public function __construct(?array $midocoExportChangedOrdersLog = null)
    {
        $this
            ->setMidocoExportChangedOrdersLog($midocoExportChangedOrdersLog);
    }
    /**
     * Get MidocoExportChangedOrdersLog value
     * @return \Pggns\MidocoApi\Api\Order\StructType\ExportChangedOrdersLogDTO[]
     */
    public function getMidocoExportChangedOrdersLog(): ?array
    {
        return $this->MidocoExportChangedOrdersLog;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoExportChangedOrdersLog method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoExportChangedOrdersLog method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoExportChangedOrdersLogForArrayConstraintsFromSetMidocoExportChangedOrdersLog(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getExportChangedOrdersResponseMidocoExportChangedOrdersLogItem) {
            // validation for constraint: itemType
            if (!$getExportChangedOrdersResponseMidocoExportChangedOrdersLogItem instanceof \Pggns\MidocoApi\Api\Order\StructType\ExportChangedOrdersLogDTO) {
                $invalidValues[] = is_object($getExportChangedOrdersResponseMidocoExportChangedOrdersLogItem) ? get_class($getExportChangedOrdersResponseMidocoExportChangedOrdersLogItem) : sprintf('%s(%s)', gettype($getExportChangedOrdersResponseMidocoExportChangedOrdersLogItem), var_export($getExportChangedOrdersResponseMidocoExportChangedOrdersLogItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoExportChangedOrdersLog property can only contain items of type \Pggns\MidocoApi\Api\Order\StructType\ExportChangedOrdersLogDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoExportChangedOrdersLog value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Order\StructType\ExportChangedOrdersLogDTO[] $midocoExportChangedOrdersLog
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetExportChangedOrdersResponse
     */
    public function setMidocoExportChangedOrdersLog(?array $midocoExportChangedOrdersLog = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoExportChangedOrdersLogArrayErrorMessage = self::validateMidocoExportChangedOrdersLogForArrayConstraintsFromSetMidocoExportChangedOrdersLog($midocoExportChangedOrdersLog))) {
            throw new InvalidArgumentException($midocoExportChangedOrdersLogArrayErrorMessage, __LINE__);
        }
        $this->MidocoExportChangedOrdersLog = $midocoExportChangedOrdersLog;
        
        return $this;
    }
    /**
     * Add item to MidocoExportChangedOrdersLog value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Order\StructType\ExportChangedOrdersLogDTO $item
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetExportChangedOrdersResponse
     */
    public function addToMidocoExportChangedOrdersLog(\Pggns\MidocoApi\Api\Order\StructType\ExportChangedOrdersLogDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\Order\StructType\ExportChangedOrdersLogDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoExportChangedOrdersLog property can only contain items of type \Pggns\MidocoApi\Api\Order\StructType\ExportChangedOrdersLogDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoExportChangedOrdersLog[] = $item;
        
        return $this;
    }
}
