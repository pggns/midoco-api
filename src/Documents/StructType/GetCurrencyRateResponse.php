<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCurrencyRateResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetCurrencyRateResponse extends AbstractStructBase
{
    /**
     * The MidocoCurrencyRate
     * Meta information extracted from the WSDL
     * - ref: MidocoCurrencyRate
     * @var \Pggns\MidocoApi\Documents\StructType\MidocoCurrencyRate|null
     */
    protected ?\Pggns\MidocoApi\Documents\StructType\MidocoCurrencyRate $MidocoCurrencyRate = null;
    /**
     * Constructor method for GetCurrencyRateResponse
     * @uses GetCurrencyRateResponse::setMidocoCurrencyRate()
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoCurrencyRate $midocoCurrencyRate
     */
    public function __construct(?\Pggns\MidocoApi\Documents\StructType\MidocoCurrencyRate $midocoCurrencyRate = null)
    {
        $this
            ->setMidocoCurrencyRate($midocoCurrencyRate);
    }
    /**
     * Get MidocoCurrencyRate value
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoCurrencyRate|null
     */
    public function getMidocoCurrencyRate(): ?\Pggns\MidocoApi\Documents\StructType\MidocoCurrencyRate
    {
        return $this->MidocoCurrencyRate;
    }
    /**
     * Set MidocoCurrencyRate value
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoCurrencyRate $midocoCurrencyRate
     * @return \Pggns\MidocoApi\Documents\StructType\GetCurrencyRateResponse
     */
    public function setMidocoCurrencyRate(?\Pggns\MidocoApi\Documents\StructType\MidocoCurrencyRate $midocoCurrencyRate = null): self
    {
        $this->MidocoCurrencyRate = $midocoCurrencyRate;
        
        return $this;
    }
}
