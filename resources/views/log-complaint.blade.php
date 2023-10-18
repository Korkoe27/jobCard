<x-app-layout>


  <style>
    body {
  /* overflow-y: hidden; Hide vertical scrollbar */
  overflow-x: hidden; /* Hide horizontal scrollbar */
}
  </style>

  <form action="{{route('jobCard.store')}}" id="submit" method="POST">
  <div class="mx-4 flex flex-wrap">
  
  @csrf

      <div class="w-full px-4 md:w-1/2 lg:w-1/3">
         <div class="m-8">
            <label for="equipment_model" class="mb-3 block text-base font-medium text-white">
            Equipment Model
            </label>
            <input
               type="text" required id="equipment_model"
               placeholder="Equipment Model" name="equipment_model"
               class="border-form-stroke text-body-color placeholder-body-color focus:border-primary active:border-primary w-full rounded-lg border-[1.5px] py-3 px-5 font-medium outline-none transition disabled:cursor-default disabled:bg-[#F5F7FD]"
               />
         </div>
      </div>
      <div class="w-full px-4 md:w-1/2 lg:w-1/3">
         <div class="m-8">
            <label for="serial_number" class="mb-3 block text-base font-medium text-white">
            Serial Number
            </label>
            <input
               type="text" required
               placeholder="Serial Number" name="serial_number" id="serial_number"
               class="border-form-stroke text-body-color placeholder-body-color focus:border-primary active:border-primary w-full rounded-lg border-[1.5px] py-3 px-5 font-medium outline-none transition disabled:cursor-default disabled:bg-[#F5F7FD]"
               />
         </div>
      </div>
  
      <div class="w-full px-4 md:w-1/2 lg:w-1/3">
      
          <div class="m-8">
          <label for="device_checker"  class="mb-3 block text-base font-medium text-white">Is the device a Printer</label>
          <div class="mt-2">
            <select id="device_type_select" name="device_checker" required autocomplete="device-checker" class="block w-full rounded-md border-[1.5px] py-3 text-black shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
              <option selected>...</option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
            </select>
          </div>
          </div>
      
  </div>
  </div>
      
  <h1 class="block m-5 text-center text-white" style="display: none" id="computer_header">Computers Only</h1>
  <div class="mx-10 flex flex-wrap" id="computer_section" style="display: none">
  
  
  
      <div class="w-full px-4 md:w-1/2 lg:w-1/3">
      
  
              <label for="dvd_cd_rom" class="block text-sm font-medium leading-6 text-white">DVD/CD ROM</label>
              <div class="mt-2">
                <select id="dvd_cd_rom" name="dvd_cd_rom" autocomplete="dvd_cd_rom" class="block w-full rounded-md border-[1.5px] py-3 text-black shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                  <option selected>...</option>
                  <option value="yes">Yes</option>
                  <option value="no">No</option>
                </select>
              </div>
          
      </div>
  
  
          <div class="w-full px-4 md:w-1/2 lg:w-1/3">
      
              <div class="sm:col-span-3">
                  <label for="memory_type" class="block text-sm font-medium leading-6 text-white">Memory Type</label>
                  <div class="mt-2">
                    <select id="memory_type" name="memory_type" autocomplete="memory_type" class="block w-full rounded-md border-[1.5px] py-3 text-black shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                      <option selected>...</option>
                      <option value="ddr">DDR</option>
                      <option value="ddr2">DDR2</option>
                      <option value="ddr3">DDR3</option>
                    </select>
                  </div>
                </div>
              
          </div>
      
  
      <div class="w-full px-4 md:w-1/2 lg:w-1/3">
          <label for="memory_size" class="mb-3 block text-base font-medium text-white">
          Memory Size
          </label>
          <input
             type="text"
             placeholder="Memory Size" name="memory_size" id="memory_size"
             class="border-form-stroke text-body-color placeholder-body-color focus:border-primary active:border-primary w-full rounded-lg border-[1.5px] py-3 px-5 font-medium outline-none transition disabled:cursor-default disabled:bg-[#F5F7FD]"
             />
       </div>
  
     
          <div class="w-full px-4 md:w-1/2 lg:w-1/3">
          
  
                  <label for="hdd_type" class="block text-sm font-medium leading-6 text-white">HDD Type</label>
                  <div class="mt-2">
                    <select id="hdd_type" name="hdd_type" autocomplete="hdd_type" class="block w-full rounded-md border-[1.5px] py-3 text-black shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                      <option selected>...</option>
                      <option value="sata">SATA</option>
                      <option value="ide">IDE</option>
                    </select>
                </div>
              
          </div>
  
     
  
              <div class="w-full px-4 md:w-1/2 lg:w-1/3">
                     <label for="" class="mb-3 block text-base font-medium text-white">
                     HDD Size
                     </label>
                     <input
                        type="text"
                        placeholder="HDD Size" name="hdd_size" id="hdd_size"
                        class="border-form-stroke text-body-color placeholder-body-color focus:border-primary active:border-primary w-full rounded-lg border-[1.5px] py-3 px-5 font-medium outline-none transition disabled:cursor-default disabled:bg-[#F5F7FD]"
                        />
              </div>
  
  </div>
  <h1 class="block m-5 text-center text-white" id="printer_header" style="display: none" >Printer Only</h1>
      <div class="mx-10 flex flex-wrap" id="printer_section" style="display: none">
          
  
          <div class="w-full px-4 md:w-1/2 lg:w-1/3">
              <label for="" class="mb-3 block text-base font-medium text-white">
              Model
              </label>
              <input
                 type="text"
                 placeholder="Printer Model" name="printer_model" id="printer_model"
                 class="border-form-stroke text-body-color placeholder-body-color focus:border-primary active:border-primary w-full rounded-lg border-[1.5px] py-3 px-5 font-medium outline-none transition disabled:cursor-default disabled:bg-[#F5F7FD]"
                 />
           </div>
  
  
           <div class="w-full px-4 md:w-1/2 lg:w-1/3">
                  <label for="catridge_present" class="mb-3 block text-base font-medium text-white">Catridge Present</label>
                  <div class="mt-2">
                    <select id="catridge_present" name="catridge_present" autocomplete="catridge_present" class="block w-full rounded-md border-[1.5px] py-3 text-black shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                      <option selected>...</option>
                      <option value="yes">YES</option>
                      <option value="no">NO</option>
                    </select>
                  </div>
                </div>
               <div class="w-full px-4 md:w-1/2 lg:w-1/3">
              <label for="" class="mb-3 block text-base font-medium text-white">
              Catridge Type
              </label>
              <input
                 type="text" id="catridge_type"
                 placeholder="Catridge Type" name="catridge_type"
                 class="border-form-stroke text-body-color placeholder-body-color focus:border-primary active:border-primary w-full rounded-lg border-[1.5px] py-3 px-5 font-medium outline-none transition disabled:cursor-default disabled:bg-[#F5F7FD]"
                 />
           </div>
          </div>
           
  
      
   <h1 class="block m-4 text-center text-white">Complainant Info</h1>
      <div class="mx-10 flex flex-wrap" id="complainant_section">
         
  
          <div class="w-1/2 px-4 my-4 md:w-1/2 lg:w-1/3">
              <label for="complainant_service_number" class="mb-3 block text-base font-medium text-white">
              Service Number
              </label>
              <input
                 type="text" required
                 placeholder="Complainant's Service Number" id="complainant_service_number" name="complainant_service_number"
                 class="border-form-stroke text-body-color placeholder-body-color focus:border-primary active:border-primary w-full rounded-lg border-[1.5px] py-3 px-5 font-medium outline-none transition disabled:cursor-default disabled:bg-[#F5F7FD]"
                 />
           </div>
  
           <div class="w-1/2 px-4 my-4 md:w-1/2 lg:w-1/3">
              <label for="complainant_rank" class="mb-3 block text-base font-medium text-white">
              Complainant's Rank
              </label>
              <input
                 type="text" required
                 placeholder="Complainant's Rank" id="complainant_rank" name="complainant_rank"
                 class="border-form-stroke text-body-color placeholder-body-color focus:border-primary active:border-primary w-full rounded-lg border-[1.5px] py-3 px-5 font-medium outline-none transition disabled:cursor-default disabled:bg-[#F5F7FD]"
                 />
           </div>
  
           <div class="w-full px-4 my-4 md:w-1/2 lg:w-1/3">
              <label for="complainant_name" class="mb-3 block text-base font-medium text-white">
              Complainant's Name
              </label>
              <input
                 type="text" id="complainant_name" required
                 placeholder="Complainant's Name" name="complainant_name"
                 class="border-form-stroke text-body-color placeholder-body-color focus:border-primary active:border-primary w-full rounded-lg border-[1.5px] py-3 px-5 font-medium outline-none transition disabled:cursor-default disabled:bg-[#F5F7FD]"
                 />
           </div>
  
  
  
  
  
           <div class="w-full my-4 px-4 md:w-1/2 lg:w-1/3">
              <label for="complaint" class="mb-3 block text-base font-medium text-white">
                  Complaint
              </label>
              <textarea
                 type="text" id="complaint" required
                 placeholder="Complaint" name="complaint"
                 class="border-form-stroke text-body-color placeholder-body-color focus:border-primary active:border-primary w-full rounded-lg border-[1.5px] py-3 px-5 font-medium outline-none transition disabled:cursor-default disabled:bg-[#F5F7FD]"
                 /></textarea>
           </div>
           <div class="w-full px-4 my-4 md:w-1/2 lg:w-1/3">
              <label for="complainant_unit" class="mb-3 block text-base font-medium text-white">
                  Complainant Unit
              </label>
              <input
                 type="text" id="complainant_unit" required
                 placeholder="Complainant Unit" name="complainant_unit"
                 class="border-form-stroke text-body-color placeholder-body-color focus:border-primary active:border-primary w-full rounded-lg border-[1.5px] py-3 px-5 font-medium outline-none transition disabled:cursor-default disabled:bg-[#F5F7FD]"
                 />
           </div>
  
           <div class="px-4 w-1 my-4 lg:w-1/3">
              <label for="complainant_contact" class="mb-3 block text-base font-medium text-white">
              Complainant Phone Number
              </label>
              <input
                 type="text" id="complainant_contact" required
                 placeholder="Complainant Phone Number" name="complainant_contact"
                 class="border-form-stroke text-body-color placeholder-body-color focus:border-primary active:border-primary w-full rounded-lg border-[1.5px] py-3 px-5 font-medium outline-none transition disabled:cursor-default disabled:bg-[#F5F7FD]"
                 />
           </div>
      </div>
      <input type="hidden" name="job_card_number" id="job_card_number">
  
  
      <div class="mx-auto flex justify-center">
          <button type="submit" value="Submit" onclick="generateRandomNumber()" class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 mx-8">Submit</button>
      </div>
      
  
  </form>
  
  
  
  </x-app-layout>
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  <script>
  
  document.addEventListener('DOMContentLoaded', function() {
  
  const deviceTypeSelect = document.getElementById('device_type_select');
  const printerHeader = document.getElementById('printer_header');
  const printerSection = document.getElementById('printer_section');
  const computer_header = document.getElementById('computer_header');
  const computerSection = document.getElementById('computer_section');
  const dvdCdRom = document.getElementById('dvd_cd_rom');
  const memoryType = document.getElementById('memory_type');
  const memorySize = document.getElementById('memory_size');
  const hddType = document.getElementById('hdd_type');
  const hddSize = document.getElementById('hdd_size');
  const printerModel = document.getElementById('printer_model');
  const catridgePresent = document.getElementById('catridge_present');
  const catridgeType = document.getElementById('catridge_type');
  
  
  deviceTypeSelect.addEventListener('change', ()=> {
      if(deviceTypeSelect.value == 'yes') {
          printerHeader.style.display = 'block';
          printerSection.style.display = 'flex';
          computerSection.style.display = 'none';
          computer_header.style.display = 'none';
  
  
          dvdCdRom.value = '';
          memorySize.value = '';
          memoryType.value = '';
          hddSize.value = '';
          hddType.value = '';
          
          
      } else if(deviceTypeSelect.value == 'no'){
  
          
          computerSection.style.display = 'flex';
          computer_header.style.display = 'block';
          printerHeader.style.display = 'none';
          printerSection.style.display = 'none';
  
          printerModel.value = '';
          catridgePresent.value = '';
          catridgeType.value = '';
  
      }
  })
  
  
  });
  
  
  
  function generateRandomNumber() {
        const min = 1000; // Minimum 4-digit number
        const max = 9999; // Maximum 4-digit number
        const random4DigitNumber = Math.floor(Math.random() * (max - min + 1)) + min;
  
        document.getElementById('job_card_number').value = random4DigitNumber;
    
  }
  
  
  
  
  </script>