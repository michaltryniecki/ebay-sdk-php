<?php
namespace DTS\eBaySDK\Test\MerchantData;

use DTS\eBaySDK\MerchantData\MerchantData;

class MerchantDataTest extends \PHPUnit\Framework\TestCase
{
    private $merchantData;

    protected function setUp(): void
    {
        $this->merchantData = new MerchantData();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf(\DTS\eBaySDK\MerchantData\MerchantData::class, $this->merchantData);
    }

    public function testActiveInventoryReport()
    {
        $xml = file_get_contents(__DIR__.'/Mocks/ActiveInventoryReport.xml');
        $this->assertInstanceOf(\DTS\eBaySDK\MerchantData\Types\ActiveInventoryReportResponseType::class, $this->merchantData->activeInventoryReport($xml));
    }

    public function testAddFixedPriceItem()
    {
        $xml = file_get_contents(__DIR__.'/Mocks/AddFixedPriceItem.xml');
        $responses = $this->merchantData->addFixedPriceItem($xml);
        $this->assertInstanceOf(\DTS\eBaySDK\Types\RepeatableType::class, $responses);
        $this->assertEquals(2, count($responses));
        foreach ($responses as $response) {
            $this->assertInstanceOf(\DTS\eBaySDK\MerchantData\Types\AddFixedPriceItemResponseType::class, $response);
        }
    }

    public function testAddItem()
    {
        $xml = file_get_contents(__DIR__.'/Mocks/AddItem.xml');
        $responses = $this->merchantData->addItem($xml);
        $this->assertInstanceOf(\DTS\eBaySDK\Types\RepeatableType::class, $responses);
        $this->assertEquals(2, count($responses));
        foreach ($responses as $response) {
            $this->assertInstanceOf(\DTS\eBaySDK\MerchantData\Types\AddItemResponseType::class, $response);
        }
    }

    public function testEndFixedPriceItem()
    {
        $xml = file_get_contents(__DIR__.'/Mocks/EndFixedPriceItem.xml');
        $responses = $this->merchantData->endFixedPriceItem($xml);
        $this->assertInstanceOf(\DTS\eBaySDK\Types\RepeatableType::class, $responses);
        $this->assertEquals(2, count($responses));
        foreach ($responses as $response) {
            $this->assertInstanceOf(\DTS\eBaySDK\MerchantData\Types\EndFixedPriceItemResponseType::class, $response);
        }
    }

    public function testEndItem()
    {
        $xml = file_get_contents(__DIR__.'/Mocks/EndItem.xml');
        $responses = $this->merchantData->endItem($xml);
        $this->assertInstanceOf(\DTS\eBaySDK\Types\RepeatableType::class, $responses);
        $this->assertEquals(2, count($responses));
        foreach ($responses as $response) {
            $this->assertInstanceOf(\DTS\eBaySDK\MerchantData\Types\EndItemResponseType::class, $response);
        }
    }

    public function testFeeSettlementReport()
    {
        $xml = file_get_contents(__DIR__.'/Mocks/FeeSettlementReport.xml');
        $this->assertInstanceOf(\DTS\eBaySDK\MerchantData\Types\FeeSettlementReportResponseType::class, $this->merchantData->feeSettlementReport($xml));
    }

    public function testOrderAck()
    {
        $xml = file_get_contents(__DIR__.'/Mocks/OrderAck.xml');
        $responses = $this->merchantData->orderAck($xml);
        $this->assertInstanceOf(\DTS\eBaySDK\Types\RepeatableType::class, $responses);
        $this->assertEquals(2, count($responses));
        foreach ($responses as $response) {
            $this->assertInstanceOf(\DTS\eBaySDK\MerchantData\Types\OrderAckResponseType::class, $response);
        }
    }

    public function testRelistFixedPriceItem()
    {
        $xml = file_get_contents(__DIR__.'/Mocks/RelistFixedPriceItem.xml');
        $responses = $this->merchantData->relistFixedPriceItem($xml);
        $this->assertInstanceOf(\DTS\eBaySDK\Types\RepeatableType::class, $responses);
        $this->assertEquals(2, count($responses));
        foreach ($responses as $response) {
            $this->assertInstanceOf(\DTS\eBaySDK\MerchantData\Types\RelistFixedPriceItemResponseType::class, $response);
        }
    }

    public function testRelistItem()
    {
        $xml = file_get_contents(__DIR__.'/Mocks/RelistItem.xml');
        $responses = $this->merchantData->relistItem($xml);
        $this->assertInstanceOf(\DTS\eBaySDK\Types\RepeatableType::class, $responses);
        $this->assertEquals(2, count($responses));
        foreach ($responses as $response) {
            $this->assertInstanceOf(\DTS\eBaySDK\MerchantData\Types\RelistItemResponseType::class, $response);
        }
    }

    public function testReviseFixedPriceItem()
    {
        $xml = file_get_contents(__DIR__.'/Mocks/ReviseFixedPriceItem.xml');
        $responses = $this->merchantData->reviseFixedPriceItem($xml);
        $this->assertInstanceOf(\DTS\eBaySDK\Types\RepeatableType::class, $responses);
        $this->assertEquals(2, count($responses));
        foreach ($responses as $response) {
            $this->assertInstanceOf(\DTS\eBaySDK\MerchantData\Types\ReviseFixedPriceItemResponseType::class, $response);
        }
    }

    public function testReviseInventoryStatus()
    {
        $xml = file_get_contents(__DIR__.'/Mocks/ReviseInventoryStatus.xml');
        $responses = $this->merchantData->reviseInventoryStatus($xml);
        $this->assertInstanceOf(\DTS\eBaySDK\Types\RepeatableType::class, $responses);
        $this->assertEquals(2, count($responses));
        foreach ($responses as $response) {
            $this->assertInstanceOf(\DTS\eBaySDK\MerchantData\Types\ReviseInventoryStatusResponseType::class, $response);
        }
    }

    public function testReviseItem()
    {
        $xml = file_get_contents(__DIR__.'/Mocks/ReviseItem.xml');
        $responses = $this->merchantData->reviseItem($xml);
        $this->assertInstanceOf(\DTS\eBaySDK\Types\RepeatableType::class, $responses);
        $this->assertEquals(2, count($responses));
        foreach ($responses as $response) {
            $this->assertInstanceOf(\DTS\eBaySDK\MerchantData\Types\ReviseItemResponseType::class, $response);
        }
    }

    public function testSetShipmentTrackingInfo()
    {
        $xml = file_get_contents(__DIR__.'/Mocks/SetShipmentTrackingInfo.xml');
        $responses = $this->merchantData->setShipmentTrackingInfo($xml);
        $this->assertInstanceOf(\DTS\eBaySDK\Types\RepeatableType::class, $responses);
        $this->assertEquals(2, count($responses));
        foreach ($responses as $response) {
            $this->assertInstanceOf(\DTS\eBaySDK\MerchantData\Types\SetShipmentTrackingInfoResponseType::class, $response);
        }
    }

    public function testSoldReport()
    {
        $xml = file_get_contents(__DIR__.'/Mocks/SoldReport.xml');
        $this->assertInstanceOf(\DTS\eBaySDK\MerchantData\Types\SoldReportResponseType::class, $this->merchantData->soldReport($xml));
    }

    public function testUploadSiteHostedPictures()
    {
        $xml = file_get_contents(__DIR__.'/Mocks/UploadSiteHostedPictures.xml');
        $responses = $this->merchantData->uploadSiteHostedPictures($xml);
        $this->assertInstanceOf(\DTS\eBaySDK\Types\RepeatableType::class, $responses);
        $this->assertEquals(2, count($responses));
        foreach ($responses as $response) {
            $this->assertInstanceOf(\DTS\eBaySDK\MerchantData\Types\UploadSiteHostedPicturesResponseType::class, $response);
        }
    }

    public function testVerifyAddFixedPriceItem()
    {
        $xml = file_get_contents(__DIR__.'/Mocks/VerifyAddFixedPriceItem.xml');
        $responses = $this->merchantData->verifyAddFixedPriceItem($xml);
        $this->assertInstanceOf(\DTS\eBaySDK\Types\RepeatableType::class, $responses);
        $this->assertEquals(2, count($responses));
        foreach ($responses as $response) {
            $this->assertInstanceOf(\DTS\eBaySDK\MerchantData\Types\VerifyAddFixedPriceItemResponseType::class, $response);
        }
    }

    public function testVerifyAddItem()
    {
        $xml = file_get_contents(__DIR__.'/Mocks/VerifyAddItem.xml');
        $responses = $this->merchantData->verifyAddItem($xml);
        $this->assertInstanceOf(\DTS\eBaySDK\Types\RepeatableType::class, $responses);
        $this->assertEquals(2, count($responses));
        foreach ($responses as $response) {
            $this->assertInstanceOf(\DTS\eBaySDK\MerchantData\Types\VerifyAddItemResponseType::class, $response);
        }
    }
}
