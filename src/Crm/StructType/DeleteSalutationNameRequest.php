<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteSalutationNameRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeleteSalutationNameRequest extends AbstractStructBase
{
    /**
     * The MidocoSalutationName
     * Meta information extracted from the WSDL
     * - ref: MidocoSalutationName
     * @var \Pggns\MidocoApi\Crm\StructType\SalutationNameDTO|null
     */
    protected ?\Pggns\MidocoApi\Crm\StructType\SalutationNameDTO $MidocoSalutationName = null;
    /**
     * Constructor method for DeleteSalutationNameRequest
     * @uses DeleteSalutationNameRequest::setMidocoSalutationName()
     * @param \Pggns\MidocoApi\Crm\StructType\SalutationNameDTO $midocoSalutationName
     */
    public function __construct(?\Pggns\MidocoApi\Crm\StructType\SalutationNameDTO $midocoSalutationName = null)
    {
        $this
            ->setMidocoSalutationName($midocoSalutationName);
    }
    /**
     * Get MidocoSalutationName value
     * @return \Pggns\MidocoApi\Crm\StructType\SalutationNameDTO|null
     */
    public function getMidocoSalutationName(): ?\Pggns\MidocoApi\Crm\StructType\SalutationNameDTO
    {
        return $this->MidocoSalutationName;
    }
    /**
     * Set MidocoSalutationName value
     * @param \Pggns\MidocoApi\Crm\StructType\SalutationNameDTO $midocoSalutationName
     * @return \Pggns\MidocoApi\Crm\StructType\DeleteSalutationNameRequest
     */
    public function setMidocoSalutationName(?\Pggns\MidocoApi\Crm\StructType\SalutationNameDTO $midocoSalutationName = null): self
    {
        $this->MidocoSalutationName = $midocoSalutationName;
        
        return $this;
    }
}
