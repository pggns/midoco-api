<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteSalutationDescriptionRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeleteSalutationDescriptionRequest extends AbstractStructBase
{
    /**
     * The MidocoSalutationDescription
     * Meta information extracted from the WSDL
     * - ref: MidocoSalutationDescription
     * @var \Pggns\MidocoApi\Crm\StructType\SalutationDescriptionDTO|null
     */
    protected ?\Pggns\MidocoApi\Crm\StructType\SalutationDescriptionDTO $MidocoSalutationDescription = null;
    /**
     * Constructor method for DeleteSalutationDescriptionRequest
     * @uses DeleteSalutationDescriptionRequest::setMidocoSalutationDescription()
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
     * @return \Pggns\MidocoApi\Crm\StructType\DeleteSalutationDescriptionRequest
     */
    public function setMidocoSalutationDescription(?\Pggns\MidocoApi\Crm\StructType\SalutationDescriptionDTO $midocoSalutationDescription = null): self
    {
        $this->MidocoSalutationDescription = $midocoSalutationDescription;
        
        return $this;
    }
}
