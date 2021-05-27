<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\eventRequest;
use App\Models\event;



class EditeventController extends Controller
{
    private $x;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        // return view('edit',compact('events'))->with('yAxis', $this->x);
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
    public function store(eventRequest $request,$y)
    {
        if ($request->has("eventaddform")) {
        $validated = $request->validated();


        $file =$request->file('foto')->getClientOriginalName();
        $foto = Request()->foto;
        $namafoto= pathinfo($file, PATHINFO_FILENAME).'.'. $foto->extension();
        $foto->move(public_path('foto/eventfoto'),$namafoto);
        

        $file = [
            'foto' => $namafoto,
            'event' => Request()->event,
            'active' => Request()->active
        ];

        event::create($file);
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
    public function update(eventRequest $request, $id, $y)
    {
        // return "aa";
        if ($request->has("eventupdateform")) {
            $validated = $request->validated();
            // return Request()->foto;
            if (Request()->foto!=null) {
                $file =$request->file('foto')->getClientOriginalName();
                $foto = Request()->foto;
                $namafoto= pathinfo($file, PATHINFO_FILENAME).'.'. $foto->extension();
                $foto->move(public_path('foto/eventfoto'),$namafoto);
    
                $file = [
                    'foto' => $namafoto,
                    'event' => Request()->event,
                    'active' => Request()->active
                ];
            }
            else {
                $file = [
                    'event' => Request()->event,
                    'active' => Request()->active
                ];
            }
            // dd($file);
            // return Request()->active;
            // $this->x =$y;
            // return $this->x;



            
            event::where('id',$id)->update($file);    
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
        event::findOrFail($id)->delete();
        return redirect("/edit");
    }
}
