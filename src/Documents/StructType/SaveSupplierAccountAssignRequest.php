<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveSupplierAccountAssignRequest StructType
 * @subpackage Structs
 */
class SaveSupplierAccountAssignRequest extends AbstractStructBase
{
    /**
     * The MidocoSupplierAccountAssign
     * Meta information extracted from the WSDL
     * - ref: MidocoSupplierAccountAssign
     * @var \Pggns\MidocoApi\Documents\StructType\MidocoSupplierAccountAssign|null
     */
    protected ?\Pggns\MidocoApi\Documents\StructType\MidocoSupplierAccountAssign $MidocoSupplierAccountAssign = null;
    /**
     * Constructor method for SaveSupplierAccountAssignRequest
     * @uses SaveSupplierAccountAssignRequest::setMidocoSupplierAccountAssign()
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoSupplierAccountAssign $midocoSupplierAccountAssign
     */
    public function __construct(?\Pggns\MidocoApi\Documents\StructType\MidocoSupplierAccountAssign $midocoSupplierAccountAssign = null)
    {
        $this
            ->setMidocoSupplierAccountAssign($midocoSupplierAccountAssign);
    }
    /**
     * Get MidocoSupplierAccountAssign value
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoSupplierAccountAssign|null
     */
    public function getMidocoSupplierAccountAssign(): ?\Pggns\MidocoApi\Documents\StructType\MidocoSupplierAccountAssign
    {
        return $this->MidocoSupplierAccountAssign;
    }
    /**
     * Set MidocoSupplierAccountAssign value
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoSupplierAccountAssign $midocoSupplierAccountAssign
     * @return \Pggns\MidocoApi\Documents\StructType\SaveSupplierAccountAssignRequest
     */
    public function setMidocoSupplierAccountAssign(?\Pggns\MidocoApi\Documents\StructType\MidocoSupplierAccountAssign $midocoSupplierAccountAssign = null): self
    {
        $this->MidocoSupplierAccountAssign = $midocoSupplierAccountAssign;
        
        return $this;
    }
}
