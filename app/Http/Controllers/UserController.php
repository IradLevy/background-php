<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class UserController extends Controller
{
    private function managerSummary()
    {
        $jsonString = Storage::get('managerSummary.json');
        $summary = json_decode($jsonString, true);

        return $summary;
    }

    private function gallery()
    {
        $jsonString = Storage::get('photos.json');
        $photos = json_decode($jsonString, true);

        return $photos;
    }

    private function personalInfo()
    {
        $jsonString = Storage::get('personal_info.json');
        $info = json_decode($jsonString, true);

        return $info;
    }

    public function summaryPage()
    {
        // Fetch data from all three JSON sources
        $managerSummaryData = $this->managerSummary();
        $galleryData = $this->gallery();
        $personalInfoData = $this->personalInfo();

        // Pass data to the summaryPage view
        return view('pages.summaryPage', compact('managerSummaryData', 'galleryData', 'personalInfoData'));
    }
}
