<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

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
     * @var \Pggns\MidocoApi\Crm\StructType\MidocoMediatorDTO|null
     */
    protected ?\Pggns\MidocoApi\Crm\StructType\MidocoMediatorDTO $MidocoMediator = null;
    /**
     * Constructor method for GetMediatorResponse
     * @uses GetMediatorResponse::setMidocoMediator()
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoMediatorDTO $midocoMediator
     */
    public function __construct(?\Pggns\MidocoApi\Crm\StructType\MidocoMediatorDTO $midocoMediator = null)
    {
        $this
            ->setMidocoMediator($midocoMediator);
    }
    /**
     * Get MidocoMediator value
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoMediatorDTO|null
     */
    public function getMidocoMediator(): ?\Pggns\MidocoApi\Crm\StructType\MidocoMediatorDTO
    {
        return $this->MidocoMediator;
    }
    /**
     * Set MidocoMediator value
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoMediatorDTO $midocoMediator
     * @return \Pggns\MidocoApi\Crm\StructType\GetMediatorResponse
     */
    public function setMidocoMediator(?\Pggns\MidocoApi\Crm\StructType\MidocoMediatorDTO $midocoMediator = null): self
    {
        $this->MidocoMediator = $midocoMediator;
        
        return $this;
    }
}
