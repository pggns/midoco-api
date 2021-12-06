<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchSupplierAccountAssignRequest StructType
 * @subpackage Structs
 */
class SearchSupplierAccountAssignRequest extends AbstractStructBase
{
    /**
     * The MidocoSupplierAccountAssign
     * Meta information extracted from the WSDL
     * - ref: MidocoSupplierAccountAssign
     * @var \Pggns\MidocoApi\Documents\StructType\MidocoSupplierAccountAssign|null
     */
    protected ?\Pggns\MidocoApi\Documents\StructType\MidocoSupplierAccountAssign $MidocoSupplierAccountAssign = null;
    /**
     * The MidocoSupplier
     * Meta information extracted from the WSDL
     * - ref: MidocoSupplier
     * @var \Pggns\MidocoApi\Documents\StructType\MidocoSupplierType|null
     */
    protected ?\Pggns\MidocoApi\Documents\StructType\MidocoSupplierType $MidocoSupplier = null;
    /**
     * Constructor method for SearchSupplierAccountAssignRequest
     * @uses SearchSupplierAccountAssignRequest::setMidocoSupplierAccountAssign()
     * @uses SearchSupplierAccountAssignRequest::setMidocoSupplier()
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoSupplierAccountAssign $midocoSupplierAccountAssign
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoSupplierType $midocoSupplier
     */
    public function __construct(?\Pggns\MidocoApi\Documents\StructType\MidocoSupplierAccountAssign $midocoSupplierAccountAssign = null, ?\Pggns\MidocoApi\Documents\StructType\MidocoSupplierType $midocoSupplier = null)
    {
        $this
            ->setMidocoSupplierAccountAssign($midocoSupplierAccountAssign)
            ->setMidocoSupplier($midocoSupplier);
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
     * @return \Pggns\MidocoApi\Documents\StructType\SearchSupplierAccountAssignRequest
     */
    public function setMidocoSupplierAccountAssign(?\Pggns\MidocoApi\Documents\StructType\MidocoSupplierAccountAssign $midocoSupplierAccountAssign = null): self
    {
        $this->MidocoSupplierAccountAssign = $midocoSupplierAccountAssign;
        
        return $this;
    }
    /**
     * Get MidocoSupplier value
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoSupplierType|null
     */
    public function getMidocoSupplier(): ?\Pggns\MidocoApi\Documents\StructType\MidocoSupplierType
    {
        return $this->MidocoSupplier;
    }
    /**
     * Set MidocoSupplier value
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoSupplierType $midocoSupplier
     * @return \Pggns\MidocoApi\Documents\StructType\SearchSupplierAccountAssignRequest
     */
    public function setMidocoSupplier(?\Pggns\MidocoApi\Documents\StructType\MidocoSupplierType $midocoSupplier = null): self
    {
        $this->MidocoSupplier = $midocoSupplier;
        
        return $this;
    }
}
