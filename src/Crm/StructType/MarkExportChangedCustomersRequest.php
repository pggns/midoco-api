<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MarkExportChangedCustomersRequest StructType
 * @subpackage Structs
 */
class MarkExportChangedCustomersRequest extends AbstractStructBase
{
    /**
     * The MidocoExportChangedCustomersLog
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * - ref: MidocoExportChangedCustomersLog
     * @var \Pggns\MidocoApi\Crm\StructType\ExportChangedCustomersLogDTO[]
     */
    protected array $MidocoExportChangedCustomersLog = [];
    /**
     * Constructor method for MarkExportChangedCustomersRequest
     * @uses MarkExportChangedCustomersRequest::setMidocoExportChangedCustomersLog()
     * @param \Pggns\MidocoApi\Crm\StructType\ExportChangedCustomersLogDTO[] $midocoExportChangedCustomersLog
     */
    public function __construct(array $midocoExportChangedCustomersLog)
    {
        $this
            ->setMidocoExportChangedCustomersLog($midocoExportChangedCustomersLog);
    }
    /**
     * Get MidocoExportChangedCustomersLog value
     * @return \Pggns\MidocoApi\Crm\StructType\ExportChangedCustomersLogDTO[]
     */
    public function getMidocoExportChangedCustomersLog(): array
    {
        return $this->MidocoExportChangedCustomersLog;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoExportChangedCustomersLog method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoExportChangedCustomersLog method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoExportChangedCustomersLogForArrayConstraintsFromSetMidocoExportChangedCustomersLog(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $markExportChangedCustomersRequestMidocoExportChangedCustomersLogItem) {
            // validation for constraint: itemType
            if (!$markExportChangedCustomersRequestMidocoExportChangedCustomersLogItem instanceof \Pggns\MidocoApi\Crm\StructType\ExportChangedCustomersLogDTO) {
                $invalidValues[] = is_object($markExportChangedCustomersRequestMidocoExportChangedCustomersLogItem) ? get_class($markExportChangedCustomersRequestMidocoExportChangedCustomersLogItem) : sprintf('%s(%s)', gettype($markExportChangedCustomersRequestMidocoExportChangedCustomersLogItem), var_export($markExportChangedCustomersRequestMidocoExportChangedCustomersLogItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoExportChangedCustomersLog property can only contain items of type \Pggns\MidocoApi\Crm\StructType\ExportChangedCustomersLogDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoExportChangedCustomersLog value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\ExportChangedCustomersLogDTO[] $midocoExportChangedCustomersLog
     * @return \Pggns\MidocoApi\Crm\StructType\MarkExportChangedCustomersRequest
     */
    public function setMidocoExportChangedCustomersLog(array $midocoExportChangedCustomersLog): self
    {
        // validation for constraint: array
        if ('' !== ($midocoExportChangedCustomersLogArrayErrorMessage = self::validateMidocoExportChangedCustomersLogForArrayConstraintsFromSetMidocoExportChangedCustomersLog($midocoExportChangedCustomersLog))) {
            throw new InvalidArgumentException($midocoExportChangedCustomersLogArrayErrorMessage, __LINE__);
        }
        $this->MidocoExportChangedCustomersLog = $midocoExportChangedCustomersLog;
        
        return $this;
    }
    /**
     * Add item to MidocoExportChangedCustomersLog value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\ExportChangedCustomersLogDTO $item
     * @return \Pggns\MidocoApi\Crm\StructType\MarkExportChangedCustomersRequest
     */
    public function addToMidocoExportChangedCustomersLog(\Pggns\MidocoApi\Crm\StructType\ExportChangedCustomersLogDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crm\StructType\ExportChangedCustomersLogDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoExportChangedCustomersLog property can only contain items of type \Pggns\MidocoApi\Crm\StructType\ExportChangedCustomersLogDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoExportChangedCustomersLog[] = $item;
        
        return $this;
    }
}
