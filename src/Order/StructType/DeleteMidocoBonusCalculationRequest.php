<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteMidocoBonusCalculationRequest StructType
 * @subpackage Structs
 */
class DeleteMidocoBonusCalculationRequest extends AbstractStructBase
{
    /**
     * The MidocoBonusCalculation
     * Meta information extracted from the WSDL
     * - ref: MidocoBonusCalculation
     * @var \Pggns\MidocoApi\Api\Order\StructType\MidocoBonusCalculation|null
     */
    protected ?\Pggns\MidocoApi\Api\Order\StructType\MidocoBonusCalculation $MidocoBonusCalculation = null;
    /**
     * Constructor method for DeleteMidocoBonusCalculationRequest
     * @uses DeleteMidocoBonusCalculationRequest::setMidocoBonusCalculation()
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoBonusCalculation $midocoBonusCalculation
     */
    public function __construct(?\Pggns\MidocoApi\Api\Order\StructType\MidocoBonusCalculation $midocoBonusCalculation = null)
    {
        $this
            ->setMidocoBonusCalculation($midocoBonusCalculation);
    }
    /**
     * Get MidocoBonusCalculation value
     * @return \Pggns\MidocoApi\Api\Order\StructType\MidocoBonusCalculation|null
     */
    public function getMidocoBonusCalculation(): ?\Pggns\MidocoApi\Api\Order\StructType\MidocoBonusCalculation
    {
        return $this->MidocoBonusCalculation;
    }
    /**
     * Set MidocoBonusCalculation value
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoBonusCalculation $midocoBonusCalculation
     * @return \Pggns\MidocoApi\Api\Order\StructType\DeleteMidocoBonusCalculationRequest
     */
    public function setMidocoBonusCalculation(?\Pggns\MidocoApi\Api\Order\StructType\MidocoBonusCalculation $midocoBonusCalculation = null): self
    {
        $this->MidocoBonusCalculation = $midocoBonusCalculation;
        
        return $this;
    }
}
