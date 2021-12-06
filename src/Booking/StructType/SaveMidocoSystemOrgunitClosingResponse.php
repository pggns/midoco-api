<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Booking\StructType;

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
     * @var \Pggns\MidocoApi\Booking\StructType\OrgunitClosingDTO|null
     */
    protected ?\Pggns\MidocoApi\Booking\StructType\OrgunitClosingDTO $MidocoSystemOrgunitClosing = null;
    /**
     * Constructor method for SaveMidocoSystemOrgunitClosingResponse
     * @uses SaveMidocoSystemOrgunitClosingResponse::setMidocoSystemOrgunitClosing()
     * @param \Pggns\MidocoApi\Booking\StructType\OrgunitClosingDTO $midocoSystemOrgunitClosing
     */
    public function __construct(?\Pggns\MidocoApi\Booking\StructType\OrgunitClosingDTO $midocoSystemOrgunitClosing = null)
    {
        $this
            ->setMidocoSystemOrgunitClosing($midocoSystemOrgunitClosing);
    }
    /**
     * Get MidocoSystemOrgunitClosing value
     * @return \Pggns\MidocoApi\Booking\StructType\OrgunitClosingDTO|null
     */
    public function getMidocoSystemOrgunitClosing(): ?\Pggns\MidocoApi\Booking\StructType\OrgunitClosingDTO
    {
        return $this->MidocoSystemOrgunitClosing;
    }
    /**
     * Set MidocoSystemOrgunitClosing value
     * @param \Pggns\MidocoApi\Booking\StructType\OrgunitClosingDTO $midocoSystemOrgunitClosing
     * @return \Pggns\MidocoApi\Booking\StructType\SaveMidocoSystemOrgunitClosingResponse
     */
    public function setMidocoSystemOrgunitClosing(?\Pggns\MidocoApi\Booking\StructType\OrgunitClosingDTO $midocoSystemOrgunitClosing = null): self
    {
        $this->MidocoSystemOrgunitClosing = $midocoSystemOrgunitClosing;
        
        return $this;
    }
}
