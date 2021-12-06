<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoJasperReportParameter StructType
 * @subpackage Structs
 */
class MidocoJasperReportParameter extends JasperReportParameterDTO
{
    /**
     * The name
     * @var string|null
     */
    protected ?string $name = null;
    /**
     * Constructor method for MidocoJasperReportParameter
     * @uses MidocoJasperReportParameter::setName()
     * @param string $name
     */
    public function __construct(?string $name = null)
    {
        $this
            ->setName($name);
    }
    /**
     * Get name value
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }
    /**
     * Set name value
     * @param string $name
     * @return \Pggns\MidocoApi\Mis\StructType\MidocoJasperReportParameter
     */
    public function setName(?string $name = null): self
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        $this->name = $name;
        
        return $this;
    }
}
