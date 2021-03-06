		<!-- Navbar goes here -->
		<nav class="bg-opacity-100 shadow-md">
		    <div class="max-w-6xl mx-auto px-4">
		        <div class="flex justify-between">
		            <div class="flex space-x-7">
		                <div>
		                    <!-- Website Logo -->
		                    <a href="#" class="flex items-center py-4 px-2">
		                        {{-- <img src="logo.png" alt="Logo" class="h-8 w-8 mr-2"> --}}
		                        <span class="font-semibold text-gray-500 text-lg">Kouhei</span>
		                    </a>
		                </div>
		                <!-- Primary Navbar items -->
		                <div class="hidden md:flex items-center space-x-1">
		                    <a id="Home" href=""
		                        class="py-4 px-2 text-bluegray border-b-4 border-bluegray font-semibold ">Home</a>

		                    {{-- Should add auth --}}
		                    <a id="create" href="#"
		                        class="modal-open py-4 px-2 text-gray-500 font-semibold hover:text-green-500 transition duration-300">Create</a>

		                    <a href=""
		                        class="py-4 px-2 text-gray-500 font-semibold hover:text-green-500 transition duration-300">Contact
		                        Us</a>
		                </div>
		            </div>
		            <!-- Secondary Navbar items -->
		            <div class="hidden md:flex items-center space-x-3 ">

		                <a href=""
		                    class="py-2 px-2 font-medium text-gray-500 rounded hover:bg-green-500 hover:text-white transition duration-300">Log
		                    In</a>
		                <a href=""
		                    class="py-2 px-2 font-medium text-white bg-green-500 rounded hover:bg-green-400 transition duration-300">Sign
		                    Up</a>
		            </div>
		            <!-- Mobile menu button -->
		            <div class="md:hidden flex items-center">
		                <button class="outline-none mobile-menu-button">
		                    <svg class=" w-6 h-6 text-gray-500 hover:text-green-500 " x-show="!showMenu" fill="none"
		                        stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24"
		                        stroke="currentColor">
		                        <path d="M4 6h16M4 12h16M4 18h16"></path>
		                    </svg>
		                </button>
		            </div>
		        </div>
		    </div>

		    <!-- mobile menu -->
		    <div class="hidden mobile-menu">
		        <ul class="">
		            <li class="active"><a href="/"
		                    class="block text-sm px-2 py-4 text-white bg-green-500 font-semibold">Home</a></li>
		            <li class=""><a id="create-mobile" href="#"
		                    class="modal-open block text-sm px-2 py-4 hover:bg-green-500 transition duration-300">Create</a></li>
		            <li class=""><a href="/contact"
		                    class="block text-sm px-2 py-4 hover:bg-green-500 transition duration-300">Contact Us</a></li>
		            <li>
		                <div class="flex justify-center py-4">
		                    <a href=""
		                        class="mx-2 py-2 px-2 font-medium text-gray-500 bg-gray-100 rounded hover:bg-green-500 hover:text-white transition duration-300">Log
		                        In</a>
		                    <a href=""
		                        class="mx-2 py-2 px-2 font-medium text-white bg-green-500 rounded hover:bg-green-400 transition duration-300">Sign
		                        Up</a>
		                </div>
		            </li>
		        </ul>
		    </div>

		</nav>