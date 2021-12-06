<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

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
     * @var \Pggns\MidocoApi\Orderlists\StructType\MidocoSupplierNotice|null
     */
    protected ?\Pggns\MidocoApi\Orderlists\StructType\MidocoSupplierNotice $MidocoSupplierNotice = null;
    /**
     * Constructor method for SaveSupplierNoticeRequest
     * @uses SaveSupplierNoticeRequest::setMidocoSupplierNotice()
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoSupplierNotice $midocoSupplierNotice
     */
    public function __construct(?\Pggns\MidocoApi\Orderlists\StructType\MidocoSupplierNotice $midocoSupplierNotice = null)
    {
        $this
            ->setMidocoSupplierNotice($midocoSupplierNotice);
    }
    /**
     * Get MidocoSupplierNotice value
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoSupplierNotice|null
     */
    public function getMidocoSupplierNotice(): ?\Pggns\MidocoApi\Orderlists\StructType\MidocoSupplierNotice
    {
        return $this->MidocoSupplierNotice;
    }
    /**
     * Set MidocoSupplierNotice value
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoSupplierNotice $midocoSupplierNotice
     * @return \Pggns\MidocoApi\Orderlists\StructType\SaveSupplierNoticeRequest
     */
    public function setMidocoSupplierNotice(?\Pggns\MidocoApi\Orderlists\StructType\MidocoSupplierNotice $midocoSupplierNotice = null): self
    {
        $this->MidocoSupplierNotice = $midocoSupplierNotice;
        
        return $this;
    }
}
