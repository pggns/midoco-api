<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\CrmSD\StructType;

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
     * @var \Pggns\MidocoApi\CrmSD\StructType\MidocoCrmPrintType|null
     */
    protected ?\Pggns\MidocoApi\CrmSD\StructType\MidocoCrmPrintType $MidocoCrmPrintType = null;
    /**
     * Constructor method for SaveCrmPrintTypeRequest
     * @uses SaveCrmPrintTypeRequest::setMidocoCrmPrintType()
     * @param \Pggns\MidocoApi\CrmSD\StructType\MidocoCrmPrintType $midocoCrmPrintType
     */
    public function __construct(?\Pggns\MidocoApi\CrmSD\StructType\MidocoCrmPrintType $midocoCrmPrintType = null)
    {
        $this
            ->setMidocoCrmPrintType($midocoCrmPrintType);
    }
    /**
     * Get MidocoCrmPrintType value
     * @return \Pggns\MidocoApi\CrmSD\StructType\MidocoCrmPrintType|null
     */
    public function getMidocoCrmPrintType(): ?\Pggns\MidocoApi\CrmSD\StructType\MidocoCrmPrintType
    {
        return $this->MidocoCrmPrintType;
    }
    /**
     * Set MidocoCrmPrintType value
     * @param \Pggns\MidocoApi\CrmSD\StructType\MidocoCrmPrintType $midocoCrmPrintType
     * @return \Pggns\MidocoApi\CrmSD\StructType\SaveCrmPrintTypeRequest
     */
    public function setMidocoCrmPrintType(?\Pggns\MidocoApi\CrmSD\StructType\MidocoCrmPrintType $midocoCrmPrintType = null): self
    {
        $this->MidocoCrmPrintType = $midocoCrmPrintType;
        
        return $this;
    }
}
