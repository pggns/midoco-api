<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\OrderSD\StructType;

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
     * @var \Pggns\MidocoApi\OrderSD\StructType\CashPaymentSettingDTO|null
     */
    protected ?\Pggns\MidocoApi\OrderSD\StructType\CashPaymentSettingDTO $MidocoMiscPaymentSetting = null;
    /**
     * Constructor method for SaveMiscPaymentSettingRequest
     * @uses SaveMiscPaymentSettingRequest::setMidocoMiscPaymentSetting()
     * @param \Pggns\MidocoApi\OrderSD\StructType\CashPaymentSettingDTO $midocoMiscPaymentSetting
     */
    public function __construct(?\Pggns\MidocoApi\OrderSD\StructType\CashPaymentSettingDTO $midocoMiscPaymentSetting = null)
    {
        $this
            ->setMidocoMiscPaymentSetting($midocoMiscPaymentSetting);
    }
    /**
     * Get MidocoMiscPaymentSetting value
     * @return \Pggns\MidocoApi\OrderSD\StructType\CashPaymentSettingDTO|null
     */
    public function getMidocoMiscPaymentSetting(): ?\Pggns\MidocoApi\OrderSD\StructType\CashPaymentSettingDTO
    {
        return $this->MidocoMiscPaymentSetting;
    }
    /**
     * Set MidocoMiscPaymentSetting value
     * @param \Pggns\MidocoApi\OrderSD\StructType\CashPaymentSettingDTO $midocoMiscPaymentSetting
     * @return \Pggns\MidocoApi\OrderSD\StructType\SaveMiscPaymentSettingRequest
     */
    public function setMidocoMiscPaymentSetting(?\Pggns\MidocoApi\OrderSD\StructType\CashPaymentSettingDTO $midocoMiscPaymentSetting = null): self
    {
        $this->MidocoMiscPaymentSetting = $midocoMiscPaymentSetting;
        
        return $this;
    }
}
