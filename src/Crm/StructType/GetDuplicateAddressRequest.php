<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetDuplicateAddressRequest StructType
 * @subpackage Structs
 */
class GetDuplicateAddressRequest extends AbstractStructBase
{
    /**
     * The MidocoCrmAddress
     * Meta information extracted from the WSDL
     * - ref: MidocoCrmAddress
     * @var \Pggns\MidocoApi\Api\Crm\StructType\MidocoCrmAddress|null
     */
    protected ?\Pggns\MidocoApi\Api\Crm\StructType\MidocoCrmAddress $MidocoCrmAddress = null;
    /**
     * Constructor method for GetDuplicateAddressRequest
     * @uses GetDuplicateAddressRequest::setMidocoCrmAddress()
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
     * @return \Pggns\MidocoApi\Api\Crm\StructType\GetDuplicateAddressRequest
     */
    public function setMidocoCrmAddress(?\Pggns\MidocoApi\Api\Crm\StructType\MidocoCrmAddress $midocoCrmAddress = null): self
    {
        $this->MidocoCrmAddress = $midocoCrmAddress;
        
        return $this;
    }
}
