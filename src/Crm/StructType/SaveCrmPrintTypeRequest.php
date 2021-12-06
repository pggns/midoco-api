<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveCrmPrintTypeRequest StructType
 * @subpackage Structs
 */
class SaveCrmPrintTypeRequest extends AbstractStructBase
{
    /**
     * The MidocoCrmPrintType
     * Meta information extracted from the WSDL
     * - ref: MidocoCrmPrintType
     * @var \Pggns\MidocoApi\Api\Crm\StructType\MidocoCrmPrintType|null
     */
    protected ?\Pggns\MidocoApi\Api\Crm\StructType\MidocoCrmPrintType $MidocoCrmPrintType = null;
    /**
     * Constructor method for SaveCrmPrintTypeRequest
     * @uses SaveCrmPrintTypeRequest::setMidocoCrmPrintType()
     * @param \Pggns\MidocoApi\Api\Crm\StructType\MidocoCrmPrintType $midocoCrmPrintType
     */
    public function __construct(?\Pggns\MidocoApi\Api\Crm\StructType\MidocoCrmPrintType $midocoCrmPrintType = null)
    {
        $this
            ->setMidocoCrmPrintType($midocoCrmPrintType);
    }
    /**
     * Get MidocoCrmPrintType value
     * @return \Pggns\MidocoApi\Api\Crm\StructType\MidocoCrmPrintType|null
     */
    public function getMidocoCrmPrintType(): ?\Pggns\MidocoApi\Api\Crm\StructType\MidocoCrmPrintType
    {
        return $this->MidocoCrmPrintType;
    }
    /**
     * Set MidocoCrmPrintType value
     * @param \Pggns\MidocoApi\Api\Crm\StructType\MidocoCrmPrintType $midocoCrmPrintType
     * @return \Pggns\MidocoApi\Api\Crm\StructType\SaveCrmPrintTypeRequest
     */
    public function setMidocoCrmPrintType(?\Pggns\MidocoApi\Api\Crm\StructType\MidocoCrmPrintType $midocoCrmPrintType = null): self
    {
        $this->MidocoCrmPrintType = $midocoCrmPrintType;
        
        return $this;
    }
}
