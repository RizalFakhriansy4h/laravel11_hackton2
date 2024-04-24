@extends('layouts.template_landing')

@section('content')
<!--card 1-->
<div class="custom-margin-2"></div>
    <div class="container mt-5">
        <div class="row align-items-center">
            <div class="col-md-6">
                <img src="https://i.pinimg.com/564x/d9/b5/19/d9b5197d54babf11630a45c1a0cca065.jpg" class="img-fluid" alt="Responsive image">
            </div>
            <div class="col-md-6">
                <h2>Boost Your Sales Conference: Become a Valued Sponsor</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendisse lectus tortor, dignissim sit amet, adipiscing nec, ultricies sed, dolor. Cras elementum ultrices diam. Maecenas ligula massa, varius a, semper congue, euismod non, mi.</p>
                
                <div class="cta-links-area mt-3">
                    <div class="cta-links-area">
                        <a class="btn-solid cta-link cta-link-primary me-3" href="{{ $isLogged == true ? route('becomeSponsor') . '#' : route('login') }}">Send Inquiry</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mt-5">
            <div class="row">
                <div class="col-12 text-center">
                    <h3>Sponsors</h3>
                </div>
            </div>

            <div class="custom-margin"></div>

            <div class="row">
                <div class="col-4 d-flex justify-content-start">
                    <img src="https://conference.tbnindonesia.org/assets/images/partners/yss.png" class="img-fluid rounded" alt="YSS Partner">
                </div>
                <div class="col-4 d-flex justify-content-center">
                    <img src="https://conference.tbnindonesia.org/assets/images/partners/tdr-one-team.png" class="img-fluid rounded" alt="TDR One Team">
                </div>
                <div class="col-4 d-flex justify-content-end">
                    <img src="https://conference.tbnindonesia.org/assets/images/partners/ActonInstitute.jpg" class="img-fluid rounded" alt="Acton Institute">
                </div>
            </div>
        </div>
    </div>


@endsection