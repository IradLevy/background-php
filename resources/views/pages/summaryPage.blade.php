@extends('layouts.app')
@section('managerSummary')
<div class='body-container'>
    <x-summaryPageComponents.gallery :photos="$galleryData"/>
    <x-summaryPageComponents.manager-summary :summary="$managerSummaryData" />
    <x-summaryPageComponents.personal-info :personalInfo="$personalInfoData"/>
</div>
@endsection
