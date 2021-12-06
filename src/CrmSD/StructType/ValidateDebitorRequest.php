<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\CrmSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ValidateDebitorRequest StructType
 * @subpackage Structs
 */
class ValidateDebitorRequest extends AbstractStructBase
{
    /**
     * The MidocoDebitor
     * Meta information extracted from the WSDL
     * - ref: MidocoDebitor
     * @var \Pggns\MidocoApi\CrmSD\StructType\DebitorDTO|null
     */
    protected ?\Pggns\MidocoApi\CrmSD\StructType\DebitorDTO $MidocoDebitor = null;
    /**
     * Constructor method for ValidateDebitorRequest
     * @uses ValidateDebitorRequest::setMidocoDebitor()
     * @param \Pggns\MidocoApi\CrmSD\StructType\DebitorDTO $midocoDebitor
     */
    public function __construct(?\Pggns\MidocoApi\CrmSD\StructType\DebitorDTO $midocoDebitor = null)
    {
        $this
            ->setMidocoDebitor($midocoDebitor);
    }
    /**
     * Get MidocoDebitor value
     * @return \Pggns\MidocoApi\CrmSD\StructType\DebitorDTO|null
     */
    public function getMidocoDebitor(): ?\Pggns\MidocoApi\CrmSD\StructType\DebitorDTO
    {
        return $this->MidocoDebitor;
    }
    /**
     * Set MidocoDebitor value
     * @param \Pggns\MidocoApi\CrmSD\StructType\DebitorDTO $midocoDebitor
     * @return \Pggns\MidocoApi\CrmSD\StructType\ValidateDebitorRequest
     */
    public function setMidocoDebitor(?\Pggns\MidocoApi\CrmSD\StructType\DebitorDTO $midocoDebitor = null): self
    {
        $this->MidocoDebitor = $midocoDebitor;
        
        return $this;
    }
}
