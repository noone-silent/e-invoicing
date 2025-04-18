<?php

declare(strict_types=1);

namespace easybill\eInvoicing\CII\Models;

use easybill\eInvoicing\Enums\DocumentType;
use easybill\eInvoicing\Enums\ReferenceQualifier;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlElement;

final class ReferencedDocument
{
    #[Type(Id::class)]
    #[XmlElement(cdata: false, namespace: 'urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100')]
    #[SerializedName('IssuerAssignedID')]
    public Id $issuerAssignedID;

    #[Type(Id::class)]
    #[XmlElement(cdata: false, namespace: 'urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100')]
    #[SerializedName('URIID')]
    public ?Id $uriid = null;

    #[Type(DocumentType::class)]
    #[XmlElement(cdata: false, namespace: 'urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100')]
    #[SerializedName('TypeCode')]
    public ?DocumentType $typeCode = null;

    #[Type(StringValue::class)]
    #[XmlElement(cdata: false, namespace: 'urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100')]
    #[SerializedName('Name')]
    public ?string $name = null;

    #[Type(BinaryObject::class)]
    #[XmlElement(cdata: false, namespace: 'urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100')]
    #[SerializedName('AttachmentBinaryObject')]
    public ?BinaryObject $attachmentBinaryObject = null;

    #[Type(FormattedDateTime::class)]
    #[XmlElement(cdata: false, namespace: 'urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100')]
    #[SerializedName('FormattedIssueDateTime')]
    public ?FormattedDateTime $formattedIssueDateTime = null;

    #[Type(StringValue::class)]
    #[XmlElement(cdata: false, namespace: 'urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100')]
    #[SerializedName('LineID')]
    public ?string $lineId = null;

    #[Type(ReferenceQualifier::class)]
    #[XmlElement(cdata: false, namespace: 'urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:100')]
    #[SerializedName('ReferenceTypeCode')]
    public ?ReferenceQualifier $referenceTypeCode = null;

    public static function create(string $issuerAssignedID): self
    {
        $self = new self();
        $self->issuerAssignedID = Id::create($issuerAssignedID);
        return $self;
    }
}
