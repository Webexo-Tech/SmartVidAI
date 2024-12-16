@extends('backend.layouts.master')

@section('title')
    {{ localize('Generate DALL-E 3 Image') }} {{ getSetting('title_separator') }} {{ getSetting('system_title') }}
@endsection

@section('contents')
    <section class="tt-section pt-4">
        <div class="container">
            <div class="row mb-4">
                <div class="col-12">
                    <div class="tt-page-header">
                        <div class="d-lg-flex align-items-center justify-content-lg-between">
                            <div class="tt-page-title mb-3 mb-lg-0">
                                <h1 class="h4 mb-lg-1">{{ localize('Generate DALL-E 3 Image') }}</h1>
                                <ol class="breadcrumb breadcrumb-angle text-muted">
                                    <li class="breadcrumb-item"><a
                                            href="{{ route('writebot.dashboard') }}">{{ localize('Dashboard') }}</a></li>
                                    <li class="breadcrumb-item">{{ localize('AI Images') }}</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row g-3">
                <x-open-ai-error-message/>
                <div class="col-12 mb-5">
                    <div class="card flex-column h-100">
                        <div class="card-header">
                            <div class="row justify-content-center align-items-center">
                                <div class="col-lg-9 col-md-10 col-12">

                                    <!-- image generate form -->
                                    <form action="#" class="header-search-form generate-images-form" method="POST"
                                        data-engine="openai">
                                        @csrf
                                        <input type="hidden" name="model_name" id="model_name" value="dall-e-3">
                                        <!-- tab content start -->

                                        <!-- text to image -->
                                        @if (isCustomer())
                                            <div class="row justify-content-between align-items-center pb-3">

                                                <div class="col-auto">

                                                    @php
                                                        $user = auth()->user();
                                                        $latestPackage = activePackageHistory(auth()->user()->id);
                                                    @endphp
                                                    @if ($latestPackage->new_image_balance != -1)
                                                        <div
                                                            class="d-flex align-items-center flex-column used-words-percentage">
                                                            @include('backend.pages.templates.inc.used-images-percentage')
                                                        </div>
                                                    @endif

                                                </div>
                                            </div>
                                        @endif

                                        <!-- tab end -->
                                        <!-- advance options -->

                                        <div class="card">
                                            <div class="card-body">

                                                <div class="row g-2 mb-3">
                                                    @include('backend.pages.common.dall-e-3', [
                                                        'column' => 'col-lg-3',
                                                    ])
                                                    <div class="col-lg-3">
                                                        <div class="form-input"
                                                            @if (env('DEMO_MODE') == 'On') data-bs-toggle="tooltip"
                                                        data-bs-placement="top"
                                                        data-bs-title="{{ localize('Disabled in demo') }}" @endif>
                                                            <label for="num_of_results"
                                                                class="form-label">{{ localize('Number of Results') }}
                                                                <span class="ms-1 cursor-pointer" data-bs-toggle="tooltip"
                                                                    data-bs-placement="top"
                                                                    data-bs-title="{{ localize('Only One image generate at a time for DALL E 3') }}"><i
                                                                        data-feather="help-circle"
                                                                        class="icon-14"></i></span>
                                                            </label>
                                                            <select class="form-select select2" id="num_of_results"
                                                                name="num_of_results" required
                                                                @if (env('DEMO_MODE') == 'On') disabled @endif>
                                                                <option value="1"> 1</option>

                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="input-group">
                                                    <input
                                                        class="form-control border border-2 border-primary rounded-pill rounded-end"
                                                        type="text" id="title" name="title"
                                                        placeholder="{{ localize('Type your image title or description that you are looking for') }}"
                                                        required>
                                                    <div class="input-group-append">
                                                        <button type="submit"
                                                            class="btn btn-link bg-primary border border-2 border-primary text-light rounded-pill rounded-start btn-create-content"><i
                                                                class="flaticon-search translate-middle-y"></i>{{ localize('Generate Image') }}</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- image generate form -->

                                    </form>
                                </div>
                            </div>
                        </div>


                        <div class="card-body d-flex flex-column h-100" id="image-list-dall-e-3">
                            <h5 class="mb-4">{{ localize('Generated Image Result') }}</h5>
                            <div class="row g-3 tt-image-gallery ai-images-wrapper">
                                @include('backend.pages.templates.inc.images-list', [
                                    'images' => $imagesDalle3,
                                ])
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection

@section('scripts')
    @include('backend.pages.templates.inc.template-scripts')
    <script>
        "use strict";

        function handleTabClick(type) {

            if (type == 'dall-e-2') {
                $('#model_name').val(type);
                $('#advance-options-dall-e-3').addClass('d-none');
                $('#advance-options-dall-e-2').removeClass('d-none');
            } else if (type == 'dall-e-3') {
                $('#model_name').val(type);
                $('#advance-options-dall-e-3').removeClass('d-none');
                $('#advance-options-dall-e-2').addClass('d-none');
            }
        }
    </script>
@endsection