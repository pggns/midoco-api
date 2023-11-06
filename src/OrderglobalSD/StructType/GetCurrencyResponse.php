<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\OrderglobalSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCurrencyResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetCurrencyResponse extends AbstractStructBase
{
    /**
     * The MidocoCurrency
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: MidocoCurrency
     * @var \Pggns\MidocoApi\OrderglobalSD\StructType\CurrencyDTO|null
     */
    protected ?\Pggns\MidocoApi\OrderglobalSD\StructType\CurrencyDTO $MidocoCurrency = null;
    /**
     * Constructor method for GetCurrencyResponse
     * @uses GetCurrencyResponse::setMidocoCurrency()
     * @param \Pggns\MidocoApi\OrderglobalSD\StructType\CurrencyDTO $midocoCurrency
     */
    public function __construct(?\Pggns\MidocoApi\OrderglobalSD\StructType\CurrencyDTO $midocoCurrency = null)
    {
        $this
            ->setMidocoCurrency($midocoCurrency);
    }
    /**
     * Get MidocoCurrency value
     * @return \Pggns\MidocoApi\OrderglobalSD\StructType\CurrencyDTO|null
     */
    public function getMidocoCurrency(): ?\Pggns\MidocoApi\OrderglobalSD\StructType\CurrencyDTO
    {
        return $this->MidocoCurrency;
    }
    /**
     * Set MidocoCurrency value
     * @param \Pggns\MidocoApi\OrderglobalSD\StructType\CurrencyDTO $midocoCurrency
     * @return \Pggns\MidocoApi\OrderglobalSD\StructType\GetCurrencyResponse
     */
    public function setMidocoCurrency(?\Pggns\MidocoApi\OrderglobalSD\StructType\CurrencyDTO $midocoCurrency = null): self
    {
        $this->MidocoCurrency = $midocoCurrency;
        
        return $this;
    }
}
