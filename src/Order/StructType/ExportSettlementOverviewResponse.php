<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExportSettlementOverviewResponse StructType
 * @subpackage Structs
 */
class ExportSettlementOverviewResponse extends AbstractStructBase
{
    /**
     * The exportData
     * @var string|null
     */
    protected ?string $exportData = null;
    /**
     * Constructor method for ExportSettlementOverviewResponse
     * @uses ExportSettlementOverviewResponse::setExportData()
     * @param string $exportData
     */
    public function __construct(?string $exportData = null)
    {
        $this
            ->setExportData($exportData);
    }
    /**
     * Get exportData value
     * @return string|null
     */
    public function getExportData(): ?string
    {
        return $this->exportData;
    }
    /**
     * Set exportData value
     * @param string $exportData
     * @return \Pggns\MidocoApi\Api\Order\StructType\ExportSettlementOverviewResponse
     */
    public function setExportData(?string $exportData = null): self
    {
        // validation for constraint: string
        if (!is_null($exportData) && !is_string($exportData)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($exportData, true), gettype($exportData)), __LINE__);
        }
        $this->exportData = $exportData;
        
        return $this;
    }
}