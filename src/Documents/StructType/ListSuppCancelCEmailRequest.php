<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListSuppCancelCEmailRequest StructType
 * @subpackage Structs
 */
class ListSuppCancelCEmailRequest extends AbstractStructBase
{
    /**
     * The MidocoSuppCancelCEmail
     * Meta information extracted from the WSDL
     * - ref: MidocoSuppCancelCEmail
     * @var \Pggns\MidocoApi\Documents\StructType\MidocoSuppCancelCEmail|null
     */
    protected ?\Pggns\MidocoApi\Documents\StructType\MidocoSuppCancelCEmail $MidocoSuppCancelCEmail = null;
    /**
     * Constructor method for ListSuppCancelCEmailRequest
     * @uses ListSuppCancelCEmailRequest::setMidocoSuppCancelCEmail()
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoSuppCancelCEmail $midocoSuppCancelCEmail
     */
    public function __construct(?\Pggns\MidocoApi\Documents\StructType\MidocoSuppCancelCEmail $midocoSuppCancelCEmail = null)
    {
        $this
            ->setMidocoSuppCancelCEmail($midocoSuppCancelCEmail);
    }
    /**
     * Get MidocoSuppCancelCEmail value
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoSuppCancelCEmail|null
     */
    public function getMidocoSuppCancelCEmail(): ?\Pggns\MidocoApi\Documents\StructType\MidocoSuppCancelCEmail
    {
        return $this->MidocoSuppCancelCEmail;
    }
    /**
     * Set MidocoSuppCancelCEmail value
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoSuppCancelCEmail $midocoSuppCancelCEmail
     * @return \Pggns\MidocoApi\Documents\StructType\ListSuppCancelCEmailRequest
     */
    public function setMidocoSuppCancelCEmail(?\Pggns\MidocoApi\Documents\StructType\MidocoSuppCancelCEmail $midocoSuppCancelCEmail = null): self
    {
        $this->MidocoSuppCancelCEmail = $midocoSuppCancelCEmail;
        
        return $this;
    }
}
