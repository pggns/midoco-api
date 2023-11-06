<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveSupplierAccountAssignRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveSupplierAccountAssignRequest extends AbstractStructBase
{
    /**
     * The MidocoSupplierAccountAssign
     * Meta information extracted from the WSDL
     * - ref: MidocoSupplierAccountAssign
     * @var \Pggns\MidocoApi\Bank\StructType\MidocoSupplierAccountAssign|null
     */
    protected ?\Pggns\MidocoApi\Bank\StructType\MidocoSupplierAccountAssign $MidocoSupplierAccountAssign = null;
    /**
     * Constructor method for SaveSupplierAccountAssignRequest
     * @uses SaveSupplierAccountAssignRequest::setMidocoSupplierAccountAssign()
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoSupplierAccountAssign $midocoSupplierAccountAssign
     */
    public function __construct(?\Pggns\MidocoApi\Bank\StructType\MidocoSupplierAccountAssign $midocoSupplierAccountAssign = null)
    {
        $this
            ->setMidocoSupplierAccountAssign($midocoSupplierAccountAssign);
    }
    /**
     * Get MidocoSupplierAccountAssign value
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoSupplierAccountAssign|null
     */
    public function getMidocoSupplierAccountAssign(): ?\Pggns\MidocoApi\Bank\StructType\MidocoSupplierAccountAssign
    {
        return $this->MidocoSupplierAccountAssign;
    }
    /**
     * Set MidocoSupplierAccountAssign value
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoSupplierAccountAssign $midocoSupplierAccountAssign
     * @return \Pggns\MidocoApi\Bank\StructType\SaveSupplierAccountAssignRequest
     */
    public function setMidocoSupplierAccountAssign(?\Pggns\MidocoApi\Bank\StructType\MidocoSupplierAccountAssign $midocoSupplierAccountAssign = null): self
    {
        $this->MidocoSupplierAccountAssign = $midocoSupplierAccountAssign;
        
        return $this;
    }
}
