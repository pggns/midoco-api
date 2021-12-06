<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\CrmSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteMidocoChargeRequest StructType
 * @subpackage Structs
 */
class DeleteMidocoChargeRequest extends AbstractStructBase
{
    /**
     * The crmChargeId
     * Meta information extracted from the WSDL
     * - use: required
     * @var int
     */
    protected int $crmChargeId;
    /**
     * Constructor method for DeleteMidocoChargeRequest
     * @uses DeleteMidocoChargeRequest::setCrmChargeId()
     * @param int $crmChargeId
     */
    public function __construct(int $crmChargeId)
    {
        $this
            ->setCrmChargeId($crmChargeId);
    }
    /**
     * Get crmChargeId value
     * @return int
     */
    public function getCrmChargeId(): int
    {
        return $this->crmChargeId;
    }
    /**
     * Set crmChargeId value
     * @param int $crmChargeId
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\DeleteMidocoChargeRequest
     */
    public function setCrmChargeId(int $crmChargeId): self
    {
        // validation for constraint: int
        if (!is_null($crmChargeId) && !(is_int($crmChargeId) || ctype_digit($crmChargeId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($crmChargeId, true), gettype($crmChargeId)), __LINE__);
        }
        $this->crmChargeId = $crmChargeId;
        
        return $this;
    }
}
