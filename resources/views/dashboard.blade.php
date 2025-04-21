<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard - Smart city</title>
    {{-- Linking public/css/custom.css --}}
    <link rel="stylesheet" href="{{ asset('css/myapp.css') }}"> 

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">




</head>
<body>
    <h1>Dashboard</h1>
    <div class="flex-container">
        <div class="flex-item half-width">
          <h1>City map</h1>
          <img src="{{asset('images/city-map.svg')}}" alt="">
        </div>
        <div class="flex-item half-width">
          <h2>Controls</h2>
          

          <div style="margin-top: 20px; border: 1px solid #eee; padding: 15px; border-radius: 8px; background-color: #f9f9f9;">
            <h3 style="margin-top: 0;">Water Tank</h3>
           

            <div class="progress">
              <div  id="waterLevelFill1" class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
            </div>

            <p>Level: <span id="waterTankLevel1">0%</span></p>

            <button onclick="updateWaterTankLevel(1)" style="padding: 10px 20px; background-color: #007bff; color: white; border: none; border-radius: 5px; cursor: pointer; font-size: 16px; transition: background-color 0.3s ease;">Start Pump</button>



        </div>



        </div>
    </div>

    <script>
      function updateWaterTankLevel(id){
        console.log("button clicked")

        var currentWaterLevel = document.getElementById(`waterTankLevel1`).textContent
              
        for (let i = 0; i < 100; i++) {
          text += cars[i] + "<br>";
        } 
      }


      document.addEventListener('DOMContentLoaded', function() {
      // Replace 'your_api_endpoint_here' with the actual URL of your API
      fetch('http://127.0.0.1:8000/get-all-resource-info')
          .then(response => {
              if (!response.ok) {
                  throw new Error(`HTTP error! status: ${response.status}`);
              }
              return response.json();
          })
          .then(data => {
              console.log('Data loaded:', data.water_tanks[0].water_level);
              
              const waterLevel1 = JSON.stringify(data.water_tanks[0].water_level);
              document.getElementById(`waterTankLevel1`).textContent = waterLevel1
              document.getElementById(`waterLevelFill1`).style.width = `${waterLevel1}%`


              

          })
          .catch(error => {
              // Handle any errors that occurred during the fetch
              console.error('Error fetching data:', error);
          });
      });
       
   

    </script>

    <script src="{{ asset('js/myapp.js') }}"></script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>