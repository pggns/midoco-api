<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoMisReportInfo StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoMisReportInfo extends MisReportDTO
{
    /**
     * The cubeName
     * @var string|null
     */
    protected ?string $cubeName = null;
    /**
     * Constructor method for MidocoMisReportInfo
     * @uses MidocoMisReportInfo::setCubeName()
     * @param string $cubeName
     */
    public function __construct(?string $cubeName = null)
    {
        $this
            ->setCubeName($cubeName);
    }
    /**
     * Get cubeName value
     * @return string|null
     */
    public function getCubeName(): ?string
    {
        return $this->cubeName;
    }
    /**
     * Set cubeName value
     * @param string $cubeName
     * @return \Pggns\MidocoApi\Mis\StructType\MidocoMisReportInfo
     */
    public function setCubeName(?string $cubeName = null): self
    {
        // validation for constraint: string
        if (!is_null($cubeName) && !is_string($cubeName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cubeName, true), gettype($cubeName)), __LINE__);
        }
        $this->cubeName = $cubeName;
        
        return $this;
    }
}
