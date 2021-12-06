<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\OrderglobalSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EinvoiceGatewayDTO StructType
 * @subpackage Structs
 */
class EinvoiceGatewayDTO extends AbstractStructBase
{
    /**
     * The configuration
     * @var string|null
     */
    protected ?string $configuration = null;
    /**
     * The description
     * @var string|null
     */
    protected ?string $description = null;
    /**
     * The gateway
     * @var string|null
     */
    protected ?string $gateway = null;
    /**
     * The url
     * @var string|null
     */
    protected ?string $url = null;
    /**
     * Constructor method for EinvoiceGatewayDTO
     * @uses EinvoiceGatewayDTO::setConfiguration()
     * @uses EinvoiceGatewayDTO::setDescription()
     * @uses EinvoiceGatewayDTO::setGateway()
     * @uses EinvoiceGatewayDTO::setUrl()
     * @param string $configuration
     * @param string $description
     * @param string $gateway
     * @param string $url
     */
    public function __construct(?string $configuration = null, ?string $description = null, ?string $gateway = null, ?string $url = null)
    {
        $this
            ->setConfiguration($configuration)
            ->setDescription($description)
            ->setGateway($gateway)
            ->setUrl($url);
    }
    /**
     * Get configuration value
     * @return string|null
     */
    public function getConfiguration(): ?string
    {
        return $this->configuration;
    }
    /**
     * Set configuration value
     * @param string $configuration
     * @return \Pggns\MidocoApi\OrderglobalSD\StructType\EinvoiceGatewayDTO
     */
    public function setConfiguration(?string $configuration = null): self
    {
        // validation for constraint: string
        if (!is_null($configuration) && !is_string($configuration)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($configuration, true), gettype($configuration)), __LINE__);
        }
        $this->configuration = $configuration;
        
        return $this;
    }
    /**
     * Get description value
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }
    /**
     * Set description value
     * @param string $description
     * @return \Pggns\MidocoApi\OrderglobalSD\StructType\EinvoiceGatewayDTO
     */
    public function setDescription(?string $description = null): self
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        $this->description = $description;
        
        return $this;
    }
    /**
     * Get gateway value
     * @return string|null
     */
    public function getGateway(): ?string
    {
        return $this->gateway;
    }
    /**
     * Set gateway value
     * @param string $gateway
     * @return \Pggns\MidocoApi\OrderglobalSD\StructType\EinvoiceGatewayDTO
     */
    public function setGateway(?string $gateway = null): self
    {
        // validation for constraint: string
        if (!is_null($gateway) && !is_string($gateway)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($gateway, true), gettype($gateway)), __LINE__);
        }
        $this->gateway = $gateway;
        
        return $this;
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
     * @return \Pggns\MidocoApi\OrderglobalSD\StructType\EinvoiceGatewayDTO
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
