<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteExternVoucherTypeRequest StructType
 * @subpackage Structs
 */
class DeleteExternVoucherTypeRequest extends AbstractStructBase
{
    /**
     * The MidocoExternVoucherType
     * Meta information extracted from the WSDL
     * - ref: MidocoExternVoucherType
     * @var \Pggns\MidocoApi\Orderlists\StructType\ExternVoucherTypeDTO|null
     */
    protected ?\Pggns\MidocoApi\Orderlists\StructType\ExternVoucherTypeDTO $MidocoExternVoucherType = null;
    /**
     * Constructor method for DeleteExternVoucherTypeRequest
     * @uses DeleteExternVoucherTypeRequest::setMidocoExternVoucherType()
     * @param \Pggns\MidocoApi\Orderlists\StructType\ExternVoucherTypeDTO $midocoExternVoucherType
     */
    public function __construct(?\Pggns\MidocoApi\Orderlists\StructType\ExternVoucherTypeDTO $midocoExternVoucherType = null)
    {
        $this
            ->setMidocoExternVoucherType($midocoExternVoucherType);
    }
    /**
     * Get MidocoExternVoucherType value
     * @return \Pggns\MidocoApi\Orderlists\StructType\ExternVoucherTypeDTO|null
     */
    public function getMidocoExternVoucherType(): ?\Pggns\MidocoApi\Orderlists\StructType\ExternVoucherTypeDTO
    {
        return $this->MidocoExternVoucherType;
    }
    /**
     * Set MidocoExternVoucherType value
     * @param \Pggns\MidocoApi\Orderlists\StructType\ExternVoucherTypeDTO $midocoExternVoucherType
     * @return \Pggns\MidocoApi\Orderlists\StructType\DeleteExternVoucherTypeRequest
     */
    public function setMidocoExternVoucherType(?\Pggns\MidocoApi\Orderlists\StructType\ExternVoucherTypeDTO $midocoExternVoucherType = null): self
    {
        $this->MidocoExternVoucherType = $midocoExternVoucherType;
        
        return $this;
    }
}
