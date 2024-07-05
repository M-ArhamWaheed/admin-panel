@include('layouts.header')
@include('layouts.nav')

<div class="mx-4 mt-12">
    <div>
        <h1 class=" font-semibold   text-2xl ">@lang('lang.Dashboard')</h1>
    </div>
    <div class="grid lg:grid-cols-4 md:grid-cols-2 gap-6  mt-4">
        <div class="card-1 ">
            <div class="bg-white  border border-secondary rounded-[10px] py-5 px-8">
                <div class="flex gap-1 justify-between items-center">
                    <div>
                        <p class="text-sm text-[#808191]">@lang('lang.Total Patients')</p>
                        <h2 class="text-2xl font-semibold mt-1">
                           {{ $patient }}
                        </h2>
                    </div>
                    <div>
                        {{-- <img width="60px" height="60px" src="{{ asset('images/icons/total_orders.svg') }}"
                            alt="Orders"> --}}
                            <svg width="52px" height="52px"  class="font-extrabold" viewBox="0 0 20 14" fill="#027C56"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M10.0002 7.98469C11.491 7.98469 12.6995 6.77614 12.6995 5.28531C12.6995 3.79449 11.491 2.58594 10.0002 2.58594C8.50933 2.58594 7.30078 3.79449 7.30078 5.28531C7.30078 6.77614 8.50933 7.98469 10.0002 7.98469Z"
                                 />
                            <path
                                d="M14.2741 13.2241C14.2272 10.6453 12.3334 8.57031 10.0003 8.57031C7.66719 8.57031 5.77281 10.6459 5.72656 13.2241H14.2741Z"
                                 />
                            <path
                                d="M3.20977 4.16172C4.32987 4.16172 5.23789 3.2537 5.23789 2.13359C5.23789 1.01349 4.32987 0.105469 3.20977 0.105469C2.08966 0.105469 1.18164 1.01349 1.18164 2.13359C1.18164 3.2537 2.08966 4.16172 3.20977 4.16172Z"
                                 />
                            <path
                                d="M6.42188 8.09781C6.38687 6.16094 4.96438 4.60156 3.21063 4.60156C1.45688 4.60156 0.035 6.16094 0 8.09781H6.42188Z"
                                 />
                            <path
                                d="M16.7879 4.16172C17.908 4.16172 18.816 3.2537 18.816 2.13359C18.816 1.01349 17.908 0.105469 16.7879 0.105469C15.6678 0.105469 14.7598 1.01349 14.7598 2.13359C14.7598 3.2537 15.6678 4.16172 16.7879 4.16172Z"
                                 />
                            <path
                                d="M20.0006 8.09781C19.9656 6.16094 18.5431 4.60156 16.7894 4.60156C15.0356 4.60156 13.6137 6.16094 13.5781 8.09781H20.0006Z"
                                 />
                        </svg>


                    </div>
                </div>
            </div>
        </div>

        <div class="card-1 ">
            <div class="bg-white  border border-secondary rounded-[10px] py-5 px-8">
                <div class="flex gap-1 justify-between items-center">
                    <div>
                        <p class="text-sm text-[#808191]">@lang('lang.Pending Patients')</p>
                        <h2 class="text-2xl font-semibold mt-1">00</h2>
                    </div>
                    {{-- <div>
                        <img width="52px" height="52px" src="{{ asset('images/icons/pending-orders.svg') }}"
                            alt="Pending Orders">
                    </div> --}}
                    <svg width="52px" height="52px"  class="font-extrabold" viewBox="0 0 20 14" fill="#027C56"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M10.0002 7.98469C11.491 7.98469 12.6995 6.77614 12.6995 5.28531C12.6995 3.79449 11.491 2.58594 10.0002 2.58594C8.50933 2.58594 7.30078 3.79449 7.30078 5.28531C7.30078 6.77614 8.50933 7.98469 10.0002 7.98469Z"
                         />
                    <path
                        d="M14.2741 13.2241C14.2272 10.6453 12.3334 8.57031 10.0003 8.57031C7.66719 8.57031 5.77281 10.6459 5.72656 13.2241H14.2741Z"
                         />
                    <path
                        d="M3.20977 4.16172C4.32987 4.16172 5.23789 3.2537 5.23789 2.13359C5.23789 1.01349 4.32987 0.105469 3.20977 0.105469C2.08966 0.105469 1.18164 1.01349 1.18164 2.13359C1.18164 3.2537 2.08966 4.16172 3.20977 4.16172Z"
                         />
                    <path
                        d="M6.42188 8.09781C6.38687 6.16094 4.96438 4.60156 3.21063 4.60156C1.45688 4.60156 0.035 6.16094 0 8.09781H6.42188Z"
                         />
                    <path
                        d="M16.7879 4.16172C17.908 4.16172 18.816 3.2537 18.816 2.13359C18.816 1.01349 17.908 0.105469 16.7879 0.105469C15.6678 0.105469 14.7598 1.01349 14.7598 2.13359C14.7598 3.2537 15.6678 4.16172 16.7879 4.16172Z"
                         />
                    <path
                        d="M20.0006 8.09781C19.9656 6.16094 18.5431 4.60156 16.7894 4.60156C15.0356 4.60156 13.6137 6.16094 13.5781 8.09781H20.0006Z"
                         />
                </svg>


                </div>
            </div>
        </div>

        <div class="card-1 ">
            <div class="bg-white  border border-secondary rounded-[10px] py-5 px-8">
                <div class="flex gap-1 justify-between items-center">
                    <div>
                        <p class="text-sm text-[#808191]">@lang('lang.Total Doctor')</p>
                        <h2 class="text-2xl font-semibold mt-1">
                            {{ $doctor }}</h2>
                        </h2>
                    </div>
                    {{-- <div>
                        <img width="60px" height="60px" src="{{ asset('images/icons/total-product.svg') }}"
                            alt="Product">
                    </div> --}}
                    <svg width="52px" height="52px" fill="#027C56"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-96 55.2C54 332.9 0 401.3 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7c0-81-54-149.4-128-171.1V362c27.6 7.1 48 32.2 48 62v40c0 8.8-7.2 16-16 16H336c-8.8 0-16-7.2-16-16s7.2-16 16-16V424c0-17.7-14.3-32-32-32s-32 14.3-32 32v24c8.8 0 16 7.2 16 16s-7.2 16-16 16H256c-8.8 0-16-7.2-16-16V424c0-29.8 20.4-54.9 48-62V304.9c-6-.6-12.1-.9-18.3-.9H178.3c-6.2 0-12.3 .3-18.3 .9v65.4c23.1 6.9 40 28.3 40 53.7c0 30.9-25.1 56-56 56s-56-25.1-56-56c0-25.4 16.9-46.8 40-53.7V311.2zM144 448a24 24 0 1 0 0-48 24 24 0 1 0 0 48z"/></svg>
                </div>
            </div>
        </div>

        <div class="card-1 ">
            <div class="bg-white  border border-secondary rounded-[10px] py-5 px-8">
                <div class="flex gap-1 justify-between items-center">
                    <div>
                        <p class="text-sm text-[#808191]">@lang('lang.Total Staff')</p>
                        <h2 class="text-2xl font-semibold mt-1">
                     {{$staff}}
                        </h2>
                    </div>
                    <div>
                        <img width="50px" height="50px" src="{{ asset('images/icons/customers.svg') }}"
                            alt="Customers">
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>


<div class="lg:flex gap-14 mt-16 px-3 ">
    <div class="lg:w-[60%] w-full">
        <div class=" shadow-med p-3 rounded-xl">
            <h2 class="text-xl  font-semibold  ml-6">@lang('lang.Lorem')</h2>
            <div id="earningChart" class="mt-4" style="height: 370px; width: 100%;"></div>

        </div>


        <div class=" shadow-med p-3 py-5  mt-8 rounded-xl min-h-[448px]">
            <div class="flex justify-between px-6">
                <h2 class="text-xl  font-semibold ">@lang('lang.Lorem')</h2>

            </div>
            <div>
                <div class="pt-3  mt-2 border-t  border-gray-200">

                    <div class="relative overflow-auto h-[300px] ">
                        <table class="w-full text-sm text-center ">
                            <thead class="text-sm text-gray-900  text-dblue ">
                                <tr>
                                    <th class="px-6 py-3">
                                        @lang('lang.Code')
                                    </th>
                                    <th class="px-6 py-3">
                                        @lang('lang.Photo')
                                    </th>
                                    <th class="px-6 py-3">
                                        @lang('lang.Name')
                                    </th>
                                    <th class="px-6 py-3">
                                        @lang('lang.Rank')
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="bg-white ">
                                    <td class="px-6 py-3 ">
                                        9
                                    </td>
                                    <td class="px-6 py-3 flex  justify-center">
                                        <img src="{{ asset('images/favicon(32X32).png') }}" alt="Product">
                                    </td>
                                    <td class="px-6 py-3">
                                    Admin
                                    </td>
                                    <td class="px-6 py-3">
                                        <div class="flex items-center justify-center flex-col">
                                            <div>
                                                <p class="text-dblue flex">98.06%</p>
                                                <div class="bg-yellow-200 rounded-xl w-36 h-3 relative  mt-1">
                                                    <div class="bg-green-500 w-[70%] rounded-xl h-full"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>

                </div>
            </div>

        </div>
    </div>
    <div class="lg:w-[40%] w-full">
        <div class=" shadow-med p-3 rounded-xl">
            <h2 class="text-xl  font-semibold ml-6">@lang('lang.Lorem')</h2>
            <div id="studentChart" class="mt-4" style="height: 370px; width: 100%;"></div>
        </div>
        <div class=" shadow-med p-3 rounded-xl mt-10">

            <div>
                <div class="flex justify-between px-6">
                    <h2 class="text-xl  font-semibold ">@lang('lang.Lorem')</h2>
                </div>
                <div id="attendanceChart" class="mt-4" style="height: 270px; width: 100%;"></div>
                <div class="mt-8 mx-10">
                    <div class="flex justify-around">
                        <div class="flex flex-col items-center">
                            <p class="text-[#CECECE] text-lg font-semibold">@lang('lang.Pending')</p>
                            <h2 class="text-secondary text-3xl  mt-2 font-bold">84%</h2>
                        </div>
                        <div class="flex flex-col items-center">
                            <p class="text-[#CECECE] text-lg font-semibold">@lang('lang.Complete')</p>
                            <h2 class="text-green-500 text-3xl  mt-2  font-bold">34%</h2>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<script>
    window.onload = function() {
        CanvasJS.addColorSet("colors",
            [

                "#EDBD58",
                "#339B96",
                "#027C56",

            ]);
        var chart = new CanvasJS.Chart("earningChart", {
            animationEnabled: true,
            axisX: {
                valueFormatString: "DDD",
                minimum: new Date(2017, 1, 5, 23),
                maximum: new Date(2017, 1, 12, 1)
            },
            axisY: {
                gridColor: "#00000016",
                lineDashType: "dot"
            },
            toolTip: {
                shared: true
            },
            data: [{
                    name: "Patients",
                    type: "area",
                    fillOpacity: 100,
                    color: "#edbd58",
                    markerSize: 0,
                    dataPoints: [{
                            x: new Date(2017, 1, 6),
                            y: 550
                        },
                        {
                            x: new Date(2017, 1, 7),
                            y: 450
                        },
                        {
                            x: new Date(2017, 1, 8),
                            y: 500
                        },
                        {
                            x: new Date(2017, 1, 9),
                            y: 162
                        },
                        {
                            x: new Date(2017, 1, 10),
                            y: 150
                        },
                        {
                            x: new Date(2017, 1, 11),
                            y: 400
                        },
                        {
                            x: new Date(2017, 1, 12),
                            y: 129
                        }
                    ]
                },
                {

                    name: "Doctor",
                    type: "area",
                    color: "#027C56",
                    fillOpacity: 100,
                    markerSize: 2,
                    dataPoints: [{
                            x: new Date(2017, 1, 6),
                            y: 200
                        },
                        {
                            x: new Date(2017, 1, 7),
                            y: 150
                        },
                        {
                            x: new Date(2017, 1, 8),
                            y: 300
                        },
                        {
                            x: new Date(2017, 1, 9),
                            y: 550
                        },
                        {
                            x: new Date(2017, 1, 10),
                            y: 50
                        },
                        {
                            x: new Date(2017, 1, 11),
                            y: 80
                        },
                        {
                            x: new Date(2017, 1, 12),
                            y: 200
                        }
                    ]
                }
            ]
        });

        var chart2 = new CanvasJS.Chart("studentChart", {
            colorSet: "colors",
            animationEnabled: true,
            theme: "light1",
            axisY: {
                gridColor: "#00000016",
                suffix: "-"

            },

            data: [{
                type: "column",
                yValueFormatString: "#,##0.0#\"\"",
                dataPoints: [{
                        label: "Doctor",

                        y: 200
                    },
                    {
                        label: "Staff",
                        y: 300
                    },
                    {
                        label: "Patient",
                        y: 260
                    },
                    {
                        label: "Pending",
                        y: 100
                    },


                ]
            }]
        });

        var chart3 = new CanvasJS.Chart("attendanceChart", {
            animationEnabled: true,

            data: [{
                type: "doughnut",
                startAngle: 60,
                //innerRadius: 60,
                indexLabelFontColor: "transparent",
                indexLabelPlacement: "inside",
                dataPoints: [{
                        y:52,
                        color: "#edbd58",
                        label: "Pending"
                    },
                    {
                        y: 38,
                        color: "#027C56",
                        label: "Complete"
                    },

                ]
            }]
        });
        chart.render();
        chart2.render();
        chart3.render();

    }
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.4.1/chart.min.js"
    integrity="sha512-L0Shl7nXXzIlBSUUPpxrokqq4ojqgZFQczTYlGjzONGTDAcLremjwaWv5A+EDLnxhQzY5xUZPWLOLqYRkY0Cbw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

@include('layouts.footer')
