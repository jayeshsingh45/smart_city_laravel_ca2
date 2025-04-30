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

          {{-- ALL WATER TANKS --}}
          <div style="margin-top: 20px; border: 3px solid #3b3a3a; padding: 15px; border-radius: 8px; background-color: #f9f9f9;">
          
            {{-- WATER TANK 1 --}}
            <div style="margin-top: 20px; border: 3px solid #2736d2; padding: 15px; border-radius: 8px; background-color: #f9f9f9;">
              <h3 style="margin-top: 0;">Water Tank 1</h3>

              <div class="progress">
                <div  id="waterLevelFill1" class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
              </div>

              <h3>Level: <span id="waterTankLevel1">0</span>%</h3>

              <button onclick="updateWaterTankLevel(1)" style="padding: 10px 20px; background-color: #007bff; color: white; border: none; border-radius: 5px; cursor: pointer; font-size: 16px; transition: background-color 0.3s ease;">Start Pump</button>

            </div>
            {{-- WATER TANK 1 END HERE --}}

            {{-- WATER TANK  --}}
            <div style="margin-top: 20px; border: 3px solid #2736d2; padding: 15px; border-radius: 8px; background-color: #f9f9f9;">
              <h3 style="margin-top: 0;">Water Tank 2</h3>
            

              <div class="progress">
                <div  id="waterLevelFill2" class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
              </div>

              <h3>Level: <span id="waterTankLevel2">0</span>%</h3>

              <button onclick="updateWaterTankLevel(2)" style="padding: 10px 20px; background-color: #007bff; color: white; border: none; border-radius: 5px; cursor: pointer; font-size: 16px; transition: background-color 0.3s ease;">Start Pump</button>

            </div>
            {{-- WATER TANK 2 END HERE --}}

            {{-- WATER TANK 3 --}}
            <div style="margin-top: 20px; border: 3px solid #2736d2; padding: 15px; border-radius: 8px; background-color: #f9f9f9;">
              <h3 style="margin-top: 0;">Water Tank 3</h3>
            

              <div class="progress">
                <div  id="waterLevelFill3" class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
              </div>

              <h3>Level: <span id="waterTankLevel3">0</span>%</h3>

              <button onclick="updateWaterTankLevel(3)" style="padding: 10px 20px; background-color: #007bff; color: white; border: none; border-radius: 5px; cursor: pointer; font-size: 16px; transition: background-color 0.3s ease;">Start Pump</button>

            </div>
            {{-- WATER TANK 3 END HERE --}}

          </div>
          {{-- ALL WATER TANKS END HERE--}}








          {{-- ALL DUSTBIN--}}
          <div style="margin-top: 20px; border: 3px solid #3b3a3a; padding: 15px; border-radius: 8px; background-color: #f9f9f9;">
            
            {{-- DUSTBIN 1 --}}
            <div style="margin-top: 20px; border: 3px solid #ff0000; padding: 15px; border-radius: 8px; background-color: #f9f9f9;">
              <h3 style="margin-top: 0;">Dustbin 1</h3>
            

              <div class="progress">
                <div  id="dustbinFill1" class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
              </div>

              <h3>Level: <span id="dustbinLevel1">0</span>%</h3>

              <button onclick="sendWorkerToEmptyDustbin(1)" id="btnDustbin1" style="padding: 10px 20px; background-color: #007bff; color: white; border: none; border-radius: 5px; cursor: pointer; font-size: 16px; transition: background-color 0.3s ease;">Dispatch Team to Empty Dustbin</button>

            </div>
            {{-- DUSTBIN 1 END HERE --}}

            {{-- DUSTBIN 2 --}}
            <div style="margin-top: 20px; border: 3px solid #ff0000; padding: 15px; border-radius: 8px; background-color: #f9f9f9;">
              <h3 style="margin-top: 0;">Dustbin 2</h3>
            

              <div class="progress">
                <div  id="dustbinFill2" class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
              </div>

              <h3>Level: <span id="dustbinLevel2">0</span>%</h3>

              <button onclick="sendWorkerToEmptyDustbin(2)" id="btnDustbin2" style="padding: 10px 20px; background-color: #007bff; color: white; border: none; border-radius: 5px; cursor: pointer; font-size: 16px; transition: background-color 0.3s ease;">Dispatch Team to Empty Dustbin</button>

            </div>
            {{-- DUSTBIN 2 END HERE --}}

            {{-- DUSTBIN 3 --}}
            <div style="margin-top: 20px; border: 3px solid #ff0000; padding: 15px; border-radius: 8px; background-color: #f9f9f9;">
              <h3 style="margin-top: 0;">Dustbin 3</h3>
            

              <div class="progress">
                <div  id="dustbinFill3" class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
              </div>

              <h3>Level: <span id="dustbinLevel3">0</span>%</h3>

              <button onclick="sendWorkerToEmptyDustbin(3)" id="btnDustbin3" style="padding: 10px 20px; background-color: #007bff; color: white; border: none; border-radius: 5px; cursor: pointer; font-size: 16px; transition: background-color 0.3s ease;">Dispatch Team to Empty Dustbin</button>

            </div>
            {{-- DUSTBIN 3 END HERE --}}
          </div>
          {{-- ALL DUSTBIN END HERE--}}

          {{-- ALL TRANSFORMER--}}
          <div style="margin-top: 20px; border: 3px solid #3b3a3a; padding: 15px; border-radius: 8px; background-color: #f9f9f9;">
              {{-- TRANSFORMER 1 --}}
              <div style="margin-top: 20px; border: 3px solid #ff0000; padding: 15px; border-radius: 8px; background-color: #f9f9f9;">
                <h3 style="margin-top: 0;">Transformer 1</h3>
              

                <h3 id="transformerStatusText">Status: Running</h3>


                <button onclick="changeTransformerStatus('start',1)" id="btnDustbin3" style="padding: 10px 20px; background-color: #007bff; color: white; border: none; border-radius: 5px; cursor: pointer; font-size: 16px; transition: background-color 0.3s ease; margin-right: 50px;">Start</button>
                <button onclick="changeTransformerStatus('repair',2)" id="btnDustbin3" style="padding: 10px 20px; background-color: #007bff; color: white; border: none; border-radius: 5px; cursor: pointer; font-size: 16px; transition: background-color 0.3s ease; margin-inline: 50px;">Send Technician To Repair</button>
                <button onclick="changeTransformerStatus('stop',3)" id="btnDustbin3" style="padding: 10px 20px; background-color: #007bff; color: white; border: none; border-radius: 5px; cursor: pointer; font-size: 16px; transition: background-color 0.3s ease; margin-left: 50px;">Stop</button>


              </div>

              {{-- TRANSFORMER 2 --}}
              <div style="margin-top: 20px; border: 3px solid #ff0000; padding: 15px; border-radius: 8px; background-color: #f9f9f9;">
                <h3 style="margin-top: 0;">Transformer 2</h3>
              

                <h3 id="transformerStatusText">Status: Running</h3>


                <button onclick="sendWorkerToEmptyDustbin(3)" id="btnDustbin3" style="padding: 10px 20px; background-color: #007bff; color: white; border: none; border-radius: 5px; cursor: pointer; font-size: 16px; transition: background-color 0.3s ease; margin-right: 50px;">Start</button>
                <button onclick="sendWorkerToEmptyDustbin(3)" id="btnDustbin3" style="padding: 10px 20px; background-color: #007bff; color: white; border: none; border-radius: 5px; cursor: pointer; font-size: 16px; transition: background-color 0.3s ease; margin-inline: 50px;">Send Technician To Repair</button>
                <button onclick="sendWorkerToEmptyDustbin(3)" id="btnDustbin3" style="padding: 10px 20px; background-color: #007bff; color: white; border: none; border-radius: 5px; cursor: pointer; font-size: 16px; transition: background-color 0.3s ease; margin-left: 50px;">Stop</button>


              </div>

              {{-- TRANSFORMER 3 --}}
              <div style="margin-top: 20px; border: 3px solid #ff0000; padding: 15px; border-radius: 8px; background-color: #f9f9f9;">
                <h3 style="margin-top: 0;">Transformer 3</h3>
              

                <h3 id="transformerStatusText">Status: Repair</h3>


                <button onclick="sendWorkerToEmptyDustbin(3)" id="btnDustbin3" style="padding: 10px 20px; background-color: #007bff; color: white; border: none; border-radius: 5px; cursor: pointer; font-size: 16px; transition: background-color 0.3s ease; margin-right: 50px;">Start</button>
                <button onclick="sendWorkerToEmptyDustbin(3)" id="btnDustbin3" style="padding: 10px 20px; background-color: #007bff; color: white; border: none; border-radius: 5px; cursor: pointer; font-size: 16px; transition: background-color 0.3s ease; margin-inline: 50px;">Send Technician To Repair</button>
                <button onclick="sendWorkerToEmptyDustbin(3)" id="btnDustbin3" style="padding: 10px 20px; background-color: #007bff; color: white; border: none; border-radius: 5px; cursor: pointer; font-size: 16px; transition: background-color 0.3s ease; margin-left: 50px;">Stop</button>


              </div>
          </div>






        </div>
    </div>

    <script>
      // window.addEventListener('scroll', () => {
      //   const scrolledY = window.scrollY;
      //   const scrolledX = window.scrollX;
      //   console.log('Vertical scroll:', scrolledY, 'Horizontal scroll:',scrolledX);
      // });

      function delay(ms) {
        return new Promise(resolve => setTimeout(resolve, ms));
      }

      async function updateWaterTankLevel(id){
        console.log("button clicked")

        var currentWaterLevel = document.getElementById(`waterTankLevel${id}`).textContent
              
        for (let i = currentWaterLevel; i <= 100; i++) {
          console.log("looping")
          await delay(1000); // wait 1 second

          document.getElementById(`waterTankLevel${id}`).textContent = i;
          document.getElementById(`waterLevelFill${id}`).style.width = `${i}%`

          const url = `http://127.0.0.1:8000/update-water-level/${id}/${i}`;

          try {
              const res = await fetch(url, {
              method: 'POST',
              headers: {
                'Accept': 'application/json'
              }
          });
            const data = await res.json();
            console.log(data);

          } catch (err) {
            console.error('Fetch error:', err);
          }
          

        } 
       
      }


      async function sendWorkerToEmptyDustbin(id){
        document.getElementById(`btnDustbin${id}`).disabled = true;
        document.getElementById(`btnDustbin${id}`).style.backgroundColor = '#4a4b4d'
        
       
        for(let i=10;i>=0;i--){
          await delay(1000); // wait 1 second

          document.getElementById(`btnDustbin${id}`).textContent = `Cleaning staff will be there in ${i} minutes.`;
          console.log("cleaning staff ")


        }

        document.getElementById(`btnDustbin${id}`).textContent = `Dustin is being emptied.`;
        await delay(2000);
        document.getElementById(`btnDustbin${id}`).textContent = `Dispatch Team to Empty Dustbin`;
        document.getElementById(`btnDustbin${id}`).style.backgroundColor = '#007bff'
        document.getElementById(`btnDustbin${id}`).disabled = false;


        const url = `http://127.0.0.1:8000/update-dustbin-level/${id}/0`;

        try {
            const res = await fetch(url, {
            method: 'POST',
            headers: {
              'Accept': 'application/json'
            }
        });
          const data = await res.json();
          console.log(data);

          document.getElementById(`dustbinFill${id}`).style.width = `0%`
          document.getElementById(`dustbinLevel${id}`).textContent = 0;
        } catch (err) {
          console.error('Fetch error:', err);
        }
      }





      




      async function changeTransformerStatus(statusInput,id){
        var status = 'running'
        switch(statusInput){
          case 'start':
            status = 'running'
            break;
          case 'repair':
            status = 'repair'
            break;
          case 'stop':
            status = 'stop'
            break;
        }


        const url = `http://127.0.0.1:8000/set-status-transformer`;

        try {
            const res = await fetch(url, {
            method: 'POST',
            headers: {
              'Accept': 'application/json'
            }
        });
          const data = await res.json();
          console.log(data);

          document.getElementById(`dustbinFill${id}`).style.width = `0%`
          document.getElementById(`dustbinLevel${id}`).textContent = 0;
        } catch (err) {
          console.error('Fetch error:', err);
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
              
              // WATER TANK SET HERE
              const waterLevel1 = JSON.stringify(data.water_tanks[0].water_level);
              document.getElementById(`waterTankLevel1`).textContent = waterLevel1
              document.getElementById(`waterLevelFill1`).style.width = `${waterLevel1}%`

              const waterLevel2 = JSON.stringify(data.water_tanks[1].water_level);
              document.getElementById(`waterTankLevel2`).textContent = waterLevel2
              document.getElementById(`waterLevelFill2`).style.width = `${waterLevel2}%`

              const waterLevel3 = JSON.stringify(data.water_tanks[2].water_level);
              document.getElementById(`waterTankLevel3`).textContent = waterLevel3
              document.getElementById(`waterLevelFill3`).style.width = `${waterLevel3}%`


            
              // DUSTBIN SET HERE
              const dustbinLevel1 = JSON.stringify(data.dustbins[0].level);
              document.getElementById(`dustbinLevel1`).textContent = dustbinLevel1
              document.getElementById(`dustbinFill1`).style.width = `${dustbinLevel1}%`

              const dustbinLevel2 = JSON.stringify(data.dustbins[1].level);
              document.getElementById(`dustbinLevel2`).textContent = dustbinLevel2
              document.getElementById(`dustbinFill2`).style.width = `${dustbinLevel2}%`

              const dustbinLevel3 = JSON.stringify(data.dustbins[2].level);
              document.getElementById(`dustbinLevel3`).textContent = dustbinLevel3
              document.getElementById(`dustbinFill3`).style.width = `${dustbinLevel3}%`

              

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