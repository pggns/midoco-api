<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoCrmBonusCard StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoCrmBonusCard extends CrmBonusCardDTO
{
    /**
     * The description
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $description = null;
    /**
     * The MidocoMilesAndMoreCustomerData
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoMilesAndMoreCustomerData
     * @var \Pggns\MidocoApi\Crm\StructType\MilesAndMoreCustomerDataDTO|null
     */
    protected ?\Pggns\MidocoApi\Crm\StructType\MilesAndMoreCustomerDataDTO $MidocoMilesAndMoreCustomerData = null;
    /**
     * Constructor method for MidocoCrmBonusCard
     * @uses MidocoCrmBonusCard::setDescription()
     * @uses MidocoCrmBonusCard::setMidocoMilesAndMoreCustomerData()
     * @param string $description
     * @param \Pggns\MidocoApi\Crm\StructType\MilesAndMoreCustomerDataDTO $midocoMilesAndMoreCustomerData
     */
    public function __construct(?string $description = null, ?\Pggns\MidocoApi\Crm\StructType\MilesAndMoreCustomerDataDTO $midocoMilesAndMoreCustomerData = null)
    {
        $this
            ->setDescription($description)
            ->setMidocoMilesAndMoreCustomerData($midocoMilesAndMoreCustomerData);
    }
    /**
     * Get description value
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }
    /**
     * Set description value
     * @param string $description
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoCrmBonusCard
     */
    public function setDescription(?string $description = null): self
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        $this->description = $description;
        
        return $this;
    }
    /**
     * Get MidocoMilesAndMoreCustomerData value
     * @return \Pggns\MidocoApi\Crm\StructType\MilesAndMoreCustomerDataDTO|null
     */
    public function getMidocoMilesAndMoreCustomerData(): ?\Pggns\MidocoApi\Crm\StructType\MilesAndMoreCustomerDataDTO
    {
        return $this->MidocoMilesAndMoreCustomerData;
    }
    /**
     * Set MidocoMilesAndMoreCustomerData value
     * @param \Pggns\MidocoApi\Crm\StructType\MilesAndMoreCustomerDataDTO $midocoMilesAndMoreCustomerData
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoCrmBonusCard
     */
    public function setMidocoMilesAndMoreCustomerData(?\Pggns\MidocoApi\Crm\StructType\MilesAndMoreCustomerDataDTO $midocoMilesAndMoreCustomerData = null): self
    {
        $this->MidocoMilesAndMoreCustomerData = $midocoMilesAndMoreCustomerData;
        
        return $this;
    }
}
