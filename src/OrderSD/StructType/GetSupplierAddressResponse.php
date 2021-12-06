<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\OrderSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSupplierAddressResponse StructType
 * @subpackage Structs
 */
class GetSupplierAddressResponse extends AbstractStructBase
{
    /**
     * The MidocoSupplierAddress
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoSupplierAddress
     * @var \Pggns\MidocoApi\OrderSD\StructType\MidocoSupplierAddress|null
     */
    protected ?\Pggns\MidocoApi\OrderSD\StructType\MidocoSupplierAddress $MidocoSupplierAddress = null;
    /**
     * Constructor method for GetSupplierAddressResponse
     * @uses GetSupplierAddressResponse::setMidocoSupplierAddress()
     * @param \Pggns\MidocoApi\OrderSD\StructType\MidocoSupplierAddress $midocoSupplierAddress
     */
    public function __construct(?\Pggns\MidocoApi\OrderSD\StructType\MidocoSupplierAddress $midocoSupplierAddress = null)
    {
        $this
            ->setMidocoSupplierAddress($midocoSupplierAddress);
    }
    /**
     * Get MidocoSupplierAddress value
     * @return \Pggns\MidocoApi\OrderSD\StructType\MidocoSupplierAddress|null
     */
    public function getMidocoSupplierAddress(): ?\Pggns\MidocoApi\OrderSD\StructType\MidocoSupplierAddress
    {
        return $this->MidocoSupplierAddress;
    }
    /**
     * Set MidocoSupplierAddress value
     * @param \Pggns\MidocoApi\OrderSD\StructType\MidocoSupplierAddress $midocoSupplierAddress
     * @return \Pggns\MidocoApi\OrderSD\StructType\GetSupplierAddressResponse
     */
    public function setMidocoSupplierAddress(?\Pggns\MidocoApi\OrderSD\StructType\MidocoSupplierAddress $midocoSupplierAddress = null): self
    {
        $this->MidocoSupplierAddress = $midocoSupplierAddress;
        
        return $this;
    }
}
