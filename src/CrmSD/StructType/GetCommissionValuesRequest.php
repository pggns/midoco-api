<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\CrmSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCommissionValuesRequest StructType
 * @subpackage Structs
 */
class GetCommissionValuesRequest extends AbstractStructBase
{
    /**
     * The MidocoCommission
     * Meta information extracted from the WSDL
     * - ref: MidocoCommission
     * @var \Pggns\MidocoApi\CrmSD\StructType\CommissionDTO|null
     */
    protected ?\Pggns\MidocoApi\CrmSD\StructType\CommissionDTO $MidocoCommission = null;
    /**
     * Constructor method for GetCommissionValuesRequest
     * @uses GetCommissionValuesRequest::setMidocoCommission()
     * @param \Pggns\MidocoApi\CrmSD\StructType\CommissionDTO $midocoCommission
     */
    public function __construct(?\Pggns\MidocoApi\CrmSD\StructType\CommissionDTO $midocoCommission = null)
    {
        $this
            ->setMidocoCommission($midocoCommission);
    }
    /**
     * Get MidocoCommission value
     * @return \Pggns\MidocoApi\CrmSD\StructType\CommissionDTO|null
     */
    public function getMidocoCommission(): ?\Pggns\MidocoApi\CrmSD\StructType\CommissionDTO
    {
        return $this->MidocoCommission;
    }
    /**
     * Set MidocoCommission value
     * @param \Pggns\MidocoApi\CrmSD\StructType\CommissionDTO $midocoCommission
     * @return \Pggns\MidocoApi\CrmSD\StructType\GetCommissionValuesRequest
     */
    public function setMidocoCommission(?\Pggns\MidocoApi\CrmSD\StructType\CommissionDTO $midocoCommission = null): self
    {
        $this->MidocoCommission = $midocoCommission;
        
        return $this;
    }
}
