<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DebitorExportDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DebitorExportDTO extends AbstractStructBase
{
    /**
     * The debitorNo
     * @var string|null
     */
    protected ?string $debitorNo = null;
    /**
     * The lastExportData
     * @var string|null
     */
    protected ?string $lastExportData = null;
    /**
     * Constructor method for DebitorExportDTO
     * @uses DebitorExportDTO::setDebitorNo()
     * @uses DebitorExportDTO::setLastExportData()
     * @param string $debitorNo
     * @param string $lastExportData
     */
    public function __construct(?string $debitorNo = null, ?string $lastExportData = null)
    {
        $this
            ->setDebitorNo($debitorNo)
            ->setLastExportData($lastExportData);
    }
    /**
     * Get debitorNo value
     * @return string|null
     */
    public function getDebitorNo(): ?string
    {
        return $this->debitorNo;
    }
    /**
     * Set debitorNo value
     * @param string $debitorNo
     * @return \Pggns\MidocoApi\Crmsd\StructType\DebitorExportDTO
     */
    public function setDebitorNo(?string $debitorNo = null): self
    {
        // validation for constraint: string
        if (!is_null($debitorNo) && !is_string($debitorNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($debitorNo, true), gettype($debitorNo)), __LINE__);
        }
        $this->debitorNo = $debitorNo;
        
        return $this;
    }
    /**
     * Get lastExportData value
     * @return string|null
     */
    public function getLastExportData(): ?string
    {
        return $this->lastExportData;
    }
    /**
     * Set lastExportData value
     * @param string $lastExportData
     * @return \Pggns\MidocoApi\Crmsd\StructType\DebitorExportDTO
     */
    public function setLastExportData(?string $lastExportData = null): self
    {
        // validation for constraint: string
        if (!is_null($lastExportData) && !is_string($lastExportData)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lastExportData, true), gettype($lastExportData)), __LINE__);
        }
        $this->lastExportData = $lastExportData;
        
        return $this;
    }
}
