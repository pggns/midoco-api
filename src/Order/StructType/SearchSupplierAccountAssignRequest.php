<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Order\StructType;

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
     * @var \Pggns\MidocoApi\Api\Order\StructType\MidocoSupplierAccountAssign|null
     */
    protected ?\Pggns\MidocoApi\Api\Order\StructType\MidocoSupplierAccountAssign $MidocoSupplierAccountAssign = null;
    /**
     * The MidocoSupplier
     * Meta information extracted from the WSDL
     * - ref: MidocoSupplier
     * @var \Pggns\MidocoApi\Api\Order\StructType\MidocoSupplierType|null
     */
    protected ?\Pggns\MidocoApi\Api\Order\StructType\MidocoSupplierType $MidocoSupplier = null;
    /**
     * Constructor method for SearchSupplierAccountAssignRequest
     * @uses SearchSupplierAccountAssignRequest::setMidocoSupplierAccountAssign()
     * @uses SearchSupplierAccountAssignRequest::setMidocoSupplier()
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoSupplierAccountAssign $midocoSupplierAccountAssign
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoSupplierType $midocoSupplier
     */
    public function __construct(?\Pggns\MidocoApi\Api\Order\StructType\MidocoSupplierAccountAssign $midocoSupplierAccountAssign = null, ?\Pggns\MidocoApi\Api\Order\StructType\MidocoSupplierType $midocoSupplier = null)
    {
        $this
            ->setMidocoSupplierAccountAssign($midocoSupplierAccountAssign)
            ->setMidocoSupplier($midocoSupplier);
    }
    /**
     * Get MidocoSupplierAccountAssign value
     * @return \Pggns\MidocoApi\Api\Order\StructType\MidocoSupplierAccountAssign|null
     */
    public function getMidocoSupplierAccountAssign(): ?\Pggns\MidocoApi\Api\Order\StructType\MidocoSupplierAccountAssign
    {
        return $this->MidocoSupplierAccountAssign;
    }
    /**
     * Set MidocoSupplierAccountAssign value
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoSupplierAccountAssign $midocoSupplierAccountAssign
     * @return \Pggns\MidocoApi\Api\Order\StructType\SearchSupplierAccountAssignRequest
     */
    public function setMidocoSupplierAccountAssign(?\Pggns\MidocoApi\Api\Order\StructType\MidocoSupplierAccountAssign $midocoSupplierAccountAssign = null): self
    {
        $this->MidocoSupplierAccountAssign = $midocoSupplierAccountAssign;
        
        return $this;
    }
    /**
     * Get MidocoSupplier value
     * @return \Pggns\MidocoApi\Api\Order\StructType\MidocoSupplierType|null
     */
    public function getMidocoSupplier(): ?\Pggns\MidocoApi\Api\Order\StructType\MidocoSupplierType
    {
        return $this->MidocoSupplier;
    }
    /**
     * Set MidocoSupplier value
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoSupplierType $midocoSupplier
     * @return \Pggns\MidocoApi\Api\Order\StructType\SearchSupplierAccountAssignRequest
     */
    public function setMidocoSupplier(?\Pggns\MidocoApi\Api\Order\StructType\MidocoSupplierType $midocoSupplier = null): self
    {
        $this->MidocoSupplier = $midocoSupplier;
        
        return $this;
    }
}
