<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\OrderglobalSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCurrencyResponse StructType
 * @subpackage Structs
 */
class GetCurrencyResponse extends AbstractStructBase
{
    /**
     * The MidocoCurrency
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: MidocoCurrency
     * @var \Pggns\MidocoApi\Api\OrderglobalSD\StructType\CurrencyDTO|null
     */
    protected ?\Pggns\MidocoApi\Api\OrderglobalSD\StructType\CurrencyDTO $MidocoCurrency = null;
    /**
     * Constructor method for GetCurrencyResponse
     * @uses GetCurrencyResponse::setMidocoCurrency()
     * @param \Pggns\MidocoApi\Api\OrderglobalSD\StructType\CurrencyDTO $midocoCurrency
     */
    public function __construct(?\Pggns\MidocoApi\Api\OrderglobalSD\StructType\CurrencyDTO $midocoCurrency = null)
    {
        $this
            ->setMidocoCurrency($midocoCurrency);
    }
    /**
     * Get MidocoCurrency value
     * @return \Pggns\MidocoApi\Api\OrderglobalSD\StructType\CurrencyDTO|null
     */
    public function getMidocoCurrency(): ?\Pggns\MidocoApi\Api\OrderglobalSD\StructType\CurrencyDTO
    {
        return $this->MidocoCurrency;
    }
    /**
     * Set MidocoCurrency value
     * @param \Pggns\MidocoApi\Api\OrderglobalSD\StructType\CurrencyDTO $midocoCurrency
     * @return \Pggns\MidocoApi\Api\OrderglobalSD\StructType\GetCurrencyResponse
     */
    public function setMidocoCurrency(?\Pggns\MidocoApi\Api\OrderglobalSD\StructType\CurrencyDTO $midocoCurrency = null): self
    {
        $this->MidocoCurrency = $midocoCurrency;
        
        return $this;
    }
}
