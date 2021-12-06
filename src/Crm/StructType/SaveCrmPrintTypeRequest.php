<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

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
     * @var \Pggns\MidocoApi\Crm\StructType\MidocoCrmPrintType|null
     */
    protected ?\Pggns\MidocoApi\Crm\StructType\MidocoCrmPrintType $MidocoCrmPrintType = null;
    /**
     * Constructor method for SaveCrmPrintTypeRequest
     * @uses SaveCrmPrintTypeRequest::setMidocoCrmPrintType()
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoCrmPrintType $midocoCrmPrintType
     */
    public function __construct(?\Pggns\MidocoApi\Crm\StructType\MidocoCrmPrintType $midocoCrmPrintType = null)
    {
        $this
            ->setMidocoCrmPrintType($midocoCrmPrintType);
    }
    /**
     * Get MidocoCrmPrintType value
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoCrmPrintType|null
     */
    public function getMidocoCrmPrintType(): ?\Pggns\MidocoApi\Crm\StructType\MidocoCrmPrintType
    {
        return $this->MidocoCrmPrintType;
    }
    /**
     * Set MidocoCrmPrintType value
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoCrmPrintType $midocoCrmPrintType
     * @return \Pggns\MidocoApi\Crm\StructType\SaveCrmPrintTypeRequest
     */
    public function setMidocoCrmPrintType(?\Pggns\MidocoApi\Crm\StructType\MidocoCrmPrintType $midocoCrmPrintType = null): self
    {
        $this->MidocoCrmPrintType = $midocoCrmPrintType;
        
        return $this;
    }
}
