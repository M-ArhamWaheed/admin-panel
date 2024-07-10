@include('layouts.header')
@include('layouts.nav')
<div class="md:mx-4 mt-12">
    <div>
        <h1 class=" font-semibold text-2xl ">@lang('lang.Add Phramacy')</h1>
    </div>
    <div class="shadow-dark mt-3  rounded-xl pt-8  bg-white">
        <div>
            <div class="flex justify-end sm:justify-between  items-center px-[20px] mb-3">
                <h3 class="text-[20px] text-black hidden sm:block">@lang('lang.Phramacy List')</h3>
                <div>

                    <button data-modal-target="addcustomermodal" data-modal-toggle="addcustomermodal"
                        class="bg-primary cursor-pointer text-white h-12 px-5 rounded-[6px]  shadow-sm font-semibold ">+
                        @lang('lang.Add Phramacy')</button>
                </div>
            </div>


        </div>
    </div>
</div>


@include('layouts.footer')
{{-- <script>
    $('.updateBtn').click(function() {
        console.log("ghgh");
        var updateId = $(this).attr('updateId');
        var url = "/fetchdataphramacy/" + updateId;
        console.log(updateId)
        $.ajax({
            type: "GET",
            url: url,
            dataType: "json",
            success: function(response) {
                var phamacy = response.phamacy;
                $('#update_id').val(phamacy.id);
                $('#name').val(phamacy.name);
                $('#phone').val(phamacy.phone);
                $('#telephone').val(phamacy.telephone);
                $('#email').val(phamacy.email);
                $('#address').val(phamacy.address);
                $('#fname').val(phamacy.fname);
                $('#l_name').val(phamacy.l_name);
                $('#datebirth').val(phamacy.datebirth);
                $('#phoneno').val(phamacy.phoneno);
                $('#email').val(phamacy.email);
                $('#city').val(phamacy.city);
                $('#Addresses').val(phamacy.addresses);
                $('#license').val(phamacy.license);
                $('#work').val(phamacy.work);
                $('.update_phramcey').attr('action', '/phramacyupdate/' + phamacy.id);
            },
        });
    });

    function showAlert() {
        var myText = "Are You sure delete this data";
        alert(myText);


    }
</script> --}}
