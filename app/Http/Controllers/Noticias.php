<?php

namespace rjxa\Http\Controllers;

use Illuminate\Http\Request;

use rjxa\Noticia;

use Storage;

class Noticias extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $noticias = Noticia::all();
        return view('todos')->with(['noticias' => $noticias]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
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
    public function store(Request $request)
    {
       
        $this->validate($request, [
           'titulo' => 'required',
           'descripcion' => 'required'
       ]);
        
        $noticia = new Noticia();
        $noticia->titulo = $request->titulo;
        $noticia->descripcion = $request->descripcion;
        
       /* $img = $request->file('urlImg');
        $file_route = time().'_'.$img->getClientOriginalName();
        
        Storage::disk('imgNoticias')->put($file_route, file_get_contents($img->getRealPath() ) ); 
        
        $noticia->urlImg = $file_route;*/
        
       if($noticia->save()){
           return back()->with('msj','Datos guardados');
       } else {
            return back()->with('errormsj', 'Los datos no se guardaron correctamente');
       }
        
       
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $noticia = Noticia::find($id);
       return view('detalle')->with(['noticia' => $noticia]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $noticia = Noticia::find($id);
        
        if(!$noticia){
            abort(404);
        }
        
        return view('editar')->with('noticia', $noticia);
    }
    
     public function mostrar()
    {
         $noticias = Noticia::all();
         return view('noticias')->with(['noticias' => $noticias]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $noticia = Noticia::find($id);
        $noticia->titulo = $request->titulo;
        $noticia->descripcion = $request->descripcion;
        
        $img = $request->file('urlImg');
        $file_route = time().'_'.$img->getClientOriginalName();
        
        Storage::disk('imgNoticias')->put($file_route, file_get_contents($img->getRealPath() ) ); 
        
        $noticia->urlImg = $file_route;
        
       if($noticia->save()){
           return redirect('vertodos');
       } else {
            return back()->with('errormsj', 'Los datos no se guardaron correctamente');
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
        Noticia::destroy($id);
        return back(); 
    }
}
