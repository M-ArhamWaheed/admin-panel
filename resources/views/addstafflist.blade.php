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
      <h1 class="ho1"> Reg # HPTN-{{$staffpage->id}}</h1>
      <p class="pat">Staff Details :-</p>
      <div class="maindiv">
        <div class="textdiv">
            <p class="se">Name</p>
            <p class="se">Gender</p>
            <p class="se">Age</p>
            <p class="se">email</p>
            <p class="se">Phone</p>
            <p class="se">Graduation</p>
            <p class="se">Residency</p>
            <p class="se">city</p>
            <a href="{{route('addstafffetch')}}">
                <button class="btn">Back</button>
            </a>
        </div>
        <div class="contentdiv">
            <p class="se">{{$staffpage->name}}</p>
            <p class="se">{{$staffpage->gender}}</p>
            <p class="se">{{$staffpage->age}}</p>
            <p class="se">{{$staffpage->email}}</p>
            <p class="se">{{$staffpage->phone}}</p>
            <p class="se">{{$staffpage->graduation}}</p>
            <p class="se">{{$staffpage->residency}}</p>
            <p class="se">{{$staffpage->city}}</p>
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
