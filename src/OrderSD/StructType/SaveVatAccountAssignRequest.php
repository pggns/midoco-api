<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\OrderSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveVatAccountAssignRequest StructType
 * @subpackage Structs
 */
class SaveVatAccountAssignRequest extends AbstractStructBase
{
    /**
     * The MidocoVatAccountAssign
     * Meta information extracted from the WSDL
     * - ref: MidocoVatAccountAssign
     * @var \Pggns\MidocoApi\OrderSD\StructType\VatAccountAssignDTO|null
     */
    protected ?\Pggns\MidocoApi\OrderSD\StructType\VatAccountAssignDTO $MidocoVatAccountAssign = null;
    /**
     * Constructor method for SaveVatAccountAssignRequest
     * @uses SaveVatAccountAssignRequest::setMidocoVatAccountAssign()
     * @param \Pggns\MidocoApi\OrderSD\StructType\VatAccountAssignDTO $midocoVatAccountAssign
     */
    public function __construct(?\Pggns\MidocoApi\OrderSD\StructType\VatAccountAssignDTO $midocoVatAccountAssign = null)
    {
        $this
            ->setMidocoVatAccountAssign($midocoVatAccountAssign);
    }
    /**
     * Get MidocoVatAccountAssign value
     * @return \Pggns\MidocoApi\OrderSD\StructType\VatAccountAssignDTO|null
     */
    public function getMidocoVatAccountAssign(): ?\Pggns\MidocoApi\OrderSD\StructType\VatAccountAssignDTO
    {
        return $this->MidocoVatAccountAssign;
    }
    /**
     * Set MidocoVatAccountAssign value
     * @param \Pggns\MidocoApi\OrderSD\StructType\VatAccountAssignDTO $midocoVatAccountAssign
     * @return \Pggns\MidocoApi\OrderSD\StructType\SaveVatAccountAssignRequest
     */
    public function setMidocoVatAccountAssign(?\Pggns\MidocoApi\OrderSD\StructType\VatAccountAssignDTO $midocoVatAccountAssign = null): self
    {
        $this->MidocoVatAccountAssign = $midocoVatAccountAssign;
        
        return $this;
    }
}
