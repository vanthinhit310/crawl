<?php

namespace App\Http\Controllers;

include ('../app/crawl/simple_html_dom.php');

use App\Models\CrCity;
use App\Models\CrCountry;
use App\Repositories\Eloquent\CrawlerRepository;
use Illuminate\Support\Str;
class CrawlController extends Controller
{
    //
    public function crawlCountries()
    {
        $html = file_get_html('https://cacnuoc.vn');
        foreach($html->find('ul.list-country li') as $article) {
            $item['name']     = $article->find('a',0)->plaintext;
            $item['slug']    = Str::slug($item['name']);
            CrCountry::create([
                'name' => $item['name'],
                'slug' =>  $item['slug'],
            ]);
        }
        echo 'success';
    }

    public function crawlCities()
    {
        dd(get_class_methods(CrawlerRepository::class));
    }
}
