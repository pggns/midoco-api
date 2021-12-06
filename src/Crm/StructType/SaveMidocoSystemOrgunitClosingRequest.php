<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

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
     * @var \Pggns\MidocoApi\Crm\StructType\OrgunitClosingDTO|null
     */
    protected ?\Pggns\MidocoApi\Crm\StructType\OrgunitClosingDTO $MidocoSystemOrgunitClosing = null;
    /**
     * Constructor method for SaveMidocoSystemOrgunitClosingRequest
     * @uses SaveMidocoSystemOrgunitClosingRequest::setMidocoSystemOrgunitClosing()
     * @param \Pggns\MidocoApi\Crm\StructType\OrgunitClosingDTO $midocoSystemOrgunitClosing
     */
    public function __construct(?\Pggns\MidocoApi\Crm\StructType\OrgunitClosingDTO $midocoSystemOrgunitClosing = null)
    {
        $this
            ->setMidocoSystemOrgunitClosing($midocoSystemOrgunitClosing);
    }
    /**
     * Get MidocoSystemOrgunitClosing value
     * @return \Pggns\MidocoApi\Crm\StructType\OrgunitClosingDTO|null
     */
    public function getMidocoSystemOrgunitClosing(): ?\Pggns\MidocoApi\Crm\StructType\OrgunitClosingDTO
    {
        return $this->MidocoSystemOrgunitClosing;
    }
    /**
     * Set MidocoSystemOrgunitClosing value
     * @param \Pggns\MidocoApi\Crm\StructType\OrgunitClosingDTO $midocoSystemOrgunitClosing
     * @return \Pggns\MidocoApi\Crm\StructType\SaveMidocoSystemOrgunitClosingRequest
     */
    public function setMidocoSystemOrgunitClosing(?\Pggns\MidocoApi\Crm\StructType\OrgunitClosingDTO $midocoSystemOrgunitClosing = null): self
    {
        $this->MidocoSystemOrgunitClosing = $midocoSystemOrgunitClosing;
        
        return $this;
    }
}
