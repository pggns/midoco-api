<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteVoucherTypeRequest StructType
 * @subpackage Structs
 */
class DeleteVoucherTypeRequest extends AbstractStructBase
{
    /**
     * The MidocoVoucherType
     * Meta information extracted from the WSDL
     * - ref: MidocoVoucherType
     * @var \Pggns\MidocoApi\Api\Orderlists\StructType\VoucherTypeDTO|null
     */
    protected ?\Pggns\MidocoApi\Api\Orderlists\StructType\VoucherTypeDTO $MidocoVoucherType = null;
    /**
     * Constructor method for DeleteVoucherTypeRequest
     * @uses DeleteVoucherTypeRequest::setMidocoVoucherType()
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\VoucherTypeDTO $midocoVoucherType
     */
    public function __construct(?\Pggns\MidocoApi\Api\Orderlists\StructType\VoucherTypeDTO $midocoVoucherType = null)
    {
        $this
            ->setMidocoVoucherType($midocoVoucherType);
    }
    /**
     * Get MidocoVoucherType value
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\VoucherTypeDTO|null
     */
    public function getMidocoVoucherType(): ?\Pggns\MidocoApi\Api\Orderlists\StructType\VoucherTypeDTO
    {
        return $this->MidocoVoucherType;
    }
    /**
     * Set MidocoVoucherType value
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\VoucherTypeDTO $midocoVoucherType
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\DeleteVoucherTypeRequest
     */
    public function setMidocoVoucherType(?\Pggns\MidocoApi\Api\Orderlists\StructType\VoucherTypeDTO $midocoVoucherType = null): self
    {
        $this->MidocoVoucherType = $midocoVoucherType;
        
        return $this;
    }
}
