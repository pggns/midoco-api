<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\OrderSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveSupplierNoticeRequest StructType
 * @subpackage Structs
 */
class SaveSupplierNoticeRequest extends AbstractStructBase
{
    /**
     * The MidocoSupplierNotice
     * Meta information extracted from the WSDL
     * - ref: MidocoSupplierNotice
     * @var \Pggns\MidocoApi\OrderSD\StructType\MidocoSupplierNotice|null
     */
    protected ?\Pggns\MidocoApi\OrderSD\StructType\MidocoSupplierNotice $MidocoSupplierNotice = null;
    /**
     * Constructor method for SaveSupplierNoticeRequest
     * @uses SaveSupplierNoticeRequest::setMidocoSupplierNotice()
     * @param \Pggns\MidocoApi\OrderSD\StructType\MidocoSupplierNotice $midocoSupplierNotice
     */
    public function __construct(?\Pggns\MidocoApi\OrderSD\StructType\MidocoSupplierNotice $midocoSupplierNotice = null)
    {
        $this
            ->setMidocoSupplierNotice($midocoSupplierNotice);
    }
    /**
     * Get MidocoSupplierNotice value
     * @return \Pggns\MidocoApi\OrderSD\StructType\MidocoSupplierNotice|null
     */
    public function getMidocoSupplierNotice(): ?\Pggns\MidocoApi\OrderSD\StructType\MidocoSupplierNotice
    {
        return $this->MidocoSupplierNotice;
    }
    /**
     * Set MidocoSupplierNotice value
     * @param \Pggns\MidocoApi\OrderSD\StructType\MidocoSupplierNotice $midocoSupplierNotice
     * @return \Pggns\MidocoApi\OrderSD\StructType\SaveSupplierNoticeRequest
     */
    public function setMidocoSupplierNotice(?\Pggns\MidocoApi\OrderSD\StructType\MidocoSupplierNotice $midocoSupplierNotice = null): self
    {
        $this->MidocoSupplierNotice = $midocoSupplierNotice;
        
        return $this;
    }
}
