<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSellitemDetailsForBonusEmployeeRequest StructType
 * @subpackage Structs
 */
class GetSellitemDetailsForBonusEmployeeRequest extends AbstractStructBase
{
    /**
     * The MidocoBonusEmployee
     * Meta information extracted from the WSDL
     * - ref: MidocoBonusEmployee
     * @var \Pggns\MidocoApi\Api\Order\StructType\MidocoBonusEmployee|null
     */
    protected ?\Pggns\MidocoApi\Api\Order\StructType\MidocoBonusEmployee $MidocoBonusEmployee = null;
    /**
     * Constructor method for GetSellitemDetailsForBonusEmployeeRequest
     * @uses GetSellitemDetailsForBonusEmployeeRequest::setMidocoBonusEmployee()
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoBonusEmployee $midocoBonusEmployee
     */
    public function __construct(?\Pggns\MidocoApi\Api\Order\StructType\MidocoBonusEmployee $midocoBonusEmployee = null)
    {
        $this
            ->setMidocoBonusEmployee($midocoBonusEmployee);
    }
    /**
     * Get MidocoBonusEmployee value
     * @return \Pggns\MidocoApi\Api\Order\StructType\MidocoBonusEmployee|null
     */
    public function getMidocoBonusEmployee(): ?\Pggns\MidocoApi\Api\Order\StructType\MidocoBonusEmployee
    {
        return $this->MidocoBonusEmployee;
    }
    /**
     * Set MidocoBonusEmployee value
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoBonusEmployee $midocoBonusEmployee
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetSellitemDetailsForBonusEmployeeRequest
     */
    public function setMidocoBonusEmployee(?\Pggns\MidocoApi\Api\Order\StructType\MidocoBonusEmployee $midocoBonusEmployee = null): self
    {
        $this->MidocoBonusEmployee = $midocoBonusEmployee;
        
        return $this;
    }
}
