<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PerformSMSCampaignResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: performSMSCampaign --- initiate a messaging campaign, text template (maybe modified) and campaign_id is provided. An exception should be thrown if the text template is not parsable or if SMS is not usable
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PerformSMSCampaignResponse extends AbstractStructBase
{
}
