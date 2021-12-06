<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveSalutationTypeRequest StructType
 * @subpackage Structs
 */
class SaveSalutationTypeRequest extends AbstractStructBase
{
    /**
     * The MidocoSalutationType
     * Meta information extracted from the WSDL
     * - ref: MidocoSalutationType
     * @var \Pggns\MidocoApi\Crm\StructType\SalutationTypeDTO|null
     */
    protected ?\Pggns\MidocoApi\Crm\StructType\SalutationTypeDTO $MidocoSalutationType = null;
    /**
     * Constructor method for SaveSalutationTypeRequest
     * @uses SaveSalutationTypeRequest::setMidocoSalutationType()
     * @param \Pggns\MidocoApi\Crm\StructType\SalutationTypeDTO $midocoSalutationType
     */
    public function __construct(?\Pggns\MidocoApi\Crm\StructType\SalutationTypeDTO $midocoSalutationType = null)
    {
        $this
            ->setMidocoSalutationType($midocoSalutationType);
    }
    /**
     * Get MidocoSalutationType value
     * @return \Pggns\MidocoApi\Crm\StructType\SalutationTypeDTO|null
     */
    public function getMidocoSalutationType(): ?\Pggns\MidocoApi\Crm\StructType\SalutationTypeDTO
    {
        return $this->MidocoSalutationType;
    }
    /**
     * Set MidocoSalutationType value
     * @param \Pggns\MidocoApi\Crm\StructType\SalutationTypeDTO $midocoSalutationType
     * @return \Pggns\MidocoApi\Crm\StructType\SaveSalutationTypeRequest
     */
    public function setMidocoSalutationType(?\Pggns\MidocoApi\Crm\StructType\SalutationTypeDTO $midocoSalutationType = null): self
    {
        $this->MidocoSalutationType = $midocoSalutationType;
        
        return $this;
    }
}
