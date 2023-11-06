<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCityFromZipCodeResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetCityFromZipCodeResponse extends AbstractStructBase
{
    /**
     * The MidocoCity
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoCity
     * @var \Pggns\MidocoApi\Orderlists\StructType\CityDTO|null
     */
    protected ?\Pggns\MidocoApi\Orderlists\StructType\CityDTO $MidocoCity = null;
    /**
     * Constructor method for GetCityFromZipCodeResponse
     * @uses GetCityFromZipCodeResponse::setMidocoCity()
     * @param \Pggns\MidocoApi\Orderlists\StructType\CityDTO $midocoCity
     */
    public function __construct(?\Pggns\MidocoApi\Orderlists\StructType\CityDTO $midocoCity = null)
    {
        $this
            ->setMidocoCity($midocoCity);
    }
    /**
     * Get MidocoCity value
     * @return \Pggns\MidocoApi\Orderlists\StructType\CityDTO|null
     */
    public function getMidocoCity(): ?\Pggns\MidocoApi\Orderlists\StructType\CityDTO
    {
        return $this->MidocoCity;
    }
    /**
     * Set MidocoCity value
     * @param \Pggns\MidocoApi\Orderlists\StructType\CityDTO $midocoCity
     * @return \Pggns\MidocoApi\Orderlists\StructType\GetCityFromZipCodeResponse
     */
    public function setMidocoCity(?\Pggns\MidocoApi\Orderlists\StructType\CityDTO $midocoCity = null): self
    {
        $this->MidocoCity = $midocoCity;
        
        return $this;
    }
}
