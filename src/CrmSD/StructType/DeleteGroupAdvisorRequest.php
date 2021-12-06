<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\CrmSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteGroupAdvisorRequest StructType
 * @subpackage Structs
 */
class DeleteGroupAdvisorRequest extends AbstractStructBase
{
    /**
     * The MidocoGroupAdviser
     * Meta information extracted from the WSDL
     * - ref: MidocoGroupAdviser
     * @var \Pggns\MidocoApi\CrmSD\StructType\MidocoGroupAdviser|null
     */
    protected ?\Pggns\MidocoApi\CrmSD\StructType\MidocoGroupAdviser $MidocoGroupAdviser = null;
    /**
     * Constructor method for DeleteGroupAdvisorRequest
     * @uses DeleteGroupAdvisorRequest::setMidocoGroupAdviser()
     * @param \Pggns\MidocoApi\CrmSD\StructType\MidocoGroupAdviser $midocoGroupAdviser
     */
    public function __construct(?\Pggns\MidocoApi\CrmSD\StructType\MidocoGroupAdviser $midocoGroupAdviser = null)
    {
        $this
            ->setMidocoGroupAdviser($midocoGroupAdviser);
    }
    /**
     * Get MidocoGroupAdviser value
     * @return \Pggns\MidocoApi\CrmSD\StructType\MidocoGroupAdviser|null
     */
    public function getMidocoGroupAdviser(): ?\Pggns\MidocoApi\CrmSD\StructType\MidocoGroupAdviser
    {
        return $this->MidocoGroupAdviser;
    }
    /**
     * Set MidocoGroupAdviser value
     * @param \Pggns\MidocoApi\CrmSD\StructType\MidocoGroupAdviser $midocoGroupAdviser
     * @return \Pggns\MidocoApi\CrmSD\StructType\DeleteGroupAdvisorRequest
     */
    public function setMidocoGroupAdviser(?\Pggns\MidocoApi\CrmSD\StructType\MidocoGroupAdviser $midocoGroupAdviser = null): self
    {
        $this->MidocoGroupAdviser = $midocoGroupAdviser;
        
        return $this;
    }
}
