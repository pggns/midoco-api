<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCostCentresRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetCostCentresRequest extends AbstractStructBase
{
    /**
     * The MidocoCostCentre
     * Meta information extracted from the WSDL
     * - ref: MidocoCostCentre
     * @var \Pggns\MidocoApi\Orderlists\StructType\MidocoCostCentre|null
     */
    protected ?\Pggns\MidocoApi\Orderlists\StructType\MidocoCostCentre $MidocoCostCentre = null;
    /**
     * Constructor method for GetCostCentresRequest
     * @uses GetCostCentresRequest::setMidocoCostCentre()
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoCostCentre $midocoCostCentre
     */
    public function __construct(?\Pggns\MidocoApi\Orderlists\StructType\MidocoCostCentre $midocoCostCentre = null)
    {
        $this
            ->setMidocoCostCentre($midocoCostCentre);
    }
    /**
     * Get MidocoCostCentre value
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoCostCentre|null
     */
    public function getMidocoCostCentre(): ?\Pggns\MidocoApi\Orderlists\StructType\MidocoCostCentre
    {
        return $this->MidocoCostCentre;
    }
    /**
     * Set MidocoCostCentre value
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoCostCentre $midocoCostCentre
     * @return \Pggns\MidocoApi\Orderlists\StructType\GetCostCentresRequest
     */
    public function setMidocoCostCentre(?\Pggns\MidocoApi\Orderlists\StructType\MidocoCostCentre $midocoCostCentre = null): self
    {
        $this->MidocoCostCentre = $midocoCostCentre;
        
        return $this;
    }
}
