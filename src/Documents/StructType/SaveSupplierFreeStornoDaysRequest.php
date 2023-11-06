<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveSupplierFreeStornoDaysRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveSupplierFreeStornoDaysRequest extends AbstractStructBase
{
    /**
     * The MidocoSupplierFreeStornoDays
     * Meta information extracted from the WSDL
     * - ref: MidocoSupplierFreeStornoDays
     * @var \Pggns\MidocoApi\Documents\StructType\SupplierFreeStornoDayDTO|null
     */
    protected ?\Pggns\MidocoApi\Documents\StructType\SupplierFreeStornoDayDTO $MidocoSupplierFreeStornoDays = null;
    /**
     * Constructor method for SaveSupplierFreeStornoDaysRequest
     * @uses SaveSupplierFreeStornoDaysRequest::setMidocoSupplierFreeStornoDays()
     * @param \Pggns\MidocoApi\Documents\StructType\SupplierFreeStornoDayDTO $midocoSupplierFreeStornoDays
     */
    public function __construct(?\Pggns\MidocoApi\Documents\StructType\SupplierFreeStornoDayDTO $midocoSupplierFreeStornoDays = null)
    {
        $this
            ->setMidocoSupplierFreeStornoDays($midocoSupplierFreeStornoDays);
    }
    /**
     * Get MidocoSupplierFreeStornoDays value
     * @return \Pggns\MidocoApi\Documents\StructType\SupplierFreeStornoDayDTO|null
     */
    public function getMidocoSupplierFreeStornoDays(): ?\Pggns\MidocoApi\Documents\StructType\SupplierFreeStornoDayDTO
    {
        return $this->MidocoSupplierFreeStornoDays;
    }
    /**
     * Set MidocoSupplierFreeStornoDays value
     * @param \Pggns\MidocoApi\Documents\StructType\SupplierFreeStornoDayDTO $midocoSupplierFreeStornoDays
     * @return \Pggns\MidocoApi\Documents\StructType\SaveSupplierFreeStornoDaysRequest
     */
    public function setMidocoSupplierFreeStornoDays(?\Pggns\MidocoApi\Documents\StructType\SupplierFreeStornoDayDTO $midocoSupplierFreeStornoDays = null): self
    {
        $this->MidocoSupplierFreeStornoDays = $midocoSupplierFreeStornoDays;
        
        return $this;
    }
}
