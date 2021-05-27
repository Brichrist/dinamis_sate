<?php

namespace App\Http\Controllers;

use App\Http\Requests\sliderRequest;
use App\Models\slider;
use Illuminate\Http\Request;

class EditsliderController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // return view('edit',compact('sliders'))->with('yAxis', $this->x);
    }

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(sliderRequest $request,$y)
    {
        if ($request->has("slideraddform")) {
            $validated = $request->validated();

            $file = $request->file('foto')->getClientOriginalName();
            $foto = Request()->foto;
            $namafoto = pathinfo($file, PATHINFO_FILENAME) . '.' . $foto->extension();
            $foto->move(public_path('foto/sliderfoto'), $namafoto);

            $file = [
                'foto' => $namafoto,
                'active' => Request()->active,
            ];

            slider::create($file);
            // dd($file);

            return redirect("/edit/$y");
        };

        // return redirect()->route('index', ['page' => $karyawan->lastPage()]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(sliderRequest $request, $id, $y)
    {
        if ($request->has("sliderupdateform")) {
            $validated = $request->validated();
            // return Request()->foto;
            if (Request()->foto != null) {
                $file = $request->file('foto')->getClientOriginalName();
                $foto = Request()->foto;
                $namafoto = pathinfo($file, PATHINFO_FILENAME) . '.' . $foto->extension();
                $foto->move(public_path('foto/sliderfoto'), $namafoto);

                $file = [
                    'foto' => $namafoto,
                    'active' => Request()->active,
                ];
            } else {
                $file = [
                    'active' => Request()->active,
                ];
            }
            // dd($file);
            // return Request()->active;
            // $this->x = $y;
            // return $this->x;

            slider::where('id', $id)->update($file);
            // return $this->index();
            return redirect("/edit/$y");
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        slider::findOrFail($id)->delete();
        return redirect("/edit");
    }
}
