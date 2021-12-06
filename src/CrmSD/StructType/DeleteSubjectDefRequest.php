<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\CrmSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteSubjectDefRequest StructType
 * @subpackage Structs
 */
class DeleteSubjectDefRequest extends AbstractStructBase
{
    /**
     * The MidocoSubjectDef
     * Meta information extracted from the WSDL
     * - ref: MidocoSubjectDef
     * @var \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoSubjectDef|null
     */
    protected ?\Pggns\MidocoApi\Api\CrmSD\StructType\MidocoSubjectDef $MidocoSubjectDef = null;
    /**
     * Constructor method for DeleteSubjectDefRequest
     * @uses DeleteSubjectDefRequest::setMidocoSubjectDef()
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoSubjectDef $midocoSubjectDef
     */
    public function __construct(?\Pggns\MidocoApi\Api\CrmSD\StructType\MidocoSubjectDef $midocoSubjectDef = null)
    {
        $this
            ->setMidocoSubjectDef($midocoSubjectDef);
    }
    /**
     * Get MidocoSubjectDef value
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoSubjectDef|null
     */
    public function getMidocoSubjectDef(): ?\Pggns\MidocoApi\Api\CrmSD\StructType\MidocoSubjectDef
    {
        return $this->MidocoSubjectDef;
    }
    /**
     * Set MidocoSubjectDef value
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoSubjectDef $midocoSubjectDef
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\DeleteSubjectDefRequest
     */
    public function setMidocoSubjectDef(?\Pggns\MidocoApi\Api\CrmSD\StructType\MidocoSubjectDef $midocoSubjectDef = null): self
    {
        $this->MidocoSubjectDef = $midocoSubjectDef;
        
        return $this;
    }
}
