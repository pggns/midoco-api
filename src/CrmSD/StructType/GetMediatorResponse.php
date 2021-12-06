<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\CrmSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMediatorResponse StructType
 * @subpackage Structs
 */
class GetMediatorResponse extends AbstractStructBase
{
    /**
     * The MidocoMediator
     * Meta information extracted from the WSDL
     * - ref: MidocoMediator
     * @var \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoMediatorDTO|null
     */
    protected ?\Pggns\MidocoApi\Api\CrmSD\StructType\MidocoMediatorDTO $MidocoMediator = null;
    /**
     * Constructor method for GetMediatorResponse
     * @uses GetMediatorResponse::setMidocoMediator()
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoMediatorDTO $midocoMediator
     */
    public function __construct(?\Pggns\MidocoApi\Api\CrmSD\StructType\MidocoMediatorDTO $midocoMediator = null)
    {
        $this
            ->setMidocoMediator($midocoMediator);
    }
    /**
     * Get MidocoMediator value
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoMediatorDTO|null
     */
    public function getMidocoMediator(): ?\Pggns\MidocoApi\Api\CrmSD\StructType\MidocoMediatorDTO
    {
        return $this->MidocoMediator;
    }
    /**
     * Set MidocoMediator value
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoMediatorDTO $midocoMediator
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\GetMediatorResponse
     */
    public function setMidocoMediator(?\Pggns\MidocoApi\Api\CrmSD\StructType\MidocoMediatorDTO $midocoMediator = null): self
    {
        $this->MidocoMediator = $midocoMediator;
        
        return $this;
    }
}
