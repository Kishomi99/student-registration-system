@extends('layouts.app')

@section('content')
<div class=" bg-gray-800">
        <div class="h-16 px-8 flex items-center">
            <p class="text-white font-bold ">Student Registration System</p>
        </div>
    </div>
    
    <div class="flex max-w-2xl shadow border-b mx-auto bg-slate-100 h-screen">
        <div class="px-4 py-4 w-full">
            <div class=" font-bold text-3xl tracking-wider text-gray-700 my-5 ">
                <h1 class="text-center">Student Registration Form</h1>
            </div>
            <form action="{{ route('student.update', $student->id) }}" method="POST">
                <div class="flex items-center justify-between h-14 w-full ">
                    <label class="block text-gray-600 text-base font-semibold">
                        Name
                    </label>
                    <input type="text" name="name" value="{{ $student->stu_name }}" class=" rounded-md h-10 w-96 border  mt-2 p-2" />
                </div>
                <div class=" flex items-center justify-between h-14 w-full">
                    <label class="block text-gray-600 text-base font-semibold">
                        Email Address
                    </label>
                    <input type="email" name="email" value="{{ $student->email }}" class=" rounded-md h-10 w-96 border  mt-2 p-2  "  />
                </div>
                <div class="flex items-center justify-between h-14 w-full">
                    <label class=" block text-gray-600 text-base font-semibold">
                        Phone Number
                    </label>
                    <input type="text" name="phone_no" value="{{ $student->phone_no }}" class=" rounded-md h-10 w-96 border  mt-2 p-2" required/>
                </div>
                <div class="flex items-center justify-between h-14 w-full  ">
                    <label class=" block text-gray-600 text-base font-semibold ">
                        Gender
                    </label>
                    <div class='w-96 space-x-10 rounded-md h-10 border  mt-2 p-2 bg-white'>
                        <label class=" text-gray-600 text-base font-semibold">
                            <input type="radio" type="radio" name="gender"  />
                            Male
                        </label>
                        <label class="  text-gray-600 text-base font-semibold">
                            <input type="radio" name="gender" />
                            Female

                        </label>
                    </div>
                </div>
                <div class="flex items-center justify-between h-14 w-full">
                    <label class=" block text-gray-600 text-base font-semibold">
                        Date of Birth
                    </label>
                    <input type="date" name="dob" value="{{ $student->dob }}" class="rounded-md h-10 w-96 border  mt-2 p-2" required/>
                </div>
                <div class="flex items-center justify-between h-14 w-full">
                    <label class="block text-gray-600 text-base font-semibold">
                        Address
                    </label>
                    <textarea  name="address" value="{{ $student->address }}" class="rounded-md  w-96 border  mt-5 p-2" > </textarea >
                </div>
                <div class=" items-center justify-center h-14 w-full my-4 space-x-4 pt-4">
                    <button type="button" class=" rounded text-white bg-green-400 px-6 py-2 hover:bg-green-700"
                    >
                        Edit
                    </button>
                    
                </div>
            </form>
        </div>
    </div>
    
@endsection