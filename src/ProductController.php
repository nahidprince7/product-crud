<?php

namespace Nahid\Crud;

use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Nahid\Crud\app\Models\Product;
use Nahid\Crud\Requests\ProductRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{

    public function index(Request $request)
    {
        $products = $this->getProductList();

        return view('product::list')
            ->with('products', $products);

    }

    private function getProductList()
    {
        $data =  \Nahid\Crud\app\Models\Product::select(
            'id',
            'title',
            'short_descriptions',
            'active_status'
        );

        return $data->orderBy("id",'DESC')
            ->paginate(10);

    }

    public function create(){

        return view('product::create');
    }
    public function store(ProductRequest $request){

        try {
            $validatedData = $request->validated();
            $dataSaved = \Nahid\Crud\app\Models\Product::create($validatedData);
            Session::flash('message', " Product is added");
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['errors' => [0 => $e->getMessage()]]);
        }
        return redirect('product');
    }

    public function moveToTrash(Request $request)
    {
        $product =  \Nahid\Crud\app\Models\Product::find($request->record_id);

        try {
            $product->delete();
            Session::flash('message', " Record has been moved to trashed");
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['errors' => [0 => $e->getMessage()]]);
        }
        return redirect()->back();
    }
    public function edit(Request $request,$id)
    {
        $product = Product::where('id',$id)->first();

        return view('product::edit')
            ->with('product', $product);
    }

    public function update(Request $request, $id)
    {

        $existingProduct = Product::find($id);

        $productData['title'] = $request->title;
        $productData['short_descriptions'] = $request->short_descriptions;
        $productData['active_status'] = $request->active_status;
//        $productData['updated_by'] = Auth::id();


        try {
            $existingProduct->update($productData);
            Session::flash('message', "Product modified successfully");
            return redirect()->route('product-list');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['errors' => [0 => $e->getMessage()]]);
        }


    }


}
