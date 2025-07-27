
<!-- wpo-case-area start -->
<div class="wpo-case-area-2 section-padding">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="wpo-section-title">
                    <span>Onboarding</span>
                    <h2>Rank Bonus</h2>
                </div>
            </div>
        </div>
        <div class="wpo-case-wrap">
            <div class="row">
                @foreach(\App\Package::all() as $package)
                    <div class="col-md-4 col-sm-6 custom-grid col-12">
                        <div class="wpo-case-item">
                            <div class="wpo-case-img">
                                <img src="{{asset('assets/images/compensation/'.$package->id.'.png')}}" alt="">
                            </div>
                            <div class="wpo-case-content">
                                <div class="wpo-case-text-top">
                                    <h2>{{$package->name}}</h2>
                                    <h5>NGN{{number_format($package->amount)}} ({{$package->bottles}} Bottle)</h5>
                                    <div class="progress-section">
                                        <h5>Matching Bonus</h5>
                                        <div class="process">
                                            <div class="progress">
                                                <div class="progress-bar">
                                                    <div class="progress-value">
                                                        <span>{{$package->matching_bonus}}</span>%
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <h5>Sponsor/Referer Bonus &#x20a6; {{number_format($package->referral_bonus)}};</h5>
                                </div>
                                <div class="case-btn">
                                    <ul>
                                        <li><a href="{{route('register')}}?package={{$package->id}}">Join Now</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
<!-- wpo-case-area end -->