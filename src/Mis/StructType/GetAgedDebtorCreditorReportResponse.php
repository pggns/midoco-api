<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAgedDebtorCreditorReportResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetAgedDebtorCreditorReportResponse extends AbstractStructBase
{
    /**
     * The file
     * @var string|null
     */
    protected ?string $file = null;
    /**
     * Constructor method for GetAgedDebtorCreditorReportResponse
     * @uses GetAgedDebtorCreditorReportResponse::setFile()
     * @param string $file
     */
    public function __construct(?string $file = null)
    {
        $this
            ->setFile($file);
    }
    /**
     * Get file value
     * @return string|null
     */
    public function getFile(): ?string
    {
        return $this->file;
    }
    /**
     * Set file value
     * @param string $file
     * @return \Pggns\MidocoApi\Mis\StructType\GetAgedDebtorCreditorReportResponse
     */
    public function setFile(?string $file = null): self
    {
        // validation for constraint: string
        if (!is_null($file) && !is_string($file)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($file, true), gettype($file)), __LINE__);
        }
        $this->file = $file;
        
        return $this;
    }
}
