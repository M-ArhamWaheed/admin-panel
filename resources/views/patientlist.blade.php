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
            <h1 class="ho1"> Reg # HPTN-{{$view->id}}</h1>
            <p class="pat">Patient Details</p>
            <div class="maindiv">
              <div class="textdiv">
                  <p class="se">Email</p>
                  <p class="se">Relation to Applicant</p>
                  <p class="se">Gender</p>
                  <p class="se">Age</p>
                  <p class="se">F/H Name</p>
                  <p class="se">Phone</p>
                  <p class="se">CNIC</p>
                  <p class="se">Billing Group</p>
                  <a href="{{route('patientfetch')}}">
                      <button class="btn">Back</button>
                  </a>
              </div>
              <div class="contentdiv">
                  <p class="se">{{$view->email}}</p>
                  <p class="se">{{$view->fname}}</p>
                  <p class="se">{{$view->gender}}</p>
                  <p class="se">{{$view->age}}</p>
                  <p class="se">{{$view->f_h_name}}</p>
                  <p class="se">{{$view->phone}}</p>
                  <p class="se">{{$view->cnic}}</p>
                  <p class="se">{{$view->billing_group}}</p>

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
