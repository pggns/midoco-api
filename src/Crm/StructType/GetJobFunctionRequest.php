<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetJobFunctionRequest StructType
 * @subpackage Structs
 */
class GetJobFunctionRequest extends AbstractStructBase
{
    /**
     * The MidocoJobFunction
     * Meta information extracted from the WSDL
     * - ref: MidocoJobFunction
     * @var \Pggns\MidocoApi\Api\Crm\StructType\JobFunctionDTO|null
     */
    protected ?\Pggns\MidocoApi\Api\Crm\StructType\JobFunctionDTO $MidocoJobFunction = null;
    /**
     * Constructor method for GetJobFunctionRequest
     * @uses GetJobFunctionRequest::setMidocoJobFunction()
     * @param \Pggns\MidocoApi\Api\Crm\StructType\JobFunctionDTO $midocoJobFunction
     */
    public function __construct(?\Pggns\MidocoApi\Api\Crm\StructType\JobFunctionDTO $midocoJobFunction = null)
    {
        $this
            ->setMidocoJobFunction($midocoJobFunction);
    }
    /**
     * Get MidocoJobFunction value
     * @return \Pggns\MidocoApi\Api\Crm\StructType\JobFunctionDTO|null
     */
    public function getMidocoJobFunction(): ?\Pggns\MidocoApi\Api\Crm\StructType\JobFunctionDTO
    {
        return $this->MidocoJobFunction;
    }
    /**
     * Set MidocoJobFunction value
     * @param \Pggns\MidocoApi\Api\Crm\StructType\JobFunctionDTO $midocoJobFunction
     * @return \Pggns\MidocoApi\Api\Crm\StructType\GetJobFunctionRequest
     */
    public function setMidocoJobFunction(?\Pggns\MidocoApi\Api\Crm\StructType\JobFunctionDTO $midocoJobFunction = null): self
    {
        $this->MidocoJobFunction = $midocoJobFunction;
        
        return $this;
    }
}
