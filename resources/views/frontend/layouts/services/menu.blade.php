<div class="col-xl-4 col-lg-5">
    <div class="services-details__left">
        <div class="services-details__category">
            <h3 class="services-details__category-title">Categories</h3>
            <ul class="services-details__category-list list-unstyled">
                <li class="{{ Route::currentRouteName() == "consultationjuridiques" ? 'active' : '' }}"><a href="{{ route('consultationjuridiques', app()->getLocale()) }}">@lang('services.legal_consultations')<span
                            class="icon-right-arrow"></span></a>
                </li>
                <li class="{{ Route::currentRouteName() == "recouvrementetcréances" ? 'active' : '' }}"><a href="{{ route('recouvrementetcréances', app()->getLocale()) }}">@lang('services.debt_collection_&_recovery')<span class="icon-right-arrow"></span></a>
                </li>
                <li class="{{ Route::currentRouteName() == "assistancesjuridiques" ? 'active' : '' }}"><a href="{{ route('assistancesjuridiques', app()->getLocale()) }}">@lang('services.legal_and_administrative_support')<span
                            class="icon-right-arrow"></span></a>
                </li>
                <li class="{{ Route::currentRouteName() == "auditjuridique" ? 'active' : '' }}"><a href="{{ route('auditjuridique', app()->getLocale()) }}">@lang('services.legal_and_social_audit')<span
                            class="icon-right-arrow"></span></a>
                </li>
                <li class="{{ Route::currentRouteName() == "avislégal" ? 'active' : '' }}"><a href="{{ route('avislégal', app()->getLocale()) }}">@lang('services.legal_disclaimer')<span
                            class="icon-right-arrow"></span></a>
                <li class="{{ Route::currentRouteName() == "juridictionsciviles" ? 'active' : '' }}"><a href="{{ route('juridictionsciviles', app()->getLocale()) }}">@lang('services.representation_and_assistance_in_civil_courts')<span class="icon-right-arrow"></span></a>
                </li>
            </ul>
        </div>
        <div class="services-details__need-help">
            <div class="services-details__need-help-bg"
                 style="background-image: {{url('frontend/images/backgrounds/need-help-bg.html')}};"></div>
            <div class="services-details__need-help-shape-1 float-bob-x">
                <img src="{{url('frontend/images/shapes/need-help-shape-1.png')}}" alt="">
            </div>
            <div class="services-details__need-help-shape-2 float-bob-x">
                <img src="{{url('frontend/images/shapes/need-help-shape-2.png')}}" alt="">
            </div>
            <div class="services-details__need-help-shape-3 float-bob-y">
                <img src="{{url('frontend/images/shapes/need-help-shape-3.png')}}" alt="">
            </div>
            <div class="services-details__need-help-icon">
                <span class="icon-consultant"></span>
            </div>
            <h3 class="services-details__need-help-title">@lang('services.looking')
                <br> @lang('services.for_a_top')
                <br> @lang('services.consulting?')</h3>
            <div class="services-details__need-help-btn-box">
                <a href="{{ route('contact') }}" class="services-details__need-help-btn thm-btn">@lang('services.contact_now')
                </a>
            </div>
        </div>
    </div>
</div>
