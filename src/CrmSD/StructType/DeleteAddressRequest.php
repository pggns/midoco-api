<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\CrmSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteAddressRequest StructType
 * @subpackage Structs
 */
class DeleteAddressRequest extends AbstractStructBase
{
    /**
     * The MidocoCrmAddress
     * Meta information extracted from the WSDL
     * - ref: MidocoCrmAddress
     * @var \Pggns\MidocoApi\CrmSD\StructType\MidocoCrmAddress|null
     */
    protected ?\Pggns\MidocoApi\CrmSD\StructType\MidocoCrmAddress $MidocoCrmAddress = null;
    /**
     * Constructor method for DeleteAddressRequest
     * @uses DeleteAddressRequest::setMidocoCrmAddress()
     * @param \Pggns\MidocoApi\CrmSD\StructType\MidocoCrmAddress $midocoCrmAddress
     */
    public function __construct(?\Pggns\MidocoApi\CrmSD\StructType\MidocoCrmAddress $midocoCrmAddress = null)
    {
        $this
            ->setMidocoCrmAddress($midocoCrmAddress);
    }
    /**
     * Get MidocoCrmAddress value
     * @return \Pggns\MidocoApi\CrmSD\StructType\MidocoCrmAddress|null
     */
    public function getMidocoCrmAddress(): ?\Pggns\MidocoApi\CrmSD\StructType\MidocoCrmAddress
    {
        return $this->MidocoCrmAddress;
    }
    /**
     * Set MidocoCrmAddress value
     * @param \Pggns\MidocoApi\CrmSD\StructType\MidocoCrmAddress $midocoCrmAddress
     * @return \Pggns\MidocoApi\CrmSD\StructType\DeleteAddressRequest
     */
    public function setMidocoCrmAddress(?\Pggns\MidocoApi\CrmSD\StructType\MidocoCrmAddress $midocoCrmAddress = null): self
    {
        $this->MidocoCrmAddress = $midocoCrmAddress;
        
        return $this;
    }
}
