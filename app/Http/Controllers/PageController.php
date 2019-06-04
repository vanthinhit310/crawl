<?php

namespace App\Http\Controllers;

use App\Repositories\Eloquent\CrawlerRepository;
use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    /**
     * @param CrawlerRepository $crawlerRepository
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getCrawlPage(CrawlerRepository $crawlerRepository)
    {
        $param =[];
        /** @var TYPE_NAME $crawlerRepository */
        $param['table'] = $crawlerRepository->all();
        dd($param['table']);
        return view('layouts.crawl',$param);
    }
}
