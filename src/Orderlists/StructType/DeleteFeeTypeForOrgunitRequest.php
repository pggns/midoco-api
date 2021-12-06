<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteFeeTypeForOrgunitRequest StructType
 * @subpackage Structs
 */
class DeleteFeeTypeForOrgunitRequest extends AbstractStructBase
{
    /**
     * The MidocoFeeTypeOrgUnit
     * Meta information extracted from the WSDL
     * - ref: MidocoFeeTypeOrgUnit
     * @var \Pggns\MidocoApi\Orderlists\StructType\MidocoFeeTypeOrgUnit|null
     */
    protected ?\Pggns\MidocoApi\Orderlists\StructType\MidocoFeeTypeOrgUnit $MidocoFeeTypeOrgUnit = null;
    /**
     * Constructor method for DeleteFeeTypeForOrgunitRequest
     * @uses DeleteFeeTypeForOrgunitRequest::setMidocoFeeTypeOrgUnit()
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoFeeTypeOrgUnit $midocoFeeTypeOrgUnit
     */
    public function __construct(?\Pggns\MidocoApi\Orderlists\StructType\MidocoFeeTypeOrgUnit $midocoFeeTypeOrgUnit = null)
    {
        $this
            ->setMidocoFeeTypeOrgUnit($midocoFeeTypeOrgUnit);
    }
    /**
     * Get MidocoFeeTypeOrgUnit value
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoFeeTypeOrgUnit|null
     */
    public function getMidocoFeeTypeOrgUnit(): ?\Pggns\MidocoApi\Orderlists\StructType\MidocoFeeTypeOrgUnit
    {
        return $this->MidocoFeeTypeOrgUnit;
    }
    /**
     * Set MidocoFeeTypeOrgUnit value
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoFeeTypeOrgUnit $midocoFeeTypeOrgUnit
     * @return \Pggns\MidocoApi\Orderlists\StructType\DeleteFeeTypeForOrgunitRequest
     */
    public function setMidocoFeeTypeOrgUnit(?\Pggns\MidocoApi\Orderlists\StructType\MidocoFeeTypeOrgUnit $midocoFeeTypeOrgUnit = null): self
    {
        $this->MidocoFeeTypeOrgUnit = $midocoFeeTypeOrgUnit;
        
        return $this;
    }
}
