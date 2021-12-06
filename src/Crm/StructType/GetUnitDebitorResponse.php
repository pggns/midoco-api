<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetUnitDebitorResponse StructType
 * @subpackage Structs
 */
class GetUnitDebitorResponse extends AbstractStructBase
{
    /**
     * The MidocoDebitor
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: MidocoDebitor
     * @var \Pggns\MidocoApi\Api\Crm\StructType\DebitorDTO|null
     */
    protected ?\Pggns\MidocoApi\Api\Crm\StructType\DebitorDTO $MidocoDebitor = null;
    /**
     * Constructor method for GetUnitDebitorResponse
     * @uses GetUnitDebitorResponse::setMidocoDebitor()
     * @param \Pggns\MidocoApi\Api\Crm\StructType\DebitorDTO $midocoDebitor
     */
    public function __construct(?\Pggns\MidocoApi\Api\Crm\StructType\DebitorDTO $midocoDebitor = null)
    {
        $this
            ->setMidocoDebitor($midocoDebitor);
    }
    /**
     * Get MidocoDebitor value
     * @return \Pggns\MidocoApi\Api\Crm\StructType\DebitorDTO|null
     */
    public function getMidocoDebitor(): ?\Pggns\MidocoApi\Api\Crm\StructType\DebitorDTO
    {
        return $this->MidocoDebitor;
    }
    /**
     * Set MidocoDebitor value
     * @param \Pggns\MidocoApi\Api\Crm\StructType\DebitorDTO $midocoDebitor
     * @return \Pggns\MidocoApi\Api\Crm\StructType\GetUnitDebitorResponse
     */
    public function setMidocoDebitor(?\Pggns\MidocoApi\Api\Crm\StructType\DebitorDTO $midocoDebitor = null): self
    {
        $this->MidocoDebitor = $midocoDebitor;
        
        return $this;
    }
}
