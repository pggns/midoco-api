<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\OrderSD\StructType;

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
     * @var \Pggns\MidocoApi\OrderSD\StructType\MidocoDuplicateSupplierInfo|null
     */
    protected ?\Pggns\MidocoApi\OrderSD\StructType\MidocoDuplicateSupplierInfo $MidocoDuplicateSupplierInfo = null;
    /**
     * Constructor method for DuplicateSupplierInfoRequest
     * @uses DuplicateSupplierInfoRequest::setMidocoDuplicateSupplierInfo()
     * @param \Pggns\MidocoApi\OrderSD\StructType\MidocoDuplicateSupplierInfo $midocoDuplicateSupplierInfo
     */
    public function __construct(?\Pggns\MidocoApi\OrderSD\StructType\MidocoDuplicateSupplierInfo $midocoDuplicateSupplierInfo = null)
    {
        $this
            ->setMidocoDuplicateSupplierInfo($midocoDuplicateSupplierInfo);
    }
    /**
     * Get MidocoDuplicateSupplierInfo value
     * @return \Pggns\MidocoApi\OrderSD\StructType\MidocoDuplicateSupplierInfo|null
     */
    public function getMidocoDuplicateSupplierInfo(): ?\Pggns\MidocoApi\OrderSD\StructType\MidocoDuplicateSupplierInfo
    {
        return $this->MidocoDuplicateSupplierInfo;
    }
    /**
     * Set MidocoDuplicateSupplierInfo value
     * @param \Pggns\MidocoApi\OrderSD\StructType\MidocoDuplicateSupplierInfo $midocoDuplicateSupplierInfo
     * @return \Pggns\MidocoApi\OrderSD\StructType\DuplicateSupplierInfoRequest
     */
    public function setMidocoDuplicateSupplierInfo(?\Pggns\MidocoApi\OrderSD\StructType\MidocoDuplicateSupplierInfo $midocoDuplicateSupplierInfo = null): self
    {
        $this->MidocoDuplicateSupplierInfo = $midocoDuplicateSupplierInfo;
        
        return $this;
    }
}
