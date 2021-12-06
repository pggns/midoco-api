<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveAutoRemarkRequest StructType
 * @subpackage Structs
 */
class SaveAutoRemarkRequest extends AbstractStructBase
{
    /**
     * The MidocoSupplierAutoRemark
     * Meta information extracted from the WSDL
     * - ref: MidocoSupplierAutoRemark
     * @var \Pggns\MidocoApi\Documents\StructType\SupplierAutoRemarkDTO|null
     */
    protected ?\Pggns\MidocoApi\Documents\StructType\SupplierAutoRemarkDTO $MidocoSupplierAutoRemark = null;
    /**
     * Constructor method for SaveAutoRemarkRequest
     * @uses SaveAutoRemarkRequest::setMidocoSupplierAutoRemark()
     * @param \Pggns\MidocoApi\Documents\StructType\SupplierAutoRemarkDTO $midocoSupplierAutoRemark
     */
    public function __construct(?\Pggns\MidocoApi\Documents\StructType\SupplierAutoRemarkDTO $midocoSupplierAutoRemark = null)
    {
        $this
            ->setMidocoSupplierAutoRemark($midocoSupplierAutoRemark);
    }
    /**
     * Get MidocoSupplierAutoRemark value
     * @return \Pggns\MidocoApi\Documents\StructType\SupplierAutoRemarkDTO|null
     */
    public function getMidocoSupplierAutoRemark(): ?\Pggns\MidocoApi\Documents\StructType\SupplierAutoRemarkDTO
    {
        return $this->MidocoSupplierAutoRemark;
    }
    /**
     * Set MidocoSupplierAutoRemark value
     * @param \Pggns\MidocoApi\Documents\StructType\SupplierAutoRemarkDTO $midocoSupplierAutoRemark
     * @return \Pggns\MidocoApi\Documents\StructType\SaveAutoRemarkRequest
     */
    public function setMidocoSupplierAutoRemark(?\Pggns\MidocoApi\Documents\StructType\SupplierAutoRemarkDTO $midocoSupplierAutoRemark = null): self
    {
        $this->MidocoSupplierAutoRemark = $midocoSupplierAutoRemark;
        
        return $this;
    }
}
