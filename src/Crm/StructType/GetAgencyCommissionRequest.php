<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAgencyCommissionRequest StructType
 * @subpackage Structs
 */
class GetAgencyCommissionRequest extends AbstractStructBase
{
    /**
     * The MidocoCustomerId
     * Meta information extracted from the WSDL
     * - ref: MidocoCustomerId
     * @var \Pggns\MidocoApi\Api\Crm\StructType\CustomerIdDTO|null
     */
    protected ?\Pggns\MidocoApi\Api\Crm\StructType\CustomerIdDTO $MidocoCustomerId = null;
    /**
     * Constructor method for GetAgencyCommissionRequest
     * @uses GetAgencyCommissionRequest::setMidocoCustomerId()
     * @param \Pggns\MidocoApi\Api\Crm\StructType\CustomerIdDTO $midocoCustomerId
     */
    public function __construct(?\Pggns\MidocoApi\Api\Crm\StructType\CustomerIdDTO $midocoCustomerId = null)
    {
        $this
            ->setMidocoCustomerId($midocoCustomerId);
    }
    /**
     * Get MidocoCustomerId value
     * @return \Pggns\MidocoApi\Api\Crm\StructType\CustomerIdDTO|null
     */
    public function getMidocoCustomerId(): ?\Pggns\MidocoApi\Api\Crm\StructType\CustomerIdDTO
    {
        return $this->MidocoCustomerId;
    }
    /**
     * Set MidocoCustomerId value
     * @param \Pggns\MidocoApi\Api\Crm\StructType\CustomerIdDTO $midocoCustomerId
     * @return \Pggns\MidocoApi\Api\Crm\StructType\GetAgencyCommissionRequest
     */
    public function setMidocoCustomerId(?\Pggns\MidocoApi\Api\Crm\StructType\CustomerIdDTO $midocoCustomerId = null): self
    {
        $this->MidocoCustomerId = $midocoCustomerId;
        
        return $this;
    }
}
