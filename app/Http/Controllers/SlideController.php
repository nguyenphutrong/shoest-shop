<?php

namespace App\Http\Controllers;

use App\Slide;
use Illuminate\Http\Request;
use App\Http\Requests\StoreSlideRequest;
use App\Http\Requests\UpdateSlideRequest;

class SlideController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slides = Slide::all();
        return view('admin.slide.index',compact('slides'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.slide.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSlideRequest $request)
    {
        $fileName = time()."_".$request->pic->getClientOriginalName();

        $slide = new Slide();
        $slide->pic = $fileName;
        $slide->title = $request->title;
        $slide->desc = $request->desc;
        $slide->save();
        $request->pic->move('uploads',$fileName);
        return back()->with('thongbao','Thêm thành công!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Slide  $slide
     * @return \Illuminate\Http\Response
     */
    public function show(Slide $slide)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Slide  $slide
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        $slide = Slide::find($id);
        return view('admin.slide.edit',compact('slide'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Slide  $slide
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSlideRequest $request, $id)
    {
        $slide = Slide::find($id);
        $slide->title = $request->title;
        $slide->desc = $request->desc;
        if($request->hasFile('pic')){
            $fileName = time()."_".$request->pic->getClientOriginalName();         
            $request->pic->move('uploads',$fileName);
            unlink("uploads/".$slide->pic);
            $slide->pic = $fileName;
        }
        $slide->save();
        return back()->with('thongbao','Sửa thành công!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Slide  $slide
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Slide::destroy($id);
        return back()->with('thongbao','Xóa thành công!');
    }
}
