<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(HomeBannerSeeder::class);
        $this->call(HomeProfileVideoSeeder::class);
        $this->call(HomeQualityProductsSeeder::class);
        $this->call(PromotionSeeder::class);
        $this->call(HomeOurVideosSeeder::class);
        $this->call(HomeShopSeeder::class);

        $this->call(AboutBannerSeeder::class);
        $this->call(AboutOurPlantationsSeeder::class);
        $this->call(AboutOurValuesSeeder::class);
        $this->call(AboutContentSeeder::class);
        $this->call(AboutContactSeeder::class);

        $this->call(ContactSeeder::class);

        $this->call(CategoryProductSeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(HistoryProductSeeder::class);

        $this->call(CategoryArticleSeeder::class);
        $this->call(ArticleSeeder::class);
        $this->call(AvailableOlshopSeeder::class);

        $this->call(OtherProductSeeder::class);

        $this->call(FooterMenuSeeder::class);


    }
}
