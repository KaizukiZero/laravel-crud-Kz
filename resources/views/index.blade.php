@extends('layout')
@section('title','Index Laravel 8')
@section('Content')

<div class="container my-4">

    <div class="border">
        @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
        @endif

        <div class="overflow-x-auto">
            <div
                class="min-w-screen bg-gray-100 flex items-center justify-center bg-gray-100 font-sans overflow-hidden">
                <div class="w-full lg:w-5/6">
                    <div class="bg-white shadow-md rounded my-6">
                        <table class="min-w-max w-full table-auto">
                            <thead>
                                <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                                    <th class="py-3 px-6 text-left">ลำดับ</th>
                                    <th class="py-3 px-6 text-left">หมายเลข</th>
                                    <th class="py-3 px-6 text-center">ชื่อ</th>
                                    <th class="py-3 px-6 text-center">ชนิด</th>
                                    <th class="py-3 px-6 text-center">จำนวน</th>
                                    <th class="py-3 px-6 text-center">ราคา:ลัง</th>
                                    <th class="py-3 px-6 text-center">ราคา:ชิ้น</th>
                                </tr>
                            </thead>

                            <tbody class="text-gray-600 text-sm font-light">
                                @foreach ($data as $key => $value)
                                <tr class="border-b border-gray-200 hover:bg-gray-100">
                                    <td class="py-3 px-6 text-left whitespace-nowrap">
                                        <div class="flex items-center">
                                            {{ ++$i }}
                                        </div>
                                    </td>
                                    <td class="py-3 px-6 text-left">
                                        <div class="flex items-center">
                                            {{ $value->fd_id }}
                                        </div>
                                    </td>
                                    <td class="py-3 px-6 text-center">
                                        {{ $value->fd_name }}
                                        {{-- <div class="flex items-center justify-center">
                                            <img class="w-6 h-6 rounded-full border-gray-200 border transform hover:scale-125"
                                                src="https://randomuser.me/api/portraits/men/1.jpg" />
                                            <img class="w-6 h-6 rounded-full border-gray-200 border -m-1 transform hover:scale-125"
                                                src="https://randomuser.me/api/portraits/women/2.jpg" />
                                            <img class="w-6 h-6 rounded-full border-gray-200 border -m-1 transform hover:scale-125"
                                                src="https://randomuser.me/api/portraits/men/3.jpg" /> --}}
                    </div>
                    </td>
                    <td class="py-3 px-6 text-center">
                        {{ $value->fd_type }}
                    </td>
                    <td class="py-3 px-6 text-center">
                        <div class="flex item-center justify-center">
                            {{ $value->fd_amount }} ลัง

                            {{-- <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                    stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                                </svg>
                                            </div>
                                            <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                    stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                                </svg>
                                            </div>
                                            <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                    stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                </svg>
                                            </div>
                                        </div> --}}
                    </td>
                    <td class="py-3 px-6 text-center">
                        <div class="flex item-center justify-center">
                            {{ $value->fd_pricebox }} บาท
                    </td>
                    <td class="py-3 px-6 text-center">
                        <div class="flex item-center justify-center">
                            {{ $value->fd_pricebox / $value->fd_amountbox }} ต่อ {{$value->fd_amountbox}} ชิ้น

                    </td>
                    </tr>
                    @endforeach
                    </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    {!! $data->links() !!}
</div>

</div>

@endsection

@section('Modal')


    <div class="fixed hidden inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full" id="my-modal">
        <div class="flex flex-col p-5 bg-white shadow-md hover:shodow-lg rounded-2xl mx-auto my-5 max-w-md">
            <div class="mt-3">
                <div id="modal-body"></div>
            </div>
        </div>
    </div>




@endsection
