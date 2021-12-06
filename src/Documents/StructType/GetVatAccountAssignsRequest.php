<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetVatAccountAssignsRequest StructType
 * @subpackage Structs
 */
class GetVatAccountAssignsRequest extends AbstractStructBase
{
    /**
     * The MidocoVatAccountAssign
     * Meta information extracted from the WSDL
     * - ref: MidocoVatAccountAssign
     * @var \Pggns\MidocoApi\Documents\StructType\VatAccountAssignDTO|null
     */
    protected ?\Pggns\MidocoApi\Documents\StructType\VatAccountAssignDTO $MidocoVatAccountAssign = null;
    /**
     * Constructor method for GetVatAccountAssignsRequest
     * @uses GetVatAccountAssignsRequest::setMidocoVatAccountAssign()
     * @param \Pggns\MidocoApi\Documents\StructType\VatAccountAssignDTO $midocoVatAccountAssign
     */
    public function __construct(?\Pggns\MidocoApi\Documents\StructType\VatAccountAssignDTO $midocoVatAccountAssign = null)
    {
        $this
            ->setMidocoVatAccountAssign($midocoVatAccountAssign);
    }
    /**
     * Get MidocoVatAccountAssign value
     * @return \Pggns\MidocoApi\Documents\StructType\VatAccountAssignDTO|null
     */
    public function getMidocoVatAccountAssign(): ?\Pggns\MidocoApi\Documents\StructType\VatAccountAssignDTO
    {
        return $this->MidocoVatAccountAssign;
    }
    /**
     * Set MidocoVatAccountAssign value
     * @param \Pggns\MidocoApi\Documents\StructType\VatAccountAssignDTO $midocoVatAccountAssign
     * @return \Pggns\MidocoApi\Documents\StructType\GetVatAccountAssignsRequest
     */
    public function setMidocoVatAccountAssign(?\Pggns\MidocoApi\Documents\StructType\VatAccountAssignDTO $midocoVatAccountAssign = null): self
    {
        $this->MidocoVatAccountAssign = $midocoVatAccountAssign;
        
        return $this;
    }
}
