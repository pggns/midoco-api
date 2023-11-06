<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\MidocoSystem\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteInsurerRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeleteInsurerRequest extends AbstractStructBase
{
    /**
     * The insurerId
     * @var int|null
     */
    protected ?int $insurerId = null;
    /**
     * Constructor method for DeleteInsurerRequest
     * @uses DeleteInsurerRequest::setInsurerId()
     * @param int $insurerId
     */
    public function __construct(?int $insurerId = null)
    {
        $this
            ->setInsurerId($insurerId);
    }
    /**
     * Get insurerId value
     * @return int|null
     */
    public function getInsurerId(): ?int
    {
        return $this->insurerId;
    }
    /**
     * Set insurerId value
     * @param int $insurerId
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\DeleteInsurerRequest
     */
    public function setInsurerId(?int $insurerId = null): self
    {
        // validation for constraint: int
        if (!is_null($insurerId) && !(is_int($insurerId) || ctype_digit($insurerId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($insurerId, true), gettype($insurerId)), __LINE__);
        }
        $this->insurerId = $insurerId;
        
        return $this;
    }
}
