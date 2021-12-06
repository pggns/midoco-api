<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FillJasperReportResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: fillJasperReport --- fill a Jasper report, considering the list of supplied parameters
 * @subpackage Structs
 */
class FillJasperReportResponse extends AbstractStructBase
{
    /**
     * The file
     * @var string|null
     */
    protected ?string $file = null;
    /**
     * The preferredFileName
     * @var string|null
     */
    protected ?string $preferredFileName = null;
    /**
     * Constructor method for FillJasperReportResponse
     * @uses FillJasperReportResponse::setFile()
     * @uses FillJasperReportResponse::setPreferredFileName()
     * @param string $file
     * @param string $preferredFileName
     */
    public function __construct(?string $file = null, ?string $preferredFileName = null)
    {
        $this
            ->setFile($file)
            ->setPreferredFileName($preferredFileName);
    }
    /**
     * Get file value
     * @return string|null
     */
    public function getFile(): ?string
    {
        return $this->file;
    }
    /**
     * Set file value
     * @param string $file
     * @return \Pggns\MidocoApi\Mis\StructType\FillJasperReportResponse
     */
    public function setFile(?string $file = null): self
    {
        // validation for constraint: string
        if (!is_null($file) && !is_string($file)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($file, true), gettype($file)), __LINE__);
        }
        $this->file = $file;
        
        return $this;
    }
    /**
     * Get preferredFileName value
     * @return string|null
     */
    public function getPreferredFileName(): ?string
    {
        return $this->preferredFileName;
    }
    /**
     * Set preferredFileName value
     * @param string $preferredFileName
     * @return \Pggns\MidocoApi\Mis\StructType\FillJasperReportResponse
     */
    public function setPreferredFileName(?string $preferredFileName = null): self
    {
        // validation for constraint: string
        if (!is_null($preferredFileName) && !is_string($preferredFileName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($preferredFileName, true), gettype($preferredFileName)), __LINE__);
        }
        $this->preferredFileName = $preferredFileName;
        
        return $this;
    }
}
