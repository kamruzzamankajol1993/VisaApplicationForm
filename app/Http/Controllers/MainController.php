<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\State;
use App\City;
use App\Thana;
use App\District;
use App\Ljob;
use App\Ejob;
use Brian2694\Toastr\Facades\Toastr;
use DB;
use App\Visa_status;
use App\Address;

class MainController extends Controller
{
    public function index(){

        $addes=Address::limit(1)->orderBy('id','desc')->get();
    	$states=State::orderBy('id','asc')->get();
    	$cities=City::orderBy('id','asc')->get();
    	$thanas=Thana::orderBY('id','asc')->get();
        $dis=District::orderBY('id','asc')->get();
        $ljobs=Ljob::orderBy('dr','asc')->get();
        $ejobs=Ejob::orderBy('dr','asc')->get();
        $vsts=Visa_status::orderBy('dr','asc')->get();
    	return view('front.index1',['states'=>$states,'cities'=>$cities,'thanas'=>$thanas,'dis'=>$dis,'ljobs'=>$ljobs,'ejobs'=>$ejobs,'vsts'=>$vsts,'addes'=>$addes]);
    }

    public function indexvs(){

    	$states=Visa_status::orderBy('dr','asc')->get();
    	return view('admin.visa.manage',['states'=>$states]);
    }


    public function createvs(){
     return view('admin.visa.add');
    }

     public function storevs(Request $request)
    {
       $this->validate($request,[
            'vs' => 'required'
          
        ]);
        $category = new Visa_status();
        $category->vs = $request->vs;
        $category->save();
        Toastr::success('Successfully Saved :)' ,'Success');
        return redirect()->route('vs.create');
    }

    public function destroyvs($id)
    {
         Visa_status::find($id)->delete();
         Toastr::warning('Successfully Deleted :)','Success');
         return redirect()->back();
    }

    public function indexad(){

    	$states=Address::latest()->get();
    	return view('admin.add.manage',['states'=>$states]);
    }


    public function createad(){
     return view('admin.add.add');
    }
    
     public function editad($id){
       $info=Address::where('id',$id)->first();  
     return view('admin.add.edit',['info'=>$info]);
    }
    
    public function updatead(Request $request){

      DB::table('addresses')->where('id',$request->id)->update(['add'=>$request->add]);
      Toastr::success('Successfully Updated :)','Success');
        return redirect()->route('ad');
    }

     public function storead(Request $request)
    {
       $this->validate($request,[
            'add' => 'required'
          
        ]);
        $category = new Address();
        $category->add = $request->add;
        $category->save();
        Toastr::success('Successfully Saved :)' ,'Success');
        return redirect()->route('ad.create');
    }

    public function destroyad($id)
    {
         Address::find($id)->delete();
         Toastr::warning('Successfully Deleted :)','Success');
         return redirect()->back();
    }


      public function updateItems(Request $request)
    {
        

        if($request->has('ids')){
            $arr = explode(',',$request->input('ids'));
            
            foreach($arr as $sortOrder => $id){
                $menu = Visa_status::find($id);
                $menu->dr = $sortOrder;
                $menu->save();
            }
            return ['success'=>true,'message'=>'Updated'];
        }
  
    }

     public function updateItems1(Request $request)
    {
        

        if($request->has('ids')){
            $arr = explode(',',$request->input('ids'));
            
            foreach($arr as $sortOrder => $id){
                $menu = Ljob::find($id);
                $menu->dr = $sortOrder;
                $menu->save();
            }
            return ['success'=>true,'message'=>'Updated'];
        }
  
    }

     public function updateItems2(Request $request)
    {
        

        if($request->has('ids')){
            $arr = explode(',',$request->input('ids'));
            
            foreach($arr as $sortOrder => $id){
                $menu = Ejob::find($id);
                $menu->dr = $sortOrder;
                $menu->save();
            }
            return ['success'=>true,'message'=>'Updated'];
        }
  
    }
}
