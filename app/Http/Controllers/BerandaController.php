<?php

namespace App\Http\Controllers;

use App\Models\Beranda_apps;
use App\Models\Beranda_fitur;
use App\Models\Beranda_main;
use App\Models\Beranda_mobile;
use App\Models\Beranda_summary;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BerandaController extends Controller
{

// main function 
    public function index_main()
    {
        $datamain = Beranda_main::all();

        return view('dashboard.beranda.main', ['datamain' => $datamain]);
    }

    public function create_main()
    {
        $datamain = Beranda_main::all();

        return view('dashboard.add-page.beranda-main-add', ['datamain'=>$datamain]);
    }

    public function store_main(Request $request)
    {
        $validatedData = $request->validate([
            'top_page_text' => 'nullable|string',
            'top_page_subtext' => 'nullable|string',
            'top_page_desc' => 'nullable|string',
            'apps_desc' => 'nullable|string',
            'summary_desc' => 'nullable|string',
        ]);

        Beranda_main::create($validatedData);

        return redirect('beranda/main')
            ->with('success', 'Data Disimpan.');
    }

    public function edit_main($id)
    {
        $datamain = Beranda_main::findOrFail($id);
        return view('dashboard.edit-page.beranda-main-edit', ['datamain' => $datamain]);
    }

    public function update_main(Request $request, $id)
    {
        $validatedData = $request->validate([
            'top_page_text' => 'nullable|string',
            'top_page_subtext' => 'nullable|string',
            'top_page_desc' => 'nullable|string',
            'apps_desc' => 'nullable|string',
            'summary_desc' => 'nullable|string',
        ]);

        $datamain = Beranda_main::findOrFail($id);
        $datamain->update($validatedData);

        return redirect('beranda/main')
            ->with('success', 'Data Dengan ID ' . $id . ' Diperbarui.');
    }

    public function destroy_main($id)
    {
        $datamain = Beranda_main::findOrFail($id);
        $datamain->delete();

        return redirect('beranda/main')
            ->with('success', 'Data Dihapus.');
    }


// fitur function 
    public function index_fitur()
    {
        $datafitur = Beranda_fitur::all();

        return view('dashboard.beranda.fitur', ['datafitur' => $datafitur]);
    }

    public function create_fitur()
    {
        $datafitur = Beranda_fitur::all();

        return view('dashboard.add-page.beranda-fitur-add', ['datafitur'=>$datafitur]);
    }

    public function store_fitur(Request $request)
    {
        $validatedData = $request->validate([
            'points_title' => 'nullable|string',
            'points_description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048|dimensions:width=512,height=512', 
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('fitur_images_main', 'public');
            $validatedData['image_path'] = $imagePath;
        }

        Beranda_fitur::create($validatedData);

        return redirect('beranda/fitur')
            ->with('success', 'Data Disimpan.');
    }

    public function edit_fitur($id)
    {
        $datafitur = Beranda_fitur::findOrFail($id);
        return view('dashboard.edit-page.beranda-fitur-edit', ['datafitur' => $datafitur]);
    }

    public function update_fitur(Request $request, $id)
    {
        $validatedData = $request->validate([
            'points_title' => 'nullable|string',
            'points_description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048|dimensions:width=512,height=512', // Validasi gambar
        ]);

        $datafitur = Beranda_fitur::findOrFail($id);

        if ($request->hasFile('image')) {
            if ($datafitur->image_path) {
                Storage::delete('public/' . $datafitur->image_path);
            }

            $imagePath = $request->file('image')->store('fitur_images_main', 'public');
            $validatedData['image_path'] = $imagePath;
        }

        $datafitur->update($validatedData);

        return redirect('beranda/fitur')
            ->with('success', 'Data Dengan ID ' . $id . ' Diperbarui.');
    }

    public function destroy_fitur($id)
    {
        $datafitur = Beranda_fitur::findOrFail($id);

        if ($datafitur->image_path) {
            Storage::delete('public/' . $datafitur->image_path);
        }

        $datafitur->delete();

        return redirect('beranda/fitur')
            ->with('success', 'Data Dihapus.');
    }


// apps 
    public function index_apps()
    {
        $dataapps = Beranda_apps::all();

        return view('dashboard.beranda.apps', ['dataapps' => $dataapps]);
    }

    public function create_apps()
    {
        $dataapps = Beranda_apps::all();

        return view('dashboard.add-page.beranda-apps-add', ['dataapps'=>$dataapps]);
    }

    public function store_apps(Request $request)
    {
        $validatedData = $request->validate([
            'features_title' => 'nullable|string',
            'features_description' => 'nullable|string',
        ]);

        Beranda_apps::create($validatedData);

        return redirect('beranda/apps')
            ->with('success', 'Data Disimpan.');
    }

    public function edit_apps($id)
    {
        $dataapps = Beranda_apps::findOrFail($id);
        return view('dashboard.edit-page.beranda-apps-edit', ['dataapps' => $dataapps]);
    }

    public function update_apps(Request $request, $id)
    {
        $validatedData = $request->validate([
            'features_title' => 'nullable|string',
            'features_description' => 'nullable|string',
        ]);

        $dataapps = Beranda_apps::findOrFail($id);
        $dataapps->update($validatedData);

        return redirect('beranda/apps')
            ->with('success', 'Data Dengan ID ' . $id . ' Diperbarui.');
    }

    public function destroy_apps($id)
    {
        $dataapps = Beranda_apps::findOrFail($id);
        $dataapps->delete();

        return redirect('beranda/apps')
            ->with('success', 'Data Dihapus.');
    }


// mobile 
    public function index_mobile()
    {
        $datamobile = Beranda_mobile::all();

        return view('dashboard.beranda.mobile', ['datamobile' => $datamobile]);
    }

    public function create_mobile()
    {
        $datamobile = Beranda_mobile::all();

        return view('dashboard.add-page.beranda-mobile-add', ['datamobile'=>$datamobile]);
    }

    public function store_mobile(Request $request)
    {
        $validatedData = $request->validate([
            'mobiles_title' => 'nullable|string',
            'mobiles_description' => 'nullable|string',
        ]);

        Beranda_mobile::create($validatedData);

        return redirect('beranda/mobile')
            ->with('success', 'Data Disimpan.');
    }

    public function edit_mobile($id)
    {
        $datamobile = Beranda_mobile::findOrFail($id);
        return view('dashboard.edit-page.beranda-mobile-edit', ['datamobile' => $datamobile]);
    }

    public function update_mobile(Request $request, $id)
    {
        $validatedData = $request->validate([
            'mobiles_title' => 'nullable|string',
            'mobiles_description' => 'nullable|string',
        ]);

        $datamobile = Beranda_mobile::findOrFail($id);
        $datamobile->update($validatedData);

        return redirect('beranda/mobile')
            ->with('success', 'Data Dengan ID ' . $id . ' Diperbarui.');
    }

    public function destroy_mobile($id)
    {
        $datamobile = Beranda_mobile::findOrFail($id);
        $datamobile->delete();

        return redirect('beranda/mobile')
            ->with('success', 'Data Dengan ID ' . $id . ' Dihapus.');
    }


// summary 
    public function index_summary()
    {
        $datasummary = Beranda_summary::all();

        return view('dashboard.beranda.summary', ['datasummary' => $datasummary]);
    }

    public function create_summary()
    {
        $datasummary = Beranda_summary::all();

        return view('dashboard.add-page.beranda-summary-add', ['datasummary'=>$datasummary]);
    }

    public function store_summary(Request $request)
    {
        $validatedData = $request->validate([
            'benefits_title' => 'nullable|string',
            'benefits_description' => 'nullable|string',
        ]);

        Beranda_summary::create($validatedData);

        return redirect('beranda/summary')
            ->with('success', 'Data Disimpan.');
    }

    public function edit_summary($id)
    {
        $datasummary = Beranda_summary::findOrFail($id);
        return view('dashboard.edit-page.beranda-summary-edit', ['datasummary' => $datasummary]);
    }

    public function update_summary(Request $request, $id)
    {
        $validatedData = $request->validate([
            'benefits_title' => 'nullable|string',
            'benefits_description' => 'nullable|string',
        ]);

        $datasummary = Beranda_summary::findOrFail($id);
        $datasummary->update($validatedData);

        return redirect('beranda/summary')
            ->with('success', 'Data Dengan ID ' . $id . ' Diperbarui.');
    }

    public function destroy_summary($id)
    {
        $datasummary = Beranda_summary::findOrFail($id);
        $datasummary->delete();

        return redirect('beranda/summary')
            ->with('success', 'Data Dihapus.');
    }

    public function show()
    {
        $datamain = Beranda_main::first();
        $datafitur = Beranda_fitur::all();
        $dataapps = Beranda_apps::all();
        $datamobile = Beranda_mobile::all();
        $datasummary = Beranda_summary::all();
        
        return view('landing.home', ['datamain' => $datamain, 'datafitur' => $datafitur, 'dataapps' => $dataapps,
        'datamobile' => $datamobile, 'datasummary' => $datasummary]);
    }
}

