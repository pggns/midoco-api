<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\CrmSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveMidocoAgencyResponse StructType
 * @subpackage Structs
 */
class SaveMidocoAgencyResponse extends AbstractStructBase
{
    /**
     * The MidocoCustomerId
     * Meta information extracted from the WSDL
     * - ref: MidocoCustomerId
     * @var \Pggns\MidocoApi\Api\CrmSD\StructType\CustomerIdDTO|null
     */
    protected ?\Pggns\MidocoApi\Api\CrmSD\StructType\CustomerIdDTO $MidocoCustomerId = null;
    /**
     * Constructor method for SaveMidocoAgencyResponse
     * @uses SaveMidocoAgencyResponse::setMidocoCustomerId()
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\CustomerIdDTO $midocoCustomerId
     */
    public function __construct(?\Pggns\MidocoApi\Api\CrmSD\StructType\CustomerIdDTO $midocoCustomerId = null)
    {
        $this
            ->setMidocoCustomerId($midocoCustomerId);
    }
    /**
     * Get MidocoCustomerId value
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\CustomerIdDTO|null
     */
    public function getMidocoCustomerId(): ?\Pggns\MidocoApi\Api\CrmSD\StructType\CustomerIdDTO
    {
        return $this->MidocoCustomerId;
    }
    /**
     * Set MidocoCustomerId value
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\CustomerIdDTO $midocoCustomerId
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\SaveMidocoAgencyResponse
     */
    public function setMidocoCustomerId(?\Pggns\MidocoApi\Api\CrmSD\StructType\CustomerIdDTO $midocoCustomerId = null): self
    {
        $this->MidocoCustomerId = $midocoCustomerId;
        
        return $this;
    }
}
