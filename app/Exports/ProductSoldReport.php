<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use App\Models\Assign;
use App\Models\Product;
use App\Models\User;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Illuminate\Contracts\View\View;

class ProductSoldReport implements  FromView,ShouldAutoSize, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    // public function collection()
    // {
    //     return Product::all();
    // }
 

    public function view() : View
    {   
        // return view('productexport');
        $user = User::all();
        $product = Product::all();
        $assign = Assign::all();
        return view('productSoldReport',compact('user','product','assign'));
    }
    public function headings(): array
    {
        return [
            'ID',
            'Category ID',
            'Product Name',
            'Sale Quantity',
            'Remain Quantity',
            'Sold Date',
            'Created Date'
        ];
    }

    /**
     */

}