<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\OrderSD\StructType;

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
     * @var \Pggns\MidocoApi\OrderSD\StructType\MidocoSuppCancelCEmail|null
     */
    protected ?\Pggns\MidocoApi\OrderSD\StructType\MidocoSuppCancelCEmail $MidocoSuppCancelCEmail = null;
    /**
     * Constructor method for ListSuppCancelCEmailRequest
     * @uses ListSuppCancelCEmailRequest::setMidocoSuppCancelCEmail()
     * @param \Pggns\MidocoApi\OrderSD\StructType\MidocoSuppCancelCEmail $midocoSuppCancelCEmail
     */
    public function __construct(?\Pggns\MidocoApi\OrderSD\StructType\MidocoSuppCancelCEmail $midocoSuppCancelCEmail = null)
    {
        $this
            ->setMidocoSuppCancelCEmail($midocoSuppCancelCEmail);
    }
    /**
     * Get MidocoSuppCancelCEmail value
     * @return \Pggns\MidocoApi\OrderSD\StructType\MidocoSuppCancelCEmail|null
     */
    public function getMidocoSuppCancelCEmail(): ?\Pggns\MidocoApi\OrderSD\StructType\MidocoSuppCancelCEmail
    {
        return $this->MidocoSuppCancelCEmail;
    }
    /**
     * Set MidocoSuppCancelCEmail value
     * @param \Pggns\MidocoApi\OrderSD\StructType\MidocoSuppCancelCEmail $midocoSuppCancelCEmail
     * @return \Pggns\MidocoApi\OrderSD\StructType\ListSuppCancelCEmailRequest
     */
    public function setMidocoSuppCancelCEmail(?\Pggns\MidocoApi\OrderSD\StructType\MidocoSuppCancelCEmail $midocoSuppCancelCEmail = null): self
    {
        $this->MidocoSuppCancelCEmail = $midocoSuppCancelCEmail;
        
        return $this;
    }
}
