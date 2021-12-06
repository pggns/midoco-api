<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\CrmSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetActiveCrmMidocoSettlMDocRequest StructType
 * @subpackage Structs
 */
class GetActiveCrmMidocoSettlMDocRequest extends AbstractStructBase
{
    /**
     * The customerId
     * @var int|null
     */
    protected ?int $customerId = null;
    /**
     * The settlementMonth
     * @var string|null
     */
    protected ?string $settlementMonth = null;
    /**
     * Constructor method for GetActiveCrmMidocoSettlMDocRequest
     * @uses GetActiveCrmMidocoSettlMDocRequest::setCustomerId()
     * @uses GetActiveCrmMidocoSettlMDocRequest::setSettlementMonth()
     * @param int $customerId
     * @param string $settlementMonth
     */
    public function __construct(?int $customerId = null, ?string $settlementMonth = null)
    {
        $this
            ->setCustomerId($customerId)
            ->setSettlementMonth($settlementMonth);
    }
    /**
     * Get customerId value
     * @return int|null
     */
    public function getCustomerId(): ?int
    {
        return $this->customerId;
    }
    /**
     * Set customerId value
     * @param int $customerId
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\GetActiveCrmMidocoSettlMDocRequest
     */
    public function setCustomerId(?int $customerId = null): self
    {
        // validation for constraint: int
        if (!is_null($customerId) && !(is_int($customerId) || ctype_digit($customerId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($customerId, true), gettype($customerId)), __LINE__);
        }
        $this->customerId = $customerId;
        
        return $this;
    }
    /**
     * Get settlementMonth value
     * @return string|null
     */
    public function getSettlementMonth(): ?string
    {
        return $this->settlementMonth;
    }
    /**
     * Set settlementMonth value
     * @param string $settlementMonth
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\GetActiveCrmMidocoSettlMDocRequest
     */
    public function setSettlementMonth(?string $settlementMonth = null): self
    {
        // validation for constraint: string
        if (!is_null($settlementMonth) && !is_string($settlementMonth)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($settlementMonth, true), gettype($settlementMonth)), __LINE__);
        }
        $this->settlementMonth = $settlementMonth;
        
        return $this;
    }
}
