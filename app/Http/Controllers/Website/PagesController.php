<?php

namespace App\Http\Controllers\Website;

use App\Http\Requests;

class PagesController extends WebsiteController
{

    public function column1()
    {
        return $this->view('column_1');
    }

    public function column2()
    {
        return $this->view('column_2');
    }

    public function column3()
    {
        return $this->view('column_3');
    }

    public function column4()
    {
        return $this->view('column_4');
    }

    /**
     * Show the pricing page
     *
     * @return \Illuminate\Http\Response
     */
    public function pricing()
    {
        return $this->view('pricing');
    }
}
