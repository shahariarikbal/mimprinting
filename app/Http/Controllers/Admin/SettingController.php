<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function sliders()
    {
        $sliders = Slider::orderBy('id', 'desc')->get();
        return view('backend.slider.sliders', compact('sliders'));
    }
    public function sliderCreateForm()
    {
        return view('backend.slider.create');
    }

    public function sliderEdit(Slider $slider)
    {
        return view('backend.slider.edit', compact('slider'));
    }

    public function sliderStore(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'short_description' => 'required',
            'image' => 'required',
        ]);

        if ($request->image){
            $imageName = time() . '.' . $request->file('image')->extension();
            $request->image->move('slider', $imageName);
        }
        $slider = new Slider();
        $slider->title = $request->title;
        $slider->short_description = $request->short_description;
        $slider->image = $imageName;
        $slider->save();
        return redirect('/sliders')->withSuccess('Slider has been added');
    }

    public function sliderUpdate(Request $request, Slider $slider)
    {
        $this->validate($request, [
            'title' => 'required',
            'short_description' => 'required',
        ]);

        if (isset($request->image)){
            if ($slider->image && file_exists('slider/'.$slider->image)){
                unlink('slider/'.$slider->image);
            }
            $updateSliderImage = time().'.'. $request->image->extension();
            $request->image->move('slider/', $updateSliderImage);
            $slider->image = $updateSliderImage;
        }

        $slider->title = $request->title;
        $slider->short_description = $request->short_description;
        $slider->save();
        return redirect('/sliders')->withSuccess('Slider has been updated');
    }

    public function sliderDelete(Slider $slider)
    {
        $slider->delete();
        return redirect('/sliders')->withSuccess('Slider has been deleted');
    }
}
