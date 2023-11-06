<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteAutoBillingMatrixRequest StructType
 * Meta information extracted from the WSDL
 * - documentation: returns a list of AutoBillingMatrixDTO
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeleteAutoBillingMatrixRequest extends AbstractStructBase
{
    /**
     * The MidocoAutoBillingMatrix
     * Meta information extracted from the WSDL
     * - ref: MidocoAutoBillingMatrix
     * @var \Pggns\MidocoApi\Crm\StructType\AutoBillingMatrixDTO|null
     */
    protected ?\Pggns\MidocoApi\Crm\StructType\AutoBillingMatrixDTO $MidocoAutoBillingMatrix = null;
    /**
     * Constructor method for DeleteAutoBillingMatrixRequest
     * @uses DeleteAutoBillingMatrixRequest::setMidocoAutoBillingMatrix()
     * @param \Pggns\MidocoApi\Crm\StructType\AutoBillingMatrixDTO $midocoAutoBillingMatrix
     */
    public function __construct(?\Pggns\MidocoApi\Crm\StructType\AutoBillingMatrixDTO $midocoAutoBillingMatrix = null)
    {
        $this
            ->setMidocoAutoBillingMatrix($midocoAutoBillingMatrix);
    }
    /**
     * Get MidocoAutoBillingMatrix value
     * @return \Pggns\MidocoApi\Crm\StructType\AutoBillingMatrixDTO|null
     */
    public function getMidocoAutoBillingMatrix(): ?\Pggns\MidocoApi\Crm\StructType\AutoBillingMatrixDTO
    {
        return $this->MidocoAutoBillingMatrix;
    }
    /**
     * Set MidocoAutoBillingMatrix value
     * @param \Pggns\MidocoApi\Crm\StructType\AutoBillingMatrixDTO $midocoAutoBillingMatrix
     * @return \Pggns\MidocoApi\Crm\StructType\DeleteAutoBillingMatrixRequest
     */
    public function setMidocoAutoBillingMatrix(?\Pggns\MidocoApi\Crm\StructType\AutoBillingMatrixDTO $midocoAutoBillingMatrix = null): self
    {
        $this->MidocoAutoBillingMatrix = $midocoAutoBillingMatrix;
        
        return $this;
    }
}
