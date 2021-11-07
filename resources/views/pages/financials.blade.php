@php
    $accounts = [
        ['nombre'=>'Cash', 'code'=>'101'],
        ['nombre'=>'Accounts Receivable', 'code'=>'102'],
        ['nombre'=>'Inventory', 'code'=>'103'],
        ['nombre'=>'Equipment', 'code'=>'104'],
        ['nombre'=>'Supplies', 'code'=>'105'],
        ['nombre'=>'Prepaid Insurance', 'code'=>'107'],
        ['nombre'=>'Depreciation', 'code'=>'108'],
        ['nombre'=>'Food Revenue', 'code'=>'201'],
        ['nombre'=>'Beverage Revenue', 'code'=>'202'],
        ['nombre'=>'Food Expense', 'code'=>'203'],
        ['nombre'=>'Beverage Expense', 'code'=>'204'],
        ['nombre'=>'Fixed Labor Expense', 'code'=>'205'],
        ['nombre'=>'Variable Labor Expense', 'code'=>'206'],
        ['nombre'=>'Utility Expense', 'code'=>'207'],
        ['nombre'=>'Marketing Expense', 'code'=>'208'],
        ['nombre'=>'Rent Expense', 'code'=>'209'],
        ['nombre'=>'Accounts Payable', 'code'=>'301'],
        ['nombre'=>'Notes Payable', 'code'=>'302'],
        ['nombre'=>'Long Term Debt', 'code'=>'303'],
        ['nombre'=>'Dividends', 'code'=>'401'],
        ['nombre'=>'Retainend Earnings', 'code'=>'402'],
        ['nombre'=>'Owners Capital', 'code'=>'403'],
    ]

@endphp
@extends('welcome')
@section('pages')
<section id="financials" class="px-6 text-justify">

    <h1 class=" text-center my-4 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">
      Financials
    </h1>
    <section id="financials_intro" class="mx-auto w-full">
        <h2 class="text-base text-gray-600 font-semibold tracking-wide uppercase">
            The 305 Total Experience Financial statements
        </h2>
        <p class="mx-auto mb-6 mt-4 max-w-2xl text-md text-gray-500">
            The 305 Total Experience is committed to enhance the profitability of our subsidiaries and of our main corporation. please find attached a sample of one of our subsidiary’s income statement along with balance sheet and financial ratios.
        </p>

        <table class="table w-1/2 lg:w-1/3 mx-auto">
            <caption class="rounded-t-lg border-2 border-blue-500 text-blue-600 py-2 font-bold uppercase">List of Accounts</caption>
            <thead>
               <tr>
                   <th>Account</th>
                   <th class="text-center">Code</th>
               </tr>
            </thead>
            <tbody>
                @foreach ($accounts as $account)
                    <tr>
                        <td>{{$account['nombre']}}</td>
                        <td class="text-center">{{$account['code']}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>
</section>
@endsection

