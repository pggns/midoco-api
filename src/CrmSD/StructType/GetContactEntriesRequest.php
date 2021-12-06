<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\CrmSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetContactEntriesRequest StructType
 * @subpackage Structs
 */
class GetContactEntriesRequest extends AbstractStructBase
{
    /**
     * The MidocoCustomerId
     * Meta information extracted from the WSDL
     * - ref: MidocoCustomerId
     * @var \Pggns\MidocoApi\Api\CrmSD\StructType\CustomerIdDTO|null
     */
    protected ?\Pggns\MidocoApi\Api\CrmSD\StructType\CustomerIdDTO $MidocoCustomerId = null;
    /**
     * The ignoreNotAvailable
     * Meta information extracted from the WSDL
     * - default: true
     * @var bool|null
     */
    protected ?bool $ignoreNotAvailable = null;
    /**
     * Constructor method for GetContactEntriesRequest
     * @uses GetContactEntriesRequest::setMidocoCustomerId()
     * @uses GetContactEntriesRequest::setIgnoreNotAvailable()
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\CustomerIdDTO $midocoCustomerId
     * @param bool $ignoreNotAvailable
     */
    public function __construct(?\Pggns\MidocoApi\Api\CrmSD\StructType\CustomerIdDTO $midocoCustomerId = null, ?bool $ignoreNotAvailable = true)
    {
        $this
            ->setMidocoCustomerId($midocoCustomerId)
            ->setIgnoreNotAvailable($ignoreNotAvailable);
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
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\GetContactEntriesRequest
     */
    public function setMidocoCustomerId(?\Pggns\MidocoApi\Api\CrmSD\StructType\CustomerIdDTO $midocoCustomerId = null): self
    {
        $this->MidocoCustomerId = $midocoCustomerId;
        
        return $this;
    }
    /**
     * Get ignoreNotAvailable value
     * @return bool|null
     */
    public function getIgnoreNotAvailable(): ?bool
    {
        return $this->ignoreNotAvailable;
    }
    /**
     * Set ignoreNotAvailable value
     * @param bool $ignoreNotAvailable
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\GetContactEntriesRequest
     */
    public function setIgnoreNotAvailable(?bool $ignoreNotAvailable = true): self
    {
        // validation for constraint: boolean
        if (!is_null($ignoreNotAvailable) && !is_bool($ignoreNotAvailable)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($ignoreNotAvailable, true), gettype($ignoreNotAvailable)), __LINE__);
        }
        $this->ignoreNotAvailable = $ignoreNotAvailable;
        
        return $this;
    }
}
