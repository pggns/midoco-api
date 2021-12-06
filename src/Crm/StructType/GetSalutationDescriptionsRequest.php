<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSalutationDescriptionsRequest StructType
 * @subpackage Structs
 */
class GetSalutationDescriptionsRequest extends AbstractStructBase
{
    /**
     * The MidocoSalutationDescription
     * Meta information extracted from the WSDL
     * - ref: MidocoSalutationDescription
     * @var \Pggns\MidocoApi\Crm\StructType\SalutationDescriptionDTO|null
     */
    protected ?\Pggns\MidocoApi\Crm\StructType\SalutationDescriptionDTO $MidocoSalutationDescription = null;
    /**
     * Constructor method for GetSalutationDescriptionsRequest
     * @uses GetSalutationDescriptionsRequest::setMidocoSalutationDescription()
     * @param \Pggns\MidocoApi\Crm\StructType\SalutationDescriptionDTO $midocoSalutationDescription
     */
    public function __construct(?\Pggns\MidocoApi\Crm\StructType\SalutationDescriptionDTO $midocoSalutationDescription = null)
    {
        $this
            ->setMidocoSalutationDescription($midocoSalutationDescription);
    }
    /**
     * Get MidocoSalutationDescription value
     * @return \Pggns\MidocoApi\Crm\StructType\SalutationDescriptionDTO|null
     */
    public function getMidocoSalutationDescription(): ?\Pggns\MidocoApi\Crm\StructType\SalutationDescriptionDTO
    {
        return $this->MidocoSalutationDescription;
    }
    /**
     * Set MidocoSalutationDescription value
     * @param \Pggns\MidocoApi\Crm\StructType\SalutationDescriptionDTO $midocoSalutationDescription
     * @return \Pggns\MidocoApi\Crm\StructType\GetSalutationDescriptionsRequest
     */
    public function setMidocoSalutationDescription(?\Pggns\MidocoApi\Crm\StructType\SalutationDescriptionDTO $midocoSalutationDescription = null): self
    {
        $this->MidocoSalutationDescription = $midocoSalutationDescription;
        
        return $this;
    }
}
