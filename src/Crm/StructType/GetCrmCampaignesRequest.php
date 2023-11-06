<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCrmCampaignesRequest StructType
 * Meta information extracted from the WSDL
 * - documentation: requests the campaign to which a customer participated
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetCrmCampaignesRequest extends AbstractStructBase
{
    /**
     * The MidocoCustomerId
     * Meta information extracted from the WSDL
     * - ref: MidocoCustomerId
     * @var \Pggns\MidocoApi\Crm\StructType\CustomerIdDTO|null
     */
    protected ?\Pggns\MidocoApi\Crm\StructType\CustomerIdDTO $MidocoCustomerId = null;
    /**
     * The beginIndex
     * @var int|null
     */
    protected ?int $beginIndex = null;
    /**
     * The endIndex
     * @var int|null
     */
    protected ?int $endIndex = null;
    /**
     * Constructor method for GetCrmCampaignesRequest
     * @uses GetCrmCampaignesRequest::setMidocoCustomerId()
     * @uses GetCrmCampaignesRequest::setBeginIndex()
     * @uses GetCrmCampaignesRequest::setEndIndex()
     * @param \Pggns\MidocoApi\Crm\StructType\CustomerIdDTO $midocoCustomerId
     * @param int $beginIndex
     * @param int $endIndex
     */
    public function __construct(?\Pggns\MidocoApi\Crm\StructType\CustomerIdDTO $midocoCustomerId = null, ?int $beginIndex = null, ?int $endIndex = null)
    {
        $this
            ->setMidocoCustomerId($midocoCustomerId)
            ->setBeginIndex($beginIndex)
            ->setEndIndex($endIndex);
    }
    /**
     * Get MidocoCustomerId value
     * @return \Pggns\MidocoApi\Crm\StructType\CustomerIdDTO|null
     */
    public function getMidocoCustomerId(): ?\Pggns\MidocoApi\Crm\StructType\CustomerIdDTO
    {
        return $this->MidocoCustomerId;
    }
    /**
     * Set MidocoCustomerId value
     * @param \Pggns\MidocoApi\Crm\StructType\CustomerIdDTO $midocoCustomerId
     * @return \Pggns\MidocoApi\Crm\StructType\GetCrmCampaignesRequest
     */
    public function setMidocoCustomerId(?\Pggns\MidocoApi\Crm\StructType\CustomerIdDTO $midocoCustomerId = null): self
    {
        $this->MidocoCustomerId = $midocoCustomerId;
        
        return $this;
    }
    /**
     * Get beginIndex value
     * @return int|null
     */
    public function getBeginIndex(): ?int
    {
        return $this->beginIndex;
    }
    /**
     * Set beginIndex value
     * @param int $beginIndex
     * @return \Pggns\MidocoApi\Crm\StructType\GetCrmCampaignesRequest
     */
    public function setBeginIndex(?int $beginIndex = null): self
    {
        // validation for constraint: int
        if (!is_null($beginIndex) && !(is_int($beginIndex) || ctype_digit($beginIndex))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($beginIndex, true), gettype($beginIndex)), __LINE__);
        }
        $this->beginIndex = $beginIndex;
        
        return $this;
    }
    /**
     * Get endIndex value
     * @return int|null
     */
    public function getEndIndex(): ?int
    {
        return $this->endIndex;
    }
    /**
     * Set endIndex value
     * @param int $endIndex
     * @return \Pggns\MidocoApi\Crm\StructType\GetCrmCampaignesRequest
     */
    public function setEndIndex(?int $endIndex = null): self
    {
        // validation for constraint: int
        if (!is_null($endIndex) && !(is_int($endIndex) || ctype_digit($endIndex))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($endIndex, true), gettype($endIndex)), __LINE__);
        }
        $this->endIndex = $endIndex;
        
        return $this;
    }
}
