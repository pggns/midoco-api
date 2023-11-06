<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveGroupAdvisorRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveGroupAdvisorRequest extends AbstractStructBase
{
    /**
     * The MidocoGroupAdviser
     * Meta information extracted from the WSDL
     * - ref: MidocoGroupAdviser
     * @var \Pggns\MidocoApi\Crm\StructType\MidocoGroupAdviser|null
     */
    protected ?\Pggns\MidocoApi\Crm\StructType\MidocoGroupAdviser $MidocoGroupAdviser = null;
    /**
     * Constructor method for SaveGroupAdvisorRequest
     * @uses SaveGroupAdvisorRequest::setMidocoGroupAdviser()
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoGroupAdviser $midocoGroupAdviser
     */
    public function __construct(?\Pggns\MidocoApi\Crm\StructType\MidocoGroupAdviser $midocoGroupAdviser = null)
    {
        $this
            ->setMidocoGroupAdviser($midocoGroupAdviser);
    }
    /**
     * Get MidocoGroupAdviser value
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoGroupAdviser|null
     */
    public function getMidocoGroupAdviser(): ?\Pggns\MidocoApi\Crm\StructType\MidocoGroupAdviser
    {
        return $this->MidocoGroupAdviser;
    }
    /**
     * Set MidocoGroupAdviser value
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoGroupAdviser $midocoGroupAdviser
     * @return \Pggns\MidocoApi\Crm\StructType\SaveGroupAdvisorRequest
     */
    public function setMidocoGroupAdviser(?\Pggns\MidocoApi\Crm\StructType\MidocoGroupAdviser $midocoGroupAdviser = null): self
    {
        $this->MidocoGroupAdviser = $midocoGroupAdviser;
        
        return $this;
    }
}
