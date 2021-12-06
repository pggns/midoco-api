<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetEntryDetailsRequest StructType
 * @subpackage Structs
 */
class GetEntryDetailsRequest extends AbstractStructBase
{
    /**
     * The MidocoDebitorAccountEntry
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Api\Order\StructType\DebitorAccountEntryType|null
     */
    protected ?\Pggns\MidocoApi\Api\Order\StructType\DebitorAccountEntryType $MidocoDebitorAccountEntry = null;
    /**
     * Constructor method for GetEntryDetailsRequest
     * @uses GetEntryDetailsRequest::setMidocoDebitorAccountEntry()
     * @param \Pggns\MidocoApi\Api\Order\StructType\DebitorAccountEntryType $midocoDebitorAccountEntry
     */
    public function __construct(?\Pggns\MidocoApi\Api\Order\StructType\DebitorAccountEntryType $midocoDebitorAccountEntry = null)
    {
        $this
            ->setMidocoDebitorAccountEntry($midocoDebitorAccountEntry);
    }
    /**
     * Get MidocoDebitorAccountEntry value
     * @return \Pggns\MidocoApi\Api\Order\StructType\DebitorAccountEntryType|null
     */
    public function getMidocoDebitorAccountEntry(): ?\Pggns\MidocoApi\Api\Order\StructType\DebitorAccountEntryType
    {
        return $this->MidocoDebitorAccountEntry;
    }
    /**
     * Set MidocoDebitorAccountEntry value
     * @param \Pggns\MidocoApi\Api\Order\StructType\DebitorAccountEntryType $midocoDebitorAccountEntry
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetEntryDetailsRequest
     */
    public function setMidocoDebitorAccountEntry(?\Pggns\MidocoApi\Api\Order\StructType\DebitorAccountEntryType $midocoDebitorAccountEntry = null): self
    {
        $this->MidocoDebitorAccountEntry = $midocoDebitorAccountEntry;
        
        return $this;
    }
}
