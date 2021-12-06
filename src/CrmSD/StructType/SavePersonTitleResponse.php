<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\CrmSD\StructType;

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
     * @var \Pggns\MidocoApi\CrmSD\StructType\PersonTitleDTO
     */
    protected \Pggns\MidocoApi\CrmSD\StructType\PersonTitleDTO $PersonTitle;
    /**
     * Constructor method for SavePersonTitleResponse
     * @uses SavePersonTitleResponse::setPersonTitle()
     * @param \Pggns\MidocoApi\CrmSD\StructType\PersonTitleDTO $personTitle
     */
    public function __construct(\Pggns\MidocoApi\CrmSD\StructType\PersonTitleDTO $personTitle)
    {
        $this
            ->setPersonTitle($personTitle);
    }
    /**
     * Get PersonTitle value
     * @return \Pggns\MidocoApi\CrmSD\StructType\PersonTitleDTO
     */
    public function getPersonTitle(): \Pggns\MidocoApi\CrmSD\StructType\PersonTitleDTO
    {
        return $this->PersonTitle;
    }
    /**
     * Set PersonTitle value
     * @param \Pggns\MidocoApi\CrmSD\StructType\PersonTitleDTO $personTitle
     * @return \Pggns\MidocoApi\CrmSD\StructType\SavePersonTitleResponse
     */
    public function setPersonTitle(\Pggns\MidocoApi\CrmSD\StructType\PersonTitleDTO $personTitle): self
    {
        $this->PersonTitle = $personTitle;
        
        return $this;
    }
}
