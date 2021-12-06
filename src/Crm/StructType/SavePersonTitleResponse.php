<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SavePersonTitleResponse StructType
 * @subpackage Structs
 */
class SavePersonTitleResponse extends AbstractStructBase
{
    /**
     * The PersonTitle
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - ref: PersonTitle
     * @var \Pggns\MidocoApi\Crm\StructType\PersonTitleDTO
     */
    protected \Pggns\MidocoApi\Crm\StructType\PersonTitleDTO $PersonTitle;
    /**
     * Constructor method for SavePersonTitleResponse
     * @uses SavePersonTitleResponse::setPersonTitle()
     * @param \Pggns\MidocoApi\Crm\StructType\PersonTitleDTO $personTitle
     */
    public function __construct(\Pggns\MidocoApi\Crm\StructType\PersonTitleDTO $personTitle)
    {
        $this
            ->setPersonTitle($personTitle);
    }
    /**
     * Get PersonTitle value
     * @return \Pggns\MidocoApi\Crm\StructType\PersonTitleDTO
     */
    public function getPersonTitle(): \Pggns\MidocoApi\Crm\StructType\PersonTitleDTO
    {
        return $this->PersonTitle;
    }
    /**
     * Set PersonTitle value
     * @param \Pggns\MidocoApi\Crm\StructType\PersonTitleDTO $personTitle
     * @return \Pggns\MidocoApi\Crm\StructType\SavePersonTitleResponse
     */
    public function setPersonTitle(\Pggns\MidocoApi\Crm\StructType\PersonTitleDTO $personTitle): self
    {
        $this->PersonTitle = $personTitle;
        
        return $this;
    }
}
