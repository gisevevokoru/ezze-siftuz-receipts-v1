# LineItem

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**product_id** | **string** | The ProductID | 
**variation_id** | **string** | The variation ID of the item | 
**partner_variation_id** | **string** | The variation ID of the item set by the partner | 
**unit_price** | [**\EzzeSiftuz\ReceiptsV1\Model\MonetaryAmount**](MonetaryAmount.md) |  | 
**vat_rate** | **float** | The vat rate applicable for this position | 
**quantity** | **int** | Number of position items of this product billed or refunded with this receipt | 
**total** | [**\EzzeSiftuz\ReceiptsV1\Model\MonetaryAmount**](MonetaryAmount.md) |  | 
**sales_order_position_item_ids** | **string[]** | List of all position item ids of the order billed or reimbursed. In case of refund receipts the list can be empty. Please use positionItemIds from next versions | 
**promotion** | **string** | Promotion code, that together with the articleNumber it is shown as \&quot;article number\&quot; on the product detail page at the time of ordering. It&#x27;s part of the unique description of an ordered product on a receipt. | 
**dimensions** | **string** | Characteristics of a product like color, size or extension separated by commas.Shown on the product detail page when choosing the product. It&#x27;s part of the unique description of an ordered product on a receipt. | 
**product_title** | **string** | Short description of the ordered product shown on the product detail page at the time of ordering. It&#x27;s part of the unique description of an ordered product on a receipt. | 
**article_number** | **string** | External identifier of the product, together with the promotion it is shown as \&quot;article number\&quot; on the product detail page at the time of ordering. It&#x27;s part of the unique description of an ordered product on a receipt. | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

