<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveSupplierAddressRequest StructType
 * @subpackage Structs
 */
class SaveSupplierAddressRequest extends AbstractStructBase
{
    /**
     * The MidocoSupplierAddress
     * Meta information extracted from the WSDL
     * - ref: MidocoSupplierAddress
     * @var \Pggns\MidocoApi\Orderlists\StructType\MidocoSupplierAddress|null
     */
    protected ?\Pggns\MidocoApi\Orderlists\StructType\MidocoSupplierAddress $MidocoSupplierAddress = null;
    /**
     * Constructor method for SaveSupplierAddressRequest
     * @uses SaveSupplierAddressRequest::setMidocoSupplierAddress()
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoSupplierAddress $midocoSupplierAddress
     */
    public function __construct(?\Pggns\MidocoApi\Orderlists\StructType\MidocoSupplierAddress $midocoSupplierAddress = null)
    {
        $this
            ->setMidocoSupplierAddress($midocoSupplierAddress);
    }
    /**
     * Get MidocoSupplierAddress value
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoSupplierAddress|null
     */
    public function getMidocoSupplierAddress(): ?\Pggns\MidocoApi\Orderlists\StructType\MidocoSupplierAddress
    {
        return $this->MidocoSupplierAddress;
    }
    /**
     * Set MidocoSupplierAddress value
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoSupplierAddress $midocoSupplierAddress
     * @return \Pggns\MidocoApi\Orderlists\StructType\SaveSupplierAddressRequest
     */
    public function setMidocoSupplierAddress(?\Pggns\MidocoApi\Orderlists\StructType\MidocoSupplierAddress $midocoSupplierAddress = null): self
    {
        $this->MidocoSupplierAddress = $midocoSupplierAddress;
        
        return $this;
    }
}
