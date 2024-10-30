@extends('layouts.forms')

@section('content')
    <form method="POST" action="" class="w-4/5 min-h-[600px] bg-secondary px-9 gap-4 flex justify-center flex-col rounded-2xl">
        @csrf
        <h2 class="text-2xl text-white font-bold text-center">Report Bug</h2>
        <div class="flex gap-3">
            <label for="" class="w-1/2 flex flex-col text-white gap-1">
                <span class="text-lg font-light">App Code:</span>
                <input type="text" pattern="^\d{3}-\d{3}$"  class="w-full rounded-lg bg-inputs text-black" required>
            </label>
            <label for="" class="w-1/2 flex flex-col text-white gap-1">
                <span class="text-lg font-light">Email:</span>
                <input type="email" class="w-full rounded-lg bg-inputs text-black" required>
            </label>
        </div>
        <label for="" class="w-full flex flex-col text-white gap-1">
            <span class="text-lg font-light">Title:</span>
            <input type="text" class="w-full rounded-lg bg-inputs text-black" required>
        </label>
        <label for="" class="w-full flex flex-col text-white gap-1">
            <span class="text-lg font-light">Description:</span>
            <textarea class="w-full h-52 rounded-lg bg-inputs text-black p-2 resize-none" required></textarea>
        </label>
        <div class="w-full flex justify-between items-center">
            <label for="file" class="w-56 h-16 border border-primary rounded-full flex justify-center items-center shadow-[0_0_25px] shadow-primary hover:cursor-pointer">
                <i class="fa-solid fa-file-image fa-2x text-white "></i>
                <input type="file" name="" id="file" class="hidden" accept=".jpg, .jpeg, .png">
            </label>
            <input type="submit" class="w-56 h-16 bg-primary rounded-full flex items-center justify-center text-white text-2xl font-light shadow-[0_0_25px] shadow-primary hover:cursor-pointer" value="Send">
        </div>
    </form>
@endsection