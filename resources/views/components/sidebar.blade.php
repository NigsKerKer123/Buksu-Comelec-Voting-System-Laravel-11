<aside id="logo-sidebar" class="fixed top-0 bg-white left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-white border-r border-gray-200 sm:translate-x-0 dark:bg-gray-800 dark:border-gray-700" aria-label="Sidebar">
   <div class="h-full px-3 pb-4 overflow-y-auto bg-white dark:bg-gray-800">
      <ul class="space-y-2 font-medium">
         <li>
            <a href="{{route('dashboard.home')}}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group {{ request()->routeIs('dashboard.home') ? 'bg-gray-200 dark:bg-gray-700' : '' }}">
               <img class="ms-4 w-5 h-5" src="{{asset('images/icon/dashboard.png')}}" alt="dashboard logo">
               <span class="ms-3 bebas-neue-regular">Dashboard</span>
            </a>
         </li>
         <li>
            <a href="{{route('organization.home')}}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group {{ request()->routeIs('organization.home') ? 'bg-gray-200 dark:bg-gray-700' : '' }}">
               <img class="ms-4 w-5 h-5" src="{{asset('images/icon/organization.png')}}" alt="dashboard logo">
               <span class="flex-1 ms-3 whitespace-nowrap bebas-neue-regular">Organizations</span>
            </a>
         </li>
         <li>
            <a href="{{route('party.home')}}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group {{ request()->routeIs('party.home') ? 'bg-gray-200 dark:bg-gray-700' : '' }}">
               <img class="ms-4 w-5 h-5" src="{{asset('images/icon/partylist.png')}}" alt="dashboard logo">
               <span class="flex-1 ms-3 whitespace-nowrap bebas-neue-regular">Party Lists</span>
            </a>
         </li>
         <li>
            <a href="{{route('college.home')}}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group {{ request()->routeIs('college.home') ? 'bg-gray-200 dark:bg-gray-700' : '' }}">
               <img class="ms-4 w-5 h-5" src="{{asset('images/icon/college.png')}}" alt="dashboard logo">
               <span class="flex-1 ms-3 whitespace-nowrap bebas-neue-regular">Colleges</span>
            </a>
         </li>
         <li>
            <a href="{{route('position.home')}}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group {{ request()->routeIs('position.home') ? 'bg-gray-200 dark:bg-gray-700' : '' }}">
               <img class="ms-4 w-5 h-5" src="{{asset('images/icon/position.png')}}" alt="dashboard logo">
               <span class="flex-1 ms-3 whitespace-nowrap bebas-neue-regular">Positions</span>
            </a>
         </li>
         <li>
            <a href="{{route('candidate.home')}}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group {{ request()->routeIs('candidate.home') ? 'bg-gray-200 dark:bg-gray-700' : '' }}">
               <img class="ms-4 w-5 h-5" src="{{asset('images/icon/candidate.png')}}" alt="dashboard logo">
               <span class="flex-1 ms-3 whitespace-nowrap bebas-neue-regular">Candidates</span>
            </a>
         </li>
         <li>
            <a href="{{route('admin.voter.home')}}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group {{ request()->routeIs('admin.voter.home') ? 'bg-gray-200 dark:bg-gray-700' : '' }}">
               <img class="ms-4 w-5 h-5" src="{{asset('images/icon/voter.png')}}" alt="dashboard logo">
               <span class="flex-1 ms-3 whitespace-nowrap bebas-neue-regular">Voters</span>
            </a>
         </li>
      </ul>
   </div>
</aside>
