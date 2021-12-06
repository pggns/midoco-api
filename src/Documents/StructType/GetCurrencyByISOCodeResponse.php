<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCurrencyByISOCodeResponse StructType
 * @subpackage Structs
 */
class GetCurrencyByISOCodeResponse extends AbstractStructBase
{
    /**
     * The MidocoCurrency
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: MidocoCurrency
     * @var \Pggns\MidocoApi\Documents\StructType\CurrencyDTO|null
     */
    protected ?\Pggns\MidocoApi\Documents\StructType\CurrencyDTO $MidocoCurrency = null;
    /**
     * Constructor method for GetCurrencyByISOCodeResponse
     * @uses GetCurrencyByISOCodeResponse::setMidocoCurrency()
     * @param \Pggns\MidocoApi\Documents\StructType\CurrencyDTO $midocoCurrency
     */
    public function __construct(?\Pggns\MidocoApi\Documents\StructType\CurrencyDTO $midocoCurrency = null)
    {
        $this
            ->setMidocoCurrency($midocoCurrency);
    }
    /**
     * Get MidocoCurrency value
     * @return \Pggns\MidocoApi\Documents\StructType\CurrencyDTO|null
     */
    public function getMidocoCurrency(): ?\Pggns\MidocoApi\Documents\StructType\CurrencyDTO
    {
        return $this->MidocoCurrency;
    }
    /**
     * Set MidocoCurrency value
     * @param \Pggns\MidocoApi\Documents\StructType\CurrencyDTO $midocoCurrency
     * @return \Pggns\MidocoApi\Documents\StructType\GetCurrencyByISOCodeResponse
     */
    public function setMidocoCurrency(?\Pggns\MidocoApi\Documents\StructType\CurrencyDTO $midocoCurrency = null): self
    {
        $this->MidocoCurrency = $midocoCurrency;
        
        return $this;
    }
}
