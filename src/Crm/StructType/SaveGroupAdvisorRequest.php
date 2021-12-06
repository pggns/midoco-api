<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveGroupAdvisorRequest StructType
 * @subpackage Structs
 */
class SaveGroupAdvisorRequest extends AbstractStructBase
{
    /**
     * The MidocoGroupAdviser
     * Meta information extracted from the WSDL
     * - ref: MidocoGroupAdviser
     * @var \Pggns\MidocoApi\Api\Crm\StructType\MidocoGroupAdviser|null
     */
    protected ?\Pggns\MidocoApi\Api\Crm\StructType\MidocoGroupAdviser $MidocoGroupAdviser = null;
    /**
     * Constructor method for SaveGroupAdvisorRequest
     * @uses SaveGroupAdvisorRequest::setMidocoGroupAdviser()
     * @param \Pggns\MidocoApi\Api\Crm\StructType\MidocoGroupAdviser $midocoGroupAdviser
     */
    public function __construct(?\Pggns\MidocoApi\Api\Crm\StructType\MidocoGroupAdviser $midocoGroupAdviser = null)
    {
        $this
            ->setMidocoGroupAdviser($midocoGroupAdviser);
    }
    /**
     * Get MidocoGroupAdviser value
     * @return \Pggns\MidocoApi\Api\Crm\StructType\MidocoGroupAdviser|null
     */
    public function getMidocoGroupAdviser(): ?\Pggns\MidocoApi\Api\Crm\StructType\MidocoGroupAdviser
    {
        return $this->MidocoGroupAdviser;
    }
    /**
     * Set MidocoGroupAdviser value
     * @param \Pggns\MidocoApi\Api\Crm\StructType\MidocoGroupAdviser $midocoGroupAdviser
     * @return \Pggns\MidocoApi\Api\Crm\StructType\SaveGroupAdvisorRequest
     */
    public function setMidocoGroupAdviser(?\Pggns\MidocoApi\Api\Crm\StructType\MidocoGroupAdviser $midocoGroupAdviser = null): self
    {
        $this->MidocoGroupAdviser = $midocoGroupAdviser;
        
        return $this;
    }
}
