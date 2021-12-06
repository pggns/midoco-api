<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\CrmSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteAutoBillingMatrixRequest StructType
 * Meta information extracted from the WSDL
 * - documentation: returns a list of AutoBillingMatrixDTO
 * @subpackage Structs
 */
class DeleteAutoBillingMatrixRequest extends AbstractStructBase
{
    /**
     * The MidocoAutoBillingMatrix
     * Meta information extracted from the WSDL
     * - ref: MidocoAutoBillingMatrix
     * @var \Pggns\MidocoApi\Api\CrmSD\StructType\AutoBillingMatrixDTO|null
     */
    protected ?\Pggns\MidocoApi\Api\CrmSD\StructType\AutoBillingMatrixDTO $MidocoAutoBillingMatrix = null;
    /**
     * Constructor method for DeleteAutoBillingMatrixRequest
     * @uses DeleteAutoBillingMatrixRequest::setMidocoAutoBillingMatrix()
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\AutoBillingMatrixDTO $midocoAutoBillingMatrix
     */
    public function __construct(?\Pggns\MidocoApi\Api\CrmSD\StructType\AutoBillingMatrixDTO $midocoAutoBillingMatrix = null)
    {
        $this
            ->setMidocoAutoBillingMatrix($midocoAutoBillingMatrix);
    }
    /**
     * Get MidocoAutoBillingMatrix value
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\AutoBillingMatrixDTO|null
     */
    public function getMidocoAutoBillingMatrix(): ?\Pggns\MidocoApi\Api\CrmSD\StructType\AutoBillingMatrixDTO
    {
        return $this->MidocoAutoBillingMatrix;
    }
    /**
     * Set MidocoAutoBillingMatrix value
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\AutoBillingMatrixDTO $midocoAutoBillingMatrix
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\DeleteAutoBillingMatrixRequest
     */
    public function setMidocoAutoBillingMatrix(?\Pggns\MidocoApi\Api\CrmSD\StructType\AutoBillingMatrixDTO $midocoAutoBillingMatrix = null): self
    {
        $this->MidocoAutoBillingMatrix = $midocoAutoBillingMatrix;
        
        return $this;
    }
}
