<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteSupplierAccountAssignRequest StructType
 * @subpackage Structs
 */
class DeleteSupplierAccountAssignRequest extends AbstractStructBase
{
    /**
     * The MidocoSupplierAccountAssign
     * Meta information extracted from the WSDL
     * - ref: MidocoSupplierAccountAssign
     * @var \Pggns\MidocoApi\Orderlists\StructType\MidocoSupplierAccountAssign|null
     */
    protected ?\Pggns\MidocoApi\Orderlists\StructType\MidocoSupplierAccountAssign $MidocoSupplierAccountAssign = null;
    /**
     * Constructor method for DeleteSupplierAccountAssignRequest
     * @uses DeleteSupplierAccountAssignRequest::setMidocoSupplierAccountAssign()
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoSupplierAccountAssign $midocoSupplierAccountAssign
     */
    public function __construct(?\Pggns\MidocoApi\Orderlists\StructType\MidocoSupplierAccountAssign $midocoSupplierAccountAssign = null)
    {
        $this
            ->setMidocoSupplierAccountAssign($midocoSupplierAccountAssign);
    }
    /**
     * Get MidocoSupplierAccountAssign value
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoSupplierAccountAssign|null
     */
    public function getMidocoSupplierAccountAssign(): ?\Pggns\MidocoApi\Orderlists\StructType\MidocoSupplierAccountAssign
    {
        return $this->MidocoSupplierAccountAssign;
    }
    /**
     * Set MidocoSupplierAccountAssign value
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoSupplierAccountAssign $midocoSupplierAccountAssign
     * @return \Pggns\MidocoApi\Orderlists\StructType\DeleteSupplierAccountAssignRequest
     */
    public function setMidocoSupplierAccountAssign(?\Pggns\MidocoApi\Orderlists\StructType\MidocoSupplierAccountAssign $midocoSupplierAccountAssign = null): self
    {
        $this->MidocoSupplierAccountAssign = $midocoSupplierAccountAssign;
        
        return $this;
    }
}
