<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\System\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetInexsoUrlResponse StructType
 * @subpackage Structs
 */
class GetInexsoUrlResponse extends AbstractStructBase
{
    /**
     * The url
     * @var string|null
     */
    protected ?string $url = null;
    /**
     * Constructor method for GetInexsoUrlResponse
     * @uses GetInexsoUrlResponse::setUrl()
     * @param string $url
     */
    public function __construct(?string $url = null)
    {
        $this
            ->setUrl($url);
    }
    /**
     * Get url value
     * @return string|null
     */
    public function getUrl(): ?string
    {
        return $this->url;
    }
    /**
     * Set url value
     * @param string $url
     * @return \Pggns\MidocoApi\System\StructType\GetInexsoUrlResponse
     */
    public function setUrl(?string $url = null): self
    {
        // validation for constraint: string
        if (!is_null($url) && !is_string($url)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($url, true), gettype($url)), __LINE__);
        }
        $this->url = $url;
        
        return $this;
    }
}
