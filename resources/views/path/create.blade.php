<div class="flex items-center justify-between">
    <h3 class="text-2xl">Model Title</h3>
    <svg xmlns="http://www.w3.org/2000/svg" class="modal-close bg-transparent hover:text-red-500 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
    </svg>

</div>

@if ($errors->any())
<div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{ route('Creating') }}" method="POST">
    @csrf
    <div class="my-2">
        <div class="flex flex-col my-2">
            <label for="nameprod" class="text-gray-700 my-2 select-none font-medium">ชื่อสินค้า</label>
            <input id="nameprod" type="text" name="nameprod" placeholder="ชื่อของสินค้าที่ต้องการบันทึก"
                class="px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-200" />
        </div>
        <fieldset class="border p-3 font-medium">
            <legend class="text-gray-700">ชนิดสินค้า</legend>
            <div class="grid grid-flow-col gap-1 text-gray-700">
                <div>
                    <input type="radio" name="typeprod" id="type-1" value="1">
                    <label for="nameprod" class="my-2 select-none">ขนม & ลูกอม</label><br>
                    <input type="radio" name="typeprod" id="type-2" value="2">
                    <label for="nameprod" class="my-2 select-none">น้ำ & นม</label><br>
                    <input type="radio" name="typeprod" id="type-3" value="3">
                    <label for="nameprod" class="my-2 select-none">มะหมี่</label><br>
                </div>
                <div>
                    <input type="radio" name="typeprod" id="type-4" value="4">
                    <label for="nameprod" class="my-2 select-none">เครื่องปรุง</label><br>
                    <input type="radio" name="typeprod" id="type-5" value="5">
                    <label for="nameprod" class="my-2 select-none">ของใช้</label><br>
                    <input type="radio" name="typeprod" id="type-6" value="6">
                    <label for="nameprod" class="my-2 select-none">สิ่งมึนเมา</label><br>
                </div>

            </div>
        </fieldset>
        <fieldset class="border p-3 ">
          <legend class="text-gray-700 font-medium">จำนวนสินค้า</legend>
          <input type="number" name="amountprod" id="amountprod" placeholder="จำนวนของสินค้า" value="" 
          class="px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-200 w-full"
          autocomplete="off" oninput="rangeamount.value = this.value"/>
          <input type="range" name="" id="rangeamount" min="0" max="100" oninput="amountprod.value = this.value"
          class="slider" autocomplete="off" value="0">
        </fieldset>

        <fieldset class="border p-3 ">
          <legend class="text-gray-700 font-medium">จำนวนสินค้าในกล่อง</legend>
          <input type="number" name="amountinbox" id="amountinbox" placeholder="จำนวนสินค้าในกล่อง" value="" 
          class="px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-200 w-full"
          autocomplete="off" oninput="rangeamountinbox.value = this.value"/>
          <input type="range" name="" id="rangeamountinbox" min="0" max="100" value="0" 
          class="slider" autocomplete="off" oninput="amountinbox.value = this.value">
        </fieldset>

        <div class="flex flex-col my-2">
            <label for="priceprod" class="text-gray-700 my-2 select-none font-medium">ราคาที่นำเข้า</label>
            <input id="priceprod" type="number" name="priceprod" placeholder="ราคาของสินค้าที่นำเข้า" value="" 
                class="px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-200" 
                autocomplete="off" step="2"/>
        </div>

    </div>

    <div class="my-3">
        <button 
        class="flex-no-shrink bg-green-500 px-5 py-2 text-sm shadow-sm hover:shadow-lg font-medium tracking-wider border-2 border-green-500 text-white rounded-full "
            type="submit">ยืนยัน</button>
        <a id=""
        class="modal-close cursor-pointer flex-no-shrink bg-red-500 px-5 py-2 text-sm shadow-sm hover:shadow-lg font-medium tracking-wider border-2 border-red-500 text-white rounded-full "
           >ยกเลิก</a>
    </div>

</form>