@include('layouts.header')
@include('layouts.nav')
<div class="md:mx-4 mt-12">
    <div>
        <h1 class=" font-semibold text-2xl ">@lang('lang.All Patient')</h1>
    </div>
    <div class="shadow-dark mt-3  rounded-xl pt-8  bg-white">
        <div>
            <div class="flex justify-end sm:justify-between  items-center px-[20px] mb-3">
                <h3 class="text-[20px] text-black hidden sm:block">@lang('lang.Patient List')</h3>
                <div>

                    <button data-modal-target="addcustomermodal" data-modal-toggle="addcustomermodal"
                        class="bg-primary cursor-pointer text-white h-12 px-5 rounded-[6px]  shadow-sm font-semibold ">+
                        @lang('lang.Add Patient')</button>
                </div>
            </div>
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

                                        <h1>
                                            <button updateId="{{ $fetch->id }}"
                                                data-modal-target="updatecustomermodal"
                                                data-modal-toggle="updatecustomermodal"
                                                class=" updateBtn cursor-pointer   md:w-full"><img width="30px"
                                                    src="{{ asset('images/icons/edit.svg') }}" alt="update"></button>
                                        </h1>

                                        <a href="{{ route('deletestaff', $fetch->id) }}" class="w-[30px]">
                                            <button class="  cursor-pointer   md:w-full" onclick="showAlert(gg)"><img
                                                    width="30px" src="{{ asset('images/icons/delete.svg') }}"
                                                    alt="update"></button>
                                        </a>
                                        <a href="{{ route('view', $fetch->id) }}" class="w-[30px]">
                                            <button class="  cursor-pointer   md:w-full"><img width="30px"
                                                    src="{{ asset('images/icons/Vector (2).jpg') }}"
                                                    alt="update"></button>
                                        </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>







{{-- ----------------------- ============ update  customer modal  =========== ----------------- --}}
<div id="updatecustomermodal" data-modal-backdrop="static"
    class="hidden overflow-y-auto overflow-x-hidden fixed top-0  left-0 z-50 justify-center  w-full md:inset-0 h-[calc(100%-1rem)] max-h-full ">
    <div class="relative p-4 w-full   max-w-6xl max-h-full">
        <form id="form-control" method="POST" class="update_form" action="">
            @csrf
            <div class="relative bg-white shadow-dark rounded-lg  dark:bg-gray-700  ">
                <div class="flex items-center   justify-start  p-5  rounded-t dark:border-gray-600 bg-primary">
                    <h3 class="text-xl font-semibold text-white ">
                        @lang('lang.Patient Registration')
                    </h3>
                    <button type="button"
                        class=" absolute right-2 text-white bg-transparent rounded-lg text-sm w-8 h-8 ms-auto "
                        data-modal-hide="updatecustomermodal">
                        <svg class="w-4 h-4 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                    </button>
                </div>
                <div>
                    <h1 class="font-bold mx-6 mt-5 mb-6">Change Patient information</h1>
                </div>
                <div class="grid md:grid-cols-3 gap-6 mx-6 ">
                    <div>
                        <label class="text-[14px] font-bold" for="fullName">@lang('lang.First Name')</label>
                        <input type="text" required
                            class="w-full border-[#DEE2E6] rounded-[4px] focus:border-primary   h-[40px] text-[14px]"
                            name="fname" id="fname" placeholder="@lang('lang.Name Here')"
                            value="{{ isset($fetch->fname) ? $fetch->fname : '' }}">
                    </div>
                    <div>
                        <label class="text-[14px] font-bold" for="lastname">@lang('lang.Last Name')</label>
                        <input type="text" required
                            class="w-full border-[#DEE2E6] rounded-[4px] focus:border-primary   h-[40px] text-[14px]"
                            name="l_name" id="l_name" placeholder="@lang('lang.Last Name')"
                            value="{{ isset($fetch->l_name) ? $fetch->l_name : '' }}">
                    </div>
                    <div>
                        <label class="text-[14px] font-bold" for="Date of brith">
                            @lang('lang.Date of brith')</label>
                        <input type="date"
                            class="w-full border-[#DEE2E6] rounded-[4px] focus:border-primary   h-[40px] text-[14px]"
                            name="datebirth" id="datebirth" placeholder="@lang('lang.Date of brith')"
                            value="{{ isset($fetch->datebirth) ? $fetch->datebirth : '' }}">

                    </div>
                </div>

                {{-- lableno2 --}}
                <div class="grid md:grid-cols-3 gap-6 mx-6 my-2">
                    <div>
                        <label class="text-[14px] font-bold" for="age">@lang('lang.Age')</label>
                        <input type="text" required
                            class="w-full border-[#DEE2E6] rounded-[4px] focus:border-primary   h-[40px] text-[14px]"
                            name="age" id="age" placeholder=" @lang('lang.Age')"
                            value="{{ isset($fetch->age) ? $fetch->age : '' }}">
                    </div>
                    <div>
                        <label class="text-[14px] font-bold" for="gender">@lang('lang.Gender')</label>
                        <input type="text" required
                            class="w-full border-[#DEE2E6] rounded-[4px] focus:border-primary   h-[40px] text-[14px]"
                            name="gender" id="gender" placeholder=" @lang('lang.Gender Here')"
                            value="{{ isset($fetch->gender) ? $fetch->gender : '' }}">
                    </div>
                    <div>
                        <label class="text-[14px] font-bold" for="CNIC">@lang('lang.CNIC')</label>
                        <input type="text"
                            class="w-full border-[#DEE2E6] rounded-[4px] focus:border-primary   h-[40px] text-[14px]"
                            name="cnic" id="cnic" placeholder=" @lang('lang.CNIC Here')"
                            value="{{ isset($fetch->cnic) ? $fetch->cnic : '' }}">

                    </div>
                </div>

                {{-- lableno2 --}}
                <div class="grid md:grid-cols-3 gap-6 mx-6 my-2">
                    {{-- <div>
                    <label class="text-[14px] font-bold" for="Raletion">@lang('lang.Relation')</label>
                    <input type="text" required
                        class="w-full border-[#DEE2E6] rounded-[4px] focus:border-primary   h-[40px] text-[14px]"
                        name="Relation" id="Relation" placeholder=" @lang('lang.Relation')">
                </div> --}}
                    <div>
                        <label for="Relation" class="text-[14px] font-bold">Relation</label>
                        <select name="relation" value="" id="relation_1">
                            <option value="Relation">Relation </option>
                            <option value="Father">Father</option>
                            <option value="Mother">Mother</option>
                            <option value="Sister">Sister</option>
                            <option value="Grandfather">Grandfather</option>
                            <option value="GrandMother">GrandMother</option>
                            <option value="Brother">Brother</option>
                        </select>
                    </div>
                    <div>
                        <label class="text-[14px] font-bold" for="F/H Name">@lang('lang.Father/Husband Name')</label>
                        <input type="text" required
                            class="w-full border-[#DEE2E6] rounded-[4px] focus:border-primary   h-[40px] text-[14px]"
                            name="f_h_name" id="fhname" placeholder=" @lang('lang.Father/Husband Name')"
                            value="{{ isset($fetch->f_h_name) ? $fetch->f_h_name : '' }}">
                    </div>

                    <div>
                        <label for="Billing Group" class="text-[14px] font-bold">@lang('lang.Blood Group')</label>
                        <select name="billing_group" value="" id="billing group_1">
                            <option value="Blood Group">Blood Group </option>
                            <option value="A Postive">Anegative</option>
                            <option value="B Postive">A positive</option>
                            <option value="A B Postive">B negative</option>
                            <option value="A Postive">B positive</option>
                            <option value="B Postive">AB negative</option>
                            <option value="A B Postive">AB positive</option>
                        </select>
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
                            value="{{ isset($fetch->phone) ? $fetch->phone : '' }}">
                    </div>
                    <div>
                        <label class="text-[14px] font-bold" for="email">@lang('lang.Email')</label>
                        <input type="email" required
                            class="w-full border-[#DEE2E6] rounded-[4px] focus:border-primary   h-[40px] text-[14px]"
                            name="email" id="email" placeholder=" @lang('lang.Email Here')"
                            value="{{ isset($fetch->email) ? $fetch->email : '' }}">
                    </div>
                    <div>
                        <label class="text-[14px] font-bold" for="city">@lang('lang.City')</label>
                        <input type="text"
                            class="w-full border-[#DEE2E6] rounded-[4px] focus:border-primary   h-[40px] text-[14px]"
                            name="city" id="city" placeholder=" @lang('lang.City Here')"
                            value="{{ isset($fetch->city) ? $fetch->city : '' }}">

                    </div>
                </div>

                {{-- contact_address --}}
                <div class="mt-2  mx-6">
                    <label class="text-[14px] font-bold" for="Address">@lang('lang.Patient Address')</label>
                    <textarea name="address" value="{{ isset($fetch->address) ? $fetch->address : '' }}" id="address"
                        class="w-full h-12  border-[#DEE2E6] rounded-[4px] focus:border-primary text-[14px] "
                        placeholder="@lang('lang.Address_Here')"></textarea>
                </div>
                {{-- ------- buttons sectionn ------- --}}
                <div class="flex justify-end ">
                    <a href="{{ route('view', isset($fetch->id) ? $fetch->id : '') }}"
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

                    <button class="bg-green-700 text-white py-2 px-6 my-4 rounded-[4px]  mx-6 uaddBtn  font-semibold "
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




















{{-- ============ add  customer modal  =========== --}}
<div id="addcustomermodal" data-modal-backdrop="static"
    class="hidden overflow-y-auto overflow-x-hidden fixed top-0  left-0 z-50 justify-center  w-full md:inset-0 h-[calc(100%-1rem)] max-h-full ">
    <div class="relative p-4 w-full   max-w-6xl max-h-full ">
        <form id="form-control" method="POST" action="/addPatient">
            @csrf
            <div class="relative bg-white shadow-dark rounded-lg  dark:bg-gray-700  ">
                <div class="flex items-center   justify-start  p-5  rounded-t dark:border-gray-600 bg-primary">
                    <h3 class="text-xl font-semibold text-white ">
                        @lang('lang.Patient Registration')
                    </h3>
                    <button type="button"
                        class=" absolute right-2 text-white bg-transparent rounded-lg text-sm w-8 h-8 ms-auto "
                        data-modal-hide="addcustomermodal">
                        <svg class="w-4 h-4 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                    </button>
                </div>
                <div>
                    <h1 class="font-bold mx-6 mt-2">Patient information</h1>
                </div>
                <div class="grid md:grid-cols-3 gap-6 mx-6 ">
                    <div>
                        <label class="text-[14px] font-bold" for="fullName">@lang('lang.First Name')</label>
                        <input type="text" required
                            class="w-full border-[#DEE2E6] rounded-[4px] focus:border-primary   h-[40px] text-[14px]"
                            name="fname" id="fname" placeholder="@lang('lang.Name Here')">
                    </div>
                    <div>
                        <label class="text-[14px] font-bold" for="lastname">@lang('lang.Last Name')</label>
                        <input type="text" required
                            class="w-full border-[#DEE2E6] rounded-[4px] focus:border-primary   h-[40px] text-[14px]"
                            name="l_name" id="L_Name" placeholder="@lang('lang.Last Name')">
                    </div>
                    <div>
                        <label class="text-[14px] font-bold" for="Date of brith">
                            @lang('lang.Date of brith')</label>
                        <input type="date"
                            class="w-full border-[#DEE2E6] rounded-[4px] focus:border-primary   h-[40px] text-[14px]"
                            name="datebirth" id="Datebirth" placeholder="@lang('lang.Date of brith')">

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
                        <label class="text-[14px] font-bold" for="CNIC">@lang('lang.CNIC')</label>
                        <input type="text"
                            class="w-full border-[#DEE2E6] rounded-[4px] focus:border-primary   h-[40px] text-[14px]"
                            name="cnic" id="cnic" placeholder=" @lang('lang.CNIC Here')">

                    </div>
                </div>

                {{-- lableno2 --}}
                <div class="grid md:grid-cols-3 gap-6 mx-6 my-2">
                    {{-- <div>
                    <label class="text-[14px] font-bold" for="Raletion">@lang('lang.Relation')</label>
                    <input type="text" required
                        class="w-full border-[#DEE2E6] rounded-[4px] focus:border-primary   h-[40px] text-[14px]"
                        name="Relation" id="Relation" placeholder=" @lang('lang.Relation')">
                </div> --}}
                    <div>
                        <label for="Relation" class="text-[14px] font-bold">Relation</label>
                        <select name="relation" id="Relation">
                            <option value="Relation">Relation </option>
                            <option value="Father">Father</option>
                            <option value="Mother">Mother</option>
                            <option value="Sister">Sister</option>
                            <option value="Grandfather">Grandfather</option>
                            <option value="GrandMother">GrandMother</option>
                            <option value="Brother">Brother</option>
                        </select>
                    </div>
                    <div>
                        <label class="text-[14px] font-bold" for="F/H Name">@lang('lang.Father/Husband Name')</label>
                        <input type="text" required
                            class="w-full border-[#DEE2E6] rounded-[4px] focus:border-primary   h-[40px] text-[14px]"
                            name="f_h_name" id="F/H Name" placeholder=" @lang('lang.Father/Husband Name')">
                    </div>

                    <div>
                        <label for="Billing Group" class="text-[14px] font-bold">@lang('lang.Blood Group')</label>
                        <select name="billing_group" id="Billing Group">
                            <option value="Blood Group">Blood Group </option>
                            <option value="A Postive">Anegative</option>
                            <option value="B Postive">A positive</option>
                            <option value="A B Postive">B negative</option>
                            <option value="A Postive">B positive</option>
                            <option value="B Postive">AB negative</option>
                            <option value="A B Postive">AB positive</option>

                        </select>
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
                            name="city" id="city" placeholder=" @lang('lang.City Here')" required>

                    </div>
                </div>

                {{-- contact_address --}}
                <div class="mt-2  mx-6">
                    <label class="text-[14px] font-bold" for="Address">@lang('lang.Patient Address')</label>
                    <textarea name="address" required id="Address"
                        class="w-full h-12  border-[#DEE2E6] rounded-[4px] focus:border-primary text-[14px] "
                        placeholder="@lang('lang.Address_Here')"></textarea>
                </div>
                {{-- buttons sectionn --}}
                <div class="flex justify-end ">
                    {{-- <a href="#">
                        <button
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
                        </button>
                    </a> --}}

                    <button class="bg-green-700 text-white py-2 px-6 my-4 rounded-[4px]  mx-6 uaddBtn  font-semibold "
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
                            @lang('lang.Register')
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
        var url = "/fetchpatient/" + updateId;
        console.log(updateId)
        $.ajax({
            type: "GET",
            url: url,
            dataType: "json",
            success: function(response) {
                var patients = response.patients;
                $('#update_id').val(patients.id);
                $('#fname').val(patients.fname);
                $('#l_name').val(patients.l_name);
                $('#datebirth').val(patients.datebirth);
                $('#age').val(patients.age);
                $('#gender').val(patients.gender);
                $('#cnic').val(patients.cnic);
                $('#relation_1').val(patients.relation_1);
                $('#fhname').val(patients.f_h_name);
                $('#billig_group').val(patients.billing_group);
                $('#phone').val(patients.phone);
                $('#email').val(patients.email);
                $('#city').val(patients.city);
                $('#address').val(patients.address);
                $('.update_form').attr('action', '/datapatient/' + patients.id);
            },
        });
    });

    function showAlert() {
        var myText = "Are You sure delete this data";
        alert(myText);


    }
</script>
