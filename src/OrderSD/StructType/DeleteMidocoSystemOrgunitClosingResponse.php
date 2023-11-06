<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\OrderSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteMidocoSystemOrgunitClosingResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeleteMidocoSystemOrgunitClosingResponse extends AbstractStructBase
{
    /**
     * The MidocoSystemOrgunitClosing
     * Meta information extracted from the WSDL
     * - ref: MidocoSystemOrgunitClosing
     * @var \Pggns\MidocoApi\OrderSD\StructType\OrgunitClosingDTO|null
     */
    protected ?\Pggns\MidocoApi\OrderSD\StructType\OrgunitClosingDTO $MidocoSystemOrgunitClosing = null;
    /**
     * Constructor method for DeleteMidocoSystemOrgunitClosingResponse
     * @uses DeleteMidocoSystemOrgunitClosingResponse::setMidocoSystemOrgunitClosing()
     * @param \Pggns\MidocoApi\OrderSD\StructType\OrgunitClosingDTO $midocoSystemOrgunitClosing
     */
    public function __construct(?\Pggns\MidocoApi\OrderSD\StructType\OrgunitClosingDTO $midocoSystemOrgunitClosing = null)
    {
        $this
            ->setMidocoSystemOrgunitClosing($midocoSystemOrgunitClosing);
    }
    /**
     * Get MidocoSystemOrgunitClosing value
     * @return \Pggns\MidocoApi\OrderSD\StructType\OrgunitClosingDTO|null
     */
    public function getMidocoSystemOrgunitClosing(): ?\Pggns\MidocoApi\OrderSD\StructType\OrgunitClosingDTO
    {
        return $this->MidocoSystemOrgunitClosing;
    }
    /**
     * Set MidocoSystemOrgunitClosing value
     * @param \Pggns\MidocoApi\OrderSD\StructType\OrgunitClosingDTO $midocoSystemOrgunitClosing
     * @return \Pggns\MidocoApi\OrderSD\StructType\DeleteMidocoSystemOrgunitClosingResponse
     */
    public function setMidocoSystemOrgunitClosing(?\Pggns\MidocoApi\OrderSD\StructType\OrgunitClosingDTO $midocoSystemOrgunitClosing = null): self
    {
        $this->MidocoSystemOrgunitClosing = $midocoSystemOrgunitClosing;
        
        return $this;
    }
}
