<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMidocoBonusEmployeeRequest StructType
 * @subpackage Structs
 */
class GetMidocoBonusEmployeeRequest extends AbstractStructBase
{
    /**
     * The MidocoBonusEmployeeSearchCriteria
     * Meta information extracted from the WSDL
     * - ref: MidocoBonusEmployeeSearchCriteria
     * @var \Pggns\MidocoApi\Api\Order\StructType\MidocoBonusEmployeeSearchCriteria|null
     */
    protected ?\Pggns\MidocoApi\Api\Order\StructType\MidocoBonusEmployeeSearchCriteria $MidocoBonusEmployeeSearchCriteria = null;
    /**
     * Constructor method for GetMidocoBonusEmployeeRequest
     * @uses GetMidocoBonusEmployeeRequest::setMidocoBonusEmployeeSearchCriteria()
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoBonusEmployeeSearchCriteria $midocoBonusEmployeeSearchCriteria
     */
    public function __construct(?\Pggns\MidocoApi\Api\Order\StructType\MidocoBonusEmployeeSearchCriteria $midocoBonusEmployeeSearchCriteria = null)
    {
        $this
            ->setMidocoBonusEmployeeSearchCriteria($midocoBonusEmployeeSearchCriteria);
    }
    /**
     * Get MidocoBonusEmployeeSearchCriteria value
     * @return \Pggns\MidocoApi\Api\Order\StructType\MidocoBonusEmployeeSearchCriteria|null
     */
    public function getMidocoBonusEmployeeSearchCriteria(): ?\Pggns\MidocoApi\Api\Order\StructType\MidocoBonusEmployeeSearchCriteria
    {
        return $this->MidocoBonusEmployeeSearchCriteria;
    }
    /**
     * Set MidocoBonusEmployeeSearchCriteria value
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoBonusEmployeeSearchCriteria $midocoBonusEmployeeSearchCriteria
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetMidocoBonusEmployeeRequest
     */
    public function setMidocoBonusEmployeeSearchCriteria(?\Pggns\MidocoApi\Api\Order\StructType\MidocoBonusEmployeeSearchCriteria $midocoBonusEmployeeSearchCriteria = null): self
    {
        $this->MidocoBonusEmployeeSearchCriteria = $midocoBonusEmployeeSearchCriteria;
        
        return $this;
    }
}
