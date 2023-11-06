<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchSupplierAccountAssignRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SearchSupplierAccountAssignRequest extends AbstractStructBase
{
    /**
     * The MidocoSupplierAccountAssign
     * Meta information extracted from the WSDL
     * - ref: MidocoSupplierAccountAssign
     * @var \Pggns\MidocoApi\Orderlists\StructType\MidocoSupplierAccountAssign|null
     */
    protected ?\Pggns\MidocoApi\Orderlists\StructType\MidocoSupplierAccountAssign $MidocoSupplierAccountAssign = null;
    /**
     * The MidocoSupplier
     * Meta information extracted from the WSDL
     * - ref: MidocoSupplier
     * @var \Pggns\MidocoApi\Orderlists\StructType\MidocoSupplierType|null
     */
    protected ?\Pggns\MidocoApi\Orderlists\StructType\MidocoSupplierType $MidocoSupplier = null;
    /**
     * Constructor method for SearchSupplierAccountAssignRequest
     * @uses SearchSupplierAccountAssignRequest::setMidocoSupplierAccountAssign()
     * @uses SearchSupplierAccountAssignRequest::setMidocoSupplier()
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoSupplierAccountAssign $midocoSupplierAccountAssign
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoSupplierType $midocoSupplier
     */
    public function __construct(?\Pggns\MidocoApi\Orderlists\StructType\MidocoSupplierAccountAssign $midocoSupplierAccountAssign = null, ?\Pggns\MidocoApi\Orderlists\StructType\MidocoSupplierType $midocoSupplier = null)
    {
        $this
            ->setMidocoSupplierAccountAssign($midocoSupplierAccountAssign)
            ->setMidocoSupplier($midocoSupplier);
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
     * @return \Pggns\MidocoApi\Orderlists\StructType\SearchSupplierAccountAssignRequest
     */
    public function setMidocoSupplierAccountAssign(?\Pggns\MidocoApi\Orderlists\StructType\MidocoSupplierAccountAssign $midocoSupplierAccountAssign = null): self
    {
        $this->MidocoSupplierAccountAssign = $midocoSupplierAccountAssign;
        
        return $this;
    }
    /**
     * Get MidocoSupplier value
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoSupplierType|null
     */
    public function getMidocoSupplier(): ?\Pggns\MidocoApi\Orderlists\StructType\MidocoSupplierType
    {
        return $this->MidocoSupplier;
    }
    /**
     * Set MidocoSupplier value
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoSupplierType $midocoSupplier
     * @return \Pggns\MidocoApi\Orderlists\StructType\SearchSupplierAccountAssignRequest
     */
    public function setMidocoSupplier(?\Pggns\MidocoApi\Orderlists\StructType\MidocoSupplierType $midocoSupplier = null): self
    {
        $this->MidocoSupplier = $midocoSupplier;
        
        return $this;
    }
}
