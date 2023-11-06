<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetJasperParameterRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetJasperParameterRequest extends AbstractStructBase
{
    /**
     * The paramId
     * Meta information extracted from the WSDL
     * - use: required
     * @var int
     */
    protected int $paramId;
    /**
     * Constructor method for GetJasperParameterRequest
     * @uses GetJasperParameterRequest::setParamId()
     * @param int $paramId
     */
    public function __construct(int $paramId)
    {
        $this
            ->setParamId($paramId);
    }
    /**
     * Get paramId value
     * @return int
     */
    public function getParamId(): int
    {
        return $this->paramId;
    }
    /**
     * Set paramId value
     * @param int $paramId
     * @return \Pggns\MidocoApi\Mis\StructType\GetJasperParameterRequest
     */
    public function setParamId(int $paramId): self
    {
        // validation for constraint: int
        if (!is_null($paramId) && !(is_int($paramId) || ctype_digit($paramId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($paramId, true), gettype($paramId)), __LINE__);
        }
        $this->paramId = $paramId;
        
        return $this;
    }
}
