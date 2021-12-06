<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\CrmSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteSalutationNameRequest StructType
 * @subpackage Structs
 */
class DeleteSalutationNameRequest extends AbstractStructBase
{
    /**
     * The MidocoSalutationName
     * Meta information extracted from the WSDL
     * - ref: MidocoSalutationName
     * @var \Pggns\MidocoApi\CrmSD\StructType\SalutationNameDTO|null
     */
    protected ?\Pggns\MidocoApi\CrmSD\StructType\SalutationNameDTO $MidocoSalutationName = null;
    /**
     * Constructor method for DeleteSalutationNameRequest
     * @uses DeleteSalutationNameRequest::setMidocoSalutationName()
     * @param \Pggns\MidocoApi\CrmSD\StructType\SalutationNameDTO $midocoSalutationName
     */
    public function __construct(?\Pggns\MidocoApi\CrmSD\StructType\SalutationNameDTO $midocoSalutationName = null)
    {
        $this
            ->setMidocoSalutationName($midocoSalutationName);
    }
    /**
     * Get MidocoSalutationName value
     * @return \Pggns\MidocoApi\CrmSD\StructType\SalutationNameDTO|null
     */
    public function getMidocoSalutationName(): ?\Pggns\MidocoApi\CrmSD\StructType\SalutationNameDTO
    {
        return $this->MidocoSalutationName;
    }
    /**
     * Set MidocoSalutationName value
     * @param \Pggns\MidocoApi\CrmSD\StructType\SalutationNameDTO $midocoSalutationName
     * @return \Pggns\MidocoApi\CrmSD\StructType\DeleteSalutationNameRequest
     */
    public function setMidocoSalutationName(?\Pggns\MidocoApi\CrmSD\StructType\SalutationNameDTO $midocoSalutationName = null): self
    {
        $this->MidocoSalutationName = $midocoSalutationName;
        
        return $this;
    }
}
