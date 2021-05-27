<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\testimoniRequest;
use App\Models\testimoni;



class EdittestimoniController extends Controller
{
    private $x;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        // return view('edit',compact('testimonis'))->with('yAxis', $this->x);
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
    public function store(testimoniRequest $request,$y)
    {
        if ($request->has("testimoniaddform")) {
        $validated = $request->validated();


        $file =$request->file('foto')->getClientOriginalName();
        $foto = Request()->foto;
        $namafoto= pathinfo($file, PATHINFO_FILENAME).'.'. $foto->extension();
        $foto->move(public_path('foto/testimonifoto'),$namafoto);
        

        $file = [
            'foto' => $namafoto,
            'name' => Request()->name,
            'judul' => Request()->judul,
            'desc' => Request()->desc,
            'active' => Request()->active
        ];

        testimoni::create($file);
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
    public function update(testimoniRequest $request, $id, $y)
    {
        // return "aa";
        if ($request->has("testimoniupdateform")) {
            $validated = $request->validated();
            // return Request()->foto;
            if (Request()->foto!=null) {
                $file =$request->file('foto')->getClientOriginalName();
                $foto = Request()->foto;
                $namafoto= pathinfo($file, PATHINFO_FILENAME).'.'. $foto->extension();
                $foto->move(public_path('foto/testimonifoto'),$namafoto);
    
                $file = [
                    'foto' => $namafoto,
                    'name' => Request()->name,
                    'judul' => Request()->judul,
                    'desc' => Request()->desc,
                    'active' => Request()->active
                ];
            }
            else {
                $file = [
                    'name' => Request()->name,
                    'judul' => Request()->judul,
                    'desc' => Request()->desc,
                    'active' => Request()->active
                ];
            }
            // dd($file);
            // return Request()->active;
            // $this->x =$y;
            // return $this->x;



            
            testimoni::where('id',$id)->update($file);    
            // return $this->index();
            // // return redirect("/edit");
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
        testimoni::findOrFail($id)->delete();
        return redirect("/edit");
    }
}
