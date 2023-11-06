<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchCurrencyRatesRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SearchCurrencyRatesRequest extends AbstractStructBase
{
    /**
     * The MidocoCurrencyRate
     * Meta information extracted from the WSDL
     * - ref: MidocoCurrencyRate
     * @var \Pggns\MidocoApi\Bank\StructType\MidocoCurrencyRate|null
     */
    protected ?\Pggns\MidocoApi\Bank\StructType\MidocoCurrencyRate $MidocoCurrencyRate = null;
    /**
     * Constructor method for SearchCurrencyRatesRequest
     * @uses SearchCurrencyRatesRequest::setMidocoCurrencyRate()
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoCurrencyRate $midocoCurrencyRate
     */
    public function __construct(?\Pggns\MidocoApi\Bank\StructType\MidocoCurrencyRate $midocoCurrencyRate = null)
    {
        $this
            ->setMidocoCurrencyRate($midocoCurrencyRate);
    }
    /**
     * Get MidocoCurrencyRate value
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoCurrencyRate|null
     */
    public function getMidocoCurrencyRate(): ?\Pggns\MidocoApi\Bank\StructType\MidocoCurrencyRate
    {
        return $this->MidocoCurrencyRate;
    }
    /**
     * Set MidocoCurrencyRate value
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoCurrencyRate $midocoCurrencyRate
     * @return \Pggns\MidocoApi\Bank\StructType\SearchCurrencyRatesRequest
     */
    public function setMidocoCurrencyRate(?\Pggns\MidocoApi\Bank\StructType\MidocoCurrencyRate $midocoCurrencyRate = null): self
    {
        $this->MidocoCurrencyRate = $midocoCurrencyRate;
        
        return $this;
    }
}
