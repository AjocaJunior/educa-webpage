<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/recommendationengine/v1beta1/catalog.proto

namespace Google\Cloud\RecommendationEngine\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * ProductCatalogItem captures item metadata specific to retail products.
 *
 * Generated from protobuf message <code>google.cloud.recommendationengine.v1beta1.ProductCatalogItem</code>
 */
class ProductCatalogItem extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. A map to pass the costs associated with the product.
     * For example:
     * {"manufacturing": 45.5} The profit of selling this item is computed like
     * so:
     * * If 'exactPrice' is provided, profit = displayPrice - sum(costs)
     * * If 'priceRange' is provided, profit = minPrice - sum(costs)
     *
     * Generated from protobuf field <code>map<string, float> costs = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $costs;
    /**
     * Optional. Only required if the price is set. Currency code for price/costs. Use
     * three-character ISO-4217 code.
     *
     * Generated from protobuf field <code>string currency_code = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $currency_code = '';
    /**
     * Optional. Online stock state of the catalog item. Default is `IN_STOCK`.
     *
     * Generated from protobuf field <code>.google.cloud.recommendationengine.v1beta1.ProductCatalogItem.StockState stock_state = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $stock_state = 0;
    /**
     * Optional. The available quantity of the item.
     *
     * Generated from protobuf field <code>int64 available_quantity = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $available_quantity = 0;
    /**
     * Optional. Canonical URL directly linking to the item detail page with a
     * length limit of 5 KiB..
     *
     * Generated from protobuf field <code>string canonical_product_uri = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $canonical_product_uri = '';
    /**
     * Optional. Product images for the catalog item.
     *
     * Generated from protobuf field <code>repeated .google.cloud.recommendationengine.v1beta1.Image images = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $images;
    protected $price;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\RecommendationEngine\V1beta1\ProductCatalogItem\ExactPrice $exact_price
     *           Optional. The exact product price.
     *     @type \Google\Cloud\RecommendationEngine\V1beta1\ProductCatalogItem\PriceRange $price_range
     *           Optional. The product price range.
     *     @type array|\Google\Protobuf\Internal\MapField $costs
     *           Optional. A map to pass the costs associated with the product.
     *           For example:
     *           {"manufacturing": 45.5} The profit of selling this item is computed like
     *           so:
     *           * If 'exactPrice' is provided, profit = displayPrice - sum(costs)
     *           * If 'priceRange' is provided, profit = minPrice - sum(costs)
     *     @type string $currency_code
     *           Optional. Only required if the price is set. Currency code for price/costs. Use
     *           three-character ISO-4217 code.
     *     @type int $stock_state
     *           Optional. Online stock state of the catalog item. Default is `IN_STOCK`.
     *     @type int|string $available_quantity
     *           Optional. The available quantity of the item.
     *     @type string $canonical_product_uri
     *           Optional. Canonical URL directly linking to the item detail page with a
     *           length limit of 5 KiB..
     *     @type \Google\Cloud\RecommendationEngine\V1beta1\Image[]|\Google\Protobuf\Internal\RepeatedField $images
     *           Optional. Product images for the catalog item.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Recommendationengine\V1Beta1\Catalog::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. The exact product price.
     *
     * Generated from protobuf field <code>.google.cloud.recommendationengine.v1beta1.ProductCatalogItem.ExactPrice exact_price = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\RecommendationEngine\V1beta1\ProductCatalogItem\ExactPrice
     */
    public function getExactPrice()
    {
        return $this->readOneof(1);
    }

    /**
     * Optional. The exact product price.
     *
     * Generated from protobuf field <code>.google.cloud.recommendationengine.v1beta1.ProductCatalogItem.ExactPrice exact_price = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\RecommendationEngine\V1beta1\ProductCatalogItem\ExactPrice $var
     * @return $this
     */
    public function setExactPrice($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\RecommendationEngine\V1beta1\ProductCatalogItem_ExactPrice::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * Optional. The product price range.
     *
     * Generated from protobuf field <code>.google.cloud.recommendationengine.v1beta1.ProductCatalogItem.PriceRange price_range = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\RecommendationEngine\V1beta1\ProductCatalogItem\PriceRange
     */
    public function getPriceRange()
    {
        return $this->readOneof(2);
    }

    /**
     * Optional. The product price range.
     *
     * Generated from protobuf field <code>.google.cloud.recommendationengine.v1beta1.ProductCatalogItem.PriceRange price_range = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\RecommendationEngine\V1beta1\ProductCatalogItem\PriceRange $var
     * @return $this
     */
    public function setPriceRange($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\RecommendationEngine\V1beta1\ProductCatalogItem_PriceRange::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Optional. A map to pass the costs associated with the product.
     * For example:
     * {"manufacturing": 45.5} The profit of selling this item is computed like
     * so:
     * * If 'exactPrice' is provided, profit = displayPrice - sum(costs)
     * * If 'priceRange' is provided, profit = minPrice - sum(costs)
     *
     * Generated from protobuf field <code>map<string, float> costs = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getCosts()
    {
        return $this->costs;
    }

    /**
     * Optional. A map to pass the costs associated with the product.
     * For example:
     * {"manufacturing": 45.5} The profit of selling this item is computed like
     * so:
     * * If 'exactPrice' is provided, profit = displayPrice - sum(costs)
     * * If 'priceRange' is provided, profit = minPrice - sum(costs)
     *
     * Generated from protobuf field <code>map<string, float> costs = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setCosts($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::FLOAT);
        $this->costs = $arr;

        return $this;
    }

    /**
     * Optional. Only required if the price is set. Currency code for price/costs. Use
     * three-character ISO-4217 code.
     *
     * Generated from protobuf field <code>string currency_code = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getCurrencyCode()
    {
        return $this->currency_code;
    }

    /**
     * Optional. Only required if the price is set. Currency code for price/costs. Use
     * three-character ISO-4217 code.
     *
     * Generated from protobuf field <code>string currency_code = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setCurrencyCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->currency_code = $var;

        return $this;
    }

    /**
     * Optional. Online stock state of the catalog item. Default is `IN_STOCK`.
     *
     * Generated from protobuf field <code>.google.cloud.recommendationengine.v1beta1.ProductCatalogItem.StockState stock_state = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getStockState()
    {
        return $this->stock_state;
    }

    /**
     * Optional. Online stock state of the catalog item. Default is `IN_STOCK`.
     *
     * Generated from protobuf field <code>.google.cloud.recommendationengine.v1beta1.ProductCatalogItem.StockState stock_state = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setStockState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\RecommendationEngine\V1beta1\ProductCatalogItem_StockState::class);
        $this->stock_state = $var;

        return $this;
    }

    /**
     * Optional. The available quantity of the item.
     *
     * Generated from protobuf field <code>int64 available_quantity = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int|string
     */
    public function getAvailableQuantity()
    {
        return $this->available_quantity;
    }

    /**
     * Optional. The available quantity of the item.
     *
     * Generated from protobuf field <code>int64 available_quantity = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int|string $var
     * @return $this
     */
    public function setAvailableQuantity($var)
    {
        GPBUtil::checkInt64($var);
        $this->available_quantity = $var;

        return $this;
    }

    /**
     * Optional. Canonical URL directly linking to the item detail page with a
     * length limit of 5 KiB..
     *
     * Generated from protobuf field <code>string canonical_product_uri = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getCanonicalProductUri()
    {
        return $this->canonical_product_uri;
    }

    /**
     * Optional. Canonical URL directly linking to the item detail page with a
     * length limit of 5 KiB..
     *
     * Generated from protobuf field <code>string canonical_product_uri = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setCanonicalProductUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->canonical_product_uri = $var;

        return $this;
    }

    /**
     * Optional. Product images for the catalog item.
     *
     * Generated from protobuf field <code>repeated .google.cloud.recommendationengine.v1beta1.Image images = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getImages()
    {
        return $this->images;
    }

    /**
     * Optional. Product images for the catalog item.
     *
     * Generated from protobuf field <code>repeated .google.cloud.recommendationengine.v1beta1.Image images = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\RecommendationEngine\V1beta1\Image[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setImages($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\RecommendationEngine\V1beta1\Image::class);
        $this->images = $arr;

        return $this;
    }

    /**
     * @return string
     */
    public function getPrice()
    {
        return $this->whichOneof("price");
    }

}

