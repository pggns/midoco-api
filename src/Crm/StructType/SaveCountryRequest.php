<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveCountryRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveCountryRequest extends AbstractStructBase
{
    /**
     * The MidocoCountry
     * Meta information extracted from the WSDL
     * - ref: MidocoCountry
     * @var \Pggns\MidocoApi\Crm\StructType\CountryDTO|null
     */
    protected ?\Pggns\MidocoApi\Crm\StructType\CountryDTO $MidocoCountry = null;
    /**
     * Constructor method for SaveCountryRequest
     * @uses SaveCountryRequest::setMidocoCountry()
     * @param \Pggns\MidocoApi\Crm\StructType\CountryDTO $midocoCountry
     */
    public function __construct(?\Pggns\MidocoApi\Crm\StructType\CountryDTO $midocoCountry = null)
    {
        $this
            ->setMidocoCountry($midocoCountry);
    }
    /**
     * Get MidocoCountry value
     * @return \Pggns\MidocoApi\Crm\StructType\CountryDTO|null
     */
    public function getMidocoCountry(): ?\Pggns\MidocoApi\Crm\StructType\CountryDTO
    {
        return $this->MidocoCountry;
    }
    /**
     * Set MidocoCountry value
     * @param \Pggns\MidocoApi\Crm\StructType\CountryDTO $midocoCountry
     * @return \Pggns\MidocoApi\Crm\StructType\SaveCountryRequest
     */
    public function setMidocoCountry(?\Pggns\MidocoApi\Crm\StructType\CountryDTO $midocoCountry = null): self
    {
        $this->MidocoCountry = $midocoCountry;
        
        return $this;
    }
}
