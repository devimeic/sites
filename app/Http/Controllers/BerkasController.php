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
        // Specify the directory within the storage folder where your files are located
        $peng = Pengajuan::where('id',$id)->first();
    $directori = strtolower(str_replace(' ', '_', $peng->nama_pro));
    // Specify the directory within the storage folder where your files are located
    $directory = 'public/berkas/'.$directori;

        // Get the file names within the directory
        $files = Storage::files($directory);

        // Create a new instance of ZipArchive
      $zipFile = public_path($directori.'.zip');
        $zip = new ZipArchive;

        if ($zip->open($zipFile, ZipArchive::CREATE | ZipArchive::OVERWRITE) === true) {
            // Loop through each file and add it to the zip
            foreach ($files as $file) {
                // Get the file contents
                $fileContent = Storage::get($file);
                // Get the file name with the path removed
                $fileName = basename($file);
                $pp = Upload::where('lokasi_berkas','public/berkas/'.$directori.'/'.$fileName)->first();
                $extension = pathinfo($fileName, PATHINFO_EXTENSION);
                // Rename the file within the zip
                $newFileName = $pp->berkas->nama_berkas.'.'.$extension; // Modify the new file name as per your requirements

                // Add the file to the zip with the new name
                $zip->addFromString($newFileName, $fileContent);
            }

            // Close the zip file
            $zip->close();

            // Check if the zip file exists
            if (file_exists($zipFile)) {
                // Return the zip file as a download response
                return response()->download($zipFile)->deleteFileAfterSend();
            } else {
                throw new FileNotFoundException("The zip file does not exist.");
                return redirect()->back();
            }
        } else {
            throw new \Exception("Failed to create the zip file.");
            return redirect()->back();

        }
    } catch (FileNotFoundException $e) {
        // Handle the file not found exception
        return redirect()->back();

        // Log or display an error message
    } catch (\Exception $e) {
        // Handle other exceptions
        return redirect()->back();

        // Log or display an error message
    }
    return redirect()->back();
}
}
