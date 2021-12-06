<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\CrmSD\StructType;

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
     * @var \Pggns\MidocoApi\CrmSD\StructType\CustomerIdDTO
     */
    protected \Pggns\MidocoApi\CrmSD\StructType\CustomerIdDTO $MidocoCustomerId;
    /**
     * Constructor method for GetPaxconnectUrlStringRequest
     * @uses GetPaxconnectUrlStringRequest::setMidocoCustomerId()
     * @param \Pggns\MidocoApi\CrmSD\StructType\CustomerIdDTO $midocoCustomerId
     */
    public function __construct(\Pggns\MidocoApi\CrmSD\StructType\CustomerIdDTO $midocoCustomerId)
    {
        $this
            ->setMidocoCustomerId($midocoCustomerId);
    }
    /**
     * Get MidocoCustomerId value
     * @return \Pggns\MidocoApi\CrmSD\StructType\CustomerIdDTO
     */
    public function getMidocoCustomerId(): \Pggns\MidocoApi\CrmSD\StructType\CustomerIdDTO
    {
        return $this->MidocoCustomerId;
    }
    /**
     * Set MidocoCustomerId value
     * @param \Pggns\MidocoApi\CrmSD\StructType\CustomerIdDTO $midocoCustomerId
     * @return \Pggns\MidocoApi\CrmSD\StructType\GetPaxconnectUrlStringRequest
     */
    public function setMidocoCustomerId(\Pggns\MidocoApi\CrmSD\StructType\CustomerIdDTO $midocoCustomerId): self
    {
        $this->MidocoCustomerId = $midocoCustomerId;
        
        return $this;
    }
}
