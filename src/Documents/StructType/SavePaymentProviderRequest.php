<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SavePaymentProviderRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SavePaymentProviderRequest extends AbstractStructBase
{
    /**
     * The MidocoPaymentProvider
     * Meta information extracted from the WSDL
     * - ref: MidocoPaymentProvider
     * @var \Pggns\MidocoApi\Documents\StructType\MidocoPaymentProvider|null
     */
    protected ?\Pggns\MidocoApi\Documents\StructType\MidocoPaymentProvider $MidocoPaymentProvider = null;
    /**
     * Constructor method for SavePaymentProviderRequest
     * @uses SavePaymentProviderRequest::setMidocoPaymentProvider()
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoPaymentProvider $midocoPaymentProvider
     */
    public function __construct(?\Pggns\MidocoApi\Documents\StructType\MidocoPaymentProvider $midocoPaymentProvider = null)
    {
        $this
            ->setMidocoPaymentProvider($midocoPaymentProvider);
    }
    /**
     * Get MidocoPaymentProvider value
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoPaymentProvider|null
     */
    public function getMidocoPaymentProvider(): ?\Pggns\MidocoApi\Documents\StructType\MidocoPaymentProvider
    {
        return $this->MidocoPaymentProvider;
    }
    /**
     * Set MidocoPaymentProvider value
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoPaymentProvider $midocoPaymentProvider
     * @return \Pggns\MidocoApi\Documents\StructType\SavePaymentProviderRequest
     */
    public function setMidocoPaymentProvider(?\Pggns\MidocoApi\Documents\StructType\MidocoPaymentProvider $midocoPaymentProvider = null): self
    {
        $this->MidocoPaymentProvider = $midocoPaymentProvider;
        
        return $this;
    }
}
