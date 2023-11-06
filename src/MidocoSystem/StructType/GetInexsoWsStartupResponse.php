<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\MidocoSystem\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetInexsoWsStartupResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetInexsoWsStartupResponse extends AbstractStructBase
{
    /**
     * The startupUrl
     * @var string|null
     */
    protected ?string $startupUrl = null;
    /**
     * The preferredBrowser
     * @var string|null
     */
    protected ?string $preferredBrowser = null;
    /**
     * Constructor method for GetInexsoWsStartupResponse
     * @uses GetInexsoWsStartupResponse::setStartupUrl()
     * @uses GetInexsoWsStartupResponse::setPreferredBrowser()
     * @param string $startupUrl
     * @param string $preferredBrowser
     */
    public function __construct(?string $startupUrl = null, ?string $preferredBrowser = null)
    {
        $this
            ->setStartupUrl($startupUrl)
            ->setPreferredBrowser($preferredBrowser);
    }
    /**
     * Get startupUrl value
     * @return string|null
     */
    public function getStartupUrl(): ?string
    {
        return $this->startupUrl;
    }
    /**
     * Set startupUrl value
     * @param string $startupUrl
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\GetInexsoWsStartupResponse
     */
    public function setStartupUrl(?string $startupUrl = null): self
    {
        // validation for constraint: string
        if (!is_null($startupUrl) && !is_string($startupUrl)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($startupUrl, true), gettype($startupUrl)), __LINE__);
        }
        $this->startupUrl = $startupUrl;
        
        return $this;
    }
    /**
     * Get preferredBrowser value
     * @return string|null
     */
    public function getPreferredBrowser(): ?string
    {
        return $this->preferredBrowser;
    }
    /**
     * Set preferredBrowser value
     * @param string $preferredBrowser
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\GetInexsoWsStartupResponse
     */
    public function setPreferredBrowser(?string $preferredBrowser = null): self
    {
        // validation for constraint: string
        if (!is_null($preferredBrowser) && !is_string($preferredBrowser)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($preferredBrowser, true), gettype($preferredBrowser)), __LINE__);
        }
        $this->preferredBrowser = $preferredBrowser;
        
        return $this;
    }
}
