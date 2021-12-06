<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\CrmSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetPaxconnectUrlStringRequest StructType
 * @subpackage Structs
 */
class GetPaxconnectUrlStringRequest extends AbstractStructBase
{
    /**
     * The MidocoCustomerId
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - ref: MidocoCustomerId
     * @var \Pggns\MidocoApi\Api\CrmSD\StructType\CustomerIdDTO
     */
    protected \Pggns\MidocoApi\Api\CrmSD\StructType\CustomerIdDTO $MidocoCustomerId;
    /**
     * Constructor method for GetPaxconnectUrlStringRequest
     * @uses GetPaxconnectUrlStringRequest::setMidocoCustomerId()
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\CustomerIdDTO $midocoCustomerId
     */
    public function __construct(\Pggns\MidocoApi\Api\CrmSD\StructType\CustomerIdDTO $midocoCustomerId)
    {
        $this
            ->setMidocoCustomerId($midocoCustomerId);
    }
    /**
     * Get MidocoCustomerId value
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\CustomerIdDTO
     */
    public function getMidocoCustomerId(): \Pggns\MidocoApi\Api\CrmSD\StructType\CustomerIdDTO
    {
        return $this->MidocoCustomerId;
    }
    /**
     * Set MidocoCustomerId value
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\CustomerIdDTO $midocoCustomerId
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\GetPaxconnectUrlStringRequest
     */
    public function setMidocoCustomerId(\Pggns\MidocoApi\Api\CrmSD\StructType\CustomerIdDTO $midocoCustomerId): self
    {
        $this->MidocoCustomerId = $midocoCustomerId;
        
        return $this;
    }
}