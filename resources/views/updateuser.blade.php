@extends('layouts.main')
@section('title')
    UPDATE PROFILE
@endsection
@section('content')
<div class="flex grow items-center justify-center p-12">
    <div class="mx-auto w-full max-w-[550px]">
        <h1 class="text-3xl font-semibold text-gray-800 text-center mb-8 capitalize lg:text-4xl">Update User</h1>
        <form action="" method="POST" enctype="multipart/form-data" class=" p-7 bg-slate-100 rounded">
            @csrf
            <div class="mb-5">


            <input
                type="text"
                name="user_id"
                id="name"
                autocomplete="on"
                placeholder="user_id"
                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                value=""
                hidden

            />
            <label
                for="name"
                class="mb-3 block text-base font-medium text-[#07074D]"
            >
                Promo Details
            </label>
            <input
                type="text"
                name="promo_name"
                id="name"
                autocomplete="on"
                placeholder="Promo Name"
                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 mb-3  text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                value=""

            />

            <input
                type="number"
                name="promo_code"
                id="name"
                autocomplete="on"
                placeholder="Promo Code"
                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 mb-3  text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                value=""

            />

            <input
                type="number"
                name="promo_total"
                id="name"
                autocomplete="on"
                placeholder="Promo Total"
                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6  text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                value=""

            />

            </div>

            <div class="form-group form-check mb-5">
                <label
                    for="name"
                    class="mb-3 block text-base font-medium text-[#07074D]"
                >
                    Promo Expiry Date
                </label>
                <input
                type="datetime-local"
                name="promo_expiry"
                id="name"
                autocomplete="on"
                placeholder="Promo Expiry"
                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6  mb-3 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"

            />
            </div>


            <div>
            <button
                class="hover:shadow-form rounded-md bg-[#6A64F1] py-3 px-8 text-base font-semibold text-white outline-none"
            >
                Add
            </button>
            </div>
        </form>
    </div>
</div>
    @endsection @section('scripts')
@endsection
