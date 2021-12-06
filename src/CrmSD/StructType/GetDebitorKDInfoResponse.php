<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\CrmSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetDebitorKDInfoResponse StructType
 * @subpackage Structs
 */
class GetDebitorKDInfoResponse extends AbstractStructBase
{
    /**
     * The MidocoDebitorKDInfo
     * Meta information extracted from the WSDL
     * - ref: MidocoDebitorKDInfo
     * @var \Pggns\MidocoApi\CrmSD\StructType\MidocoDebitorKDInfo|null
     */
    protected ?\Pggns\MidocoApi\CrmSD\StructType\MidocoDebitorKDInfo $MidocoDebitorKDInfo = null;
    /**
     * Constructor method for GetDebitorKDInfoResponse
     * @uses GetDebitorKDInfoResponse::setMidocoDebitorKDInfo()
     * @param \Pggns\MidocoApi\CrmSD\StructType\MidocoDebitorKDInfo $midocoDebitorKDInfo
     */
    public function __construct(?\Pggns\MidocoApi\CrmSD\StructType\MidocoDebitorKDInfo $midocoDebitorKDInfo = null)
    {
        $this
            ->setMidocoDebitorKDInfo($midocoDebitorKDInfo);
    }
    /**
     * Get MidocoDebitorKDInfo value
     * @return \Pggns\MidocoApi\CrmSD\StructType\MidocoDebitorKDInfo|null
     */
    public function getMidocoDebitorKDInfo(): ?\Pggns\MidocoApi\CrmSD\StructType\MidocoDebitorKDInfo
    {
        return $this->MidocoDebitorKDInfo;
    }
    /**
     * Set MidocoDebitorKDInfo value
     * @param \Pggns\MidocoApi\CrmSD\StructType\MidocoDebitorKDInfo $midocoDebitorKDInfo
     * @return \Pggns\MidocoApi\CrmSD\StructType\GetDebitorKDInfoResponse
     */
    public function setMidocoDebitorKDInfo(?\Pggns\MidocoApi\CrmSD\StructType\MidocoDebitorKDInfo $midocoDebitorKDInfo = null): self
    {
        $this->MidocoDebitorKDInfo = $midocoDebitorKDInfo;
        
        return $this;
    }
}
