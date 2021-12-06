<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateLogEntryRequest StructType
 * @subpackage Structs
 */
class CreateLogEntryRequest extends AbstractStructBase
{
    /**
     * The MidocoLogEntry
     * Meta information extracted from the WSDL
     * - ref: MidocoLogEntry
     * @var \Pggns\MidocoApi\Mis\StructType\LogentryDTO|null
     */
    protected ?\Pggns\MidocoApi\Mis\StructType\LogentryDTO $MidocoLogEntry = null;
    /**
     * Constructor method for CreateLogEntryRequest
     * @uses CreateLogEntryRequest::setMidocoLogEntry()
     * @param \Pggns\MidocoApi\Mis\StructType\LogentryDTO $midocoLogEntry
     */
    public function __construct(?\Pggns\MidocoApi\Mis\StructType\LogentryDTO $midocoLogEntry = null)
    {
        $this
            ->setMidocoLogEntry($midocoLogEntry);
    }
    /**
     * Get MidocoLogEntry value
     * @return \Pggns\MidocoApi\Mis\StructType\LogentryDTO|null
     */
    public function getMidocoLogEntry(): ?\Pggns\MidocoApi\Mis\StructType\LogentryDTO
    {
        return $this->MidocoLogEntry;
    }
    /**
     * Set MidocoLogEntry value
     * @param \Pggns\MidocoApi\Mis\StructType\LogentryDTO $midocoLogEntry
     * @return \Pggns\MidocoApi\Mis\StructType\CreateLogEntryRequest
     */
    public function setMidocoLogEntry(?\Pggns\MidocoApi\Mis\StructType\LogentryDTO $midocoLogEntry = null): self
    {
        $this->MidocoLogEntry = $midocoLogEntry;
        
        return $this;
    }
}
