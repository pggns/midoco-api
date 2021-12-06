<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\OrderSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveCostCentreRequest StructType
 * @subpackage Structs
 */
class SaveCostCentreRequest extends AbstractStructBase
{
    /**
     * The MidocoCostCentre
     * Meta information extracted from the WSDL
     * - ref: MidocoCostCentre
     * @var \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCostCentre|null
     */
    protected ?\Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCostCentre $MidocoCostCentre = null;
    /**
     * Constructor method for SaveCostCentreRequest
     * @uses SaveCostCentreRequest::setMidocoCostCentre()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCostCentre $midocoCostCentre
     */
    public function __construct(?\Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCostCentre $midocoCostCentre = null)
    {
        $this
            ->setMidocoCostCentre($midocoCostCentre);
    }
    /**
     * Get MidocoCostCentre value
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCostCentre|null
     */
    public function getMidocoCostCentre(): ?\Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCostCentre
    {
        return $this->MidocoCostCentre;
    }
    /**
     * Set MidocoCostCentre value
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCostCentre $midocoCostCentre
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\SaveCostCentreRequest
     */
    public function setMidocoCostCentre(?\Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCostCentre $midocoCostCentre = null): self
    {
        $this->MidocoCostCentre = $midocoCostCentre;
        
        return $this;
    }
}
