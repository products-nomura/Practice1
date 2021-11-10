<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Practice1Controller extends Controller
{
    public function glist()
    {
        return ('商品データリスト');
    }
    
    public function gregist()
    {
        return ('商品データ新規登録');
    }

    public function gedit()
    {
        return ('商品データ編集');
    }

    public function slist()
    {
        return ('在庫データリスト');
    }
    
    public function sregist()
    {
        return ('在庫データ新規登録');
    }
    
    public function sedit()
    {
        return ('在庫データ編集');
    }
}
