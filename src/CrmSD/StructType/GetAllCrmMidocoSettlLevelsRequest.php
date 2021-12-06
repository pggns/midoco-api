<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\CrmSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAllCrmMidocoSettlLevelsRequest StructType
 * @subpackage Structs
 */
class GetAllCrmMidocoSettlLevelsRequest extends AbstractStructBase
{
    /**
     * The settlementId
     * @var int|null
     */
    protected ?int $settlementId = null;
    /**
     * Constructor method for GetAllCrmMidocoSettlLevelsRequest
     * @uses GetAllCrmMidocoSettlLevelsRequest::setSettlementId()
     * @param int $settlementId
     */
    public function __construct(?int $settlementId = null)
    {
        $this
            ->setSettlementId($settlementId);
    }
    /**
     * Get settlementId value
     * @return int|null
     */
    public function getSettlementId(): ?int
    {
        return $this->settlementId;
    }
    /**
     * Set settlementId value
     * @param int $settlementId
     * @return \Pggns\MidocoApi\CrmSD\StructType\GetAllCrmMidocoSettlLevelsRequest
     */
    public function setSettlementId(?int $settlementId = null): self
    {
        // validation for constraint: int
        if (!is_null($settlementId) && !(is_int($settlementId) || ctype_digit($settlementId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($settlementId, true), gettype($settlementId)), __LINE__);
        }
        $this->settlementId = $settlementId;
        
        return $this;
    }
}
