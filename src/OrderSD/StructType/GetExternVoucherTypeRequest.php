<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\OrderSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetExternVoucherTypeRequest StructType
 * @subpackage Structs
 */
class GetExternVoucherTypeRequest extends AbstractStructBase
{
    /**
     * The MidocoExternVoucherType
     * Meta information extracted from the WSDL
     * - ref: MidocoExternVoucherType
     * @var \Pggns\MidocoApi\OrderSD\StructType\ExternVoucherTypeDTO|null
     */
    protected ?\Pggns\MidocoApi\OrderSD\StructType\ExternVoucherTypeDTO $MidocoExternVoucherType = null;
    /**
     * Constructor method for GetExternVoucherTypeRequest
     * @uses GetExternVoucherTypeRequest::setMidocoExternVoucherType()
     * @param \Pggns\MidocoApi\OrderSD\StructType\ExternVoucherTypeDTO $midocoExternVoucherType
     */
    public function __construct(?\Pggns\MidocoApi\OrderSD\StructType\ExternVoucherTypeDTO $midocoExternVoucherType = null)
    {
        $this
            ->setMidocoExternVoucherType($midocoExternVoucherType);
    }
    /**
     * Get MidocoExternVoucherType value
     * @return \Pggns\MidocoApi\OrderSD\StructType\ExternVoucherTypeDTO|null
     */
    public function getMidocoExternVoucherType(): ?\Pggns\MidocoApi\OrderSD\StructType\ExternVoucherTypeDTO
    {
        return $this->MidocoExternVoucherType;
    }
    /**
     * Set MidocoExternVoucherType value
     * @param \Pggns\MidocoApi\OrderSD\StructType\ExternVoucherTypeDTO $midocoExternVoucherType
     * @return \Pggns\MidocoApi\OrderSD\StructType\GetExternVoucherTypeRequest
     */
    public function setMidocoExternVoucherType(?\Pggns\MidocoApi\OrderSD\StructType\ExternVoucherTypeDTO $midocoExternVoucherType = null): self
    {
        $this->MidocoExternVoucherType = $midocoExternVoucherType;
        
        return $this;
    }
}
