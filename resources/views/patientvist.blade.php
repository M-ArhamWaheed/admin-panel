@include('layouts.header')
@include('layouts.nav')



   <div class="maindiv1  md:flex sm:overflow-hidden">
    <div class="parentdiv1">
        <div class="formdiv relative p-4 w-full   max-w-6xl max-h-full" >
            <form action="#">
            <div class="relative bg-white shadow-dark rounded-lg  dark:bg-gray-700  ">
                <div class="flex items-center   justify-start  py-5  rounded-t dark:border-gray-600 ">
                    <div class="grid md:grid-cols-2 gap-6 mx-6 w-full">
                        <div>
                            <label class="text-[14px] font-bold ml-5" for="fullName">@lang('lang.First Name')</label>
                            <input type="text" required
                                class="w-full  border-[#DEE2E6] ml-4 rounded-[4px] focus:border-primary   h-[40px] text-[14px]"
                                name="fname" id="fname"  placeholder="@lang('lang.Name Here')">
                        </div>
                        <div>
                            <label class="text-[14px] font-bold  ml-5" for="Select Data">@lang('lang.Select Data')</label>
                            <input type="date" required
                                class="w-full border-[#DEE2E6] ml-4  rounded-[4px] focus:border-primary   h-[40px] text-[14px]"
                                name="selectdata" id="select data" placeholder="@lang('lang.Select Data')">
                        </div>
                        <div>
                            <label class="text-[14px] font-bold ml-5" for="phoneno">@lang('lang.Mobile Number')</label>
                            <input type="tel" required
                                class="w-full border-[#DEE2E6] ml-4 rounded-[4px] focus:border-primary   h-[40px] text-[14px]"
                                name="phoneno" id="phoneno"  placeholder="@lang('lang.Mobile Number')">
                        </div>
                        <div>
                            <label class="text-[14px] font-bold  ml-5" for="CNIC NO">@lang('lang.CNIC NO')</label>
                            <input type="text" required
                                class="w-full border-[#DEE2E6] ml-4  rounded-[4px] focus:border-primary   h-[40px] text-[14px]"
                                name="cnic" id="cnicno" placeholder="@lang('lang.CNIC NO')">
                        </div>
                    </div>
                </div>
                <div class="buttonsdiv overflow-hidden block justify-between md:flex ">
                    <div class="button">
                        <button class="bg-green-700 text-white py-2 px-6 my-6 rounded-[4px] mx-7  md:mx-10 uaddBtn  font-semibold "
                        name="sumbit" id="btndata">
                        <div class=" text-center hidden" id="spinner">
                            <svg aria-hidden="true"
                                class="w-5 h-5 mx-auto text-center text-gray-200 animate-spin fill-primary"
                                viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z"
                                    fill="currentColor" />
                                <path
                                    d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z"
                                    fill="currentFill" />
                            </svg>
                        </div>
                        <div id="text">
                            @lang('lang.Search')
                        </div>
                    </button>
                    </div>
                    <div class="button ">
                     <a href="#">
                        <button  class="bg-green-700 text-white py-2 px-6 my-6 rounded-[4px]  mx-6  uaddBtn  font-semibold "
                        name="sumbit" id="btndata">
                        <div class=" text-center hidden" id="spinner">
                            <svg aria-hidden="true"
                                class="w-5 h-5 mx-auto text-center text-gray-200 animate-spin fill-primary"
                                viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z"
                                    fill="currentColor" />
                                <path
                                    d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z"
                                    fill="currentFill" />
                            </svg>
                        </div>
                        <div id="text">
                            @lang('lang.Clear')
                        </div>
                    </button>
                     </a>
                    </div>
                    <div class="button1">
                       {{-- <a href="#"> --}}
                        <button data-modal-target="doctoresmodal"
                        data-modal-toggle="doctoresmodal" class="bg-green-700  text-white py-2 px-6 my-6 rounded-[4px]  mx-6  uaddBtn  font-semibold "
                        name="sumbit" id="btndata">
                        <div class=" text-center hidden" id="spinner">
                            <svg aria-hidden="true"
                                class="w-5 h-5 mx-auto text-center text-gray-200 animate-spin fill-primary"
                                viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z"
                                    fill="currentColor" />
                                <path
                                    d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z"
                                    fill="currentFill" />
                            </svg>
                        </div>
                        <div id="text">
                            @lang('lang.Register')
                        </div>
                    </button>
                       {{-- </a> --}}
                    </div>
                </div>
            </form>
            <div class="formdiv1">
                <div class="flex flex-col overflow-x-auto w-full">
                    <div class="sm:-mx-6 lg:-mx-8">
                      <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                        <div class="overflow-x-auto">
                            <table id="datatable">
                                <thead class="py-6 bg-primary text-white text-center">
                                    <tr>
                                        <th class="whitespace-nowrap">@lang('lang.STN')</th>
                                        <th class="whitespace-nowrap">@lang('lang.Name')</th>
                                        <th class="whitespace-nowrap">@lang('lang.Email')</th>
                                        <th class="whitespace-nowrap">@lang('lang.Phone_No')</th>
                                        <th class="whitespace-nowrap">@lang('lang.Age')</th>
                                        <th class="flex  justify-center">@lang('lang.Action')</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($fetch as $fetch)
                                        <tr class="pt-4">
                                            <th>{{ $loop->iteration }}</th>
                                            <td>{{ $fetch->fname }}</td>
                                            <td>{{ $fetch->email }}</td>
                                            <td>{{ $fetch->phone }}</td>
                                            <td>{{ $fetch->age }}</td>
                                            <td>
                                                <div class="flex gap-5  items-center justify-center">

                                                        <button class="viewpatient  cursor-pointer   md:w-full" data-patientid="{{$fetch->id}}" ><img class="ms-10" width="30px"
                                                                src="{{ asset('images/icons/Vector (2).jpg') }}"
                                                                alt="update"></button>

                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
            </div>
        </div>
    </div>





    <div id="doctoresmodal" data-modal-backdrop="static"
    class="hidden overflow-y-auto overflow-x-hidden fixed top-0  left-0 z-50 justify-center  w-full md:inset-0 h-[calc(100%-1rem)] max-h-full ">
    <div class="relative p-4 w-full   max-w-6xl max-h-full ">
        {{-- <form method="POST" action="/addDoctors">
            @csrf --}}
            <div class="relative bg-white shadow-dark rounded-lg  dark:bg-gray-700  ">
                <div class="flex items-center   justify-start  p-5  rounded-t dark:border-gray-600 bg-primary">
                    <h3 class="text-xl font-semibold text-white ">
                        @lang('lang.Add Doctor')
                    </h3>
                    <button type="button"
                        class=" absolute right-2 text-white bg-transparent rounded-lg text-sm w-8 h-8 ms-auto "
                        data-modal-hide="doctoresmodal">
                        <svg class="w-4 h-4 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                    </button>
                </div>
                <div>
                    <h1 class="font-bold mx-6 mt-2">Personal information</h1>
                </div>
              <form action="#">
                <label for="">
                    mvvvvv
                </label>
              </form>
                </div>
            </div>
    </div>
</div>

@include('layouts.footer')
<script>
    $('.viewpatient').click(function() {
        console.log("ghgh");
            var patientid = $(this).attr('data-patientid');
            var url = "/fetchpatient/" + patientid;
            console.log(patientid)
            $.ajax({
                type: "GET",
                url: url,
                dataType: "json",
                success: function(response) {
                                    var patients = response.patients;

                    $('#patientname').text(patients.fname);
                    $('#patientlname').text(patients.l_name);
                    $('#patientage').text(patients.datebirth);
                    $('#patientdate').text(patients.age);
                    $('#patientgender').text(patients.gender);
                    $('#patientcnic').text(patients.cnic);
                    $('#patientrelation').text(patients.relation);
                    $('#patientidrelation').text(patients.f_h_name);
                    $('#patientblood').text(patients.billing_group);
                    $('#patientphone').text(patients.phone);
                    $('#patientemail').text(patients.email);
                    $('#patientcity').text(patients.city);
                    $('#patientaddress').text(patients.address);

                },
            });
        });
        function showAlert() {
    var myText = "Are You sure delete this data";
    alert (myText);


  }
</script>
