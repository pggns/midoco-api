<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAddressResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: contains the address description
 * @subpackage Structs
 */
class GetAddressResponse extends AbstractStructBase
{
    /**
     * The MidocoCrmAddress
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoCrmAddress
     * @var \Pggns\MidocoApi\Api\Crm\StructType\MidocoCrmAddress|null
     */
    protected ?\Pggns\MidocoApi\Api\Crm\StructType\MidocoCrmAddress $MidocoCrmAddress = null;
    /**
     * Constructor method for GetAddressResponse
     * @uses GetAddressResponse::setMidocoCrmAddress()
     * @param \Pggns\MidocoApi\Api\Crm\StructType\MidocoCrmAddress $midocoCrmAddress
     */
    public function __construct(?\Pggns\MidocoApi\Api\Crm\StructType\MidocoCrmAddress $midocoCrmAddress = null)
    {
        $this
            ->setMidocoCrmAddress($midocoCrmAddress);
    }
    /**
     * Get MidocoCrmAddress value
     * @return \Pggns\MidocoApi\Api\Crm\StructType\MidocoCrmAddress|null
     */
    public function getMidocoCrmAddress(): ?\Pggns\MidocoApi\Api\Crm\StructType\MidocoCrmAddress
    {
        return $this->MidocoCrmAddress;
    }
    /**
     * Set MidocoCrmAddress value
     * @param \Pggns\MidocoApi\Api\Crm\StructType\MidocoCrmAddress $midocoCrmAddress
     * @return \Pggns\MidocoApi\Api\Crm\StructType\GetAddressResponse
     */
    public function setMidocoCrmAddress(?\Pggns\MidocoApi\Api\Crm\StructType\MidocoCrmAddress $midocoCrmAddress = null): self
    {
        $this->MidocoCrmAddress = $midocoCrmAddress;
        
        return $this;
    }
}
