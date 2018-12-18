<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Product;
use App\Model\Category;
use App\Model\Color;
use Dhtmlx\Connector\GridConnector;
class ProductController extends Controller
{
    public function getListCate(){
    	$connector = new GridConnector(null, "PHPLaravel");     
        $connector->configure(                                  
            new Category(),                               
            "id",                                         
            "created_at, updated_at"                  
        );                                                      
        $connector->render();
    	// return view('admin.pages.product.cate.list');
    }
}
