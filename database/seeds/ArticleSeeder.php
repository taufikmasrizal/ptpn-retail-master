<?php

use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $content = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Pellentesque pulvinar pellentesque habitant morbi tristique senectus et netus. Pulvinar mattis nunc sed blandit libero volutpat sed cras ornare. Sed augue lacus viverra vitae congue eu consequat. Et odio pellentesque diam volutpat. Bibendum est ultricies integer quis auctor elit sed vulputate. Vestibulum mattis ullamcorper velit sed ullamcorper morbi. Ipsum suspendisse ultrices gravida dictum. Lectus vestibulum mattis ullamcorper velit sed ullamcorper. Purus viverra accumsan in nisl nisi scelerisque. Morbi blandit cursus risus at ultrices mi tempus. Amet consectetur adipiscing elit duis. Dolor sit amet consectetur adipiscing. Urna condimentum mattis pellentesque id nibh tortor id. Ac placerat vestibulum lectus mauris ultrices eros in. Consequat id porta nibh venenatis cras. Ornare arcu dui vivamus arcu. Dignissim convallis aenean et tortor at risus viverra. Lorem mollis aliquam ut porttitor leo. Neque convallis a cras semper auctor neque vitae.
        <br>
        <br>
        Quis enim lobortis scelerisque fermentum dui faucibus in. Etiam erat velit scelerisque in. Tempus egestas sed sed risus pretium quam vulputate dignissim suspendisse. Porta lorem mollis aliquam ut porttitor leo a. Dui vivamus arcu felis bibendum ut tristique et egestas. At ultrices mi tempus imperdiet nulla malesuada pellentesque elit eget. Leo a diam sollicitudin tempor id eu. Lobortis mattis aliquam faucibus purus in massa tempor nec. Et molestie ac feugiat sed. Aenean sed adipiscing diam donec adipiscing. Egestas erat imperdiet sed euismod nisi porta. Sit amet mattis vulputate enim nulla aliquet porttitor. Nascetur ridiculus mus mauris vitae ultricies leo integer.
        <br>
        <br>
        Risus at ultrices mi tempus imperdiet nulla. Massa id neque aliquam vestibulum. Urna nunc id cursus metus aliquam eleifend mi. Aliquet lectus proin nibh nisl condimentum. Lorem donec massa sapien faucibus et molestie ac. Elementum sagittis vitae et leo duis ut diam quam. Consectetur adipiscing elit pellentesque habitant morbi. Elit ut aliquam purus sit amet luctus venenatis lectus. Suspendisse potenti nullam ac tortor vitae purus faucibus ornare. Diam ut venenatis tellus in metus. Vitae ultricies leo integer malesuada nunc vel. Elit sed vulputate mi sit amet mauris commodo quis imperdiet. Leo in vitae turpis massa sed elementum tempus egestas sed. Velit egestas dui id ornare arcu odio ut sem. Dictumst quisque sagittis purus sit amet volutpat. Urna duis convallis convallis tellus id interdum velit laoreet id. Id leo in vitae turpis massa sed elementum tempus egestas. Lacus viverra vitae congue eu. Ac auctor augue mauris augue neque gravida in. Eu ultrices vitae auctor eu augue ut.
        <br>
        <br>
        Cras ornare arcu dui vivamus arcu. Nec ullamcorper sit amet risus nullam eget felis. Vulputate sapien nec sagittis aliquam malesuada bibendum arcu vitae elementum. Orci ac auctor augue mauris augue neque gravida. Condimentum vitae sapien pellentesque habitant morbi. Netus et malesuada fames ac turpis egestas integer eget aliquet. Est placerat in egestas erat imperdiet. Varius vel pharetra vel turpis nunc eget lorem dolor sed. Ut enim blandit volutpat maecenas volutpat. Egestas maecenas pharetra convallis posuere morbi leo urna molestie at. Tristique risus nec feugiat in. Platea dictumst vestibulum rhoncus est. Purus viverra accumsan in nisl nisi scelerisque eu ultrices. Eu mi bibendum neque egestas congue quisque egestas.
        <br>
        <br>
        In vitae turpis massa sed elementum tempus egestas sed sed. Lorem ipsum dolor sit amet consectetur adipiscing elit duis tristique. Ultricies leo integer malesuada nunc vel risus commodo viverra. Quam nulla porttitor massa id neque. Egestas sed sed risus pretium quam vulputate dignissim suspendisse. Habitant morbi tristique senectus et netus. In ornare quam viverra orci sagittis eu. Vulputate eu scelerisque felis imperdiet proin fermentum leo vel orci. Sit amet nulla facilisi morbi tempus iaculis urna id. Morbi tristique senectus et netus et malesuada fames. Tincidunt nunc pulvinar sapien et ligula ullamcorper malesuada proin libero. Sit amet risus nullam eget felis eget nunc. Lobortis mattis aliquam faucibus purus in massa tempor nec. Nec tincidunt praesent semper feugiat nibh sed pulvinar proin. Aliquet eget sit amet tellus cras adipiscing.';
        for ($i=1; $i < 17 ; $i++) {
            # code...
            \App\Article::create([
                'category_id' => rand(1,4),
                'image_thumbnail' => 'article-'. rand(1,2) .'.png',
                'slug' => 'coffee-shop-and-new-habbit-indonesian-peoples-' . $i,
                'title_en' => 'coffee shop and new habbit indonesian peoples',
                'title_idn' => 'coffee shop and new habbit indonesian peoples',
                'content_en' => $content,
                'content_idn' => $content . ' ID',
                'created_by' => 1,
                'is_highlight' => 0,
            ]);
        }
    }
}
