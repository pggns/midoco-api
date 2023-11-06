<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAvailableSupplierGroupValuesRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetAvailableSupplierGroupValuesRequest extends AbstractStructBase
{
    /**
     * The groupId
     * @var int|null
     */
    protected ?int $groupId = null;
    /**
     * Constructor method for GetAvailableSupplierGroupValuesRequest
     * @uses GetAvailableSupplierGroupValuesRequest::setGroupId()
     * @param int $groupId
     */
    public function __construct(?int $groupId = null)
    {
        $this
            ->setGroupId($groupId);
    }
    /**
     * Get groupId value
     * @return int|null
     */
    public function getGroupId(): ?int
    {
        return $this->groupId;
    }
    /**
     * Set groupId value
     * @param int $groupId
     * @return \Pggns\MidocoApi\Orderlists\StructType\GetAvailableSupplierGroupValuesRequest
     */
    public function setGroupId(?int $groupId = null): self
    {
        // validation for constraint: int
        if (!is_null($groupId) && !(is_int($groupId) || ctype_digit($groupId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($groupId, true), gettype($groupId)), __LINE__);
        }
        $this->groupId = $groupId;
        
        return $this;
    }
}
