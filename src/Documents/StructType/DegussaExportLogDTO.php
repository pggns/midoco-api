<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DegussaExportLogDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DegussaExportLogDTO extends AbstractStructBase
{
    /**
     * The degussaExportLogId
     * @var int|null
     */
    protected ?int $degussaExportLogId = null;
    /**
     * The exportTimestamp
     * @var string|null
     */
    protected ?string $exportTimestamp = null;
    /**
     * Constructor method for DegussaExportLogDTO
     * @uses DegussaExportLogDTO::setDegussaExportLogId()
     * @uses DegussaExportLogDTO::setExportTimestamp()
     * @param int $degussaExportLogId
     * @param string $exportTimestamp
     */
    public function __construct(?int $degussaExportLogId = null, ?string $exportTimestamp = null)
    {
        $this
            ->setDegussaExportLogId($degussaExportLogId)
            ->setExportTimestamp($exportTimestamp);
    }
    /**
     * Get degussaExportLogId value
     * @return int|null
     */
    public function getDegussaExportLogId(): ?int
    {
        return $this->degussaExportLogId;
    }
    /**
     * Set degussaExportLogId value
     * @param int $degussaExportLogId
     * @return \Pggns\MidocoApi\Documents\StructType\DegussaExportLogDTO
     */
    public function setDegussaExportLogId(?int $degussaExportLogId = null): self
    {
        // validation for constraint: int
        if (!is_null($degussaExportLogId) && !(is_int($degussaExportLogId) || ctype_digit($degussaExportLogId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($degussaExportLogId, true), gettype($degussaExportLogId)), __LINE__);
        }
        $this->degussaExportLogId = $degussaExportLogId;
        
        return $this;
    }
    /**
     * Get exportTimestamp value
     * @return string|null
     */
    public function getExportTimestamp(): ?string
    {
        return $this->exportTimestamp;
    }
    /**
     * Set exportTimestamp value
     * @param string $exportTimestamp
     * @return \Pggns\MidocoApi\Documents\StructType\DegussaExportLogDTO
     */
    public function setExportTimestamp(?string $exportTimestamp = null): self
    {
        // validation for constraint: string
        if (!is_null($exportTimestamp) && !is_string($exportTimestamp)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($exportTimestamp, true), gettype($exportTimestamp)), __LINE__);
        }
        $this->exportTimestamp = $exportTimestamp;
        
        return $this;
    }
}
