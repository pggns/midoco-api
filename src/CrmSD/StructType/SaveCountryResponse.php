<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\CrmSD\StructType;

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
     * @var \Pggns\MidocoApi\Api\CrmSD\StructType\CountryDTO|null
     */
    protected ?\Pggns\MidocoApi\Api\CrmSD\StructType\CountryDTO $MidocoCountry = null;
    /**
     * Constructor method for SaveCountryResponse
     * @uses SaveCountryResponse::setMidocoCountry()
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\CountryDTO $midocoCountry
     */
    public function __construct(?\Pggns\MidocoApi\Api\CrmSD\StructType\CountryDTO $midocoCountry = null)
    {
        $this
            ->setMidocoCountry($midocoCountry);
    }
    /**
     * Get MidocoCountry value
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\CountryDTO|null
     */
    public function getMidocoCountry(): ?\Pggns\MidocoApi\Api\CrmSD\StructType\CountryDTO
    {
        return $this->MidocoCountry;
    }
    /**
     * Set MidocoCountry value
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\CountryDTO $midocoCountry
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\SaveCountryResponse
     */
    public function setMidocoCountry(?\Pggns\MidocoApi\Api\CrmSD\StructType\CountryDTO $midocoCountry = null): self
    {
        $this->MidocoCountry = $midocoCountry;
        
        return $this;
    }
}
