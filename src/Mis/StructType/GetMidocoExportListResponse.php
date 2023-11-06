<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMidocoExportListResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetMidocoExportListResponse extends AbstractStructBase
{
    /**
     * The file
     * @var string|null
     */
    protected ?string $file = null;
    /**
     * The emailSentStatus
     * @var string|null
     */
    protected ?string $emailSentStatus = null;
    /**
     * Constructor method for GetMidocoExportListResponse
     * @uses GetMidocoExportListResponse::setFile()
     * @uses GetMidocoExportListResponse::setEmailSentStatus()
     * @param string $file
     * @param string $emailSentStatus
     */
    public function __construct(?string $file = null, ?string $emailSentStatus = null)
    {
        $this
            ->setFile($file)
            ->setEmailSentStatus($emailSentStatus);
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
     * @return \Pggns\MidocoApi\Mis\StructType\GetMidocoExportListResponse
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
    /**
     * Get emailSentStatus value
     * @return string|null
     */
    public function getEmailSentStatus(): ?string
    {
        return $this->emailSentStatus;
    }
    /**
     * Set emailSentStatus value
     * @param string $emailSentStatus
     * @return \Pggns\MidocoApi\Mis\StructType\GetMidocoExportListResponse
     */
    public function setEmailSentStatus(?string $emailSentStatus = null): self
    {
        // validation for constraint: string
        if (!is_null($emailSentStatus) && !is_string($emailSentStatus)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($emailSentStatus, true), gettype($emailSentStatus)), __LINE__);
        }
        $this->emailSentStatus = $emailSentStatus;
        
        return $this;
    }
}
