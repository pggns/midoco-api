<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveSubjectDefRequest StructType
 * @subpackage Structs
 */
class SaveSubjectDefRequest extends AbstractStructBase
{
    /**
     * The MidocoSubjectDef
     * Meta information extracted from the WSDL
     * - ref: MidocoSubjectDef
     * @var \Pggns\MidocoApi\Api\Crm\StructType\MidocoSubjectDef|null
     */
    protected ?\Pggns\MidocoApi\Api\Crm\StructType\MidocoSubjectDef $MidocoSubjectDef = null;
    /**
     * Constructor method for SaveSubjectDefRequest
     * @uses SaveSubjectDefRequest::setMidocoSubjectDef()
     * @param \Pggns\MidocoApi\Api\Crm\StructType\MidocoSubjectDef $midocoSubjectDef
     */
    public function __construct(?\Pggns\MidocoApi\Api\Crm\StructType\MidocoSubjectDef $midocoSubjectDef = null)
    {
        $this
            ->setMidocoSubjectDef($midocoSubjectDef);
    }
    /**
     * Get MidocoSubjectDef value
     * @return \Pggns\MidocoApi\Api\Crm\StructType\MidocoSubjectDef|null
     */
    public function getMidocoSubjectDef(): ?\Pggns\MidocoApi\Api\Crm\StructType\MidocoSubjectDef
    {
        return $this->MidocoSubjectDef;
    }
    /**
     * Set MidocoSubjectDef value
     * @param \Pggns\MidocoApi\Api\Crm\StructType\MidocoSubjectDef $midocoSubjectDef
     * @return \Pggns\MidocoApi\Api\Crm\StructType\SaveSubjectDefRequest
     */
    public function setMidocoSubjectDef(?\Pggns\MidocoApi\Api\Crm\StructType\MidocoSubjectDef $midocoSubjectDef = null): self
    {
        $this->MidocoSubjectDef = $midocoSubjectDef;
        
        return $this;
    }
}
