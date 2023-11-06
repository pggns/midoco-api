<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteSupplierNoticeRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeleteSupplierNoticeRequest extends AbstractStructBase
{
    /**
     * The MidocoSupplierNotice
     * Meta information extracted from the WSDL
     * - ref: MidocoSupplierNotice
     * @var \Pggns\MidocoApi\Documents\StructType\MidocoSupplierNotice|null
     */
    protected ?\Pggns\MidocoApi\Documents\StructType\MidocoSupplierNotice $MidocoSupplierNotice = null;
    /**
     * Constructor method for DeleteSupplierNoticeRequest
     * @uses DeleteSupplierNoticeRequest::setMidocoSupplierNotice()
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoSupplierNotice $midocoSupplierNotice
     */
    public function __construct(?\Pggns\MidocoApi\Documents\StructType\MidocoSupplierNotice $midocoSupplierNotice = null)
    {
        $this
            ->setMidocoSupplierNotice($midocoSupplierNotice);
    }
    /**
     * Get MidocoSupplierNotice value
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoSupplierNotice|null
     */
    public function getMidocoSupplierNotice(): ?\Pggns\MidocoApi\Documents\StructType\MidocoSupplierNotice
    {
        return $this->MidocoSupplierNotice;
    }
    /**
     * Set MidocoSupplierNotice value
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoSupplierNotice $midocoSupplierNotice
     * @return \Pggns\MidocoApi\Documents\StructType\DeleteSupplierNoticeRequest
     */
    public function setMidocoSupplierNotice(?\Pggns\MidocoApi\Documents\StructType\MidocoSupplierNotice $midocoSupplierNotice = null): self
    {
        $this->MidocoSupplierNotice = $midocoSupplierNotice;
        
        return $this;
    }
}
