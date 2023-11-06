<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\MidocoSystem\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAvailablePrintTypesDestinationRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetAvailablePrintTypesDestinationRequest extends AbstractStructBase
{
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * The template
     * @var string|null
     */
    protected ?string $template = null;
    /**
     * Constructor method for GetAvailablePrintTypesDestinationRequest
     * @uses GetAvailablePrintTypesDestinationRequest::setUnitName()
     * @uses GetAvailablePrintTypesDestinationRequest::setTemplate()
     * @param string $unitName
     * @param string $template
     */
    public function __construct(?string $unitName = null, ?string $template = null)
    {
        $this
            ->setUnitName($unitName)
            ->setTemplate($template);
    }
    /**
     * Get unitName value
     * @return string|null
     */
    public function getUnitName(): ?string
    {
        return $this->unitName;
    }
    /**
     * Set unitName value
     * @param string $unitName
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\GetAvailablePrintTypesDestinationRequest
     */
    public function setUnitName(?string $unitName = null): self
    {
        // validation for constraint: string
        if (!is_null($unitName) && !is_string($unitName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($unitName, true), gettype($unitName)), __LINE__);
        }
        $this->unitName = $unitName;
        
        return $this;
    }
    /**
     * Get template value
     * @return string|null
     */
    public function getTemplate(): ?string
    {
        return $this->template;
    }
    /**
     * Set template value
     * @param string $template
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\GetAvailablePrintTypesDestinationRequest
     */
    public function setTemplate(?string $template = null): self
    {
        // validation for constraint: string
        if (!is_null($template) && !is_string($template)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($template, true), gettype($template)), __LINE__);
        }
        $this->template = $template;
        
        return $this;
    }
}
