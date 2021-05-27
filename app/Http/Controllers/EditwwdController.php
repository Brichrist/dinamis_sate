<?php

namespace App\Http\Controllers;

use App\Http\Requests\wwdRequest;
use App\Models\wwd;
use Illuminate\Http\Request;

class EditwwdController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // return view('edit',compact('wwds'))->with('yAxis', $this->x);
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
    public function store(wwdRequest $request,$y)
    {
        // return $request->file('foto')->getMimeType();
        // dd($request->file('foto')->getMimeType());
        if ($request->has("wwdaddform")) {
            $validated = $request->validated();

            $file = $request->file('foto')->getClientOriginalName();
            $foto = Request()->foto;
            $namafoto = pathinfo($file, PATHINFO_FILENAME) . '.' . $foto->extension();
            $foto->move(public_path('foto/wwdfoto'), $namafoto);

            $file = [
                'foto' => $namafoto,
                'active' => Request()->active,
            ];

            wwd::create($file);
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
    public function update(wwdRequest $request, $id, $y)
    {
        if ($request->has("wwdupdateform")) {
            $validated = $request->validated();
            // return Request()->foto;
            if (Request()->foto != null) {
                $file = $request->file('foto')->getClientOriginalName();
                $foto = Request()->foto;
                $namafoto = pathinfo($file, PATHINFO_FILENAME) . '.' . $foto->extension();
                $foto->move(public_path('foto/wwdfoto'), $namafoto);

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

            wwd::where('id', $id)->update($file);
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
        wwd::findOrFail($id)->delete();
        return redirect("/edit");
    }
}
