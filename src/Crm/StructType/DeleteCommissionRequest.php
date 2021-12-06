<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteCommissionRequest StructType
 * @subpackage Structs
 */
class DeleteCommissionRequest extends AbstractStructBase
{
    /**
     * The MidocoCommission
     * Meta information extracted from the WSDL
     * - ref: MidocoCommission
     * @var \Pggns\MidocoApi\Api\Crm\StructType\CommissionDTO|null
     */
    protected ?\Pggns\MidocoApi\Api\Crm\StructType\CommissionDTO $MidocoCommission = null;
    /**
     * Constructor method for DeleteCommissionRequest
     * @uses DeleteCommissionRequest::setMidocoCommission()
     * @param \Pggns\MidocoApi\Api\Crm\StructType\CommissionDTO $midocoCommission
     */
    public function __construct(?\Pggns\MidocoApi\Api\Crm\StructType\CommissionDTO $midocoCommission = null)
    {
        $this
            ->setMidocoCommission($midocoCommission);
    }
    /**
     * Get MidocoCommission value
     * @return \Pggns\MidocoApi\Api\Crm\StructType\CommissionDTO|null
     */
    public function getMidocoCommission(): ?\Pggns\MidocoApi\Api\Crm\StructType\CommissionDTO
    {
        return $this->MidocoCommission;
    }
    /**
     * Set MidocoCommission value
     * @param \Pggns\MidocoApi\Api\Crm\StructType\CommissionDTO $midocoCommission
     * @return \Pggns\MidocoApi\Api\Crm\StructType\DeleteCommissionRequest
     */
    public function setMidocoCommission(?\Pggns\MidocoApi\Api\Crm\StructType\CommissionDTO $midocoCommission = null): self
    {
        $this->MidocoCommission = $midocoCommission;
        
        return $this;
    }
}
