<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\MidocoSystem\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetOrgunitCharEncodingResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetOrgunitCharEncodingResponse extends AbstractStructBase
{
    /**
     * The orgunitCharEncoding
     * @var string|null
     */
    protected ?string $orgunitCharEncoding = null;
    /**
     * Constructor method for GetOrgunitCharEncodingResponse
     * @uses GetOrgunitCharEncodingResponse::setOrgunitCharEncoding()
     * @param string $orgunitCharEncoding
     */
    public function __construct(?string $orgunitCharEncoding = null)
    {
        $this
            ->setOrgunitCharEncoding($orgunitCharEncoding);
    }
    /**
     * Get orgunitCharEncoding value
     * @return string|null
     */
    public function getOrgunitCharEncoding(): ?string
    {
        return $this->orgunitCharEncoding;
    }
    /**
     * Set orgunitCharEncoding value
     * @param string $orgunitCharEncoding
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\GetOrgunitCharEncodingResponse
     */
    public function setOrgunitCharEncoding(?string $orgunitCharEncoding = null): self
    {
        // validation for constraint: string
        if (!is_null($orgunitCharEncoding) && !is_string($orgunitCharEncoding)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orgunitCharEncoding, true), gettype($orgunitCharEncoding)), __LINE__);
        }
        $this->orgunitCharEncoding = $orgunitCharEncoding;
        
        return $this;
    }
}
