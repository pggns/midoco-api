<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\CrmSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveCountryResponse StructType
 * @subpackage Structs
 */
class SaveCountryResponse extends AbstractStructBase
{
    /**
     * The MidocoCountry
     * Meta information extracted from the WSDL
     * - ref: MidocoCountry
     * @var \Pggns\MidocoApi\CrmSD\StructType\CountryDTO|null
     */
    protected ?\Pggns\MidocoApi\CrmSD\StructType\CountryDTO $MidocoCountry = null;
    /**
     * Constructor method for SaveCountryResponse
     * @uses SaveCountryResponse::setMidocoCountry()
     * @param \Pggns\MidocoApi\CrmSD\StructType\CountryDTO $midocoCountry
     */
    public function __construct(?\Pggns\MidocoApi\CrmSD\StructType\CountryDTO $midocoCountry = null)
    {
        $this
            ->setMidocoCountry($midocoCountry);
    }
    /**
     * Get MidocoCountry value
     * @return \Pggns\MidocoApi\CrmSD\StructType\CountryDTO|null
     */
    public function getMidocoCountry(): ?\Pggns\MidocoApi\CrmSD\StructType\CountryDTO
    {
        return $this->MidocoCountry;
    }
    /**
     * Set MidocoCountry value
     * @param \Pggns\MidocoApi\CrmSD\StructType\CountryDTO $midocoCountry
     * @return \Pggns\MidocoApi\CrmSD\StructType\SaveCountryResponse
     */
    public function setMidocoCountry(?\Pggns\MidocoApi\CrmSD\StructType\CountryDTO $midocoCountry = null): self
    {
        $this->MidocoCountry = $midocoCountry;
        
        return $this;
    }
}
