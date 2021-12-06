<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\CrmSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetDebitorResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: getDebitor --- returns a debitor assigned to a customer if it is present; the debitor assigned to the org unit otherwise
 * @subpackage Structs
 */
class GetDebitorResponse extends AbstractStructBase
{
    /**
     * The MidocoDebitor
     * Meta information extracted from the WSDL
     * - ref: MidocoDebitor
     * @var \Pggns\MidocoApi\CrmSD\StructType\DebitorDTO|null
     */
    protected ?\Pggns\MidocoApi\CrmSD\StructType\DebitorDTO $MidocoDebitor = null;
    /**
     * Constructor method for GetDebitorResponse
     * @uses GetDebitorResponse::setMidocoDebitor()
     * @param \Pggns\MidocoApi\CrmSD\StructType\DebitorDTO $midocoDebitor
     */
    public function __construct(?\Pggns\MidocoApi\CrmSD\StructType\DebitorDTO $midocoDebitor = null)
    {
        $this
            ->setMidocoDebitor($midocoDebitor);
    }
    /**
     * Get MidocoDebitor value
     * @return \Pggns\MidocoApi\CrmSD\StructType\DebitorDTO|null
     */
    public function getMidocoDebitor(): ?\Pggns\MidocoApi\CrmSD\StructType\DebitorDTO
    {
        return $this->MidocoDebitor;
    }
    /**
     * Set MidocoDebitor value
     * @param \Pggns\MidocoApi\CrmSD\StructType\DebitorDTO $midocoDebitor
     * @return \Pggns\MidocoApi\CrmSD\StructType\GetDebitorResponse
     */
    public function setMidocoDebitor(?\Pggns\MidocoApi\CrmSD\StructType\DebitorDTO $midocoDebitor = null): self
    {
        $this->MidocoDebitor = $midocoDebitor;
        
        return $this;
    }
}
