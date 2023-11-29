@extends('base.index')
@section('content')
<div class="mt-5 mx-4">
    <h1 class="font-bold text-xl">Kelola Data Tenan</h1>
</div>

<div class="relative overflow-x-auto shadow-xl">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Kode Tenan
                </th>
                <th scope="col" class="px-6 py-3">
                    Nama Tenan
                </th>
                <th scope="col" class="px-6 py-3">
                    HP
                </th>

            </tr>
        </thead>
        <tbody>
            @forelse ($tenan as $item)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                   {{$item->KodeTenan}}
                </th>
                <td class="px-6 py-4">
                    {{$item->NamaTenan}}
                </td>
                <td class="px-6 py-4">
                    {{$item->HP}}
                </td>
            </tr>
            @empty
            <tr>
                <th colspan="3" class="text-center p-2"> Data Not Found</th>
            </tr>
            @endforelse



        </tbody>
    </table>
</div>

</div>
@endsection
