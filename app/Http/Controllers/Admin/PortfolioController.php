<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PortfolioRequest;
use App\Http\Requests\PortfolioRequestUpdate;
use App\Models\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        $portfolios = Portfolio::orderBy('id', 'desc')->paginate(30);
        return view('backend.portfolio.portfolio', compact('portfolios'));
    }

    public function create()
    {
        return view('backend.portfolio.create');
    }

    public function store(PortfolioRequest $request)
    {
        if ($request->file('image')){
            $image = time().'.'. $request->image->extension();
            $request->image->move('portfolio/', $image);
        }
        $service = new Portfolio();
        $service->title = $request->title;
        $service->image = $image;
        $service->save();
        return redirect()->back()->with('message', 'Portfolio has been inserted');
    }

    public function edit(Portfolio $portfolio)
    {
        return view('backend.portfolio.edit', compact('portfolio'));
    }

    public function update(PortfolioRequestUpdate $request, Portfolio $portfolio)
    {
        if ($portfolio == null){
            return redirect()->back()->with('error', 'Portfolio has been empty.');
        }
        if (isset($request->image)){
            if ($portfolio->image && file_exists('portfolio/'.$portfolio->image)){
                unlink('portfolio/'.$portfolio->image);
            }
            $updatePortfolioImage = time().'.'. $request->image->extension();
            $request->image->move('portfolio/', $updatePortfolioImage);
            $portfolio->image = $updatePortfolioImage;
        }
        $portfolio->title = $request->title;
        $portfolio->save();
        return redirect()->back()->with('message', 'Portfolio has been updated');
    }

    public function destroy(Portfolio $portfolio)
    {
        if ($portfolio->image && file_exists('portfolio/'.$portfolio->image)){
            unlink('portfolio/'.$portfolio->image);
        }
        $portfolio->delete();
        return redirect()->back()->with('error', 'Portfolio has been successfully deleted.');
    }
}
