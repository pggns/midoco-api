<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveMiscPaymentSettingRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveMiscPaymentSettingRequest extends AbstractStructBase
{
    /**
     * The MidocoMiscPaymentSetting
     * Meta information extracted from the WSDL
     * - ref: MidocoMiscPaymentSetting
     * @var \Pggns\MidocoApi\Documents\StructType\CashPaymentSettingDTO|null
     */
    protected ?\Pggns\MidocoApi\Documents\StructType\CashPaymentSettingDTO $MidocoMiscPaymentSetting = null;
    /**
     * Constructor method for SaveMiscPaymentSettingRequest
     * @uses SaveMiscPaymentSettingRequest::setMidocoMiscPaymentSetting()
     * @param \Pggns\MidocoApi\Documents\StructType\CashPaymentSettingDTO $midocoMiscPaymentSetting
     */
    public function __construct(?\Pggns\MidocoApi\Documents\StructType\CashPaymentSettingDTO $midocoMiscPaymentSetting = null)
    {
        $this
            ->setMidocoMiscPaymentSetting($midocoMiscPaymentSetting);
    }
    /**
     * Get MidocoMiscPaymentSetting value
     * @return \Pggns\MidocoApi\Documents\StructType\CashPaymentSettingDTO|null
     */
    public function getMidocoMiscPaymentSetting(): ?\Pggns\MidocoApi\Documents\StructType\CashPaymentSettingDTO
    {
        return $this->MidocoMiscPaymentSetting;
    }
    /**
     * Set MidocoMiscPaymentSetting value
     * @param \Pggns\MidocoApi\Documents\StructType\CashPaymentSettingDTO $midocoMiscPaymentSetting
     * @return \Pggns\MidocoApi\Documents\StructType\SaveMiscPaymentSettingRequest
     */
    public function setMidocoMiscPaymentSetting(?\Pggns\MidocoApi\Documents\StructType\CashPaymentSettingDTO $midocoMiscPaymentSetting = null): self
    {
        $this->MidocoMiscPaymentSetting = $midocoMiscPaymentSetting;
        
        return $this;
    }
}
