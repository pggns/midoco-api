<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\System\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeletePrintRemarkDestinationRequest StructType
 * @subpackage Structs
 */
class DeletePrintRemarkDestinationRequest extends AbstractStructBase
{
    /**
     * The MidocoPrintRemarkDestination
     * Meta information extracted from the WSDL
     * - ref: MidocoPrintRemarkDestination
     * @var \Pggns\MidocoApi\System\StructType\MidocoPrintRemarkDestination|null
     */
    protected ?\Pggns\MidocoApi\System\StructType\MidocoPrintRemarkDestination $MidocoPrintRemarkDestination = null;
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * Constructor method for DeletePrintRemarkDestinationRequest
     * @uses DeletePrintRemarkDestinationRequest::setMidocoPrintRemarkDestination()
     * @uses DeletePrintRemarkDestinationRequest::setUnitName()
     * @param \Pggns\MidocoApi\System\StructType\MidocoPrintRemarkDestination $midocoPrintRemarkDestination
     * @param string $unitName
     */
    public function __construct(?\Pggns\MidocoApi\System\StructType\MidocoPrintRemarkDestination $midocoPrintRemarkDestination = null, ?string $unitName = null)
    {
        $this
            ->setMidocoPrintRemarkDestination($midocoPrintRemarkDestination)
            ->setUnitName($unitName);
    }
    /**
     * Get MidocoPrintRemarkDestination value
     * @return \Pggns\MidocoApi\System\StructType\MidocoPrintRemarkDestination|null
     */
    public function getMidocoPrintRemarkDestination(): ?\Pggns\MidocoApi\System\StructType\MidocoPrintRemarkDestination
    {
        return $this->MidocoPrintRemarkDestination;
    }
    /**
     * Set MidocoPrintRemarkDestination value
     * @param \Pggns\MidocoApi\System\StructType\MidocoPrintRemarkDestination $midocoPrintRemarkDestination
     * @return \Pggns\MidocoApi\System\StructType\DeletePrintRemarkDestinationRequest
     */
    public function setMidocoPrintRemarkDestination(?\Pggns\MidocoApi\System\StructType\MidocoPrintRemarkDestination $midocoPrintRemarkDestination = null): self
    {
        $this->MidocoPrintRemarkDestination = $midocoPrintRemarkDestination;
        
        return $this;
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
     * @return \Pggns\MidocoApi\System\StructType\DeletePrintRemarkDestinationRequest
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
}
