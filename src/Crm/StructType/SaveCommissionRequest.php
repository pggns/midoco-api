<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveCommissionRequest StructType
 * @subpackage Structs
 */
class SaveCommissionRequest extends AbstractStructBase
{
    /**
     * The MidocoCommission
     * Meta information extracted from the WSDL
     * - ref: MidocoCommission
     * @var \Pggns\MidocoApi\Crm\StructType\CommissionDTO|null
     */
    protected ?\Pggns\MidocoApi\Crm\StructType\CommissionDTO $MidocoCommission = null;
    /**
     * Constructor method for SaveCommissionRequest
     * @uses SaveCommissionRequest::setMidocoCommission()
     * @param \Pggns\MidocoApi\Crm\StructType\CommissionDTO $midocoCommission
     */
    public function __construct(?\Pggns\MidocoApi\Crm\StructType\CommissionDTO $midocoCommission = null)
    {
        $this
            ->setMidocoCommission($midocoCommission);
    }
    /**
     * Get MidocoCommission value
     * @return \Pggns\MidocoApi\Crm\StructType\CommissionDTO|null
     */
    public function getMidocoCommission(): ?\Pggns\MidocoApi\Crm\StructType\CommissionDTO
    {
        return $this->MidocoCommission;
    }
    /**
     * Set MidocoCommission value
     * @param \Pggns\MidocoApi\Crm\StructType\CommissionDTO $midocoCommission
     * @return \Pggns\MidocoApi\Crm\StructType\SaveCommissionRequest
     */
    public function setMidocoCommission(?\Pggns\MidocoApi\Crm\StructType\CommissionDTO $midocoCommission = null): self
    {
        $this->MidocoCommission = $midocoCommission;
        
        return $this;
    }
}
