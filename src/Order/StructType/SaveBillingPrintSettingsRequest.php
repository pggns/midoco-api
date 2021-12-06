<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveBillingPrintSettingsRequest StructType
 * @subpackage Structs
 */
class SaveBillingPrintSettingsRequest extends AbstractStructBase
{
    /**
     * The MidocoBillingPrintSettings
     * Meta information extracted from the WSDL
     * - ref: MidocoBillingPrintSettings
     * @var \Pggns\MidocoApi\Api\Order\StructType\BillingPrintSettingDTO|null
     */
    protected ?\Pggns\MidocoApi\Api\Order\StructType\BillingPrintSettingDTO $MidocoBillingPrintSettings = null;
    /**
     * Constructor method for SaveBillingPrintSettingsRequest
     * @uses SaveBillingPrintSettingsRequest::setMidocoBillingPrintSettings()
     * @param \Pggns\MidocoApi\Api\Order\StructType\BillingPrintSettingDTO $midocoBillingPrintSettings
     */
    public function __construct(?\Pggns\MidocoApi\Api\Order\StructType\BillingPrintSettingDTO $midocoBillingPrintSettings = null)
    {
        $this
            ->setMidocoBillingPrintSettings($midocoBillingPrintSettings);
    }
    /**
     * Get MidocoBillingPrintSettings value
     * @return \Pggns\MidocoApi\Api\Order\StructType\BillingPrintSettingDTO|null
     */
    public function getMidocoBillingPrintSettings(): ?\Pggns\MidocoApi\Api\Order\StructType\BillingPrintSettingDTO
    {
        return $this->MidocoBillingPrintSettings;
    }
    /**
     * Set MidocoBillingPrintSettings value
     * @param \Pggns\MidocoApi\Api\Order\StructType\BillingPrintSettingDTO $midocoBillingPrintSettings
     * @return \Pggns\MidocoApi\Api\Order\StructType\SaveBillingPrintSettingsRequest
     */
    public function setMidocoBillingPrintSettings(?\Pggns\MidocoApi\Api\Order\StructType\BillingPrintSettingDTO $midocoBillingPrintSettings = null): self
    {
        $this->MidocoBillingPrintSettings = $midocoBillingPrintSettings;
        
        return $this;
    }
}
