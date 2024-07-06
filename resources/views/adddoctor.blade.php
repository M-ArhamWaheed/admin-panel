@include('layouts.header')
@include('layouts.nav')


<div class="md:mx-4 mt-12">
    <div>
        <h1 class=" font-semibold   text-2xl ">@lang('lang.All Doctor')</h1>
    </div>
    <div class="shadow-dark mt-3  rounded-xl pt-8  bg-white">
        <div>
            <div class="flex justify-end sm:justify-between  items-center px-[20px] mb-3">
                <h3 class="text-[20px] text-black hidden sm:block">@lang('lang.Doctor List')</h3>
                <div>
                    <button data-modal-target="doctoresmodal" data-modal-toggle="doctoresmodal"
                        class="bg-primary cursor-pointer text-white h-12 px-5 rounded-[6px]  shadow-sm font-semibold ">+
                        @lang('lang.Add Doctor')</button>
                </div>
            </div>
            <div class="overflow-x-auto">
                <table id="datatable">
                    <thead class="py-6 bg-primary text-white">
                        <tr>
                            <th class="whitespace-nowrap">@lang('lang.STN')</th>
                            <th class="whitespace-nowrap">@lang('lang.Name')</th>
                            <th class="whitespace-nowrap">@lang('lang.Email')</th>
                            <th class="whitespace-nowrap">@lang('lang.Phone_No')</th>
                            <th class="whitespace-nowrap">@lang('lang.age')</th>
                            <th class="flex  justify-center">@lang('lang.Action')</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($user as $user)
                            <tr class="pt-4">
                                <th>{{ $loop->iteration }}</th>
                                <td>{{ $user->name }}</td>
                                <td>{{ isset($user->l_name) ? $user->l_name : '' }}</td>
                                <td>{{ $user->phone }}</td>
                                <td>{{ $user->age }}</td>

                                <td>
                                    <div class="flex gap-7 items-center justify-center ">
                                        <h1>
                                            <button updateId="{{ $user->id }}" data-modal-target="newdoctormodal"
                                                data-modal-toggle="newdoctormodal"
                                                class=" updateBtn cursor-pointer   md:w-full"><img width="35px"
                                                    src="{{ asset('images/icons/edit.svg') }}" alt="update"></button>
                                        </h1>
                                        <a href="{{ route('deletedoc', $user->id) }}" class="w-[35px]">
                                            <button class=" updateBtn cursor-pointer   md:w-full" onclick="showAlert()" ><img width="35px"
                                                    src="{{ asset('images/icons/delete.svg') }}"
                                                    alt="update"></button>
                                        </a>
                                        <a href="{{ route('doctorpage', $user->id) }}" class="w-[35px]">
                                            <button class=" updateBtn cursor-pointer   md:w-full"><img width="35px"
                                                    src="{{ asset('images/icons/Vector (2).jpg') }}"
                                                    alt="update"></button>
                                        </a>
                                    </div>
                                </td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>






<div id="doctoresmodal" data-modal-backdrop="static"
    class="hidden overflow-y-auto overflow-x-hidden fixed top-0  left-0 z-50 justify-center  w-full md:inset-0 h-[calc(100%-1rem)] max-h-full ">
    <div class="relative p-4 w-full   max-w-6xl max-h-full ">
        <form method="POST" action="/addDoctors">
            @csrf
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
                <div class="grid md:grid-cols-3 gap-6 mx-6 ">
                    <div>
                        <label class="text-[14px] font-bold" for="fullName">@lang('lang.First Name')</label>
                        <input type="text" required
                            class="w-full border-[#DEE2E6] rounded-[4px] focus:border-primary   h-[40px] text-[14px]"
                            name="name" id="dname" placeholder=" @lang('lang.Name_Here')">
                    </div>
                    <div>
                        <label class="text-[14px] font-bold" for="lastname">@lang('lang.Last Name')</label>
                        <input type="text" required
                            class="w-full border-[#DEE2E6] rounded-[4px] focus:border-primary   h-[40px] text-[14px]"
                            name="l_name" id="l_name" placeholder="@lang('lang.Last Name')">
                    </div>
                    <div>
                        <label class="text-[14px] font-bold" for="Date of brith">
                            @lang('lang.Date of brith')</label>
                        <input type="date"
                            class="w-full border-[#DEE2E6] rounded-[4px] focus:border-primary   h-[40px] text-[14px]"
                            name="datebirth" id="datebirth" placeholder="@lang('lang.Date of brith')">

                    </div>
                </div>

                {{-- lableno2 --}}
                <div class="grid md:grid-cols-3 gap-6 mx-6 my-2">
                    <div>
                        <label class="text-[14px] font-bold" for="age">@lang('lang.Age')</label>
                        <input type="text" required
                            class="w-full border-[#DEE2E6] rounded-[4px] focus:border-primary   h-[40px] text-[14px]"
                            name="age" id="age" placeholder=" @lang('lang.Age')">
                    </div>
                    <div>
                        <label class="text-[14px] font-bold" for="gender">@lang('lang.Gender')</label>
                        <input type="text" required
                            class="w-full border-[#DEE2E6] rounded-[4px] focus:border-primary   h-[40px] text-[14px]"
                            name="gender" id="gender" placeholder=" @lang('lang.Gender Here')">
                    </div>
                    <div>
                        <label class="text-[14px] font-bold" for="specialist">@lang('lang.Specialist')</label>
                        <input type="text"
                            class="w-full border-[#DEE2E6] rounded-[4px] focus:border-primary   h-[40px] text-[14px]"
                            name="specialist" id="specialist" placeholder=" @lang('lang.Specialist Here')">

                    </div>
                </div>

                <div>
                    <h1 class="font-bold mx-6 mt-2">Contact information</h1>
                </div>
                {{-- contact --}}
                <div class="grid md:grid-cols-3 gap-6 mx-6 ">
                    <div>
                        <label class="text-[14px] font-bold" for="phone">@lang('lang.Contact')</label>
                        <input type="tel" required
                            class="w-full border-[#DEE2E6] rounded-[4px] focus:border-primary   h-[40px] text-[14px]"
                            name="phone" id="phone" placeholder=" @lang('lang.Contact Here')">
                    </div>
                    <div>
                        <label class="text-[14px] font-bold" for="email">@lang('lang.Email')</label>
                        <input type="email" required
                            class="w-full border-[#DEE2E6] rounded-[4px] focus:border-primary   h-[40px] text-[14px]"
                            name="email" id="email" placeholder=" @lang('lang.Email Here')">
                    </div>
                    <div>
                        <label class="text-[14px] font-bold" for="city">@lang('lang.City')</label>
                        <input type="text"
                            class="w-full border-[#DEE2E6] rounded-[4px] focus:border-primary   h-[40px] text-[14px]"
                            name="city" id="city" placeholder=" @lang('lang.City Here')">

                    </div>
                </div>
                {{-- contact_address --}}
                <div class="mt-2  mx-6">
                    <label class="text-[14px] font-bold" for="Address">@lang('lang.Address')</label>
                    <textarea name="address" id="address"
                        class="w-full h-12  border-[#DEE2E6] rounded-[4px] focus:border-primary text-[14px] "
                        placeholder="@lang('lang.Address_Here')"></textarea>
                </div>
                <div>
                    <h1 class="font-bold mx-6 mt-1">Medical License information</h1>
                </div>
                {{-- medical vocher --}}
                <div class="grid md:grid-cols-3 gap-6 mx-6 ">
                    <div>
                        <label class="text-[14px] font-bold" for="l_number">@lang('lang.License Number')</label>
                        <input type="text" required
                            class="w-full border-[#DEE2E6] rounded-[4px] focus:border-primary   h-[40px] text-[14px]"
                            name="l_number" id="l_number" placeholder="@lang('lang.License Number Here')">
                    </div>
                    <div>
                        <label class="text-[14px] font-bold" for="I_Authority">@lang('lang.Issuing Authority')</label>
                        <input type="text" required
                            class="w-full border-[#DEE2E6] rounded-[4px] focus:border-primary   h-[40px] text-[14px]"
                            name="i_Authority" id="I_Authority" placeholder=" @lang('lang.Issuing Authority')">
                    </div>
                    <div>
                        <label class="text-[14px] font-bold" for="Expiration">@lang('lang.Expiration Date')</label>
                        <input type="text"
                            class="w-full border-[#DEE2E6] rounded-[4px] focus:border-primary   h-[40px] text-[14px]"
                            name="expiration" id="expiration" placeholder=" @lang('lang.Expiration Here')">

                    </div>
                </div>
                <div>
                    <h1 class="font-bold mx-6 mt-1">Education & Traning</h1>
                </div>
                {{-- Education & traning --}}
                <div class="grid md:grid-cols-3 gap-6 mx-6 ">
                    <div>
                        <label class="text-[14px] font-bold" for="m_school">@lang('lang.Medical School')</label>
                        <input type="text" required
                            class="w-full border-[#DEE2E6] rounded-[4px] focus:border-primary   h-[40px] text-[14px]"
                            name="m_school" id="m_school" placeholder="@lang('lang.Medical School')">
                    </div>
                    <div>
                        <label class="text-[14px] font-bold" for="graduation">@lang('lang.Graduation Year')</label>
                        <input type="text" required
                            class="w-full border-[#DEE2E6] rounded-[4px] focus:border-primary   h-[40px] text-[14px]"
                            name="graduation" id="graduation" placeholder=" @lang('lang.Graduation Year')">
                    </div>
                    <div>
                        <label class="text-[14px] font-bold" for="Residency">@lang('lang.Residency')</label>
                        <input type="text"
                            class="w-full border-[#DEE2E6] rounded-[4px] focus:border-primary   h-[40px] text-[14px]"
                            name="residency" id="residency" placeholder=" @lang('lang.Residency Here')">

                    </div>
                </div>
                <h1 class="font-bold mx-6 mt-3">Additional Note/Comment</h1>
                {{-- comments & addition --}}
                <div class="mt-2  mx-6">

                    <textarea name="message" id="message"
                        class="w-full h-24  border-[#DEE2E6] rounded-[4px] focus:border-primary text-[14px] "
                        placeholder="@lang('lang.Message Here')"></textarea>
                </div>
                <div class="flex justify-end ">

                    <button class="bg-primary text-white py-2 px-6 my-4 rounded-[4px]  mx-6 uaddBtn  font-semibold "
                        name="sumbit" id="addBtn">
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
                            @lang('lang.Add')
                        </div>

                    </button>
                </div>
            </div>
        </form>
        <div>

        </div>

    </div>
</div>



{{-- ============update add doctor modal  =========== --}}
<div id="newdoctormodal" data-modal-backdrop="static"
    class="hidden overflow-y-auto overflow-x-hidden fixed top-0  left-0 z-50 justify-center  w-full md:inset-0 h-[calc(100%-1rem)] max-h-full ">
    <div class="relative p-4 w-full   max-w-6xl max-h-full ">
        <form id="form-control" method="POST" class="update_doctor" action="">
            @csrf
            <div class="relative bg-white shadow-dark rounded-lg  dark:bg-gray-700  ">
                <div class="flex items-center   justify-start  p-5  rounded-t dark:border-gray-600 bg-primary">
                    <h3 class="text-xl font-semibold text-white ">
                        @lang('lang.Update Doctor information')
                    </h3>
                    <button type="button"
                        class=" absolute right-2 text-white bg-transparent rounded-lg text-sm w-8 h-8 ms-auto "
                        data-modal-hide="newdoctormodal">
                        <svg class="w-4 h-4 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                    </button>
                </div>
                <div>
                    <h1 class="font-bold mx-6 mt-2">Personal information</h1>
                </div>
                <div class="grid md:grid-cols-3 gap-6 mx-6 ">
                    <div>
                        <label class="text-[14px] font-bold" for="fullName">@lang('lang.First Name')</label>
                        <input type="text" required
                            class="w-full border-[#DEE2E6] rounded-[4px] focus:border-primary   h-[40px] text-[14px]"
                            name="name" id="fullName" placeholder=" @lang('lang.Name_Here')"
                            value="{{ isset($user->name) ? $user->name : '' }}">
                    </div>
                    <div>
                        <label class="text-[14px] font-bold" for="lastname">@lang('lang.Last Name')</label>
                        <input type="text" required
                            class="w-full border-[#DEE2E6] rounded-[4px] focus:border-primary   h-[40px] text-[14px]"
                            name="l_name" id="l_name" placeholder="@lang('lang.Last Name')" value="{{ isset($user->l_name) ? $user->l_name : '' }}">
                    </div>
                    <div>
                        <label class="text-[14px] font-bold" for="Date of brith">
                            @lang('lang.Date of brith')</label>
                        <input type="date"
                            class="w-full border-[#DEE2E6] rounded-[4px] focus:border-primary   h-[40px] text-[14px]"
                            name="datebirth" id="datebirth" placeholder="@lang('lang.Date of brith')"
                            value="{{ isset($user->datebirth) ? $user->datebirth : '' }}">

                    </div>
                </div>

                {{-- lableno2 --}}
                <div class="grid md:grid-cols-3 gap-6 mx-6 my-2">
                    <div>
                        <label class="text-[14px] font-bold" for="age">@lang('lang.Age')</label>
                        <input type="text" required
                            class="w-full border-[#DEE2E6] rounded-[4px] focus:border-primary   h-[40px] text-[14px]"
                            name="age" id="age" placeholder=" @lang('lang.Age')"
                            value="{{ isset($user->age) ? $user->age : '' }}">
                    </div>
                    <div>
                        <label class="text-[14px] font-bold" for="gender">@lang('lang.Gender')</label>
                        <input type="text" required
                            class="w-full border-[#DEE2E6] rounded-[4px] focus:border-primary   h-[40px] text-[14px]"
                            name="gender" id="gender" placeholder=" @lang('lang.Gender Here')"
                            value="{{ isset($user->gender) ? $user->gender : '' }}">
                    </div>
                    <div>
                        <label class="text-[14px] font-bold" for="specialist">@lang('lang.Specialist')</label>
                        <input type="text"
                            class="w-full border-[#DEE2E6] rounded-[4px] focus:border-primary   h-[40px] text-[14px]"
                            name="specialist" id="specialist" placeholder=" @lang('lang.Specialist Here')"
                            value="{{ isset($user->specialist) ? $user->specialist : '' }}">

                    </div>
                </div>

                <div>
                    <h1 class="font-bold mx-6 mt-2">Contact information</h1>
                </div>
                {{-- contact --}}
                <div class="grid md:grid-cols-3 gap-6 mx-6 ">
                    <div>
                        <label class="text-[14px] font-bold" for="phone">@lang('lang.Contact')</label>
                        <input type="tel" required
                            class="w-full border-[#DEE2E6] rounded-[4px] focus:border-primary   h-[40px] text-[14px]"
                            name="phone" id="phone" placeholder=" @lang('lang.Contact Here')"
                            value="{{ isset($user->phone) ? $user->phone : '' }}">
                    </div>
                    <div>
                        <label class="text-[14px] font-bold" for="email">@lang('lang.Email')</label>
                        <input type="email" required
                            class="w-full border-[#DEE2E6] rounded-[4px] focus:border-primary   h-[40px] text-[14px]"
                            name="email" id="email" placeholder=" @lang('lang.Email Here')"
                            value="{{ isset($user->email) ? $user->email : '' }}">
                    </div>
                    <div>
                        <label class="text-[14px] font-bold" for="city">@lang('lang.City')</label>
                        <input type="text"
                            class="w-full border-[#DEE2E6] rounded-[4px] focus:border-primary   h-[40px] text-[14px]"
                            name="city" id="city" placeholder=" @lang('lang.City Here')"
                            value="{{ isset($user->city) ? $user->city : '' }}">

                    </div>
                </div>
                {{-- contact_address --}}
                <div class="mt-2  mx-6">
                    <label class="text-[14px] font-bold" for="Address">@lang('lang.Address')</label>
                    <textarea name="address" id="address" value="{{ isset($user->address) ? $user->address : '' }}"
                        class="w-full h-12  border-[#DEE2E6] rounded-[4px] focus:border-primary text-[14px] "
                        placeholder="@lang('lang.Address_Here')"></textarea>
                </div>
                <div>
                    <h1 class="font-bold mx-6 mt-1">Medical License information</h1>
                </div>
                {{-- medical vocher --}}
                <div class="grid md:grid-cols-3 gap-6 mx-6 ">
                    <div>
                        <label class="text-[14px] font-bold" for="l_number">@lang('lang.License Number')</label>
                        <input type="text" required
                            class="w-full border-[#DEE2E6] rounded-[4px] focus:border-primary   h-[40px] text-[14px]"
                            name="l_number" id="l_number" placeholder="@lang('lang.License Number Here')"
                            value="{{ isset($user->l_number) ? $user->l_number : '' }}">
                    </div>
                    <div>
                        <label class="text-[14px] font-bold" for="I_Authority">@lang('lang.Issuing Authority')</label>
                        <input type="text" required
                            class="w-full border-[#DEE2E6] rounded-[4px] focus:border-primary   h-[40px] text-[14px]"
                            name="i_Authority" id="i_Authority" placeholder=" @lang('lang.Issuing Authority')"
                            value="{{ isset($user->i_Authority) ? $user->i_Authority : '' }}">
                    </div>
                    <div>
                        <label class="text-[14px] font-bold" for="Expiration">@lang('lang.Expiration Date')</label>
                        <input type="text"
                            class="w-full border-[#DEE2E6] rounded-[4px] focus:border-primary   h-[40px] text-[14px]"
                            name="expiration" id="expiration" placeholder=" @lang('lang.Expiration Here')"
                            value="{{ isset($user->expiration) ? $user->expiration : '' }}">

                    </div>
                </div>
                <div>
                    <h1 class="font-bold mx-6 mt-1">Education & Traning</h1>
                </div>
                {{-- Education & traning --}}
                <div class="grid md:grid-cols-3 gap-6 mx-6 ">
                    <div>
                        <label class="text-[14px] font-bold" for="m_school">@lang('lang.Medical School')</label>
                        <input type="text" required
                            class="w-full border-[#DEE2E6] rounded-[4px] focus:border-primary   h-[40px] text-[14px]"
                            name="m_school" id="m_school" placeholder="@lang('lang.Medical School')"
                            value="{{ isset($user->m_school) ? $user->m_school : '' }}">
                    </div>
                    <div>
                        <label class="text-[14px] font-bold" for="graduation">@lang('lang.Graduation Year')</label>
                        <input type="text" required
                            class="w-full border-[#DEE2E6] rounded-[4px] focus:border-primary   h-[40px] text-[14px]"
                            name="graduation" id="graduation" placeholder=" @lang('lang.Graduation Year')"
                            value="{{ isset($user->graduction) ? $user->graduction : '' }}">
                    </div>
                    <div>
                        <label class="text-[14px] font-bold" for="Residency">@lang('lang.Residency')</label>
                        <input type="text"
                            class="w-full border-[#DEE2E6] rounded-[4px] focus:border-primary   h-[40px] text-[14px]"
                            name="residency" id="residency" placeholder=" @lang('lang.Residency Here')"
                            value="{{ isset($user->residency) ? $user->residency : '' }}">

                    </div>
                </div>
                <h1 class="font-bold mx-6 mt-3">Additional Note/Comment</h1>
                {{-- comments & addition --}}
                <div class="mt-2  mx-6">

                    <textarea name="message" id="message"
                        class="w-full h-24  border-[#DEE2E6] rounded-[4px] focus:border-primary text-[14px] "
                        placeholder="@lang('lang.Message Here')" value="{{ isset($user->message) ? $user->message : '' }}"></textarea>
                </div>
                <div class="flex justify-end ">
                    <div class="flex justify-end ">
                        <a href="#"
                            class="bg-[#6581EF] text-white py-2 px-6 my-4 rounded-[4px]  mx-6 uaddBtn  font-semibold "
                            name="sumbit" id="addBtn">
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
                                @lang('lang.Register & Token Print')
                            </div>
                        </a>
                        <button
                            class="bg-primary text-white py-2 px-6 my-4 rounded-[4px]  mx-6 uaddBtn  font-semibold "
                            name="save" id="addBtn">
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
                                @lang('lang.Update Data')
                            </div>

                        </button>
                    </div>
                </div>
        </form>
        <div>

        </div>

    </div>
</div>










@include('layouts.footer')



<script>
    $('.updateBtn').click(function() {
        console.log("ghgh");
        var updateId = $(this).attr('updateId');
        var url = "/fetchdoctor/" + updateId;
        $.ajax({
            type: "GET",
            url: url,
            dataType: "json",
            success: function(response) {
                var doctore = response.doctore;
                $('#update_id').val(doctore.id);
                $('#fullName').val(doctore.name);
                $('#l_name').val(doctore.l_name);
                $('#datebirth').val(doctore.datebirth);
                $('#age').val(doctore.age);
                $('#gender').val(doctore.gender);
                $('#specialist').val(doctore.specialist);
                $('#phone').val(doctore.phone);
                $('#email').val(doctore.email);
                $('#city').val(doctore.city);
                $('#address').val(doctore.address);
                $('#l_number').val(doctore.l_number);
                $('#i_Authority').val(doctore.i_Authority);
                $('#expiration').val(doctore.expiration);
                $('#m_school').val(doctore.m_school);
                $('#graduation').val(doctore.graduation);
                $('#residency').val(doctore.residency);
                $('#message').val(doctore.message);
                $('.update_doctor').attr('action', '/update_data/' + doctore.id);
            },
        });
    });
        function showAlert() {
    var myText = "Are You sure delete this data";
    alert (myText);
  }
</script>
