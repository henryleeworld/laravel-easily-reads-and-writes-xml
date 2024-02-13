<?php

namespace App\Http\Controllers;

// use Saloon\XmlWrangler\Data\Element;
use Saloon\XmlWrangler\XmlReader;
use Saloon\XmlWrangler\XmlWriter;

class XmlController extends Controller
{
    public function read() 
    {
        $reader = XmlReader::fromString($this->write());
        $foodAry = $reader->value('food')->get();
        echo '早餐菜單' . PHP_EOL;
        foreach ($foodAry as $key => $value) {
            echo '第 ' . ($key + 1) . ' 份餐點，餐點：' . $value['name'] . '，介紹：' . $value['description'] . '，卡路里：' . $value['calories'] . '，價錢：' . $value['price'] . PHP_EOL;
        }
    }

    private function write() 
    {
        $writer = new XmlWriter;
        $xml = $writer->write('breakfast_menu', [
            'food' => [
                [
                    'name' => '雞塊鬆餅大早餐',
                    'price' => 'NT$115',
                    'description' => '每一樣都愛吃，你想先吃麥克鷄塊？還是先感受鬆餅的柔潤香綿？不如先來口金黃柔嫩的炒蛋吧，暗自打量鹹香柔韌的火腿，太幸福了，怎麼吃都行，滿盤豐盛，享受從早開始。',
                    'calories' => '664',
                ],
                [
                    'name' => '無敵豬肉滿福堡加蛋',
                    'price' => 'NT$78',
                    'description' => '吃無敵豬肉滿福堡給你無敵活力！兩層香煎豬肉片，與獨家氣蒸太陽蛋和切達吉事，最後蓋上軟中帶勁的滿福麵包，吃滿福，保好運，今天你最無敵！',
                    'calories' => '509',
                ],
                [
                    'name' => '麥香魚',
                    'price' => 'NT$60',
                    'description' => '選用來自純淨海域的 100 %真鱈魚製成現炸魚排，佐以濃郁酸甜塔塔醬與 1/2 片切達起司，再蓋上柔軟「蒸」麵包，麥香魚的美味魔力，讓所有人都不自覺著迷！',
                    'calories' => '338',
                ],
        
                // You can also use the Element class if you need to define elements with
                // namespaces or with attributes.
                /*
                Element::make([
                    'name' => '吉事蛋堡',
                    'price' => 'NT$38',
                    'description' => '起床來點正能量！三段水溫洗淨的洗選蛋，烹調出口感軟嫩的太陽蛋，再搭配美國春麥製成的柔軟麵包，以及紐澳模範乳源製成的切達吉事，絕配組合讓蛋蛋正能量爆發！',
                    'calories' => '290',
               ])->setAttributes(['bestSeller' => 'true']),
               */
           ],
       ]);
       return $xml;
    }
}
