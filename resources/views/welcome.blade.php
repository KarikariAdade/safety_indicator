<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="{{ asset('admin/css/style.css') }}" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>
        <style>
            body {
                position: relative;
                font-family: 'Nunito', sans-serif;
                background-size: cover;
                background: url("{{ asset('background.jpg') }}");
                height: 100%;
            }

            body::after{
                content: '';
                position: absolute;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                height: 100%;
                background: rgba(0,0,0,.5);
            }
            .home_card{
                position: relative;
                z-index: 44;
            }
        </style>
    </head>
    <body class="antialiased">
    <div class="home_card p-5">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="media align-items-center">
                            <div class="media-body mr-3">
                                <h2 class="num-text text-black font-w600" id="aifr">{{ $indicator[0]->aifr }}</h2>
                                <span class="fs-14">All Injury Frequency Rate</span>
                            </div>
                            <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M34.4221 13.9831C34.3342 13.721 34.1756 13.4884 33.9639 13.3108C33.7521 13.1332 33.4954 13.0175 33.2221 12.9766L23.6491 11.5141L19.3531 2.36408C19.232 2.10638 19.04 1.88849 18.7996 1.73587C18.5592 1.58325 18.2803 1.5022 17.9956 1.5022C17.7108 1.5022 17.432 1.58325 17.1916 1.73587C16.9512 1.88849 16.7592 2.10638 16.6381 2.36408L12.3421 11.5141L2.76908 12.9766C2.49641 13.0181 2.24048 13.1341 2.02943 13.3117C1.81837 13.4892 1.66036 13.7215 1.57277 13.9831C1.48517 14.2446 1.47139 14.5253 1.53293 14.7941C1.59447 15.063 1.72895 15.3097 1.92158 15.5071L8.89808 22.6501L7.24808 32.7571C7.20306 33.0345 7.23685 33.3189 7.34561 33.578C7.45437 33.8371 7.63373 34.0605 7.86325 34.2226C8.09277 34.3847 8.36321 34.4791 8.64377 34.495C8.92432 34.5109 9.20371 34.4477 9.45008 34.3126L18.0001 29.5906L26.5501 34.3126C26.7965 34.4489 27.0762 34.5131 27.3573 34.4978C27.6385 34.4826 27.9097 34.3885 28.1399 34.2264C28.37 34.0643 28.55 33.8406 28.659 33.5811C28.7681 33.3215 28.8019 33.0365 28.7566 32.7586L27.1066 22.6516L34.0786 15.5071C34.2703 15.3091 34.4038 15.0622 34.4644 14.7933C34.525 14.5245 34.5103 14.2441 34.4221 13.9831Z" fill="#353d25"></path>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="media align-items-center">
                            <div class="media-body mr-3">
                                <h2 class="num-text text-black font-w600" id="trifr">{{ $indicator[0]->trifr }}</h2>
                                <span class="fs-14">Total Recordable Injury Frequency Rate</span>
                            </div>
                            <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M34.4221 13.9831C34.3342 13.721 34.1756 13.4884 33.9639 13.3108C33.7521 13.1332 33.4954 13.0175 33.2221 12.9766L23.6491 11.5141L19.3531 2.36408C19.232 2.10638 19.04 1.88849 18.7996 1.73587C18.5592 1.58325 18.2803 1.5022 17.9956 1.5022C17.7108 1.5022 17.432 1.58325 17.1916 1.73587C16.9512 1.88849 16.7592 2.10638 16.6381 2.36408L12.3421 11.5141L2.76908 12.9766C2.49641 13.0181 2.24048 13.1341 2.02943 13.3117C1.81837 13.4892 1.66036 13.7215 1.57277 13.9831C1.48517 14.2446 1.47139 14.5253 1.53293 14.7941C1.59447 15.063 1.72895 15.3097 1.92158 15.5071L8.89808 22.6501L7.24808 32.7571C7.20306 33.0345 7.23685 33.3189 7.34561 33.578C7.45437 33.8371 7.63373 34.0605 7.86325 34.2226C8.09277 34.3847 8.36321 34.4791 8.64377 34.495C8.92432 34.5109 9.20371 34.4477 9.45008 34.3126L18.0001 29.5906L26.5501 34.3126C26.7965 34.4489 27.0762 34.5131 27.3573 34.4978C27.6385 34.4826 27.9097 34.3885 28.1399 34.2264C28.37 34.0643 28.55 33.8406 28.659 33.5811C28.7681 33.3215 28.8019 33.0365 28.7566 32.7586L27.1066 22.6516L34.0786 15.5071C34.2703 15.3091 34.4038 15.0622 34.4644 14.7933C34.525 14.5245 34.5103 14.2441 34.4221 13.9831Z" fill="#353d25"></path>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="media align-items-center">
                            <div class="media-body mr-3">
                                <h2 class="num-text text-black font-w600" id="ltirf">{{ $indicator[0]->ltirf }}</h2>
                                <span class="fs-14">Lost Time injury frequency Rate</span>
                            </div>
                            <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M34.4221 13.9831C34.3342 13.721 34.1756 13.4884 33.9639 13.3108C33.7521 13.1332 33.4954 13.0175 33.2221 12.9766L23.6491 11.5141L19.3531 2.36408C19.232 2.10638 19.04 1.88849 18.7996 1.73587C18.5592 1.58325 18.2803 1.5022 17.9956 1.5022C17.7108 1.5022 17.432 1.58325 17.1916 1.73587C16.9512 1.88849 16.7592 2.10638 16.6381 2.36408L12.3421 11.5141L2.76908 12.9766C2.49641 13.0181 2.24048 13.1341 2.02943 13.3117C1.81837 13.4892 1.66036 13.7215 1.57277 13.9831C1.48517 14.2446 1.47139 14.5253 1.53293 14.7941C1.59447 15.063 1.72895 15.3097 1.92158 15.5071L8.89808 22.6501L7.24808 32.7571C7.20306 33.0345 7.23685 33.3189 7.34561 33.578C7.45437 33.8371 7.63373 34.0605 7.86325 34.2226C8.09277 34.3847 8.36321 34.4791 8.64377 34.495C8.92432 34.5109 9.20371 34.4477 9.45008 34.3126L18.0001 29.5906L26.5501 34.3126C26.7965 34.4489 27.0762 34.5131 27.3573 34.4978C27.6385 34.4826 27.9097 34.3885 28.1399 34.2264C28.37 34.0643 28.55 33.8406 28.659 33.5811C28.7681 33.3215 28.8019 33.0365 28.7566 32.7586L27.1066 22.6516L34.0786 15.5071C34.2703 15.3091 34.4038 15.0622 34.4644 14.7933C34.525 14.5245 34.5103 14.2441 34.4221 13.9831Z" fill="#353d25"></path>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="media align-items-center">
                            <div class="media-body mr-3">
                                <h2 class="num-text text-black font-w600" id="lti">{{ $indicator[0]->lti }}</h2>
                                <span class="fs-14">Lost Time Injury</span>
                            </div>
                            <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M34.4221 13.9831C34.3342 13.721 34.1756 13.4884 33.9639 13.3108C33.7521 13.1332 33.4954 13.0175 33.2221 12.9766L23.6491 11.5141L19.3531 2.36408C19.232 2.10638 19.04 1.88849 18.7996 1.73587C18.5592 1.58325 18.2803 1.5022 17.9956 1.5022C17.7108 1.5022 17.432 1.58325 17.1916 1.73587C16.9512 1.88849 16.7592 2.10638 16.6381 2.36408L12.3421 11.5141L2.76908 12.9766C2.49641 13.0181 2.24048 13.1341 2.02943 13.3117C1.81837 13.4892 1.66036 13.7215 1.57277 13.9831C1.48517 14.2446 1.47139 14.5253 1.53293 14.7941C1.59447 15.063 1.72895 15.3097 1.92158 15.5071L8.89808 22.6501L7.24808 32.7571C7.20306 33.0345 7.23685 33.3189 7.34561 33.578C7.45437 33.8371 7.63373 34.0605 7.86325 34.2226C8.09277 34.3847 8.36321 34.4791 8.64377 34.495C8.92432 34.5109 9.20371 34.4477 9.45008 34.3126L18.0001 29.5906L26.5501 34.3126C26.7965 34.4489 27.0762 34.5131 27.3573 34.4978C27.6385 34.4826 27.9097 34.3885 28.1399 34.2264C28.37 34.0643 28.55 33.8406 28.659 33.5811C28.7681 33.3215 28.8019 33.0365 28.7566 32.7586L27.1066 22.6516L34.0786 15.5071C34.2703 15.3091 34.4038 15.0622 34.4644 14.7933C34.525 14.5245 34.5103 14.2441 34.4221 13.9831Z" fill="#353d25"></path>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="media align-items-center">
                            <div class="media-body mr-3">
                                <h2 class="num-text text-black font-w600" id="damage_free">{{ $indicator[0]->damage_free }}</h2>
                                <span class="fs-14">Damage Free</span>
                            </div>
                            <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M34.4221 13.9831C34.3342 13.721 34.1756 13.4884 33.9639 13.3108C33.7521 13.1332 33.4954 13.0175 33.2221 12.9766L23.6491 11.5141L19.3531 2.36408C19.232 2.10638 19.04 1.88849 18.7996 1.73587C18.5592 1.58325 18.2803 1.5022 17.9956 1.5022C17.7108 1.5022 17.432 1.58325 17.1916 1.73587C16.9512 1.88849 16.7592 2.10638 16.6381 2.36408L12.3421 11.5141L2.76908 12.9766C2.49641 13.0181 2.24048 13.1341 2.02943 13.3117C1.81837 13.4892 1.66036 13.7215 1.57277 13.9831C1.48517 14.2446 1.47139 14.5253 1.53293 14.7941C1.59447 15.063 1.72895 15.3097 1.92158 15.5071L8.89808 22.6501L7.24808 32.7571C7.20306 33.0345 7.23685 33.3189 7.34561 33.578C7.45437 33.8371 7.63373 34.0605 7.86325 34.2226C8.09277 34.3847 8.36321 34.4791 8.64377 34.495C8.92432 34.5109 9.20371 34.4477 9.45008 34.3126L18.0001 29.5906L26.5501 34.3126C26.7965 34.4489 27.0762 34.5131 27.3573 34.4978C27.6385 34.4826 27.9097 34.3885 28.1399 34.2264C28.37 34.0643 28.55 33.8406 28.659 33.5811C28.7681 33.3215 28.8019 33.0365 28.7566 32.7586L27.1066 22.6516L34.0786 15.5071C34.2703 15.3091 34.4038 15.0622 34.4644 14.7933C34.525 14.5245 34.5103 14.2441 34.4221 13.9831Z" fill="#353d25"></path>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Monthly Statistics</h4>
                    </div>
                    <div class="card-body">
                        <div id="line_chart_2" class="morris_chart_height"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </body>
    <script src="{{ asset('admin/vendor/global/global.min.js') }}"></script>
    <script src="{{ asset('admin/vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('admin/js/custom.min.js') }}"></script>
    <script src="{{ asset('admin/js/dlabnav-init.js') }}"></script>
    <script src="{{ asset('admin/vendor/morris/raphael-min.js') }}"></script>
    <script src="{{ asset('admin/vendor/morris/morris.min.js') }}"></script>
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });


        function lineChart2(){
            //Area chart
            Morris.Area({
                element: 'line_chart_2',
                @php $count = 2001; @endphp
                data: [@foreach($graph_data as $data)
                    {
                        period: '{{ $data->month }}',
                        aifr: {{ number_format($data->aifr, 2) }},
                        trifr: {{ number_format($data->trifr, 2) }},
                        ltirf: {{ number_format($data->ltirf, 2) }},
                        'Damage Free': {{ $data->damage }},
                        lti: {{ number_format($data->lti, 2) }},

                    },
                    @endforeach],
                xkey: 'period',
                parseTime: false,
                ykeys: ['aifr', 'trifr', 'ltirf', 'Damage Free', 'lti'],
                labels: ['aifr', 'trifr', 'ltirf', 'Damage Free', 'lti'],
                pointSize: 5,
                fillOpacity: 0,
                pointStrokeColors: ['#FF4C41', '#2BC155', '#2DB3FF', '#353d25', '#c49417'],
                behaveLikeLine: true,
                gridLineColor: 'transparent',
                lineWidth: 5,
                hideHover: 'auto',
                lineColors: ['#FF4C41', '#2BC155', '#2DB3FF', '#353d25', '#c49417'],
                resize: true

            });
        }

        lineChart2();

        function refreshStats(data){

            $('#aifr').html(Number(data[0].aifr).toFixed(2))

            $('#trifr').html(Number(data[0].trifr).toFixed(2))

            $('#ltirf').html(Number(data[0].ltirf).toFixed(2))

            $('#lti').html(Number(data[0].lti).toFixed(2))

            $('#damage_free').html(Number(data[0].damage_free).toFixed(2))
        }

        function updateData(){
            $.ajax({
                url: '{{ route('welcome') }}',
                method: 'POST'
            }).done((response) => {
                if(response.code === 200){
                    refreshStats(response.msg)
                }
            })
        }

        setInterval(updateData, 5000)
    </script>
</html>
