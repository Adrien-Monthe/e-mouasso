@extends('backend.layouts.app')

@section('page-title', __('heros.edit-hero-title'))

@section('content')

    <section class="section">
        <div class="row">
            <div class="col-lg-10">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">@lang('heros.edit-hero-title')</h5>

                        <!-- Multi Columns Form -->
                        <form class="row g-3" method="POST"
                              action="{{ route('heros.update', [app()->getLocale(), $hero->id])  }}">


                            <div class="col-6">
                                <label for="heading_title_fr" class="form-label">@lang('heros.table-heading-title')
                                    Fr</label>
                                <input type="text" name="heading_title_fr" class="form-control" id="heading_title_fr"
                                       value="{{ $hero->getTranslation('heading_title', 'fr') }}">

                            </div>
                            <div class="col-6">
                                <label for="heading_title_en" class="form-label">@lang('heros.table-heading-title')
                                    En</label>
                                <input type="text" name="heading_title_en" class="form-control" id="heading_title_en"
                                       value="{{ $hero->getTranslation('heading_title', 'en') }}">
                            </div>

                            <div class="col-12">
                                <label for="heading_description_fr"
                                       class="form-label">@lang('heros.table-heading-description') Fr</label>
                                <textarea name="heading_description_fr" class="form-control" id="heading_description_fr"
                                          cols="30"
                                          rows="3">{{ $hero->getTranslation('heading_description', 'fr') }}</textarea>
                            </div>
                            <div class="col-12">
                                <label for="heading_description_en"
                                       class="form-label">@lang('heros.table-heading-description') En</label>
                                <textarea name="heading_description_en" class="form-control" id="heading_description_en"
                                          cols="30"
                                          rows="3">{{ $hero->getTranslation('heading_description', 'en') }}</textarea>
                            </div>

                            <div class="col-6">
                                <label for="heading_btn_fr" class="form-label">@lang('heros.table-heading-btn')
                                    Fr</label>
                                <input type="text" name="heading_btn_fr" class="form-control" id="heading_btn_fr"
                                       value="{{ $hero->getTranslation('heading_btn', 'fr') }}">

                            </div>
                            <div class="col-6">
                                <label for="heading_btn_en" class="form-label">@lang('heros.table-heading-btn')
                                    En</label>
                                <input type="text" name="heading_btn_en" class="form-control" id="heading_btn_en"
                                       value="{{ $hero->getTranslation('heading_btn', 'en') }}">
                            </div>

                            <div class="col-12">
                                <label for="heading_link" class="form-label">@lang('heros.table-heading-link') </label>
                                <input type="text" name="heading_link" class="form-control" id="heading_link"
                                       value="{{ $hero->heading_link }}">
                            </div>

                            <div class="col-md-12">
                                <label for="status" class="form-label">@lang('heros.table-status')</label>
                                <select class="form-select" name="status" aria-label="Default select example">
                                    <option value="false">Inactif</option>
                                    <option value="true">Actif</option>
                                </select>
                            </div>


                        </form><!-- End Multi Columns Form -->

                    </div>
                </div>

            </div>


            <div class="col-lg-6">


            </div>

        </div>
    </section>
@endsection
<?php
