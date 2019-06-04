<?php

namespace App\Http\Controllers;

use App\Repositories\Interfaces\Page\PageInterface;

/**
 * @property PageInterface crawl
 */
class PageController extends Controller
{
    private $crawl;

    public function __construct(PageInterface $crawl)
    {
        $this->crawl = $crawl;
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getCrawlPage()
    {
        $param =[];
        $param['tables'] = $this->crawl->all();
        return view('layouts.crawl',$param);
    }
}
