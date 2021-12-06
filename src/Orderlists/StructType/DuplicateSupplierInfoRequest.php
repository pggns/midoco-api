<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DuplicateSupplierInfoRequest StructType
 * @subpackage Structs
 */
class DuplicateSupplierInfoRequest extends AbstractStructBase
{
    /**
     * The MidocoDuplicateSupplierInfo
     * Meta information extracted from the WSDL
     * - ref: MidocoDuplicateSupplierInfo
     * @var \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoDuplicateSupplierInfo|null
     */
    protected ?\Pggns\MidocoApi\Api\Orderlists\StructType\MidocoDuplicateSupplierInfo $MidocoDuplicateSupplierInfo = null;
    /**
     * Constructor method for DuplicateSupplierInfoRequest
     * @uses DuplicateSupplierInfoRequest::setMidocoDuplicateSupplierInfo()
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoDuplicateSupplierInfo $midocoDuplicateSupplierInfo
     */
    public function __construct(?\Pggns\MidocoApi\Api\Orderlists\StructType\MidocoDuplicateSupplierInfo $midocoDuplicateSupplierInfo = null)
    {
        $this
            ->setMidocoDuplicateSupplierInfo($midocoDuplicateSupplierInfo);
    }
    /**
     * Get MidocoDuplicateSupplierInfo value
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoDuplicateSupplierInfo|null
     */
    public function getMidocoDuplicateSupplierInfo(): ?\Pggns\MidocoApi\Api\Orderlists\StructType\MidocoDuplicateSupplierInfo
    {
        return $this->MidocoDuplicateSupplierInfo;
    }
    /**
     * Set MidocoDuplicateSupplierInfo value
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoDuplicateSupplierInfo $midocoDuplicateSupplierInfo
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\DuplicateSupplierInfoRequest
     */
    public function setMidocoDuplicateSupplierInfo(?\Pggns\MidocoApi\Api\Orderlists\StructType\MidocoDuplicateSupplierInfo $midocoDuplicateSupplierInfo = null): self
    {
        $this->MidocoDuplicateSupplierInfo = $midocoDuplicateSupplierInfo;
        
        return $this;
    }
}
