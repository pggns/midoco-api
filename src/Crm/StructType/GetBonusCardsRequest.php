<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetBonusCardsRequest StructType
 * @subpackage Structs
 */
class GetBonusCardsRequest extends AbstractStructBase
{
    /**
     * The MidocoCustomerId
     * Meta information extracted from the WSDL
     * - ref: MidocoCustomerId
     * @var \Pggns\MidocoApi\Api\Crm\StructType\CustomerIdDTO|null
     */
    protected ?\Pggns\MidocoApi\Api\Crm\StructType\CustomerIdDTO $MidocoCustomerId = null;
    /**
     * The maskCcNo
     * @var bool|null
     */
    protected ?bool $maskCcNo = null;
    /**
     * Constructor method for GetBonusCardsRequest
     * @uses GetBonusCardsRequest::setMidocoCustomerId()
     * @uses GetBonusCardsRequest::setMaskCcNo()
     * @param \Pggns\MidocoApi\Api\Crm\StructType\CustomerIdDTO $midocoCustomerId
     * @param bool $maskCcNo
     */
    public function __construct(?\Pggns\MidocoApi\Api\Crm\StructType\CustomerIdDTO $midocoCustomerId = null, ?bool $maskCcNo = null)
    {
        $this
            ->setMidocoCustomerId($midocoCustomerId)
            ->setMaskCcNo($maskCcNo);
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
     * @return \Pggns\MidocoApi\Api\Crm\StructType\GetBonusCardsRequest
     */
    public function setMidocoCustomerId(?\Pggns\MidocoApi\Api\Crm\StructType\CustomerIdDTO $midocoCustomerId = null): self
    {
        $this->MidocoCustomerId = $midocoCustomerId;
        
        return $this;
    }
    /**
     * Get maskCcNo value
     * @return bool|null
     */
    public function getMaskCcNo(): ?bool
    {
        return $this->maskCcNo;
    }
    /**
     * Set maskCcNo value
     * @param bool $maskCcNo
     * @return \Pggns\MidocoApi\Api\Crm\StructType\GetBonusCardsRequest
     */
    public function setMaskCcNo(?bool $maskCcNo = null): self
    {
        // validation for constraint: boolean
        if (!is_null($maskCcNo) && !is_bool($maskCcNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($maskCcNo, true), gettype($maskCcNo)), __LINE__);
        }
        $this->maskCcNo = $maskCcNo;
        
        return $this;
    }
}
