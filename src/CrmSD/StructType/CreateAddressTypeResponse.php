<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\CrmSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateAddressTypeResponse StructType
 * @subpackage Structs
 */
class CreateAddressTypeResponse extends AbstractStructBase
{
    /**
     * The MidocoAddressType
     * Meta information extracted from the WSDL
     * - ref: MidocoAddressType
     * @var \Pggns\MidocoApi\Api\CrmSD\StructType\AddressTypeDTO|null
     */
    protected ?\Pggns\MidocoApi\Api\CrmSD\StructType\AddressTypeDTO $MidocoAddressType = null;
    /**
     * Constructor method for CreateAddressTypeResponse
     * @uses CreateAddressTypeResponse::setMidocoAddressType()
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\AddressTypeDTO $midocoAddressType
     */
    public function __construct(?\Pggns\MidocoApi\Api\CrmSD\StructType\AddressTypeDTO $midocoAddressType = null)
    {
        $this
            ->setMidocoAddressType($midocoAddressType);
    }
    /**
     * Get MidocoAddressType value
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\AddressTypeDTO|null
     */
    public function getMidocoAddressType(): ?\Pggns\MidocoApi\Api\CrmSD\StructType\AddressTypeDTO
    {
        return $this->MidocoAddressType;
    }
    /**
     * Set MidocoAddressType value
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\AddressTypeDTO $midocoAddressType
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\CreateAddressTypeResponse
     */
    public function setMidocoAddressType(?\Pggns\MidocoApi\Api\CrmSD\StructType\AddressTypeDTO $midocoAddressType = null): self
    {
        $this->MidocoAddressType = $midocoAddressType;
        
        return $this;
    }
}
