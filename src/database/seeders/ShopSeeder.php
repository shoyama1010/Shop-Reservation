<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Shop;

class ShopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $shops = [
            [
                'shop_name' => '仙人',
                'region' => '東京都',
                'genre' => '寿司',
                'description' => '料理長厳選の食材から作る寿司を用いたコースをぜひお楽しみください。食材・味・価格、お客様の満足度を徹底的に追及したお店です。特別な日の食事、ビジネス接待まで気軽に使用することができます。',
                'image_url' => 'https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/sushi.jpg'
            ],
            [
                'shop_name' => '牛助',
                'region' => '大阪府',
                'genre' => '焼肉',
                'description' => '焼肉業界で20年経験を積んだ料理長が、肉を知り尽くした上での本気の焼肉店。長年の仕入れ先とお付き合いをもとに、お手頃価格で最高級のお肉をご提供します。ぜひ一度お越しください。',
                'image_url' => 'https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/yakiniku.jpg'
            ],
            [
                'shop_name' => '戦慄',
                'region' => '福岡県',
                'genre' => '居酒屋',
                'description' => '気軽に立ち寄れる普段使いの大衆居酒屋です。キンキンに冷えた生ビールとともに、ボリューム満点の料理をご堪能ください。',
                'image_url' => 'https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/izakaya.jpg'
            ],
            [
                'shop_name' => 'ルーク',
                'region' => '東京都',
                'genre' => 'イタリアン',
                'description' => '都心から一歩入った立地に、古民家を改装した落ち着いた雰囲気のイタリアンレストラン。旬の食材を使ったイタリア料理とソムリエセレクトの厳選ワインをお楽しみください。',
                'image_url' => 'https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/italian.jpg'
            ],
            [
                'shop_name' => '志摩屋',
                'region' => '福岡県',
                'genre' => 'ラーメン',
                'description' => 'ラーメン激戦区福岡において常に人気の志摩屋。濃厚な豚骨スープと特製麺が自慢です。',
                'image_url' => 'https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/ramen.jpg'
            ],

            [
                'shop_name' => '香',
                'region' => '東京都',
                'genre' => '焼肉',
                'description' => '大小さまざまなお部屋をご用意してます。デートや接待、記念日や誕生日など特別な日にご利用ください。皆様のご来店をお待ちしております。',
                'image_url' => 'https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/yakiniku.jpg'
            ],
        ];

        foreach ($shops as $shop) {
            Shop::create($shop);
        } 
    }
}
