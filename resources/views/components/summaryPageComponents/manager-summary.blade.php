<link href="{{ URL::asset('css/ManagerStyle.css') }}" rel="stylesheet" />
<div class='summary-card card'>
    <div class="summary-title-container">
        <h2>סיכום מנהלים</h2>
        <p class="findings-text">המערכת סרקה {{ $summary["summary"]["dataProvidersNum"] }}
         מקורות מידע שונים בתחומים של {{ generateScannedInfo($summary["summary"]["fieldsChecked"]) }}</p>
        <p class="findings-details">להלן הפירוט של הממצאים העיקריים:</p>
    </div>
    <div class="findings-card">
        <ol class="findings-list">
            @foreach($summary["summary"]["findings"] as $finding)
                <li>{{ $finding }}</li>
            @endforeach
        </ol>
    </div>
</div>