<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\OrderSD\StructType;

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
     * @var \Pggns\MidocoApi\OrderSD\StructType\SupplierFreeStornoDayDTO|null
     */
    protected ?\Pggns\MidocoApi\OrderSD\StructType\SupplierFreeStornoDayDTO $MidocoSupplierFreeStornoDays = null;
    /**
     * Constructor method for SaveSupplierFreeStornoDaysRequest
     * @uses SaveSupplierFreeStornoDaysRequest::setMidocoSupplierFreeStornoDays()
     * @param \Pggns\MidocoApi\OrderSD\StructType\SupplierFreeStornoDayDTO $midocoSupplierFreeStornoDays
     */
    public function __construct(?\Pggns\MidocoApi\OrderSD\StructType\SupplierFreeStornoDayDTO $midocoSupplierFreeStornoDays = null)
    {
        $this
            ->setMidocoSupplierFreeStornoDays($midocoSupplierFreeStornoDays);
    }
    /**
     * Get MidocoSupplierFreeStornoDays value
     * @return \Pggns\MidocoApi\OrderSD\StructType\SupplierFreeStornoDayDTO|null
     */
    public function getMidocoSupplierFreeStornoDays(): ?\Pggns\MidocoApi\OrderSD\StructType\SupplierFreeStornoDayDTO
    {
        return $this->MidocoSupplierFreeStornoDays;
    }
    /**
     * Set MidocoSupplierFreeStornoDays value
     * @param \Pggns\MidocoApi\OrderSD\StructType\SupplierFreeStornoDayDTO $midocoSupplierFreeStornoDays
     * @return \Pggns\MidocoApi\OrderSD\StructType\SaveSupplierFreeStornoDaysRequest
     */
    public function setMidocoSupplierFreeStornoDays(?\Pggns\MidocoApi\OrderSD\StructType\SupplierFreeStornoDayDTO $midocoSupplierFreeStornoDays = null): self
    {
        $this->MidocoSupplierFreeStornoDays = $midocoSupplierFreeStornoDays;
        
        return $this;
    }
}
