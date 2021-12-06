<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteSalutationTypeRequest StructType
 * @subpackage Structs
 */
class DeleteSalutationTypeRequest extends AbstractStructBase
{
    /**
     * The MidocoSalutationType
     * Meta information extracted from the WSDL
     * - ref: MidocoSalutationType
     * @var \Pggns\MidocoApi\Api\Crm\StructType\SalutationTypeDTO|null
     */
    protected ?\Pggns\MidocoApi\Api\Crm\StructType\SalutationTypeDTO $MidocoSalutationType = null;
    /**
     * Constructor method for DeleteSalutationTypeRequest
     * @uses DeleteSalutationTypeRequest::setMidocoSalutationType()
     * @param \Pggns\MidocoApi\Api\Crm\StructType\SalutationTypeDTO $midocoSalutationType
     */
    public function __construct(?\Pggns\MidocoApi\Api\Crm\StructType\SalutationTypeDTO $midocoSalutationType = null)
    {
        $this
            ->setMidocoSalutationType($midocoSalutationType);
    }
    /**
     * Get MidocoSalutationType value
     * @return \Pggns\MidocoApi\Api\Crm\StructType\SalutationTypeDTO|null
     */
    public function getMidocoSalutationType(): ?\Pggns\MidocoApi\Api\Crm\StructType\SalutationTypeDTO
    {
        return $this->MidocoSalutationType;
    }
    /**
     * Set MidocoSalutationType value
     * @param \Pggns\MidocoApi\Api\Crm\StructType\SalutationTypeDTO $midocoSalutationType
     * @return \Pggns\MidocoApi\Api\Crm\StructType\DeleteSalutationTypeRequest
     */
    public function setMidocoSalutationType(?\Pggns\MidocoApi\Api\Crm\StructType\SalutationTypeDTO $midocoSalutationType = null): self
    {
        $this->MidocoSalutationType = $midocoSalutationType;
        
        return $this;
    }
}
