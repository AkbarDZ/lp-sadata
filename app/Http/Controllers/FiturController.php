<?php

namespace App\Http\Controllers;

use App\Models\Fitur;
use App\Models\Fitur_section2;
use App\Models\Fitur_section3;
use App\Models\Fitur_section4;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FiturController extends Controller
{

    public function index()
     {
         // Mengambil semua data "Fitur" beserta data terkait "section2", "section3", dan "section4" jika ada
         $fitur = Fitur::all();    
         return view('landing.features.hrms', compact('fitur'));
     }

     public function indexdash()
     {
         // Mengambil semua data "Fitur" beserta data terkait "section2", "section3", dan "section4" jika ada
         $fiturdash = Fitur::all();    
         return view('dashboard.fitur.main', compact('fiturdash'));
     }
     public function indexdash2()
     {
         // Mengambil semua data "Fitur" beserta data terkait "section2", "section3", dan "section4" jika ada
         $fiturdash = Fitur::all();    
         return view('dashboard.fitur.section2', compact('fiturdash'));
     }
     public function indexdash3()
     {
         // Mengambil semua data "Fitur" beserta data terkait "section2", "section3", dan "section4" jika ada
         $fiturdash = Fitur::all();    
         return view('dashboard.fitur.section3', compact('fiturdash'));
     }
     public function indexdash4()
     {
         // Mengambil semua data "Fitur" beserta data terkait "section2", "section3", dan "section4" jika ada
         $fiturdash = Fitur::all();    
         return view('dashboard.fitur.section4', compact('fiturdash'));
     }
     
     public function show($id)
     {
         // Cari objek Fitur berdasarkan ID
         $fitur = Fitur::findOrFail($id);
     
         // Kemudian, tampilkan objek Fitur ke tampilan
         return view('landing.features.hrms', compact('fitur'));
     }

    public function create()
    {
        return view('dashboard.add-page.fitur-all-add');
    }

    public function store(Request $request)
    {
        // Validasi data yang dikirimkan dari formulir
        $validatedData = $request->validate([
            'feature_name' => 'required|max:255',
            'description' => 'required',
            'feature_image_path' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048|dimensions:width=512,height=512',
            // Kolom-kolom lain yang perlu divalidasi
        ]);
    
        // Simpan data "section2"
        $section2Data = $request->only(['title_2', 'description_2', 'subtitle_2', 'section2_1', 'section2_2', 'section2_3']);
        $section2 = Fitur_section2::create($section2Data);
    
        // Simpan data "section3"
        $section3Data = $request->only(['title_3', 'description_3', 'subtitle_3', 'section3_1', 'section3_2', 'section3_3']);
        $section3 = Fitur_section3::create($section3Data);
    
        // Simpan data "section4"
        $section4Data = $request->only(['title_4', 'description_4', 'titlecard_4_1', 'descriptioncard_4_1', 'titlecard_4_2', 'descriptioncard_4_2', 'titlecard_4_3', 'descriptioncard_4_3']);
        $section4 = Fitur_section4::create($section4Data);
    
        // Simpan data "fitur" dengan menghubungkan ke section2, section3, dan section4 yang baru dibuat
        $fiturData = [
            'feature_name' => $validatedData['feature_name'],
            'description' => $validatedData['description'],
            'section2_id' => $section2->id,
            'section3_id' => $section3->id,
            'section4_id' => $section4->id,
        ];
    
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('fitur_images', 'public');
            $fiturData['feature_image_path'] = $imagePath;
        }
    
        Fitur::create($fiturData);
    
        // Redirect ke halaman lain atau tampilkan pesan sukses
        return redirect('fitur/main')->with('success', 'Data Fitur telah disimpan.');
    }

    public function destroy($id)
    {
        $fitur = Fitur::findOrFail($id);

        if ($fitur->feature_image_path) {
            Storage::delete('public/' . $fitur->feature_image_path);
        }

        $fitur->delete();

        return redirect('fitur/main')
            ->with('success', 'Data Dihapus.');
    }

    public function edit($id)
    {
        $fitur = Fitur::find($id);
        return view('dashboard.edit-page.fitur-edit-main', compact('fitur'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'feature_name' => 'required',
            'description' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048|dimensions:width=512,height=512',
            'section2_id' => 'required',
            'section3_id' => 'required',
            'section4_id' => 'required',
        ]);
        
        $fitur = Fitur::findOrFail($id);
        
        if ($request->hasFile('image')) {
            if ($fitur->feature_image_path) {
                Storage::delete('public/' . $fitur->feature_image_path);
            }
        
            $imagePath = $request->file('image')->store('fitur_images', 'public');
            $fitur->feature_image_path = $imagePath; // Simpan path gambar ke fitur
        }
        
        $fitur->feature_name = $request->feature_name;
        $fitur->description = $request->description;
        $fitur->section2_id = $request->section2_id;
        $fitur->section3_id = $request->section3_id;
        $fitur->section4_id = $request->section4_id;
        $fitur->save();
        
        return redirect('/fitur/main')->with('success', 'Data Fitur berhasil diupdate');
    }    

    public function edit2($id)
    {
        $section2 = Fitur_section2::find($id);
        return view('dashboard.edit-page.fitur-edit-section2', compact('section2'));
    }

    public function update2(Request $request, $id)
    {
        $this->validate($request, [
            'title_2' => 'required',
            'description_2' => 'required',
            'subtitle_2' => 'required',
            'section2_1' => 'required',
            'section2_2' => 'required',
            'section2_3' => 'required',
        ]);

        $fitur = Fitur_section2::find($id);
        $fitur->title_2 = $request->title_2;
        $fitur->description_2 = $request->description_2;
        $fitur->subtitle_2 = $request->subtitle_2;
        $fitur->section2_1 = $request->section2_1;
        $fitur->section2_2 = $request->section2_2;
        $fitur->section2_3 = $request->section2_3;
        $fitur->save();

        return redirect('/fitur/section2')->with('success', 'Data Fitur berhasil diupdate');
    }    

    public function edit3($id)
    {
        $section3 = Fitur_section3::find($id);
        return view('dashboard.edit-page.fitur-edit-section3', compact('section3'));
    }

    public function update3(Request $request, $id)
    {
        // Validasi data yang diinput (sesuaikan dengan kebutuhan Anda)
        $this->validate($request, [
            'title_3' => 'required',
            'description_3' => 'required',
            'subtitle_3' => 'required',
            'section3_1' => 'required',
            'section3_2' => 'required',
            'section3_3' => 'required',
            // tambahkan validasi lain sesuai kebutuhan
        ]);

        // Proses penyimpanan data yang sudah diupdate (sesuaikan dengan kebutuhan Anda)
        $fitur = Fitur_section3::find($id);
        $fitur->title_3 = $request->title_3;
        $fitur->description_3 = $request->description_3;
        $fitur->subtitle_3 = $request->subtitle_3;
        $fitur->section3_1 = $request->section3_1;
        $fitur->section3_2 = $request->section3_2;
        $fitur->section3_3 = $request->section3_3;
        $fitur->save();



        return redirect('/fitur/section3')->with('success', 'Data Fitur berhasil diupdate');
    }   
    
    public function edit4($id)
    {
        $section4 = Fitur_section4::find($id);
        return view('dashboard.edit-page.fitur-edit-section4', compact('section4'));
    }

    public function update4(Request $request, $id)
    {
        // Validasi data yang diinput (sesuaikan dengan kebutuhan Anda)
        $this->validate($request, [
            'title_4' => 'required',
            'description_4' => 'required',
            'titlecard_4_1' => 'required',
            'descriptioncard_4_1' => 'required',
            'titlecard_4_2' => 'required',
            'descriptioncard_4_2' => 'required',
            'titlecard_4_3' => 'required',
            'descriptioncard_4_3' => 'required',
            // tambahkan validasi lain sesuai kebutuhan
        ]);

        // Proses penyimpanan data yang sudah diupdate (sesuaikan dengan kebutuhan Anda)
        $fitur = Fitur_section4::find($id);
        $fitur->title_4 = $request->title_4;
        $fitur->description_4 = $request->description_4;
        $fitur->titlecard_4_1 = $request->titlecard_4_1;
        $fitur->descriptioncard_4_1 = $request->descriptioncard_4_1;
        $fitur->titlecard_4_2 = $request->titlecard_4_2;
        $fitur->descriptioncard_4_2 = $request->descriptioncard_4_2;
        $fitur->titlecard_4_3 = $request->titlecard_4_3;
        $fitur->descriptioncard_4_3 = $request->descriptioncard_4_3;
        $fitur->save();



        return redirect('/fitur/section4')->with('success', 'Data Fitur berhasil diupdate');
    }   
}

