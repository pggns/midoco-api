<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\OrderSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchCurrencyRatesRequest StructType
 * @subpackage Structs
 */
class SearchCurrencyRatesRequest extends AbstractStructBase
{
    /**
     * The MidocoCurrencyRate
     * Meta information extracted from the WSDL
     * - ref: MidocoCurrencyRate
     * @var \Pggns\MidocoApi\OrderSD\StructType\MidocoCurrencyRate|null
     */
    protected ?\Pggns\MidocoApi\OrderSD\StructType\MidocoCurrencyRate $MidocoCurrencyRate = null;
    /**
     * Constructor method for SearchCurrencyRatesRequest
     * @uses SearchCurrencyRatesRequest::setMidocoCurrencyRate()
     * @param \Pggns\MidocoApi\OrderSD\StructType\MidocoCurrencyRate $midocoCurrencyRate
     */
    public function __construct(?\Pggns\MidocoApi\OrderSD\StructType\MidocoCurrencyRate $midocoCurrencyRate = null)
    {
        $this
            ->setMidocoCurrencyRate($midocoCurrencyRate);
    }
    /**
     * Get MidocoCurrencyRate value
     * @return \Pggns\MidocoApi\OrderSD\StructType\MidocoCurrencyRate|null
     */
    public function getMidocoCurrencyRate(): ?\Pggns\MidocoApi\OrderSD\StructType\MidocoCurrencyRate
    {
        return $this->MidocoCurrencyRate;
    }
    /**
     * Set MidocoCurrencyRate value
     * @param \Pggns\MidocoApi\OrderSD\StructType\MidocoCurrencyRate $midocoCurrencyRate
     * @return \Pggns\MidocoApi\OrderSD\StructType\SearchCurrencyRatesRequest
     */
    public function setMidocoCurrencyRate(?\Pggns\MidocoApi\OrderSD\StructType\MidocoCurrencyRate $midocoCurrencyRate = null): self
    {
        $this->MidocoCurrencyRate = $midocoCurrencyRate;
        
        return $this;
    }
}
