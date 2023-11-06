<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveCollectiveInvoiceSettingRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveCollectiveInvoiceSettingRequest extends AbstractStructBase
{
    /**
     * The MidocoCollectiveInvoiceSetting
     * Meta information extracted from the WSDL
     * - ref: MidocoCollectiveInvoiceSetting
     * @var \Pggns\MidocoApi\Crm\StructType\CollectInvSettingDTO|null
     */
    protected ?\Pggns\MidocoApi\Crm\StructType\CollectInvSettingDTO $MidocoCollectiveInvoiceSetting = null;
    /**
     * The internalVersion
     * @var int|null
     */
    protected ?int $internalVersion = null;
    /**
     * Constructor method for SaveCollectiveInvoiceSettingRequest
     * @uses SaveCollectiveInvoiceSettingRequest::setMidocoCollectiveInvoiceSetting()
     * @uses SaveCollectiveInvoiceSettingRequest::setInternalVersion()
     * @param \Pggns\MidocoApi\Crm\StructType\CollectInvSettingDTO $midocoCollectiveInvoiceSetting
     * @param int $internalVersion
     */
    public function __construct(?\Pggns\MidocoApi\Crm\StructType\CollectInvSettingDTO $midocoCollectiveInvoiceSetting = null, ?int $internalVersion = null)
    {
        $this
            ->setMidocoCollectiveInvoiceSetting($midocoCollectiveInvoiceSetting)
            ->setInternalVersion($internalVersion);
    }
    /**
     * Get MidocoCollectiveInvoiceSetting value
     * @return \Pggns\MidocoApi\Crm\StructType\CollectInvSettingDTO|null
     */
    public function getMidocoCollectiveInvoiceSetting(): ?\Pggns\MidocoApi\Crm\StructType\CollectInvSettingDTO
    {
        return $this->MidocoCollectiveInvoiceSetting;
    }
    /**
     * Set MidocoCollectiveInvoiceSetting value
     * @param \Pggns\MidocoApi\Crm\StructType\CollectInvSettingDTO $midocoCollectiveInvoiceSetting
     * @return \Pggns\MidocoApi\Crm\StructType\SaveCollectiveInvoiceSettingRequest
     */
    public function setMidocoCollectiveInvoiceSetting(?\Pggns\MidocoApi\Crm\StructType\CollectInvSettingDTO $midocoCollectiveInvoiceSetting = null): self
    {
        $this->MidocoCollectiveInvoiceSetting = $midocoCollectiveInvoiceSetting;
        
        return $this;
    }
    /**
     * Get internalVersion value
     * @return int|null
     */
    public function getInternalVersion(): ?int
    {
        return $this->internalVersion;
    }
    /**
     * Set internalVersion value
     * @param int $internalVersion
     * @return \Pggns\MidocoApi\Crm\StructType\SaveCollectiveInvoiceSettingRequest
     */
    public function setInternalVersion(?int $internalVersion = null): self
    {
        // validation for constraint: int
        if (!is_null($internalVersion) && !(is_int($internalVersion) || ctype_digit($internalVersion))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($internalVersion, true), gettype($internalVersion)), __LINE__);
        }
        $this->internalVersion = $internalVersion;
        
        return $this;
    }
}
