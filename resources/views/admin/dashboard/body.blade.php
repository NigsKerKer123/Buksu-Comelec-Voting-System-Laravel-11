<!-- body -->
<div class="h-full bg-gray-50 ml-2 mt-[4.5rem] mb-10 md:ml-64">
   <!-- Statistics Cards -->
   <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 p-4 gap-4 bg-white m-4">
      <div class="dark:bg-gray-800 shadow-lg rounded-md flex items-center justify-between p-3 border-b-4 border-gray-200 dark:border-gray-600 text-black font-medium group">
         <div class="flex justify-center items-center w-14 h-14 bg-white rounded-full transition-all duration-300 transform group-hover:rotate-12">
            <img src="{{asset('images/icon/casted.png')}}" alt="total casted votes logo">
         </div>

         <div class="text-right">
            <p class="text-2xl">1,257</p>
            <p class="bebas-neue-regular">Total Casted Votes</p>
         </div>
      </div>

      <div class="dark:bg-gray-800 shadow-lg rounded-md flex items-center justify-between p-3 border-b-4 border-gray-200 dark:border-gray-600 text-black font-medium group">
         <div class="flex justify-center items-center w-14 h-14 bg-white rounded-full transition-all duration-300 transform group-hover:rotate-12">
            <img src="{{asset('images/icon/uncast.png')}}" alt="total uncast votes logo">
         </div>

         <div class="text-right">
            <p class="text-2xl">1,257</p>
            <p class="bebas-neue-regular">Total Uncast Votes</p>
         </div>
      </div>

      <div class="dark:bg-gray-800 shadow-lg rounded-md flex items-center justify-between p-3 border-b-4 border-gray-200 dark:border-gray-600 text-black font-medium group">
         <div class="flex justify-center items-center w-14 h-14 bg-white rounded-full transition-all duration-300 transform group-hover:rotate-12">
            <img src="{{asset('images/icon/voters.png')}}" alt="total voters logo">
         </div>

         <div class="text-right">
            <p class="text-2xl">1,257</p>
            <p class="bebas-neue-regular">Total Voters</p>
         </div>
      </div>

      <div class="dark:bg-gray-800 shadow-lg rounded-md flex items-center justify-between p-3 border-b-4 border-gray-200 dark:border-gray-600 text-black font-medium group">
         <div class="flex justify-center items-center w-14 h-14 bg-white rounded-full transition-all duration-300 transform group-hover:rotate-12">
            <img src="{{asset('images/icon/candidates.png')}}" alt="total candidates logo">
         </div>

         <div class="text-right">
            <p class="text-2xl">1,257</p>
            <p class="bebas-neue-regular">Total Candidates</p>
         </div>
      </div>
   </div>

   <!-- buttons -->
   <div class="flex justify-end h-auto mb-4 rounded bg-white dark:bg-gray-800 mr-4 ml-4 p-4">
      <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown1" class="text-white bg-green-500 hover:bg-green-600 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 mr-2" type="button">
         Generate Reports
         <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
         <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
         </svg>
      </button>

      <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown2" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
         Organizations
         <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
         <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
         </svg>
      </button>
   </div>

   <!-- charts or ranks -->
   <div class="flex items-center justify-center h-auto mb-4 rounded bg-white dark:bg-gray-800 mr-4 ml-4 p-4">
      <div class="w-full mx-auto">
        <div class="flex flex-col space-y-4">
            <div class="flex items-center">
                <span class="mr-2 text-sm flex-shrink-0" style="width: 12.5%;">Candidate A (40%)</span>
                <div class="flex items-center w-full">
                    <div class="bg-blue-500 h-4 rounded-l-lg" style="width: 40%;"></div>
                    <div class="bg-gray-200 h-4 rounded-r-lg flex-grow"></div>
                </div>
            </div>

            <div class="flex items-center">
                <span class="mr-2 text-sm flex-shrink-0" style="width: 12.5%;">Candidate B (30%)</span>
                <div class="flex items-center w-full">
                    <div class="bg-green-500 h-4 rounded-l-lg" style="width: 30%;"></div>
                    <div class="bg-gray-200 h-4 rounded-r-lg flex-grow"></div>
                </div>
            </div>

            <div class="flex items-center">
                <span class="mr-2 text-sm flex-shrink-0" style="width: 12.5%;">Candidate C (20%)</span>
                <div class="flex items-center w-full">
                    <div class="bg-red-500 h-4 rounded-l-lg" style="width: 20%;"></div>
                    <div class="bg-gray-200 h-4 rounded-r-lg flex-grow"></div>
                </div>
            </div>

            <div class="flex items-center">
                <span class="mr-2 text-sm flex-shrink-0" style="width: 12.5%;">Candidate D (10%)</span>
                <div class="flex items-center w-full">
                    <div class="bg-yellow-500 h-4 rounded-l-lg" style="width: 10%;"></div>
                    <div class="bg-gray-200 h-4 rounded-r-lg flex-grow"></div>
                </div>
            </div>
        </div>
      </div>
   </div>
</div>

<!-- Dropdown menu -->
<div id="dropdown1" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
      <li>
        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">SSC</a>
      </li>
      <li>
        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">SBO</a>
      </li>
    </ul>
</div>

<div id="dropdown2" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
      <li>
        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">SSC</a>
      </li>
      <li>
        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">SBO</a>
      </li>
    </ul>
</div>