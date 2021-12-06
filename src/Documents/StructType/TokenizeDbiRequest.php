<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TokenizeDbiRequest StructType
 * @subpackage Structs
 */
class TokenizeDbiRequest extends AbstractStructBase
{
    /**
     * The ccNo
     * @var string|null
     */
    protected ?string $ccNo = null;
    /**
     * Constructor method for TokenizeDbiRequest
     * @uses TokenizeDbiRequest::setCcNo()
     * @param string $ccNo
     */
    public function __construct(?string $ccNo = null)
    {
        $this
            ->setCcNo($ccNo);
    }
    /**
     * Get ccNo value
     * @return string|null
     */
    public function getCcNo(): ?string
    {
        return $this->ccNo;
    }
    /**
     * Set ccNo value
     * @param string $ccNo
     * @return \Pggns\MidocoApi\Documents\StructType\TokenizeDbiRequest
     */
    public function setCcNo(?string $ccNo = null): self
    {
        // validation for constraint: string
        if (!is_null($ccNo) && !is_string($ccNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ccNo, true), gettype($ccNo)), __LINE__);
        }
        $this->ccNo = $ccNo;
        
        return $this;
    }
}
