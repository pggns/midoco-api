<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetDbiDefinitionHistoryRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetDbiDefinitionHistoryRequest extends AbstractStructBase
{
    /**
     * The ccNo
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    protected string $ccNo;
    /**
     * Constructor method for GetDbiDefinitionHistoryRequest
     * @uses GetDbiDefinitionHistoryRequest::setCcNo()
     * @param string $ccNo
     */
    public function __construct(string $ccNo)
    {
        $this
            ->setCcNo($ccNo);
    }
    /**
     * Get ccNo value
     * @return string
     */
    public function getCcNo(): string
    {
        return $this->ccNo;
    }
    /**
     * Set ccNo value
     * @param string $ccNo
     * @return \Pggns\MidocoApi\Documents\StructType\GetDbiDefinitionHistoryRequest
     */
    public function setCcNo(string $ccNo): self
    {
        // validation for constraint: string
        if (!is_null($ccNo) && !is_string($ccNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ccNo, true), gettype($ccNo)), __LINE__);
        }
        $this->ccNo = $ccNo;
        
        return $this;
    }
}
