<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveCreditorRequest StructType
 * @subpackage Structs
 */
class SaveCreditorRequest extends AbstractStructBase
{
    /**
     * The MidocoCreditor
     * Meta information extracted from the WSDL
     * - ref: MidocoCreditor
     * @var \Pggns\MidocoApi\Api\Crm\StructType\CreditorDTO|null
     */
    protected ?\Pggns\MidocoApi\Api\Crm\StructType\CreditorDTO $MidocoCreditor = null;
    /**
     * Constructor method for SaveCreditorRequest
     * @uses SaveCreditorRequest::setMidocoCreditor()
     * @param \Pggns\MidocoApi\Api\Crm\StructType\CreditorDTO $midocoCreditor
     */
    public function __construct(?\Pggns\MidocoApi\Api\Crm\StructType\CreditorDTO $midocoCreditor = null)
    {
        $this
            ->setMidocoCreditor($midocoCreditor);
    }
    /**
     * Get MidocoCreditor value
     * @return \Pggns\MidocoApi\Api\Crm\StructType\CreditorDTO|null
     */
    public function getMidocoCreditor(): ?\Pggns\MidocoApi\Api\Crm\StructType\CreditorDTO
    {
        return $this->MidocoCreditor;
    }
    /**
     * Set MidocoCreditor value
     * @param \Pggns\MidocoApi\Api\Crm\StructType\CreditorDTO $midocoCreditor
     * @return \Pggns\MidocoApi\Api\Crm\StructType\SaveCreditorRequest
     */
    public function setMidocoCreditor(?\Pggns\MidocoApi\Api\Crm\StructType\CreditorDTO $midocoCreditor = null): self
    {
        $this->MidocoCreditor = $midocoCreditor;
        
        return $this;
    }
}
