<?php

namespace App\Http\Controllers;

use App\Helpers\UploadPaths;
use App\Presentation;
use App\Product;
use App\Report;
use App\User;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function ProductList(){
        return view ('products.products');
    }
    public function productCreate(Request $request) {

        $name = $request->get('name');
        $price =  $request->get('price');
        $filePhotoUrl = $request->file('photo');
        $user = User::find(2);

        if(isset($filePhotoUrl)){  //photo var mı yok mu kontrol
            $productPhotoName = uniqid('product_'). '.' .$filePhotoUrl->getClientOriginalExtension();
            $filePhotoUrl->move(UploadPaths::getUploadPath('product_photos'),$productPhotoName); //şu isimli dosyayı verdiğimiz yere taşı
        }

        Product::create([
            'name'=>$name,
            'price'=>$price,
            'photo'=>$productPhotoName,
            'is_approve' => false,
            'created_by' => $user->id,
            'updated_by' =>  $user->id,

        ]);
        return back();

    }
    //front page listings and view
    public function PresentationsList(){
        $presentations=Presentation::all();
        return view('frontpage-products.presentations-view',compact('presentations'));
    }
    public function ReportsList(){
        $reports=Report::all();
        return view('frontpage-products.reports-view',compact('reports'));
    }
    public function EmailsList(){
        return view('frontpage-products.emails-view');
    }
    public function pricing(){
   return view('pricing.pricing-page');
    }
    public function addProductView(){
        return view ('products.addProduct');
    }
    public function indexProduct(){
    $products = Product::where('deleted_at', '=', null )->get();
   return view ('users.productlist',compact('products'));
   }
   //admin master add product photos for front page
    public function addPresentationView(){
    return view('products.addPresentation');
}
    public function addPresentation(Request $request) {
    $name = $request->get('name');
    $price =  $request->get('price');
    $filePhotoUrl = $request->file('photo');
    $user = User::find(2);

    if(isset($filePhotoUrl)){  //photo var mı yok mu kontrol
        $productPhotoName = uniqid('product_'). '.' .$filePhotoUrl->getClientOriginalExtension();
        $filePhotoUrl->move(UploadPaths::getUploadPath('product_photos'),$productPhotoName); //şu isimli dosyayı verdiğimiz yere taşı
    }

    Presentation::create([
        'name'=>$name,
        'price'=>$price,
        'photo'=>$productPhotoName,
        'is_approve' => false,
        'created_by' => $user->id,
        'updated_by' =>  $user->id,

    ]);
    return back();

}
    public function addReportView(){
        return view('products.addReport');
    }
    public function addReport(Request $request) {
        $name = $request->get('name');
        $price =  $request->get('price');
        $filePhotoUrl = $request->file('photo');
        $user = User::find(2);

        if(isset($filePhotoUrl)){  //photo var mı yok mu kontrol
            $productPhotoName = uniqid('product_'). '.' .$filePhotoUrl->getClientOriginalExtension();
            $filePhotoUrl->move(UploadPaths::getUploadPath('product_photos'),$productPhotoName); //şu isimli dosyayı verdiğimiz yere taşı
        }

        Report::create([
            'name'=>$name,
            'price'=>$price,
            'photo'=>$productPhotoName,
            'is_approve' => false,
            'created_by' => $user->id,
            'updated_by' =>  $user->id,

        ]);
        return back();

    }
    //admin master list product
    public function indexPresentations(){
        $presentations = Presentation::all();
        return view('products.list-presentations', compact('presentations'));
    }
    public function indexReports(){
        $reports = Report::all();
        return view('products.list-reports', compact('reports'));
    }
    public function indexEmails(){        //later
}
//single page product view
   public function SinglePageReport(Request $request,$id=null){
        $reportdetail = Report::where('id',$id)->first();
        return view ('frontpage-products.single-page-report' , compact('reportdetail'));
   }
    public function SinglePagePresentation(Request $request,$id=null){
        $presentationdetail = Presentation::where('id',$id)->first();
        return view ('frontpage-products.single-page-presentation', compact('presentationdetail'));
    }
}
