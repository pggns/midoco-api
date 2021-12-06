<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveDebitorKDInfoResponse StructType
 * @subpackage Structs
 */
class SaveDebitorKDInfoResponse extends AbstractStructBase
{
    /**
     * The MidocoDebitorKDInfo
     * Meta information extracted from the WSDL
     * - ref: MidocoDebitorKDInfo
     * @var \Pggns\MidocoApi\Crm\StructType\MidocoDebitorKDInfo|null
     */
    protected ?\Pggns\MidocoApi\Crm\StructType\MidocoDebitorKDInfo $MidocoDebitorKDInfo = null;
    /**
     * Constructor method for SaveDebitorKDInfoResponse
     * @uses SaveDebitorKDInfoResponse::setMidocoDebitorKDInfo()
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoDebitorKDInfo $midocoDebitorKDInfo
     */
    public function __construct(?\Pggns\MidocoApi\Crm\StructType\MidocoDebitorKDInfo $midocoDebitorKDInfo = null)
    {
        $this
            ->setMidocoDebitorKDInfo($midocoDebitorKDInfo);
    }
    /**
     * Get MidocoDebitorKDInfo value
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoDebitorKDInfo|null
     */
    public function getMidocoDebitorKDInfo(): ?\Pggns\MidocoApi\Crm\StructType\MidocoDebitorKDInfo
    {
        return $this->MidocoDebitorKDInfo;
    }
    /**
     * Set MidocoDebitorKDInfo value
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoDebitorKDInfo $midocoDebitorKDInfo
     * @return \Pggns\MidocoApi\Crm\StructType\SaveDebitorKDInfoResponse
     */
    public function setMidocoDebitorKDInfo(?\Pggns\MidocoApi\Crm\StructType\MidocoDebitorKDInfo $midocoDebitorKDInfo = null): self
    {
        $this->MidocoDebitorKDInfo = $midocoDebitorKDInfo;
        
        return $this;
    }
}
