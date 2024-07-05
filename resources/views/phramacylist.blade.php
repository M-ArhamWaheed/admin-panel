<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>Document</title>
</head>
<body class="body">

    <div class="div">
      <img class="logo" src="{{asset('images/icons/Vector (1).jpg')}}" alt="image">
      <h1 class="ho">Hospital Name</h1>
      <h2 class="city">Hospital city,Province,Country <br> <span class="span">Phone 0412345678</span></h2>
      <h1 class="ho1"> Reg # HPTN-{{$phramacypage->id}}</h1>
      <p class="pat">Staff Details :-</p>
      <div class="maindiv">
        <div class="textdiv">
            <p class="se">Name</p>
            <p class="se">address</p>
            <p class="se">Phone</p>
            <p class="se">datebirth</p>
            <p class="se">license</p>
            <a href="{{route('pharmacyfetch')}}">
                <button class="btn">Back</button>
            </a>
        </div>
        <div class="contentdiv">
            <p class="se">{{$phramacypage->name}}</p>
            <p class="se">{{$phramacypage->gender}}</p>
            <p class="se">{{$phramacypage->age}}</p>
            <p class="se">{{$phramacypage->address}}</p>
            <p class="se">{{$phramacypage->phone}}</p>
            <p class="se">{{$phramacypage->datebirth}}</p>
            <p class="se">{{$phramacypage->license}}</p>
            {{-- <p class="se">{{$staffpage->m_school}}</p> --}}
                <button type="button" class="btn1" id="printData">Print</button>

        </div>
    </div>
    </div>

</body>

<script>
    let printData = document.getElementById('printData');
    printData.addEventListener('click' , ()=> {
        window.print();
    })

</script>
</html>
