<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSupplierFreeStornoDayssRequest StructType
 * @subpackage Structs
 */
class GetSupplierFreeStornoDayssRequest extends AbstractStructBase
{
    /**
     * The MidocoSupplierFreeStornoDays
     * Meta information extracted from the WSDL
     * - ref: MidocoSupplierFreeStornoDays
     * @var \Pggns\MidocoApi\Orderlists\StructType\SupplierFreeStornoDayDTO|null
     */
    protected ?\Pggns\MidocoApi\Orderlists\StructType\SupplierFreeStornoDayDTO $MidocoSupplierFreeStornoDays = null;
    /**
     * Constructor method for GetSupplierFreeStornoDayssRequest
     * @uses GetSupplierFreeStornoDayssRequest::setMidocoSupplierFreeStornoDays()
     * @param \Pggns\MidocoApi\Orderlists\StructType\SupplierFreeStornoDayDTO $midocoSupplierFreeStornoDays
     */
    public function __construct(?\Pggns\MidocoApi\Orderlists\StructType\SupplierFreeStornoDayDTO $midocoSupplierFreeStornoDays = null)
    {
        $this
            ->setMidocoSupplierFreeStornoDays($midocoSupplierFreeStornoDays);
    }
    /**
     * Get MidocoSupplierFreeStornoDays value
     * @return \Pggns\MidocoApi\Orderlists\StructType\SupplierFreeStornoDayDTO|null
     */
    public function getMidocoSupplierFreeStornoDays(): ?\Pggns\MidocoApi\Orderlists\StructType\SupplierFreeStornoDayDTO
    {
        return $this->MidocoSupplierFreeStornoDays;
    }
    /**
     * Set MidocoSupplierFreeStornoDays value
     * @param \Pggns\MidocoApi\Orderlists\StructType\SupplierFreeStornoDayDTO $midocoSupplierFreeStornoDays
     * @return \Pggns\MidocoApi\Orderlists\StructType\GetSupplierFreeStornoDayssRequest
     */
    public function setMidocoSupplierFreeStornoDays(?\Pggns\MidocoApi\Orderlists\StructType\SupplierFreeStornoDayDTO $midocoSupplierFreeStornoDays = null): self
    {
        $this->MidocoSupplierFreeStornoDays = $midocoSupplierFreeStornoDays;
        
        return $this;
    }
}
