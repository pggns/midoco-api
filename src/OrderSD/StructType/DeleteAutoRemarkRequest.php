<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\OrderSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteAutoRemarkRequest StructType
 * @subpackage Structs
 */
class DeleteAutoRemarkRequest extends AbstractStructBase
{
    /**
     * The MidocoSupplierAutoRemark
     * Meta information extracted from the WSDL
     * - ref: MidocoSupplierAutoRemark
     * @var \Pggns\MidocoApi\OrderSD\StructType\SupplierAutoRemarkDTO|null
     */
    protected ?\Pggns\MidocoApi\OrderSD\StructType\SupplierAutoRemarkDTO $MidocoSupplierAutoRemark = null;
    /**
     * Constructor method for DeleteAutoRemarkRequest
     * @uses DeleteAutoRemarkRequest::setMidocoSupplierAutoRemark()
     * @param \Pggns\MidocoApi\OrderSD\StructType\SupplierAutoRemarkDTO $midocoSupplierAutoRemark
     */
    public function __construct(?\Pggns\MidocoApi\OrderSD\StructType\SupplierAutoRemarkDTO $midocoSupplierAutoRemark = null)
    {
        $this
            ->setMidocoSupplierAutoRemark($midocoSupplierAutoRemark);
    }
    /**
     * Get MidocoSupplierAutoRemark value
     * @return \Pggns\MidocoApi\OrderSD\StructType\SupplierAutoRemarkDTO|null
     */
    public function getMidocoSupplierAutoRemark(): ?\Pggns\MidocoApi\OrderSD\StructType\SupplierAutoRemarkDTO
    {
        return $this->MidocoSupplierAutoRemark;
    }
    /**
     * Set MidocoSupplierAutoRemark value
     * @param \Pggns\MidocoApi\OrderSD\StructType\SupplierAutoRemarkDTO $midocoSupplierAutoRemark
     * @return \Pggns\MidocoApi\OrderSD\StructType\DeleteAutoRemarkRequest
     */
    public function setMidocoSupplierAutoRemark(?\Pggns\MidocoApi\OrderSD\StructType\SupplierAutoRemarkDTO $midocoSupplierAutoRemark = null): self
    {
        $this->MidocoSupplierAutoRemark = $midocoSupplierAutoRemark;
        
        return $this;
    }
}
