<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoPrintSelectionGroupForCustomer StructType
 * @subpackage Structs
 */
class MidocoPrintSelectionGroupForCustomer extends AbstractStructBase
{
    /**
     * The sourcePrintTypeId
     * @var string|null
     */
    protected ?string $sourcePrintTypeId = null;
    /**
     * The destinationPrintTypeId
     * @var string|null
     */
    protected ?string $destinationPrintTypeId = null;
    /**
     * Constructor method for MidocoPrintSelectionGroupForCustomer
     * @uses MidocoPrintSelectionGroupForCustomer::setSourcePrintTypeId()
     * @uses MidocoPrintSelectionGroupForCustomer::setDestinationPrintTypeId()
     * @param string $sourcePrintTypeId
     * @param string $destinationPrintTypeId
     */
    public function __construct(?string $sourcePrintTypeId = null, ?string $destinationPrintTypeId = null)
    {
        $this
            ->setSourcePrintTypeId($sourcePrintTypeId)
            ->setDestinationPrintTypeId($destinationPrintTypeId);
    }
    /**
     * Get sourcePrintTypeId value
     * @return string|null
     */
    public function getSourcePrintTypeId(): ?string
    {
        return $this->sourcePrintTypeId;
    }
    /**
     * Set sourcePrintTypeId value
     * @param string $sourcePrintTypeId
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoPrintSelectionGroupForCustomer
     */
    public function setSourcePrintTypeId(?string $sourcePrintTypeId = null): self
    {
        // validation for constraint: string
        if (!is_null($sourcePrintTypeId) && !is_string($sourcePrintTypeId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sourcePrintTypeId, true), gettype($sourcePrintTypeId)), __LINE__);
        }
        $this->sourcePrintTypeId = $sourcePrintTypeId;
        
        return $this;
    }
    /**
     * Get destinationPrintTypeId value
     * @return string|null
     */
    public function getDestinationPrintTypeId(): ?string
    {
        return $this->destinationPrintTypeId;
    }
    /**
     * Set destinationPrintTypeId value
     * @param string $destinationPrintTypeId
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoPrintSelectionGroupForCustomer
     */
    public function setDestinationPrintTypeId(?string $destinationPrintTypeId = null): self
    {
        // validation for constraint: string
        if (!is_null($destinationPrintTypeId) && !is_string($destinationPrintTypeId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($destinationPrintTypeId, true), gettype($destinationPrintTypeId)), __LINE__);
        }
        $this->destinationPrintTypeId = $destinationPrintTypeId;
        
        return $this;
    }
}
