<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\CrmSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCityFromZipCodeResponse StructType
 * @subpackage Structs
 */
class GetCityFromZipCodeResponse extends AbstractStructBase
{
    /**
     * The MidocoCity
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoCity
     * @var \Pggns\MidocoApi\CrmSD\StructType\CityDTO|null
     */
    protected ?\Pggns\MidocoApi\CrmSD\StructType\CityDTO $MidocoCity = null;
    /**
     * Constructor method for GetCityFromZipCodeResponse
     * @uses GetCityFromZipCodeResponse::setMidocoCity()
     * @param \Pggns\MidocoApi\CrmSD\StructType\CityDTO $midocoCity
     */
    public function __construct(?\Pggns\MidocoApi\CrmSD\StructType\CityDTO $midocoCity = null)
    {
        $this
            ->setMidocoCity($midocoCity);
    }
    /**
     * Get MidocoCity value
     * @return \Pggns\MidocoApi\CrmSD\StructType\CityDTO|null
     */
    public function getMidocoCity(): ?\Pggns\MidocoApi\CrmSD\StructType\CityDTO
    {
        return $this->MidocoCity;
    }
    /**
     * Set MidocoCity value
     * @param \Pggns\MidocoApi\CrmSD\StructType\CityDTO $midocoCity
     * @return \Pggns\MidocoApi\CrmSD\StructType\GetCityFromZipCodeResponse
     */
    public function setMidocoCity(?\Pggns\MidocoApi\CrmSD\StructType\CityDTO $midocoCity = null): self
    {
        $this->MidocoCity = $midocoCity;
        
        return $this;
    }
}
