<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TransformDiffResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class TransformDiffResponse extends AbstractStructBase
{
    /**
     * The diff
     * @var string|null
     */
    protected ?string $diff = null;
    /**
     * Constructor method for TransformDiffResponse
     * @uses TransformDiffResponse::setDiff()
     * @param string $diff
     */
    public function __construct(?string $diff = null)
    {
        $this
            ->setDiff($diff);
    }
    /**
     * Get diff value
     * @return string|null
     */
    public function getDiff(): ?string
    {
        return $this->diff;
    }
    /**
     * Set diff value
     * @param string $diff
     * @return \Pggns\MidocoApi\Documents\StructType\TransformDiffResponse
     */
    public function setDiff(?string $diff = null): self
    {
        // validation for constraint: string
        if (!is_null($diff) && !is_string($diff)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($diff, true), gettype($diff)), __LINE__);
        }
        $this->diff = $diff;
        
        return $this;
    }
}
