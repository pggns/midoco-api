<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveAccessJasperReportResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveAccessJasperReportResponse extends AbstractStructBase
{
    /**
     * The status
     * @var bool|null
     */
    protected ?bool $status = null;
    /**
     * Constructor method for SaveAccessJasperReportResponse
     * @uses SaveAccessJasperReportResponse::setStatus()
     * @param bool $status
     */
    public function __construct(?bool $status = null)
    {
        $this
            ->setStatus($status);
    }
    /**
     * Get status value
     * @return bool|null
     */
    public function getStatus(): ?bool
    {
        return $this->status;
    }
    /**
     * Set status value
     * @param bool $status
     * @return \Pggns\MidocoApi\Mis\StructType\SaveAccessJasperReportResponse
     */
    public function setStatus(?bool $status = null): self
    {
        // validation for constraint: boolean
        if (!is_null($status) && !is_bool($status)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($status, true), gettype($status)), __LINE__);
        }
        $this->status = $status;
        
        return $this;
    }
}
