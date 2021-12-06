<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveMidocoSystemOrgunitClosingResponse StructType
 * @subpackage Structs
 */
class SaveMidocoSystemOrgunitClosingResponse extends AbstractStructBase
{
    /**
     * The MidocoSystemOrgunitClosing
     * Meta information extracted from the WSDL
     * - ref: MidocoSystemOrgunitClosing
     * @var \Pggns\MidocoApi\Mis\StructType\OrgunitClosingDTO|null
     */
    protected ?\Pggns\MidocoApi\Mis\StructType\OrgunitClosingDTO $MidocoSystemOrgunitClosing = null;
    /**
     * Constructor method for SaveMidocoSystemOrgunitClosingResponse
     * @uses SaveMidocoSystemOrgunitClosingResponse::setMidocoSystemOrgunitClosing()
     * @param \Pggns\MidocoApi\Mis\StructType\OrgunitClosingDTO $midocoSystemOrgunitClosing
     */
    public function __construct(?\Pggns\MidocoApi\Mis\StructType\OrgunitClosingDTO $midocoSystemOrgunitClosing = null)
    {
        $this
            ->setMidocoSystemOrgunitClosing($midocoSystemOrgunitClosing);
    }
    /**
     * Get MidocoSystemOrgunitClosing value
     * @return \Pggns\MidocoApi\Mis\StructType\OrgunitClosingDTO|null
     */
    public function getMidocoSystemOrgunitClosing(): ?\Pggns\MidocoApi\Mis\StructType\OrgunitClosingDTO
    {
        return $this->MidocoSystemOrgunitClosing;
    }
    /**
     * Set MidocoSystemOrgunitClosing value
     * @param \Pggns\MidocoApi\Mis\StructType\OrgunitClosingDTO $midocoSystemOrgunitClosing
     * @return \Pggns\MidocoApi\Mis\StructType\SaveMidocoSystemOrgunitClosingResponse
     */
    public function setMidocoSystemOrgunitClosing(?\Pggns\MidocoApi\Mis\StructType\OrgunitClosingDTO $midocoSystemOrgunitClosing = null): self
    {
        $this->MidocoSystemOrgunitClosing = $midocoSystemOrgunitClosing;
        
        return $this;
    }
}
