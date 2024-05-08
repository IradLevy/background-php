<link href="{{ URL::asset('css/PersonalInfoStyle.css') }}" rel="stylesheet" />
<div class="card personal-info-card">
            <div class="profile-pic-container">
                <img class="profile-img" src="{{ URL::asset($personalInfo["person"]["profile_pic"]) }}" alt="profile" />
            </div>
            <div class="person-title">
                <h2 class="person-name">{{ $personalInfo["person"]["name"] }}</h2>
                <p>{{$personalInfo["person"]["job"]}} at {{ $personalInfo["person"]["company"] }}</p>
                <p>{{$personalInfo["person"]["description"]}}</p>
                <p class="id-country">ת.ז. {{$personalInfo["person"]["id_number"]}}&nbsp; | 
                &nbsp;{{$personalInfo["person"]["country"]}}</p>
            </div>
            <div class="check-container">
                <p>מטרת הדוח: 
                    <strong>{{$personalInfo["person"]["report_purpose"] ?: "לא סופק"}}</strong>
                </p>
                <p>
                    מיקוד בדיקה: <strong>{{$personalInfo["person"]["focus"] ?: "לא סופק"}}</strong>
                </p>
            </div>
            <div class="details-container">
                <div class="icons-info-container line-between">
                    @foreach ($personalInfo["person"]["mail_addresses"] as $address)
                        <x-logo-info-couple :text='$address' :logo="URL::asset('assets/mail_logo.png')" :isLink='false' :url=null/>
                    @endforeach

                    @foreach ($personalInfo["person"]["phone_numbers"] as $phone)
                        <x-logo-info-couple :text='$phone' :logo="URL::asset('assets/phone-logo.png')" :isLink='false' :url=null/>
                    @endforeach
                </div>
                <div class="icons-info-container line-between">
                    @if (count($personalInfo["person"]["linked_in_profiles"]) > 0)
                    @foreach ($personalInfo["person"]["linked_in_profiles"] as $profile)
                        <x-logo-info-couple text='לינקדאין' :logo="URL::asset('assets/linkedin-logo.png')" 
                                            :isLink='true' :url='$profile'/>
                    @endforeach
                    @else
                    <x-logo-info-couple text='לינקדאין' :logo="URL::asset('assets/linkedin-logo.png')" 
                                        :isLink='true' :url=null/>
                    @endif

                    @if (count($personalInfo["person"]["facebook_profiles"]) > 0)
                        @foreach ($personalInfo["person"]["facebook_profiles"] as $profile)
                            <x-logo-info-couple text='פייסבוק' :logo="URL::asset('assets/tiktok-logo.png')" 
                                                :isLink='true' :url='$profile'/>
                        @endforeach
                    @else
                    <x-logo-info-couple text='פייסבוק' :logo="URL::asset('assets/tiktok-logo.png')" 
                                        :isLink='true' :url=null/>
                    @endif

                    @if (count($personalInfo["person"]["instagram_profiles"]) > 0)
                        @foreach ($personalInfo["person"]["instagram_profiles"] as $profile)
                            <x-logo-info-couple text="אינסטגרם" :logo="URL::asset('assets/instagram-logo.png')" 
                                                :isLink='true' :url='$profile'/>
                        @endforeach
                    @else
                        <x-logo-info-couple text="אינסטגרם" :logo="URL::asset('assets/instagram-logo.png')" 
                                            :isLink='true' :url=null/>
                    @endif

                    @if (count($personalInfo["person"]["youtube_profiles"]) > 0)
                        @foreach ($personalInfo["person"]["youtube_profiles"] as $profile)
                            <x-logo-info-couple text="יוטיוב" :logo="URL::asset('assets/youtube-logo.png')" 
                                                :isLink='true' :url='$profile'/>
                        @endforeach
                    @else
                        <x-logo-info-couple text="יוטיוב" :logo="URL::asset('assets/youtube-logo.png')" 
                                            :isLink='true' :url=null/>
                    @endif

                    @if (count($personalInfo["person"]["twitter_profiles"]) > 0)
                        @foreach ($personalInfo["person"]["twitter_profiles"] as $profile)
                            <x-logo-info-couple text="טוויטר" :logo="URL::asset('assets/twitter-logo.png')" 
                                                :isLink='true' :url='$profile'/>
                        @endforeach
                    @else
                        <x-logo-info-couple text="טוויטר" :logo="URL::asset('assets/twitter-logo.png')" 
                                            :isLink='true' :url=null/>
                    @endif
                </div>
                <div class="icons-info-container">
                    <div class="nickname-education-container">
                        <div class="nickname-container">
                            <span>כינויים:</span>
                            <span class="nickname-education">
                                <strong>{{ implode(', ', $personalInfo["person"]["nicknames"]) }}</strong>
                            </span>
                        </div>
                        <div class="logo-container">
                            <img src="{{ URL::asset('/assets/nickname-logo.png') }}" alt="nicknames" />
                        </div>
                    </div>
                    <div class="nickname-education-container">
                        <div class="nickname-container">
                            <span>השכלה:</span>
                            <span class="nickname-education">
                                <strong>{{ implode(', ', $personalInfo["person"]["education"]) }}</strong>
                            </span>
                        </div>
                        <div class="logo-container">
                            <img src="{{ URL::asset('/assets/education-logo.png') }}" alt="education" />
                        </div>
                    </div>
                </div>
            </div>
        </div>