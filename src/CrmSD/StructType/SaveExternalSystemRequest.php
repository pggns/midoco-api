<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\CrmSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveExternalSystemRequest StructType
 * @subpackage Structs
 */
class SaveExternalSystemRequest extends AbstractStructBase
{
    /**
     * The MidocoExternalSystem
     * Meta information extracted from the WSDL
     * - ref: MidocoExternalSystem
     * @var \Pggns\MidocoApi\Api\CrmSD\StructType\ExternalSystemDTO|null
     */
    protected ?\Pggns\MidocoApi\Api\CrmSD\StructType\ExternalSystemDTO $MidocoExternalSystem = null;
    /**
     * Constructor method for SaveExternalSystemRequest
     * @uses SaveExternalSystemRequest::setMidocoExternalSystem()
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\ExternalSystemDTO $midocoExternalSystem
     */
    public function __construct(?\Pggns\MidocoApi\Api\CrmSD\StructType\ExternalSystemDTO $midocoExternalSystem = null)
    {
        $this
            ->setMidocoExternalSystem($midocoExternalSystem);
    }
    /**
     * Get MidocoExternalSystem value
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\ExternalSystemDTO|null
     */
    public function getMidocoExternalSystem(): ?\Pggns\MidocoApi\Api\CrmSD\StructType\ExternalSystemDTO
    {
        return $this->MidocoExternalSystem;
    }
    /**
     * Set MidocoExternalSystem value
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\ExternalSystemDTO $midocoExternalSystem
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\SaveExternalSystemRequest
     */
    public function setMidocoExternalSystem(?\Pggns\MidocoApi\Api\CrmSD\StructType\ExternalSystemDTO $midocoExternalSystem = null): self
    {
        $this->MidocoExternalSystem = $midocoExternalSystem;
        
        return $this;
    }
}