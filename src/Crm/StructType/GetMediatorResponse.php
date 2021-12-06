<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Crm\StructType;

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
     * @var \Pggns\MidocoApi\Api\Crm\StructType\MidocoMediatorDTO|null
     */
    protected ?\Pggns\MidocoApi\Api\Crm\StructType\MidocoMediatorDTO $MidocoMediator = null;
    /**
     * Constructor method for GetMediatorResponse
     * @uses GetMediatorResponse::setMidocoMediator()
     * @param \Pggns\MidocoApi\Api\Crm\StructType\MidocoMediatorDTO $midocoMediator
     */
    public function __construct(?\Pggns\MidocoApi\Api\Crm\StructType\MidocoMediatorDTO $midocoMediator = null)
    {
        $this
            ->setMidocoMediator($midocoMediator);
    }
    /**
     * Get MidocoMediator value
     * @return \Pggns\MidocoApi\Api\Crm\StructType\MidocoMediatorDTO|null
     */
    public function getMidocoMediator(): ?\Pggns\MidocoApi\Api\Crm\StructType\MidocoMediatorDTO
    {
        return $this->MidocoMediator;
    }
    /**
     * Set MidocoMediator value
     * @param \Pggns\MidocoApi\Api\Crm\StructType\MidocoMediatorDTO $midocoMediator
     * @return \Pggns\MidocoApi\Api\Crm\StructType\GetMediatorResponse
     */
    public function setMidocoMediator(?\Pggns\MidocoApi\Api\Crm\StructType\MidocoMediatorDTO $midocoMediator = null): self
    {
        $this->MidocoMediator = $midocoMediator;
        
        return $this;
    }
}
