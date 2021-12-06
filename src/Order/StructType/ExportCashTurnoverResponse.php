<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExportCashTurnoverResponse StructType
 * @subpackage Structs
 */
class ExportCashTurnoverResponse extends AbstractStructBase
{
    /**
     * The MidocoCashTurnoverExport
     * Meta information extracted from the WSDL
     * - ref: MidocoCashTurnoverExport
     * @var \Pggns\MidocoApi\Api\Order\StructType\MidocoCashTurnoverExport|null
     */
    protected ?\Pggns\MidocoApi\Api\Order\StructType\MidocoCashTurnoverExport $MidocoCashTurnoverExport = null;
    /**
     * Constructor method for ExportCashTurnoverResponse
     * @uses ExportCashTurnoverResponse::setMidocoCashTurnoverExport()
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoCashTurnoverExport $midocoCashTurnoverExport
     */
    public function __construct(?\Pggns\MidocoApi\Api\Order\StructType\MidocoCashTurnoverExport $midocoCashTurnoverExport = null)
    {
        $this
            ->setMidocoCashTurnoverExport($midocoCashTurnoverExport);
    }
    /**
     * Get MidocoCashTurnoverExport value
     * @return \Pggns\MidocoApi\Api\Order\StructType\MidocoCashTurnoverExport|null
     */
    public function getMidocoCashTurnoverExport(): ?\Pggns\MidocoApi\Api\Order\StructType\MidocoCashTurnoverExport
    {
        return $this->MidocoCashTurnoverExport;
    }
    /**
     * Set MidocoCashTurnoverExport value
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoCashTurnoverExport $midocoCashTurnoverExport
     * @return \Pggns\MidocoApi\Api\Order\StructType\ExportCashTurnoverResponse
     */
    public function setMidocoCashTurnoverExport(?\Pggns\MidocoApi\Api\Order\StructType\MidocoCashTurnoverExport $midocoCashTurnoverExport = null): self
    {
        $this->MidocoCashTurnoverExport = $midocoCashTurnoverExport;
        
        return $this;
    }
}
