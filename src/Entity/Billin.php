<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Billin
 *
 * @ORM\Table(name="billin")
 * @ORM\Entity
 */
class Billin
{
    public function __construct()
    {
        $this->billDate = new \DateTime();
        $this->timest = new \DateTime();
        $this->billProvidedDateMm  = new \DateTime();
    }
    /**
     * @return int
     */
    public function getUid(): int
    {
        return $this->uid;
    }

    /**
     * @param int $uid
     */
    public function setUid(int $uid): void
    {
        $this->uid = $uid;
    }

    /**
     * @return string
     */
    public function getDb(): string
    {
        return $this->db;
    }

    /**
     * @param string $db
     */
    public function setDb(string $db): void
    {
        $this->db = $db;
    }

    /**
     * @return \DateTime
     */
    public function getTimest(): \DateTime
    {
        return $this->timest;
    }

    /**
     * @param \DateTime $timest
     */
    public function setTimest(\DateTime $timest): void
    {
        $this->timest = $timest;
    }

    /**
     * @return int
     */
    public function getRNr(): int
    {
        return $this->rNr;
    }

    /**
     * @param int $rNr
     */
    public function setRNr(int $rNr): void
    {
        $this->rNr = $rNr;
    }

    /**
     * @return string
     */
    public function getUmstv(): string
    {
        return $this->umstv;
    }

    /**
     * @param string $umstv
     */
    public function setUmstv(string $umstv): void
    {
        $this->umstv = $umstv;
    }

    /**
     * @return string
     */
    public function getHinweis(): string
    {
        return $this->hinweis;
    }

    /**
     * @param string $hinweis
     */
    public function setHinweis(string $hinweis): void
    {
        $this->hinweis = $hinweis;
    }

    /**
     * @return float
     */
    public function getBillTaxFree(): float
    {
        return $this->billTaxFree;
    }

    /**
     * @param float $billTaxFree
     */
    public function setBillTaxFree(float $billTaxFree): void
    {
        $this->billTaxFree = $billTaxFree;
    }

    /**
     * @return float
     */
    public function getBillTaxPrice(): float
    {
        return $this->billTaxPrice;
    }

    /**
     * @param float $billTaxPrice
     */
    public function setBillTaxPrice(float $billTaxPrice): void
    {
        $this->billTaxPrice = $billTaxPrice;
    }

    /**
     * @return string
     */
    public function getBillTrade(): string
    {
        return $this->billTrade;
    }

    /**
     * @param string $billTrade
     */
    public function setBillTrade(string $billTrade): void
    {
        $this->billTrade = $billTrade;
    }

    /**
     * @return \DateTime
     */
    public function getBillDate(): \DateTime
    {
        return $this->billDate;
    }

    /**
     * @param \DateTime $billDate
     */
    public function setBillDate(\DateTime $billDate): void
    {
        $this->billDate = $billDate;
    }

    /**
     * @return \DateTime
     */
    public function getBillProvidedDateMm(): \DateTime
    {
        return $this->billProvidedDateMm;
    }

    /**
     * @param \DateTime $billProvidedDateMm
     */
    public function setBillProvidedDateMm(\DateTime $billProvidedDateMm): void
    {
        $this->billProvidedDateMm = $billProvidedDateMm;
    }

    /**
     * @return bool
     */
    public function isBillPrebillUid(): bool
    {
        return $this->billPrebillUid;
    }

    /**
     * @param bool $billPrebillUid
     */
    public function setBillPrebillUid(bool $billPrebillUid): void
    {
        $this->billPrebillUid = $billPrebillUid;
    }

    /**
     * @return bool
     */
    public function isBillStornoUid(): bool
    {
        return $this->billStornoUid;
    }

    /**
     * @param bool $billStornoUid
     */
    public function setBillStornoUid(bool $billStornoUid): void
    {
        $this->billStornoUid = $billStornoUid;
    }

    /**
     * @return string
     */
    public function getBillStornoText(): string
    {
        return $this->billStornoText;
    }

    /**
     * @param string $billStornoText
     */
    public function setBillStornoText(string $billStornoText): void
    {
        $this->billStornoText = $billStornoText;
    }

    /**
     * @return string
     */
    public function getBillArticleDescription(): string
    {
        return $this->billArticleDescription;
    }

    /**
     * @param string $billArticleDescription
     */
    public function setBillArticleDescription(string $billArticleDescription): void
    {
        $this->billArticleDescription = $billArticleDescription;
    }

    /**
     * @return string
     */
    public function getBillArticleType(): string
    {
        return $this->billArticleType;
    }

    /**
     * @param string $billArticleType
     */
    public function setBillArticleType(string $billArticleType): void
    {
        $this->billArticleType = $billArticleType;
    }

    /**
     * @return string
     */
    public function getBillPaymentType(): string
    {
        return $this->billPaymentType;
    }

    /**
     * @param string $billPaymentType
     */
    public function setBillPaymentType(string $billPaymentType): void
    {
        $this->billPaymentType = $billPaymentType;
    }

    /**
     * @return bool
     */
    public function isBillClientUid(): bool
    {
        return $this->billClientUid;
    }

    /**
     * @param bool $billClientUid
     */
    public function setBillClientUid(bool $billClientUid): void
    {
        $this->billClientUid = $billClientUid;
    }

    /**
     * @return int
     */
    public function getBillTax(): int
    {
        return $this->billTax;
    }

    /**
     * @param int $billTax
     */
    public function setBillTax(int $billTax): void
    {
        $this->billTax = $billTax;
    }

    /**
     * @return float
     */
    public function getBillPrice(): float
    {
        return $this->billPrice;
    }

    /**
     * @param float $billPrice
     */
    public function setBillPrice(float $billPrice): void
    {
        $this->billPrice = $billPrice;
    }

    /**
     * @return bool
     */
    public function isBillBusinessTermsData(): bool
    {
        return $this->billBusinessTermsData;
    }

    /**
     * @param bool $billBusinessTermsData
     */
    public function setBillBusinessTermsData(bool $billBusinessTermsData): void
    {
        $this->billBusinessTermsData = $billBusinessTermsData;
    }

    /**
     * @return bool
     */
    public function isBillBusinessTermsUse(): bool
    {
        return $this->billBusinessTermsUse;
    }

    /**
     * @param bool $billBusinessTermsUse
     */
    public function setBillBusinessTermsUse(bool $billBusinessTermsUse): void
    {
        $this->billBusinessTermsUse = $billBusinessTermsUse;
    }

    /**
     * @return string
     */
    public function getTransactionType(): string
    {
        return $this->transactionType;
    }

    /**
     * @param string $transactionType
     */
    public function setTransactionType(string $transactionType): void
    {
        $this->transactionType = $transactionType;
    }

    /**
     * @return string
     */
    public function getTransactionTokenId(): string
    {
        return $this->transactionTokenId;
    }

    /**
     * @param string $transactionTokenId
     */
    public function setTransactionTokenId(string $transactionTokenId): void
    {
        $this->transactionTokenId = $transactionTokenId;
    }

    /**
     * @return string
     */
    public function getTransactionTransactionId(): string
    {
        return $this->transactionTransactionId;
    }

    /**
     * @param string $transactionTransactionId
     */
    public function setTransactionTransactionId(string $transactionTransactionId): void
    {
        $this->transactionTransactionId = $transactionTransactionId;
    }

    /**
     * @return string
     */
    public function getTransactionClientId(): string
    {
        return $this->transactionClientId;
    }

    /**
     * @param string $transactionClientId
     */
    public function setTransactionClientId(string $transactionClientId): void
    {
        $this->transactionClientId = $transactionClientId;
    }

    /**
     * @return string
     */
    public function getTransactionPaymentId(): string
    {
        return $this->transactionPaymentId;
    }

    /**
     * @param string $transactionPaymentId
     */
    public function setTransactionPaymentId(string $transactionPaymentId): void
    {
        $this->transactionPaymentId = $transactionPaymentId;
    }

    /**
     * @return string
     */
    public function getTransactionRefundId(): string
    {
        return $this->transactionRefundId;
    }

    /**
     * @param string $transactionRefundId
     */
    public function setTransactionRefundId(string $transactionRefundId): void
    {
        $this->transactionRefundId = $transactionRefundId;
    }

    /**
     * @return string
     */
    public function getTransactionStatus(): string
    {
        return $this->transactionStatus;
    }

    /**
     * @param string $transactionStatus
     */
    public function setTransactionStatus(string $transactionStatus): void
    {
        $this->transactionStatus = $transactionStatus;
    }

    /**
     * @return string
     */
    public function getTransactionResponseCode(): string
    {
        return $this->transactionResponseCode;
    }

    /**
     * @param string $transactionResponseCode
     */
    public function setTransactionResponseCode(string $transactionResponseCode): void
    {
        $this->transactionResponseCode = $transactionResponseCode;
    }

    /**
     * @return string
     */
    public function getTransactionResponseObject(): string
    {
        return $this->transactionResponseObject;
    }

    /**
     * @param string $transactionResponseObject
     */
    public function setTransactionResponseObject(string $transactionResponseObject): void
    {
        $this->transactionResponseObject = $transactionResponseObject;
    }

    /**
     * @return string
     */
    public function getTransactionResponseArray(): string
    {
        return $this->transactionResponseArray;
    }

    /**
     * @param string $transactionResponseArray
     */
    public function setTransactionResponseArray(string $transactionResponseArray): void
    {
        $this->transactionResponseArray = $transactionResponseArray;
    }

    /**
     * @return int
     */
    public function getTransactionAmount(): int
    {
        return $this->transactionAmount;
    }

    /**
     * @param int $transactionAmount
     */
    public function setTransactionAmount(int $transactionAmount): void
    {
        $this->transactionAmount = $transactionAmount;
    }

    /**
     * @return string
     */
    public function getTransactionDescription(): string
    {
        return $this->transactionDescription;
    }

    /**
     * @param string $transactionDescription
     */
    public function setTransactionDescription(string $transactionDescription): void
    {
        $this->transactionDescription = $transactionDescription;
    }

    /**
     * @return string
     */
    public function getTransactionPrice(): string
    {
        return $this->transactionPrice;
    }

    /**
     * @param string $transactionPrice
     */
    public function setTransactionPrice(string $transactionPrice): void
    {
        $this->transactionPrice = $transactionPrice;
    }

    /**
     * @return bool
     */
    public function isCustomerNewsletter(): bool
    {
        return $this->customerNewsletter;
    }

    /**
     * @param bool $customerNewsletter
     */
    public function setCustomerNewsletter(bool $customerNewsletter): void
    {
        $this->customerNewsletter = $customerNewsletter;
    }

    /**
     * @return string
     */
    public function getCustomerFirstname(): string
    {
        return $this->customerFirstname;
    }

    /**
     * @param string $customerFirstname
     */
    public function setCustomerFirstname(string $customerFirstname): void
    {
        $this->customerFirstname = $customerFirstname;
    }

    /**
     * @return string
     */
    public function getCustomerLastname(): string
    {
        return $this->customerLastname;
    }

    /**
     * @param string $customerLastname
     */
    public function setCustomerLastname(string $customerLastname): void
    {
        $this->customerLastname = $customerLastname;
    }

    /**
     * @return string
     */
    public function getCustomerEmail(): string
    {
        return $this->customerEmail;
    }

    /**
     * @param string $customerEmail
     */
    public function setCustomerEmail(string $customerEmail): void
    {
        $this->customerEmail = $customerEmail;
    }

    /**
     * @return string
     */
    public function getCustomerAddress(): string
    {
        return $this->customerAddress;
    }

    /**
     * @param string $customerAddress
     */
    public function setCustomerAddress(string $customerAddress): void
    {
        $this->customerAddress = $customerAddress;
    }

    /**
     * @return string
     */
    public function getCustomerCountry(): string
    {
        return $this->customerCountry;
    }

    /**
     * @param string $customerCountry
     */
    public function setCustomerCountry(string $customerCountry): void
    {
        $this->customerCountry = $customerCountry;
    }

    /**
     * @return string
     */
    public function getCustomerCity(): string
    {
        return $this->customerCity;
    }

    /**
     * @param string $customerCity
     */
    public function setCustomerCity(string $customerCity): void
    {
        $this->customerCity = $customerCity;
    }

    /**
     * @return string
     */
    public function getCustomerCompany(): string
    {
        return $this->customerCompany;
    }

    /**
     * @param string $customerCompany
     */
    public function setCustomerCompany(string $customerCompany): void
    {
        $this->customerCompany = $customerCompany;
    }

    /**
     * @return string
     */
    public function getCustomerPhone(): string
    {
        return $this->customerPhone;
    }

    /**
     * @param string $customerPhone
     */
    public function setCustomerPhone(string $customerPhone): void
    {
        $this->customerPhone = $customerPhone;
    }

    /**
     * @return string
     */
    public function getCustomerZip(): string
    {
        return $this->customerZip;
    }

    /**
     * @param string $customerZip
     */
    public function setCustomerZip(string $customerZip): void
    {
        $this->customerZip = $customerZip;
    }

    /**
     * @return string
     */
    public function getCustomerDomainLicense(): string
    {
        return $this->customerDomainLicense;
    }

    /**
     * @param string $customerDomainLicense
     */
    public function setCustomerDomainLicense(string $customerDomainLicense): void
    {
        $this->customerDomainLicense = $customerDomainLicense;
    }

    /**
     * @return string
     */
    public function getCustomerDomain(): string
    {
        return $this->customerDomain;
    }

    /**
     * @param string $customerDomain
     */
    public function setCustomerDomain(string $customerDomain): void
    {
        $this->customerDomain = $customerDomain;
    }

    /**
     * @return string
     */
    public function getCustomerDomainHolder(): string
    {
        return $this->customerDomainHolder;
    }

    /**
     * @param string $customerDomainHolder
     */
    public function setCustomerDomainHolder(string $customerDomainHolder): void
    {
        $this->customerDomainHolder = $customerDomainHolder;
    }

    /**
     * @return string
     */
    public function getCustomerDomainEmail(): string
    {
        return $this->customerDomainEmail;
    }

    /**
     * @param string $customerDomainEmail
     */
    public function setCustomerDomainEmail(string $customerDomainEmail): void
    {
        $this->customerDomainEmail = $customerDomainEmail;
    }
    /**
     * @var int
     *
     * @ORM\Column(name="uid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $uid;

    /**
     * @var string
     *
     * @ORM\Column(name="db", type="text", length=65535, nullable=false)
     */
    private $db = '';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="timest", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $timest = 'CURRENT_TIMESTAMP';

    /**
     * @var int
     *
     * @ORM\Column(name="r_nr", type="integer", nullable=false)
     */
    private $rNr = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="umstv", type="text", length=65535, nullable=false)
     */
    private $umstv = '';

    /**
     * @var string
     *
     * @ORM\Column(name="hinweis", type="text", length=65535, nullable=false)
     */
    private $hinweis = '';

    /**
     * @var float
     *
     * @ORM\Column(name="bill_tax_free", type="float", precision=10, scale=0, nullable=false)
     */
    private $billTaxFree = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="bill_tax_price", type="float", precision=10, scale=0, nullable=false)
     */
    private $billTaxPrice = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="bill_trade", type="string", length=12, nullable=false, options={"default"="informatik"})
     */
    private $billTrade = 'informatik';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="bill_date", type="datetime")
     * @Assert\DateTime
     */
    private $billDate;


    /**
     * @var \DateTime
     *
     * @ORM\Column(name="bill_provided_date_mm", type="date", nullable=false, options={"comment"="monat"})
     */
    private $billProvidedDateMm;

    /**
     * @var bool
     *
     * @ORM\Column(name="bill_prebill_uid", type="boolean", nullable=false)
     */
    private $billPrebillUid = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="bill_storno_uid", type="boolean", nullable=false)
     */
    private $billStornoUid = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="bill_storno_text", type="text", length=65535, nullable=false)
     */
    private $billStornoText = '';

    /**
     * @var string
     *
     * @ORM\Column(name="bill_article_description", type="text", length=65535, nullable=false)
     */
    private $billArticleDescription = '';

    /**
     * @var string
     *
     * @ORM\Column(name="bill_article_type", type="text", length=65535, nullable=false)
     */
    private $billArticleType = '';

    /**
     * @var string
     *
     * @ORM\Column(name="bill_payment_type", type="text", length=65535, nullable=false)
     */
    private $billPaymentType = '';

    /**
     * @var bool
     *
     * @ORM\Column(name="bill_client_uid", type="boolean", nullable=false)
     */
    private $billClientUid = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="bill_tax", type="integer", nullable=false, options={"default"="19"})
     */
    private $billTax = '19';

    /**
     * @var float
     *
     * @ORM\Column(name="bill_price", type="float", precision=10, scale=0, nullable=false)
     */
    private $billPrice = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="bill_business_terms_data", type="boolean", nullable=false)
     */
    private $billBusinessTermsData = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="bill_business_terms_use", type="boolean", nullable=false)
     */
    private $billBusinessTermsUse = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="transaction_type", type="string", length=255, nullable=false)
     */
    private $transactionType = '';

    /**
     * @var string
     *
     * @ORM\Column(name="transaction_token_id", type="string", length=255, nullable=false)
     */
    private $transactionTokenId = '';

    /**
     * @var string
     *
     * @ORM\Column(name="transaction_transaction_id", type="string", length=255, nullable=false)
     */
    private $transactionTransactionId = '';

    /**
     * @var string
     *
     * @ORM\Column(name="transaction_client_id", type="string", length=255, nullable=false)
     */
    private $transactionClientId = '';

    /**
     * @var string
     *
     * @ORM\Column(name="transaction_payment_id", type="string", length=255, nullable=false)
     */
    private $transactionPaymentId = '';

    /**
     * @var string
     *
     * @ORM\Column(name="transaction_refund_id", type="string", length=255, nullable=false)
     */
    private $transactionRefundId = '';

    /**
     * @var string
     *
     * @ORM\Column(name="transaction_status", type="string", length=255, nullable=false)
     */
    private $transactionStatus = '';

    /**
     * @var string
     *
     * @ORM\Column(name="transaction_response_code", type="string", length=255, nullable=false)
     */
    private $transactionResponseCode = '';

    /**
     * @var string
     *
     * @ORM\Column(name="transaction_response_object", type="text", length=65535, nullable=false)
     */
    private $transactionResponseObject = '';

    /**
     * @var string
     *
     * @ORM\Column(name="transaction_response_array", type="text", length=65535, nullable=false)
     */
    private $transactionResponseArray = '';

    /**
     * @var int
     *
     * @ORM\Column(name="transaction_amount", type="integer", nullable=false)
     */
    private $transactionAmount = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="transaction_description", type="text", length=65535, nullable=false)
     */
    private $transactionDescription = '';

    /**
     * @var string
     *
     * @ORM\Column(name="transaction_price", type="string", length=255, nullable=false)
     */
    private $transactionPrice = '';

    /**
     * @var bool
     *
     * @ORM\Column(name="customer_newsletter", type="boolean", nullable=false)
     */
    private $customerNewsletter = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="customer_firstname", type="string", length=255, nullable=false)
     */
    private $customerFirstname = '';

    /**
     * @var string
     *
     * @ORM\Column(name="customer_lastname", type="string", length=255, nullable=false)
     */
    private $customerLastname = '';

    /**
     * @var string
     *
     * @ORM\Column(name="customer_email", type="string", length=255, nullable=false)
     */
    private $customerEmail = '';

    /**
     * @var string
     *
     * @ORM\Column(name="customer_address", type="string", length=255, nullable=false)
     */
    private $customerAddress = '';

    /**
     * @var string
     *
     * @ORM\Column(name="customer_country", type="string", length=255, nullable=false)
     */
    private $customerCountry = '';

    /**
     * @var string
     *
     * @ORM\Column(name="customer_city", type="string", length=255, nullable=false)
     */
    private $customerCity = '';

    /**
     * @var string
     *
     * @ORM\Column(name="customer_company", type="string", length=255, nullable=false)
     */
    private $customerCompany = '';

    /**
     * @var string
     *
     * @ORM\Column(name="customer_phone", type="string", length=255, nullable=false)
     */
    private $customerPhone = '';

    /**
     * @var string
     *
     * @ORM\Column(name="customer_zip", type="string", length=255, nullable=false)
     */
    private $customerZip = '';

    /**
     * @var string
     *
     * @ORM\Column(name="customer_domain_license", type="string", length=255, nullable=false)
     */
    private $customerDomainLicense = '';

    /**
     * @var string
     *
     * @ORM\Column(name="customer_domain", type="string", length=255, nullable=false)
     */
    private $customerDomain = '';

    /**
     * @var string
     *
     * @ORM\Column(name="customer_domain_holder", type="string", length=255, nullable=false)
     */
    private $customerDomainHolder = '';

    /**
     * @var string
     *
     * @ORM\Column(name="customer_domain_email", type="string", length=255, nullable=false)
     */
    private $customerDomainEmail = '';


}
