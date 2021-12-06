<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\OrderglobalSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveMfRequest StructType
 * @subpackage Structs
 */
class SaveMfRequest extends AbstractStructBase
{
    /**
     * The MidocoMf
     * Meta information extracted from the WSDL
     * - ref: MidocoMf
     * @var \Pggns\MidocoApi\OrderglobalSD\StructType\MidocoMf|null
     */
    protected ?\Pggns\MidocoApi\OrderglobalSD\StructType\MidocoMf $MidocoMf = null;
    /**
     * Constructor method for SaveMfRequest
     * @uses SaveMfRequest::setMidocoMf()
     * @param \Pggns\MidocoApi\OrderglobalSD\StructType\MidocoMf $midocoMf
     */
    public function __construct(?\Pggns\MidocoApi\OrderglobalSD\StructType\MidocoMf $midocoMf = null)
    {
        $this
            ->setMidocoMf($midocoMf);
    }
    /**
     * Get MidocoMf value
     * @return \Pggns\MidocoApi\OrderglobalSD\StructType\MidocoMf|null
     */
    public function getMidocoMf(): ?\Pggns\MidocoApi\OrderglobalSD\StructType\MidocoMf
    {
        return $this->MidocoMf;
    }
    /**
     * Set MidocoMf value
     * @param \Pggns\MidocoApi\OrderglobalSD\StructType\MidocoMf $midocoMf
     * @return \Pggns\MidocoApi\OrderglobalSD\StructType\SaveMfRequest
     */
    public function setMidocoMf(?\Pggns\MidocoApi\OrderglobalSD\StructType\MidocoMf $midocoMf = null): self
    {
        $this->MidocoMf = $midocoMf;
        
        return $this;
    }
}
