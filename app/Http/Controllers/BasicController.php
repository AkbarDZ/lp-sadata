<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// title
use App\Models\Pricing;
// HARGA
use App\Models\General;
use App\Models\Attendance;
use App\Models\Dropsel;
use App\Models\Report;
use App\Models\Basic;


class BasicController extends Controller
{

    public function landing()
{   
    // Pricing title
    $pricings = Pricing::all();
    // Basic
    $basics = Basic::all();
    $generals = General::all();
    $attendances = Attendance::all();
    $dropsels = Dropsel::all();
   
  
    
    return view('landing.features.pricing', compact('basics','generals','attendances','dropsels','pricings'));
}

public function basicindex()
{
    $basics = Basic::all(); // Mengambil semua data dari tabel "basics"
    $showAddButton = Basic::count() === 0; // Cek apakah sudah ada data Basic

    return view('dashboard.harga.basicz', compact('basics', 'showAddButton'));
}

public function basiccreate()
{
    $showAddButton = Basic::count() === 0; // Cek apakah sudah ada data Basic

    return view('dashboard.add-page.harga-basicz-add', compact('showAddButton'));
}

public function basicstore(Request $request)
{
    $validatedData = $request->validate([
        'judulbasic' => 'required|string|max:255',
        'juduladvance' => 'required',
        'judulexpert' => 'required',
    ]);

    Basic::create([
        'judulbasic' => $validatedData['judulbasic'],
        'juduladvance' => $validatedData['juduladvance'],
        'judulexpert' => $validatedData['judulexpert'],
    ]);

    // Set variabel $showAddButton menjadi false setelah penambahan data
    $showAddButton = false;

    return redirect('harga/basicz')->with('success', 'Data Basic berhasil ditambahkan!');
}

public function basicedit($id)
{
    $basic = Basic::findOrFail($id);
    return view('dashboard.edit-page.harga-basicz-edit', compact('basic'));
}

public function basicupdate(Request $request, $id)
{
    $validatedData = $request->validate([
        'judulbasic' => 'required|string|max:255',
        'juduladvance' => 'required',
        'judulexpert' => 'required',
    ]);

    $basic = Basic::findOrFail($id);
    $basic->update([
        'judulbasic' => $validatedData['judulbasic'],
        'juduladvance' => $validatedData['juduladvance'],
        'judulexpert' => $validatedData['judulexpert'],
    ]);

    return redirect('harga/basicz')->with('success', 'Data Basic berhasil diubah!');
}

public function basicdestroy($id)
{
    $basic = Basic::findOrFail($id);
    $basic->delete();

    // Set variabel $showAddButton kembali menjadi true jika data Basic masih ada
    $showAddButton = Basic::count() === 0;

    return redirect('harga/basicz')->with('success', 'Data Basic berhasil dihapus!');
}

    //  GENERAL

    public function generalindex()
{
    $generals = General::all();

    return view('dashboard.harga.generalz', compact('generals'));
}

public function generalcreate()
{

    return view('dashboard.add-page.harga-generalz-add');
}

public function generalstore(Request $request)
{
    $validatedData = $request->validate([
        'guidelines' => 'required|string|max:255',
        'statusbasic' => 'required|in:aktif,nonaktif',
        'statusadvance' => 'required|in:aktif,nonaktif',
        'statusexpert' => 'required|in:aktif,nonaktif',
    ]);

    // Selanjutnya, simpan data general yang baru
    General::create([
        'guidelines' => $validatedData['guidelines'],
        'statusbasic' => $validatedData['statusbasic'],
        'statusadvance' => $validatedData['statusadvance'],
        'statusexpert' => $validatedData['statusexpert'],
    ]);

    return redirect('harga/generalz')->with('success', 'Data General berhasil ditambahkan!');
}

public function generaledit($id)
{
    $general = General::findOrFail($id);

    return view('dashboard.edit-page.harga-generalz-edit', compact('general'));
}

public function generalupdate(Request $request, $id)
{
    $validatedData = $request->validate([
        'guidelines' => 'required|string|max:255',
        'statusbasic' => 'required|in:aktif,nonaktif',
        'statusadvance' => 'required|in:aktif,nonaktif',
        'statusexpert' => 'required|in:aktif,nonaktif',
    ]);

    $general = General::findOrFail($id);

    $general->update([
        'guidelines' => $validatedData['guidelines'],
        'statusbasic' => $validatedData['statusbasic'],
        'statusadvance' => $validatedData['statusadvance'],
        'statusexpert' => $validatedData['statusexpert'],
    ]);

    return redirect('harga/generalz')->with('success', 'Data General berhasil diubah!');
}

public function generaldestroy($id)
{
    $general = General::find($id);
    
    if (!$general) {
        return redirect('harga/generalz')->with('error', 'Data General tidak ditemukan.');
    }

    $general->delete();

    return redirect('harga/generalz')->with('success', 'Data General berhasil dihapus.');
}
    // END GENERAL


    //  ATTENDANCE
    public function attendanceindex()
{
    $attendances = Attendance::all();

    return view('dashboard.harga.attendancez', compact('attendances'));
}


public function attendancecreate()
{
    $categories = ['Level', 'Itinerary', 'Permittance', 'Create Location', 'Plan', 'Attendance Tracking'];

    return view('dashboard.add-page.harga-attendancez-add', compact('categories'));
}

public function attendancestore(Request $request)
{
    $validatedData = $request->validate([
        'category' => 'nullable|string|max:255', // Kategori boleh kosong atau string
        'new_category' => 'nullable|string|max:255', // Kategori baru boleh kosong atau string
        'statusbasicc' => 'required|in:aktif,nonaktif', // Ubah 'status' menjadi 'statusbasicc'
        'statusadvancee' => 'required|in:aktif,nonaktif', // Tambahkan validasi 'statusadvancee'
        'statusexpertt' => 'required|in:aktif,nonaktif', // Tambahkan validasi 'statusexpertt'
    ]);

    // Jika kategori yang dipilih adalah "new_category", gunakan nilai dari input "new_category"
    $category = $validatedData['category'] === 'new_category' ? $validatedData['new_category'] : $validatedData['category'];

    // Cek apakah kategori sudah ada di database
    $existingCategory = Attendance::where('category', $category)->first();

    // Jika kategori sudah ada, gunakan yang ada
    if ($existingCategory) {
        $attendance = $existingCategory;
    } else {
        // Jika tidak ada, buat catatan baru
        $attendance = Attendance::create([
            'category' => $category,
            'statusbasicc' => $validatedData['statusbasicc'],
            'statusadvancee' => $validatedData['statusadvancee'],
            'statusexpertt' => $validatedData['statusexpertt'],
        ]);
    }

    // Redirect atau berikan respons sesuai kebutuhan Anda
    return redirect('harga/attendancez')->with('success', 'Data Attendance berhasil ditambahkan!');
}



public function attendanceedit($id)
{
    $attendance = Attendance::findOrFail($id);
    return view('dashboard.edit-page.harga-attendancez-edit', compact('attendance'));
}

// Fungsi update untuk menyimpan perubahan data
public function attendanceupdate(Request $request, $id)
{
    $validatedData = $request->validate([
        'category' => 'required|string|max:255',
        'statusbasicc' => 'required|in:aktif,nonaktif', // Ubah 'status' menjadi 'statusbasicc'
        'statusadvancee' => 'required|in:aktif,nonaktif', // Tambahkan validasi 'statusadvancee'
        'statusexpertt' => 'required|in:aktif,nonaktif', // Tambahkan validasi 'statusexpertt'
    ]);

    $attendance = Attendance::findOrFail($id);
    $attendance->category = $validatedData['category'];
    $attendance->statusbasicc = $validatedData['statusbasicc']; // Ubah 'status' menjadi 'statusbasicc'
    $attendance->statusadvancee = $validatedData['statusadvancee']; // Tambahkan validasi 'statusadvancee'
    $attendance->statusexpertt = $validatedData['statusexpertt']; // Tambahkan validasi 'statusexpertt'
    $attendance->save();

    return redirect('harga/attendancez')->with('success', 'Data Attendance berhasil diubah!');
}



public function attendancedestroy($id)
{
    $attendance = Attendance::find($id);
    
    if (!$attendance) {
        return redirect('harga/attendancez')->with('error', 'Data Attendance tidak ditemukan.');
    }

    $attendance->delete();

    return redirect('harga/attendancez')->with('success', 'Data Attendance berhasil dihapus.');
}

    // END ATTENDANCE

    // REPORT
    public function reportindex()
    {
        $reports = Report::all();
    
        return view('dashboard.harga.reportz', compact('reports'));
    }
    
    public function reportcreate()
    {
        return view('dashboard.add-page.harga-reportz-add');
    }
    
    public function reportstore(Request $request)
    {
        // Validasi input
        $validatedData = $request->validate([
            'sales_id' => 'required|string|max:255',
            'statusreport_basic' => 'required|in:aktif,nonaktif',
            'statusreport_advance' => 'required|in:aktif,nonaktif',
            'statusreport_expert' => 'required|in:aktif,nonaktif',
        ]);
    
        // Simpan data report ke dalam tabel
        Report::create($validatedData);
    
        // Redirect ke halaman yang sesuai atau tampilkan pesan sukses
        return redirect()->route('harga.reportz')->with('success', 'Data Report berhasil ditambahkan!');
    }
    
    public function reportedit($id)
    {
        $report = Report::findOrFail($id);
    
        return view('dashboard.edit-page.harga-reportz-edit', compact('report'));
    }
    
    public function reportupdate(Request $request, $id)
    {
        $report = Report::find($id);
    
        if (!$report) {
            return redirect()->route('harga.reportz')->with('error', 'Data Report tidak ditemukan.');
        }
    
        $validatedData = $request->validate([
            'sales_id' => 'required|string|max:255',
            'statusreport_basic' => 'required|in:aktif,nonaktif',
            'statusreport_advance' => 'required|in:aktif,nonaktif',
            'statusreport_expert' => 'required|in:aktif,nonaktif',
            // tambahkan validasi untuk kolom-kolom lain
        ]);
    
        // Perbarui atribut statusreport pada model Report
        $report->sales_id = $validatedData['sales_id'];
        $report->statusreport_basic = $validatedData['statusreport_basic'];
        $report->statusreport_advance = $validatedData['statusreport_advance'];
        $report->statusreport_expert = $validatedData['statusreport_expert'];
    
        // Simpan perubahan ke dalam database
        $report->save();
    
        return redirect()->route('harga.reportz')->with('success', 'Data Report berhasil diperbarui!');
    }
    
    public function reportdestroy($id)
    {
        // Temukan report berdasarkan ID dan hapus
        $report = Report::findOrFail($id);
        $report->delete();
    
        // Redirect ke halaman yang sesuai atau tampilkan pesan sukses
        return redirect()->route('harga.reportz')->with('success', 'Data Report berhasil dihapus!');
    }
    // END REPORT

    // BASIC DROPSEL
    public function dropselindex()
    {
        $dropsels = Dropsel::all();
        return view('dashboard.harga.dropselz', compact('dropsels'));
    }

    public function dropselcreate()
    {
        $reports = Report::all(); // Ambil semua data report
    
        return view('dashboard.add-page.harga-dropselz-add', compact('reports'));
    }
    

    public function dropselstore(Request $request)
    {
        // Validasi input
        $validatedData = $request->validate([
            'sales_id' => 'required|exists:reports,id',
            'sell_id' => 'required|string|max:255',
          
        ]);

        // Simpan data ke dalam tabel
        $dropsel = Dropsel::create($validatedData);

        // Redirect ke halaman yang sesuai atau tampilkan pesan sukses
        return redirect()->route('harga.dropselz')->with('success', 'Data Dropsel berhasil ditambahkan!');
    }

    public function dropseledit($id)
{
    $dropsel = Dropsel::findOrFail($id);
    $reports = Report::all(); // Ambil semua data report

    return view('dashboard.edit-page.harga-dropselz-edit', compact('dropsel', 'reports'));
}

public function dropselupdate(Request $request, $id)
{
    $dropsel = Dropsel::find($id);

    if (!$dropsel) {
        return redirect()->route('harga.dropselz')->with('error', 'Data Dropsel tidak ditemukan.');
    }

    // Validasi input
    $validatedData = $request->validate([
        'sales_id' => 'required|exists:reports,id',
        'sell_id' => 'required|string|max:255',
     
    ]);

    // Perbarui data dengan data yang telah divalidasi
    $dropsel->update($validatedData);

    // Redirect ke halaman yang sesuai atau tampilkan pesan sukses
    return redirect()->route('harga.dropselz')->with('success', 'Data Dropsel berhasil diperbarui!');
}


    public function dropseldestroy($id)
    {
        $dropsel = Dropsel::find($id);
        
        if (!$dropsel) {
            return redirect()->route('harga.dropselz')->with('error', 'Data Dropsel tidak ditemukan.');
        }
    
        $dropsel->delete();
    
        return redirect()->route('harga.dropselz')->with('success', 'Data Dropsel berhasil dihapus.');
    }
    // END BASIC DROPSEL


// ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    // PRICING TITLE

    public function pricingindex()
    {
        $pricings = Pricing::all();
        $showAddButton = Pricing::count() === 0; 
    
        return view('dashboard.harga.pricingz', compact('pricings', 'showAddButton'));
    }
    
    public function pricingcreate()
    {
        $showAddButton = Pricing::count() === 0; 
    
        return view('dashboard.add-page.harga-pricingz-add', compact('showAddButton'));
    }
    
        public function pricingstore(Request $request)
        {
            $validatedData = $request->validate([
                'pricing_title' => 'required|string|max:255',
                'pricing_deskripsi' => 'required|string|max:255',
                'pricing_isi' => 'required|string|max:255',
            ]);
        
            Pricing::create([
                'pricing_title' => $validatedData['pricing_title'],
                'pricing_deskripsi' => $validatedData['pricing_deskripsi'],
                'pricing_isi' => $validatedData['pricing_isi'],
            ]);
        
           
            $showAddButton = false;
        
            return redirect('harga/pricingz')->with('success', 'Pricing berhasil ditambahkan!');
        }
    
        public function pricingedit($id)
        {
            $pricing = Pricing::findOrFail($id);
    
            return view('dashboard.edit-page.harga-pricingz-edit', compact('pricing'));
        }
    
        public function pricingupdate(Request $request, $id)
        {
            $validatedData = $request->validate([
                'pricing_title' => 'required|string|max:255',
                'pricing_deskripsi' => 'required|string|max:255',
                'pricing_isi' => 'required|string|max:255',
            ]);
    
            $pricing = Pricing::findOrFail($id);
    
            $pricing->update([
                'pricing_title' => $validatedData['pricing_title'],
                'pricing_deskripsi' => $validatedData['pricing_deskripsi'],
                'pricing_isi' => $validatedData['pricing_isi'],
            ]);
    
            return redirect('harga/pricingz')->with('success', 'Pricing berhasil diubah!');
        }
        public function pricingdestroy($id)
        {
            $pricing = Pricing::find($id);
        
            if (!$pricing) {
                return redirect('harga/pricingz')->with('error', 'Pricing tidak ditemukan.');
            }
        
            $pricing->delete();
        
            // Set variabel $showAddButton kembali menjadi true jika data Pricing masih ada
            $showAddButton = Pricing::count() === 0;
        
            return redirect('harga/pricingz')->with('success', 'Pricing berhasil dihapus.');
        }

}
