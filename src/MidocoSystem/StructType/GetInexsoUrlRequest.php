<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\MidocoSystem\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetInexsoUrlRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetInexsoUrlRequest extends AbstractStructBase
{
    /**
     * The baseUrl
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $baseUrl = null;
    /**
     * The username
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $username = null;
    /**
     * The password
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $password = null;
    /**
     * The target
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $target = null;
    /**
     * The mailId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $mailId = null;
    /**
     * The mailboxId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $mailboxId = null;
    /**
     * The width
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $width = null;
    /**
     * The height
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $height = null;
    /**
     * The type
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $type = null;
    /**
     * The to
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $to = null;
    /**
     * The subject
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $subject = null;
    /**
     * The text
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $text = null;
    /**
     * The midocoCustomer
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $midocoCustomer = null;
    /**
     * The midocoOrder
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $midocoOrder = null;
    /**
     * The midocoAttachments
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $midocoAttachments = null;
    /**
     * The useDefaultMailboxId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $useDefaultMailboxId = null;
    /**
     * The recipientFirstName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $recipientFirstName = null;
    /**
     * The recipientLastName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $recipientLastName = null;
    /**
     * The cc
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $cc = null;
    /**
     * The bcc
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $bcc = null;
    /**
     * Constructor method for GetInexsoUrlRequest
     * @uses GetInexsoUrlRequest::setBaseUrl()
     * @uses GetInexsoUrlRequest::setUsername()
     * @uses GetInexsoUrlRequest::setPassword()
     * @uses GetInexsoUrlRequest::setTarget()
     * @uses GetInexsoUrlRequest::setMailId()
     * @uses GetInexsoUrlRequest::setMailboxId()
     * @uses GetInexsoUrlRequest::setWidth()
     * @uses GetInexsoUrlRequest::setHeight()
     * @uses GetInexsoUrlRequest::setType()
     * @uses GetInexsoUrlRequest::setTo()
     * @uses GetInexsoUrlRequest::setSubject()
     * @uses GetInexsoUrlRequest::setText()
     * @uses GetInexsoUrlRequest::setMidocoCustomer()
     * @uses GetInexsoUrlRequest::setMidocoOrder()
     * @uses GetInexsoUrlRequest::setMidocoAttachments()
     * @uses GetInexsoUrlRequest::setUseDefaultMailboxId()
     * @uses GetInexsoUrlRequest::setRecipientFirstName()
     * @uses GetInexsoUrlRequest::setRecipientLastName()
     * @uses GetInexsoUrlRequest::setCc()
     * @uses GetInexsoUrlRequest::setBcc()
     * @param string $baseUrl
     * @param string $username
     * @param string $password
     * @param string $target
     * @param string $mailId
     * @param string $mailboxId
     * @param string $width
     * @param string $height
     * @param string $type
     * @param string $to
     * @param string $subject
     * @param string $text
     * @param string $midocoCustomer
     * @param string $midocoOrder
     * @param string $midocoAttachments
     * @param bool $useDefaultMailboxId
     * @param string $recipientFirstName
     * @param string $recipientLastName
     * @param string $cc
     * @param string $bcc
     */
    public function __construct(?string $baseUrl = null, ?string $username = null, ?string $password = null, ?string $target = null, ?string $mailId = null, ?string $mailboxId = null, ?string $width = null, ?string $height = null, ?string $type = null, ?string $to = null, ?string $subject = null, ?string $text = null, ?string $midocoCustomer = null, ?string $midocoOrder = null, ?string $midocoAttachments = null, ?bool $useDefaultMailboxId = null, ?string $recipientFirstName = null, ?string $recipientLastName = null, ?string $cc = null, ?string $bcc = null)
    {
        $this
            ->setBaseUrl($baseUrl)
            ->setUsername($username)
            ->setPassword($password)
            ->setTarget($target)
            ->setMailId($mailId)
            ->setMailboxId($mailboxId)
            ->setWidth($width)
            ->setHeight($height)
            ->setType($type)
            ->setTo($to)
            ->setSubject($subject)
            ->setText($text)
            ->setMidocoCustomer($midocoCustomer)
            ->setMidocoOrder($midocoOrder)
            ->setMidocoAttachments($midocoAttachments)
            ->setUseDefaultMailboxId($useDefaultMailboxId)
            ->setRecipientFirstName($recipientFirstName)
            ->setRecipientLastName($recipientLastName)
            ->setCc($cc)
            ->setBcc($bcc);
    }
    /**
     * Get baseUrl value
     * @return string|null
     */
    public function getBaseUrl(): ?string
    {
        return $this->baseUrl;
    }
    /**
     * Set baseUrl value
     * @param string $baseUrl
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\GetInexsoUrlRequest
     */
    public function setBaseUrl(?string $baseUrl = null): self
    {
        // validation for constraint: string
        if (!is_null($baseUrl) && !is_string($baseUrl)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($baseUrl, true), gettype($baseUrl)), __LINE__);
        }
        $this->baseUrl = $baseUrl;
        
        return $this;
    }
    /**
     * Get username value
     * @return string|null
     */
    public function getUsername(): ?string
    {
        return $this->username;
    }
    /**
     * Set username value
     * @param string $username
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\GetInexsoUrlRequest
     */
    public function setUsername(?string $username = null): self
    {
        // validation for constraint: string
        if (!is_null($username) && !is_string($username)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($username, true), gettype($username)), __LINE__);
        }
        $this->username = $username;
        
        return $this;
    }
    /**
     * Get password value
     * @return string|null
     */
    public function getPassword(): ?string
    {
        return $this->password;
    }
    /**
     * Set password value
     * @param string $password
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\GetInexsoUrlRequest
     */
    public function setPassword(?string $password = null): self
    {
        // validation for constraint: string
        if (!is_null($password) && !is_string($password)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($password, true), gettype($password)), __LINE__);
        }
        $this->password = $password;
        
        return $this;
    }
    /**
     * Get target value
     * @return string|null
     */
    public function getTarget(): ?string
    {
        return $this->target;
    }
    /**
     * Set target value
     * @param string $target
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\GetInexsoUrlRequest
     */
    public function setTarget(?string $target = null): self
    {
        // validation for constraint: string
        if (!is_null($target) && !is_string($target)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($target, true), gettype($target)), __LINE__);
        }
        $this->target = $target;
        
        return $this;
    }
    /**
     * Get mailId value
     * @return string|null
     */
    public function getMailId(): ?string
    {
        return $this->mailId;
    }
    /**
     * Set mailId value
     * @param string $mailId
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\GetInexsoUrlRequest
     */
    public function setMailId(?string $mailId = null): self
    {
        // validation for constraint: string
        if (!is_null($mailId) && !is_string($mailId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mailId, true), gettype($mailId)), __LINE__);
        }
        $this->mailId = $mailId;
        
        return $this;
    }
    /**
     * Get mailboxId value
     * @return string|null
     */
    public function getMailboxId(): ?string
    {
        return $this->mailboxId;
    }
    /**
     * Set mailboxId value
     * @param string $mailboxId
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\GetInexsoUrlRequest
     */
    public function setMailboxId(?string $mailboxId = null): self
    {
        // validation for constraint: string
        if (!is_null($mailboxId) && !is_string($mailboxId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mailboxId, true), gettype($mailboxId)), __LINE__);
        }
        $this->mailboxId = $mailboxId;
        
        return $this;
    }
    /**
     * Get width value
     * @return string|null
     */
    public function getWidth(): ?string
    {
        return $this->width;
    }
    /**
     * Set width value
     * @param string $width
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\GetInexsoUrlRequest
     */
    public function setWidth(?string $width = null): self
    {
        // validation for constraint: string
        if (!is_null($width) && !is_string($width)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($width, true), gettype($width)), __LINE__);
        }
        $this->width = $width;
        
        return $this;
    }
    /**
     * Get height value
     * @return string|null
     */
    public function getHeight(): ?string
    {
        return $this->height;
    }
    /**
     * Set height value
     * @param string $height
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\GetInexsoUrlRequest
     */
    public function setHeight(?string $height = null): self
    {
        // validation for constraint: string
        if (!is_null($height) && !is_string($height)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($height, true), gettype($height)), __LINE__);
        }
        $this->height = $height;
        
        return $this;
    }
    /**
     * Get type value
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }
    /**
     * Set type value
     * @param string $type
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\GetInexsoUrlRequest
     */
    public function setType(?string $type = null): self
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($type, true), gettype($type)), __LINE__);
        }
        $this->type = $type;
        
        return $this;
    }
    /**
     * Get to value
     * @return string|null
     */
    public function getTo(): ?string
    {
        return $this->to;
    }
    /**
     * Set to value
     * @param string $to
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\GetInexsoUrlRequest
     */
    public function setTo(?string $to = null): self
    {
        // validation for constraint: string
        if (!is_null($to) && !is_string($to)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($to, true), gettype($to)), __LINE__);
        }
        $this->to = $to;
        
        return $this;
    }
    /**
     * Get subject value
     * @return string|null
     */
    public function getSubject(): ?string
    {
        return $this->subject;
    }
    /**
     * Set subject value
     * @param string $subject
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\GetInexsoUrlRequest
     */
    public function setSubject(?string $subject = null): self
    {
        // validation for constraint: string
        if (!is_null($subject) && !is_string($subject)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($subject, true), gettype($subject)), __LINE__);
        }
        $this->subject = $subject;
        
        return $this;
    }
    /**
     * Get text value
     * @return string|null
     */
    public function getText(): ?string
    {
        return $this->text;
    }
    /**
     * Set text value
     * @param string $text
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\GetInexsoUrlRequest
     */
    public function setText(?string $text = null): self
    {
        // validation for constraint: string
        if (!is_null($text) && !is_string($text)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($text, true), gettype($text)), __LINE__);
        }
        $this->text = $text;
        
        return $this;
    }
    /**
     * Get midocoCustomer value
     * @return string|null
     */
    public function getMidocoCustomer(): ?string
    {
        return $this->midocoCustomer;
    }
    /**
     * Set midocoCustomer value
     * @param string $midocoCustomer
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\GetInexsoUrlRequest
     */
    public function setMidocoCustomer(?string $midocoCustomer = null): self
    {
        // validation for constraint: string
        if (!is_null($midocoCustomer) && !is_string($midocoCustomer)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($midocoCustomer, true), gettype($midocoCustomer)), __LINE__);
        }
        $this->midocoCustomer = $midocoCustomer;
        
        return $this;
    }
    /**
     * Get midocoOrder value
     * @return string|null
     */
    public function getMidocoOrder(): ?string
    {
        return $this->midocoOrder;
    }
    /**
     * Set midocoOrder value
     * @param string $midocoOrder
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\GetInexsoUrlRequest
     */
    public function setMidocoOrder(?string $midocoOrder = null): self
    {
        // validation for constraint: string
        if (!is_null($midocoOrder) && !is_string($midocoOrder)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($midocoOrder, true), gettype($midocoOrder)), __LINE__);
        }
        $this->midocoOrder = $midocoOrder;
        
        return $this;
    }
    /**
     * Get midocoAttachments value
     * @return string|null
     */
    public function getMidocoAttachments(): ?string
    {
        return $this->midocoAttachments;
    }
    /**
     * Set midocoAttachments value
     * @param string $midocoAttachments
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\GetInexsoUrlRequest
     */
    public function setMidocoAttachments(?string $midocoAttachments = null): self
    {
        // validation for constraint: string
        if (!is_null($midocoAttachments) && !is_string($midocoAttachments)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($midocoAttachments, true), gettype($midocoAttachments)), __LINE__);
        }
        $this->midocoAttachments = $midocoAttachments;
        
        return $this;
    }
    /**
     * Get useDefaultMailboxId value
     * @return bool|null
     */
    public function getUseDefaultMailboxId(): ?bool
    {
        return $this->useDefaultMailboxId;
    }
    /**
     * Set useDefaultMailboxId value
     * @param bool $useDefaultMailboxId
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\GetInexsoUrlRequest
     */
    public function setUseDefaultMailboxId(?bool $useDefaultMailboxId = null): self
    {
        // validation for constraint: boolean
        if (!is_null($useDefaultMailboxId) && !is_bool($useDefaultMailboxId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($useDefaultMailboxId, true), gettype($useDefaultMailboxId)), __LINE__);
        }
        $this->useDefaultMailboxId = $useDefaultMailboxId;
        
        return $this;
    }
    /**
     * Get recipientFirstName value
     * @return string|null
     */
    public function getRecipientFirstName(): ?string
    {
        return $this->recipientFirstName;
    }
    /**
     * Set recipientFirstName value
     * @param string $recipientFirstName
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\GetInexsoUrlRequest
     */
    public function setRecipientFirstName(?string $recipientFirstName = null): self
    {
        // validation for constraint: string
        if (!is_null($recipientFirstName) && !is_string($recipientFirstName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($recipientFirstName, true), gettype($recipientFirstName)), __LINE__);
        }
        $this->recipientFirstName = $recipientFirstName;
        
        return $this;
    }
    /**
     * Get recipientLastName value
     * @return string|null
     */
    public function getRecipientLastName(): ?string
    {
        return $this->recipientLastName;
    }
    /**
     * Set recipientLastName value
     * @param string $recipientLastName
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\GetInexsoUrlRequest
     */
    public function setRecipientLastName(?string $recipientLastName = null): self
    {
        // validation for constraint: string
        if (!is_null($recipientLastName) && !is_string($recipientLastName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($recipientLastName, true), gettype($recipientLastName)), __LINE__);
        }
        $this->recipientLastName = $recipientLastName;
        
        return $this;
    }
    /**
     * Get cc value
     * @return string|null
     */
    public function getCc(): ?string
    {
        return $this->cc;
    }
    /**
     * Set cc value
     * @param string $cc
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\GetInexsoUrlRequest
     */
    public function setCc(?string $cc = null): self
    {
        // validation for constraint: string
        if (!is_null($cc) && !is_string($cc)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cc, true), gettype($cc)), __LINE__);
        }
        $this->cc = $cc;
        
        return $this;
    }
    /**
     * Get bcc value
     * @return string|null
     */
    public function getBcc(): ?string
    {
        return $this->bcc;
    }
    /**
     * Set bcc value
     * @param string $bcc
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\GetInexsoUrlRequest
     */
    public function setBcc(?string $bcc = null): self
    {
        // validation for constraint: string
        if (!is_null($bcc) && !is_string($bcc)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bcc, true), gettype($bcc)), __LINE__);
        }
        $this->bcc = $bcc;
        
        return $this;
    }
}
