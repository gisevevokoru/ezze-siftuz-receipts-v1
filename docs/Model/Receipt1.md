# Receipt1

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**receipt_id** | **string** | The id of the corresponding receipt. For any receipt, this id is unique. | 
**type** | **string** | Special type of receipt. Needed to make a distinction between purchase and refund receipts | 
**original_receipt_id** | **string** | The id of the original purchase receipt in case of this being a refund receipt | [optional] 
**original_receipt_number** | **string** | Unique identifier of the corresponding purchase receipt with which the reimbursed position item was billed. Only filled in case of refund receipts.In case of &#x27;refund receipt for shipping costs only&#x27; the field remains empty even if it is a refund receipt.Printed on the purchase receipt and used to identified the corresponding purchase receipt. | [optional] 
**receipt_number** | **string** | Unique identifier of a receipt. Printed on the receipt and used to identified the receipt in case of contact to user and partner. | 
**sales_order_id** | **string** | Reference to the sales order with that the order was placed. Taken from corresponding sales order. | 
**order_number** | **string** | The human-readable sales order number taken from corresponding sales order. Printed on the receipt. | 
**url** | **string** | API call to get corresponding PDF receipt. At the moment PDFs are only generated for purchase receipts. | 
**creation_date** | [**\DateTime**](\DateTime.md) | Date and time when a receipt is created by system in ISO format | 
**order_date** | [**\DateTime**](\DateTime.md) | Date and time when the order was placed in ISO format | 
**shipment_date** | [**\DateTime**](\DateTime.md) | Date and time in ISO format when the position items were handed over to a carrier for delivery to the customer. Only available for purchase receipts | 
**return_date** | [**\DateTime**](\DateTime.md) | Date and time when return is accepted. Only available for refund receipts. | [optional] 
**transaction_id** | **string** | Unique transaction Id provided by the transaction management for payment initialization once per order. | 
**payment_method** | **string** | Payment method used by the customer to pay for this order. | 
**payment** | [**\EzzeSiftuz\ReceiptsV1\Model\Payment**](Payment.md) |  | [optional] 
**partner** | [**\EzzeSiftuz\ReceiptsV1\Model\Partner**](Partner.md) |  | 
**customer** | [**\EzzeSiftuz\ReceiptsV1\Model\Customer**](Customer.md) |  | 
**delivery_address** | [**\EzzeSiftuz\ReceiptsV1\Model\DeliveryAddress**](DeliveryAddress.md) |  | 
**line_items** | [**\EzzeSiftuz\ReceiptsV1\Model\LineItem[]**](LineItem.md) | List of specific position item ids of the order billed or reimbursed.In case of &#x27;refund receipt for shipping costs only&#x27; the list can be empty. | [optional] 
**shipping_cost** | [**\EzzeSiftuz\ReceiptsV1\Model\ShippingCost1**](ShippingCost1.md) |  | 
**total** | [**\EzzeSiftuz\ReceiptsV1\Model\Total1**](Total1.md) |  | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

