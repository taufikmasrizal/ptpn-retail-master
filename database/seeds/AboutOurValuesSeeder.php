<?php

use Illuminate\Database\Seeder;

class AboutOurValuesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $content = '
        <div class="d-flex justify-content-center py-5 title">
          <img src="frontend/img/icon/title-icon-2.svg">
          <h2 class="px-3 mb-0"><span>Our</span> Value</h2>
        </div>
        <div class="col-md-3 mt-4 col-sm-6 col-xs-6 px-5 text-center">
            <img src="frontend/img/about/our-value-1.svg" class="img-fluid">
            <h6 class="mt-4">
            Coverage All Indonesia
            </h6>
        </div>
        <div class="col-md-3 mt-4 col-sm-6 col-xs-6 px-5 text-center">
            <img src="frontend/img/about/our-value-2.svg" class="img-fluid">
            <h6 class="mt-4">
            More Than 10K Production Every Month
            </h6>
        </div>
        <div class="col-md-3 mt-4 col-sm-6 col-xs-6 px-5 text-center">
            <img src="frontend/img/about/our-value-3.svg" class="img-fluid">
            <h6 class="mt-4">
            Fast Responsibility
            </h6>
        </div>
        <div class="col-md-3 mt-4 col-sm-6 col-xs-6 px-5 text-center">
            <img src="frontend/img/about/our-value-4.svg" class="img-fluid">
            <h6 class="mt-4">
            Valuable Price
            </h6>
        </div>
        ';
        \App\About_our_value::create([
            'content_en' => $content,
            'content_idn' => $content . 'ID',
        ]);
    }
}
