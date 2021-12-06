<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\OrderSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveMidocoSystemOrgunitClosingRequest StructType
 * @subpackage Structs
 */
class SaveMidocoSystemOrgunitClosingRequest extends AbstractStructBase
{
    /**
     * The MidocoSystemOrgunitClosing
     * Meta information extracted from the WSDL
     * - ref: MidocoSystemOrgunitClosing
     * @var \Pggns\MidocoApi\Api\OrderSD\StructType\OrgunitClosingDTO|null
     */
    protected ?\Pggns\MidocoApi\Api\OrderSD\StructType\OrgunitClosingDTO $MidocoSystemOrgunitClosing = null;
    /**
     * Constructor method for SaveMidocoSystemOrgunitClosingRequest
     * @uses SaveMidocoSystemOrgunitClosingRequest::setMidocoSystemOrgunitClosing()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\OrgunitClosingDTO $midocoSystemOrgunitClosing
     */
    public function __construct(?\Pggns\MidocoApi\Api\OrderSD\StructType\OrgunitClosingDTO $midocoSystemOrgunitClosing = null)
    {
        $this
            ->setMidocoSystemOrgunitClosing($midocoSystemOrgunitClosing);
    }
    /**
     * Get MidocoSystemOrgunitClosing value
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\OrgunitClosingDTO|null
     */
    public function getMidocoSystemOrgunitClosing(): ?\Pggns\MidocoApi\Api\OrderSD\StructType\OrgunitClosingDTO
    {
        return $this->MidocoSystemOrgunitClosing;
    }
    /**
     * Set MidocoSystemOrgunitClosing value
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\OrgunitClosingDTO $midocoSystemOrgunitClosing
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\SaveMidocoSystemOrgunitClosingRequest
     */
    public function setMidocoSystemOrgunitClosing(?\Pggns\MidocoApi\Api\OrderSD\StructType\OrgunitClosingDTO $midocoSystemOrgunitClosing = null): self
    {
        $this->MidocoSystemOrgunitClosing = $midocoSystemOrgunitClosing;
        
        return $this;
    }
}