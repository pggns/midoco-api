<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DuplicateSupplierInfoRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DuplicateSupplierInfoRequest extends AbstractStructBase
{
    /**
     * The MidocoDuplicateSupplierInfo
     * Meta information extracted from the WSDL
     * - ref: MidocoDuplicateSupplierInfo
     * @var \Pggns\MidocoApi\Orderlists\StructType\MidocoDuplicateSupplierInfo|null
     */
    protected ?\Pggns\MidocoApi\Orderlists\StructType\MidocoDuplicateSupplierInfo $MidocoDuplicateSupplierInfo = null;
    /**
     * Constructor method for DuplicateSupplierInfoRequest
     * @uses DuplicateSupplierInfoRequest::setMidocoDuplicateSupplierInfo()
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoDuplicateSupplierInfo $midocoDuplicateSupplierInfo
     */
    public function __construct(?\Pggns\MidocoApi\Orderlists\StructType\MidocoDuplicateSupplierInfo $midocoDuplicateSupplierInfo = null)
    {
        $this
            ->setMidocoDuplicateSupplierInfo($midocoDuplicateSupplierInfo);
    }
    /**
     * Get MidocoDuplicateSupplierInfo value
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoDuplicateSupplierInfo|null
     */
    public function getMidocoDuplicateSupplierInfo(): ?\Pggns\MidocoApi\Orderlists\StructType\MidocoDuplicateSupplierInfo
    {
        return $this->MidocoDuplicateSupplierInfo;
    }
    /**
     * Set MidocoDuplicateSupplierInfo value
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoDuplicateSupplierInfo $midocoDuplicateSupplierInfo
     * @return \Pggns\MidocoApi\Orderlists\StructType\DuplicateSupplierInfoRequest
     */
    public function setMidocoDuplicateSupplierInfo(?\Pggns\MidocoApi\Orderlists\StructType\MidocoDuplicateSupplierInfo $midocoDuplicateSupplierInfo = null): self
    {
        $this->MidocoDuplicateSupplierInfo = $midocoDuplicateSupplierInfo;
        
        return $this;
    }
}
