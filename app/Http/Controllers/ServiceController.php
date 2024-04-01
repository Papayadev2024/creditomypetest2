<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreServiceRequest;
use App\Http\Requests\UpdateServiceRequest;
use App\Models\Service;
use Illuminate\Http\Request;
// use Intervention\Image\Facades\Image;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
// use Illuminate\Support\Facades\Image;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;


class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $servicios = Service::where("status", "=", true)->get();

       
        return view('pages.service.index', compact('servicios'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('pages.service.create');
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required',
        ]);

        //tamaño imagenes 808x445 
        $service = new Service();


        if($request->hasFile("imagen")){
           
            $manager = new ImageManager(new Driver());
            
            $nombreImagen = Str::random(10) . '_' . $request->file('imagen')->getClientOriginalName();
               
            $img =  $manager->read($request->file('imagen'));

            // Obtener las dimensiones de la imagen
            $width = $img->width();
            $height = $img->height();

            
            $newHeight = ceil((445 / 808) * $width);
    

            if ($newHeight > 445) {
                    $img->resize(808, 445)->crop(808, 445);
            } else {
                    $img->resize(808, $newHeight);
            }
          

            $ruta = storage_path() . '/app/public/images/servicios/';
            
            $img->save($ruta.$nombreImagen);
            
           
            $service->url_image = $ruta;
            $service->name_image = $nombreImagen;
            
        }

            $service->title = $request->title;
            $service->description = $request->description;
            $service->status = 1;

            $service->save();

            return redirect()->route('servicios.index')->with('success', 'Servicio creado exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Service $service, $id)
    {   
       
        $servicios = Service::find($id);

        return view('pages.service.edit', compact('servicios'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
       
        $service = Service::findOrfail($id); 

        $service->title = $request->title;
        $service->description = $request->description;
        $service->status = 1;

        if($request->hasFile("imagen")){
           
            $manager = new ImageManager(new Driver());

            
            $ruta = storage_path() .'/app/public/images/servicios/'. $service->name_image; 

            // dd($ruta);
            if(File::exists($ruta))
            {
                File::delete($ruta);
            }

            $rutanueva = storage_path() . '/app/public/images/servicios/'; 
            $nombreImagen = Str::random(10) . '_' . $request->file('imagen')->getClientOriginalName();
            $img =  $manager->read($request->file('imagen'));
            $img = $img->resize(600,200)->save($rutanueva.$nombreImagen);
           
            $service->url_image = $rutanueva;
            $service->name_image = $nombreImagen;
            
        }

           

            $service->update();

            return redirect()->route('servicios.index')->with('success', 'Servicio actualizado exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $service = Service::findOrfail($id); 
        
        

        $service->status = false;


        $service->save();

        // $service = update(['status' => false]);
        // $ruta = storage_path() .'/app/public/images/servicios/'. $service->name_image; 

        // if(File::exists($ruta))
        // {
        //     File::delete($ruta);
        // }

        // $service->delete();    
        // return redirect()->route('servicios.index')->with('success', 'Servicio eliminado exitosamente.');
}


    public function deleteService(Request $request)
    {
        //Recupero el id mandado mediante ajax
        $id = $request->id;
        //Busco el servicio con id como parametro
        $service = Service::findOrfail($id); 
        //Modifico el status a false
        $service->status = false;
        //Guardo 
        $service->save();

        // Devuelvo una respuesta JSON u otra respuesta según necesites
        return response()->json(['message' => 'Servicio eliminado.']);
    }



       public function updateVisible(Request $request)
    {
        // Lógica para manejar la solicitud AJAX
        //return response()->json(['mensaje' => 'Solicitud AJAX manejada con éxito']);
        $id = $request->id;

        $field = $request->field;

        $status = $request->status;

        $service = Service::findOrFail($id);
        
        $service->$field = $status;

        $service->save();

         return response()->json(['message' => 'Servicio eliminado.']);
    
    }
}