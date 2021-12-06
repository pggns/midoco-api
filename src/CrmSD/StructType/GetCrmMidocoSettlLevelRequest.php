<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\CrmSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCrmMidocoSettlLevelRequest StructType
 * @subpackage Structs
 */
class GetCrmMidocoSettlLevelRequest extends AbstractStructBase
{
    /**
     * The levelId
     * @var int|null
     */
    protected ?int $levelId = null;
    /**
     * Constructor method for GetCrmMidocoSettlLevelRequest
     * @uses GetCrmMidocoSettlLevelRequest::setLevelId()
     * @param int $levelId
     */
    public function __construct(?int $levelId = null)
    {
        $this
            ->setLevelId($levelId);
    }
    /**
     * Get levelId value
     * @return int|null
     */
    public function getLevelId(): ?int
    {
        return $this->levelId;
    }
    /**
     * Set levelId value
     * @param int $levelId
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\GetCrmMidocoSettlLevelRequest
     */
    public function setLevelId(?int $levelId = null): self
    {
        // validation for constraint: int
        if (!is_null($levelId) && !(is_int($levelId) || ctype_digit($levelId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($levelId, true), gettype($levelId)), __LINE__);
        }
        $this->levelId = $levelId;
        
        return $this;
    }
}
