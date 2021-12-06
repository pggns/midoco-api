<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCurrencyByISOCodeRequest StructType
 * @subpackage Structs
 */
class GetCurrencyByISOCodeRequest extends AbstractStructBase
{
    /**
     * The isoCode
     * @var string|null
     */
    protected ?string $isoCode = null;
    /**
     * Constructor method for GetCurrencyByISOCodeRequest
     * @uses GetCurrencyByISOCodeRequest::setIsoCode()
     * @param string $isoCode
     */
    public function __construct(?string $isoCode = null)
    {
        $this
            ->setIsoCode($isoCode);
    }
    /**
     * Get isoCode value
     * @return string|null
     */
    public function getIsoCode(): ?string
    {
        return $this->isoCode;
    }
    /**
     * Set isoCode value
     * @param string $isoCode
     * @return \Pggns\MidocoApi\Documents\StructType\GetCurrencyByISOCodeRequest
     */
    public function setIsoCode(?string $isoCode = null): self
    {
        // validation for constraint: string
        if (!is_null($isoCode) && !is_string($isoCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($isoCode, true), gettype($isoCode)), __LINE__);
        }
        $this->isoCode = $isoCode;
        
        return $this;
    }
}
