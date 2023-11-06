<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetVatAccountAssignsRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetVatAccountAssignsRequest extends AbstractStructBase
{
    /**
     * The MidocoVatAccountAssign
     * Meta information extracted from the WSDL
     * - ref: MidocoVatAccountAssign
     * @var \Pggns\MidocoApi\Orderlists\StructType\VatAccountAssignDTO|null
     */
    protected ?\Pggns\MidocoApi\Orderlists\StructType\VatAccountAssignDTO $MidocoVatAccountAssign = null;
    /**
     * Constructor method for GetVatAccountAssignsRequest
     * @uses GetVatAccountAssignsRequest::setMidocoVatAccountAssign()
     * @param \Pggns\MidocoApi\Orderlists\StructType\VatAccountAssignDTO $midocoVatAccountAssign
     */
    public function __construct(?\Pggns\MidocoApi\Orderlists\StructType\VatAccountAssignDTO $midocoVatAccountAssign = null)
    {
        $this
            ->setMidocoVatAccountAssign($midocoVatAccountAssign);
    }
    /**
     * Get MidocoVatAccountAssign value
     * @return \Pggns\MidocoApi\Orderlists\StructType\VatAccountAssignDTO|null
     */
    public function getMidocoVatAccountAssign(): ?\Pggns\MidocoApi\Orderlists\StructType\VatAccountAssignDTO
    {
        return $this->MidocoVatAccountAssign;
    }
    /**
     * Set MidocoVatAccountAssign value
     * @param \Pggns\MidocoApi\Orderlists\StructType\VatAccountAssignDTO $midocoVatAccountAssign
     * @return \Pggns\MidocoApi\Orderlists\StructType\GetVatAccountAssignsRequest
     */
    public function setMidocoVatAccountAssign(?\Pggns\MidocoApi\Orderlists\StructType\VatAccountAssignDTO $midocoVatAccountAssign = null): self
    {
        $this->MidocoVatAccountAssign = $midocoVatAccountAssign;
        
        return $this;
    }
}
