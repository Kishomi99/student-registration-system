@extends('layouts.app')

@section('content')

    
    <div class="flex max-w-2xl shadow border-b mx-auto bg-slate-100 h-screen">
        <div class="px-4 py-4 w-full">
            <div class=" font-bold text-3xl tracking-wider text-gray-700 my-5 ">
                <h1 class="text-center">Student Registration Form</h1>
            </div>
           
            <form action="{{ route('students.update', $student->id) }}" method="POST">
                @csrf
                @method('PUT')
                              
                <div class="flex items-center justify-between h-14 w-full mb-2">
                    <label class="block text-gray-600 text-base font-semibold">
                        Name
                    </label>
                    <div>
                    <input type="text" name="stu_name"  class=" rounded-md h-10 w-96 border  mt-2 p-2 
                    @error('stu_name') border-red-500 @enderror" 
                    value="{{ old('stu_name', $student->stu_name) }}"/>
                    @error('stu_name')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class=" flex items-center justify-between h-14 w-full mb-2">
                    <label class="block text-gray-600 text-base font-semibold">
                        Email Address
                    </label>
                    <div>
                    <input type="email" name="email"  class=" rounded-md h-10 w-96 border  mt-2 p-2  
                    @error('email') border-red-500 @enderror" 
                    value="{{ old('email', $student->email)}}" />
                    @error('email')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="flex items-center justify-between h-14 w-full mb-2">
                    <label class=" block text-gray-600 text-base font-semibold">
                        Phone Number
                    </label>
                    <div>
                    <input type="text" name="phone_no"  class=" rounded-md h-10 w-96 border  mt-2 p-2" 
                    @error('phone_no') border-red-500 @enderror
                    value="{{ old('phone_no', $student->phone_no)}}"/>
                    @error('phone_no')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="flex items-center justify-between h-14 w-full  ">
                    <label class=" block text-gray-600 text-base font-semibold " >
                        Gender
                    </label>
                    <div class='w-96 space-x-10 rounded-md h-10 border  mt-2 p-2 bg-white'>
                        <label class=" text-gray-600 text-base font-semibold">
                            <input type="radio" type="radio" name="gender"  
                            value="male" {{ $student->gender === 'male' ? 'checked' : '' }}/>
                            Male
                        </label>
                        <label class="  text-gray-600 text-base font-semibold">
                            <input type="radio" name="gender" 
                            value="female" {{ $student->gender === 'female' ? 'checked' : '' }}/>
                            Female

                        </label>
                    </div>
                </div>
                <div class="flex items-center justify-between h-14 w-full mb-4">
                    <label class=" block text-gray-600 text-base font-semibold">
                        Date of Birth
                    </label>
                    <div>
                    <input type="date" name="dob"  class="rounded-md h-10 w-96 border  mt-2 p-2"
                    @error('dob') border-red-500 @enderror
                    value="{{ old('dob', $student->dob)}}"/>
                    @error('dob')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="flex items-center justify-between h-14 w-full ">
                    <label class="block text-gray-600 text-base font-semibold">
                        Address
                    </label>
                    <div>
                    <textarea  name="address"  class="rounded-md  w-96 border  mt-5 p-2
                    @error('address') border-red-500 @enderror" >{{ old('address', $student->address)}} </textarea >
                    @error('address')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class=" items-center justify-center h-14 w-full my-4 space-x-4 pt-4">
                    <button type="submit" class=" rounded text-white bg-green-400 px-6 py-2 hover:bg-green-700"
                    >
                        Update
                    </button>
                    
                </div>
            </form>
        </div>
    </div>
    
@endsection