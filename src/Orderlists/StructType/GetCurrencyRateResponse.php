<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

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
     * @var \Pggns\MidocoApi\Orderlists\StructType\MidocoCurrencyRate|null
     */
    protected ?\Pggns\MidocoApi\Orderlists\StructType\MidocoCurrencyRate $MidocoCurrencyRate = null;
    /**
     * Constructor method for GetCurrencyRateResponse
     * @uses GetCurrencyRateResponse::setMidocoCurrencyRate()
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoCurrencyRate $midocoCurrencyRate
     */
    public function __construct(?\Pggns\MidocoApi\Orderlists\StructType\MidocoCurrencyRate $midocoCurrencyRate = null)
    {
        $this
            ->setMidocoCurrencyRate($midocoCurrencyRate);
    }
    /**
     * Get MidocoCurrencyRate value
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoCurrencyRate|null
     */
    public function getMidocoCurrencyRate(): ?\Pggns\MidocoApi\Orderlists\StructType\MidocoCurrencyRate
    {
        return $this->MidocoCurrencyRate;
    }
    /**
     * Set MidocoCurrencyRate value
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoCurrencyRate $midocoCurrencyRate
     * @return \Pggns\MidocoApi\Orderlists\StructType\GetCurrencyRateResponse
     */
    public function setMidocoCurrencyRate(?\Pggns\MidocoApi\Orderlists\StructType\MidocoCurrencyRate $midocoCurrencyRate = null): self
    {
        $this->MidocoCurrencyRate = $midocoCurrencyRate;
        
        return $this;
    }
}
