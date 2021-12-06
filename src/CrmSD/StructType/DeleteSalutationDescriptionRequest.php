<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\CrmSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteSalutationDescriptionRequest StructType
 * @subpackage Structs
 */
class DeleteSalutationDescriptionRequest extends AbstractStructBase
{
    /**
     * The MidocoSalutationDescription
     * Meta information extracted from the WSDL
     * - ref: MidocoSalutationDescription
     * @var \Pggns\MidocoApi\CrmSD\StructType\SalutationDescriptionDTO|null
     */
    protected ?\Pggns\MidocoApi\CrmSD\StructType\SalutationDescriptionDTO $MidocoSalutationDescription = null;
    /**
     * Constructor method for DeleteSalutationDescriptionRequest
     * @uses DeleteSalutationDescriptionRequest::setMidocoSalutationDescription()
     * @param \Pggns\MidocoApi\CrmSD\StructType\SalutationDescriptionDTO $midocoSalutationDescription
     */
    public function __construct(?\Pggns\MidocoApi\CrmSD\StructType\SalutationDescriptionDTO $midocoSalutationDescription = null)
    {
        $this
            ->setMidocoSalutationDescription($midocoSalutationDescription);
    }
    /**
     * Get MidocoSalutationDescription value
     * @return \Pggns\MidocoApi\CrmSD\StructType\SalutationDescriptionDTO|null
     */
    public function getMidocoSalutationDescription(): ?\Pggns\MidocoApi\CrmSD\StructType\SalutationDescriptionDTO
    {
        return $this->MidocoSalutationDescription;
    }
    /**
     * Set MidocoSalutationDescription value
     * @param \Pggns\MidocoApi\CrmSD\StructType\SalutationDescriptionDTO $midocoSalutationDescription
     * @return \Pggns\MidocoApi\CrmSD\StructType\DeleteSalutationDescriptionRequest
     */
    public function setMidocoSalutationDescription(?\Pggns\MidocoApi\CrmSD\StructType\SalutationDescriptionDTO $midocoSalutationDescription = null): self
    {
        $this->MidocoSalutationDescription = $midocoSalutationDescription;
        
        return $this;
    }
}
