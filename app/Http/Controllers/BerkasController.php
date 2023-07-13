<?php

namespace App\Http\Controllers;

use App\Models\Pengajuan;
use App\Models\Rapat;
use App\Models\Upload;
use Carbon\Carbon;
use DateTime;
use Symfony\Component\HttpFoundation\File\Exception\FileNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use ZipArchive;

class BerkasController extends Controller
{
    public function index()
    {
        $tittle = 'Dashboard';
        $verifikasi = Pengajuan::where('status_pengajuan','Verifikasi Berkas')->count();
        $revisi = Pengajuan::where('status_pengajuan','Revisi Berkas')->count();
        $datas = Rapat::where('jadwal', '>=',now()->format('Y-m-d'))->get();
        // $datas = Rapat::all();
        return view('berkas.dashboard', compact(['tittle','verifikasi','revisi','datas']));
    }

    public function pengajuan()
    {
        $tittle = 'Pengajuan';
        return view('berkas.pengajuan', compact('tittle'));
    }

    public function view()
    {
        $tittle = 'Rincian Berkas';
        return view('berkas.view-berkas', compact('tittle'));
    }

    public function input()
    {
        $tittle = 'Persyaratan Berkas';
        return view('berkas.input-berkas', compact('tittle'));
    }


public function downloadFiles($id)
{
    try {
        // Menentukan direktori di dalam folder storage tempat file-file Anda disimpan
        $peng = Pengajuan::where('id',$id)->first();
    $directori = strtolower(str_replace(' ', '_', $peng->nama_pro));
    // Specify the directory within the storage folder where your files are located
    $directory = 'public/berkas/'.$directori;

         // Mendapatkan daftar nama file dalam direktori
        $files = Storage::files($directory);

        // Membuat instance baru dari ZipArchive
      $zipFile = public_path($directori.'.zip');
        $zip = new ZipArchive;

        if ($zip->open($zipFile, ZipArchive::CREATE | ZipArchive::OVERWRITE) === true) {
            // Melakukan perulangan melalui setiap file dan menambahkannya ke dalam zip
            foreach ($files as $file) {
                // Mendapatkan konten file
                $fileContent = Storage::get($file);
                 // Mendapatkan nama file tanpa path
                $fileName = basename($file);
                $pp = Upload::where('lokasi_berkas','public/berkas/'.$directori.'/'.$fileName)->first();
                $extension = pathinfo($fileName, PATHINFO_EXTENSION);
                // Mengganti nama file dalam zip
                $newFileName = str_replace('/',',',$pp->berkas->nama_berkas).'.'.$extension; // Modify the new file name as per your requirements

                // Menambahkan file ke dalam zip dengan nama baru
                $zip->addFromString($newFileName, $fileContent);
            }

            // Menutup file zip
            $zip->close();

            // Memeriksa apakah file zip ada
            if (file_exists($zipFile)) {
                // Mengembalikan file zip sebagai respons unduhan
                return response()->download($zipFile)->deleteFileAfterSend();
            } else {
                throw new FileNotFoundException("File zip tidak ditemukan.");
                return redirect()->back();
            }
        } else {
            throw new \Exception("Gagal membuat file zip.");
            return redirect()->back();

        }
    } catch (FileNotFoundException $e) {
        // Menangani exception file tidak ditemukan
        return redirect()->back();

        // Mencatat atau menampilkan pesan kesalaha
    } catch (\Exception $e) {
        // Mencatat atau menampilkan pesan kesalahan
        return redirect()->back();

        // Log or display an error message
    }
    return redirect()->back();
}
}
