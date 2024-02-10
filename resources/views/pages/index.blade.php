@extends('layouts.app')

@section('content')

    <body>
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
                <form action="{{ route('student.store') }}" method="POST">
                    @csrf
                    <div class="flex items-center justify-between h-14 w-full ">
                        <label class="block text-gray-600 text-base font-semibold">
                            Name
                        </label>
                        <input type="text" name="stu_name" class=" rounded-md h-10 w-96 border  mt-2 p-2" required />
                    </div>
                    <div class=" flex items-center justify-between h-14 w-full">
                        <label class="block text-gray-600 text-base font-semibold">
                            Email Address
                        </label>
                        <input type="email" name="email" class=" rounded-md h-10 w-96 border  mt-2 p-2  " required />
                    </div>
                    <div class="flex items-center justify-between h-14 w-full">
                        <label class=" block text-gray-600 text-base font-semibold">
                            Phone Number
                        </label>
                        <input type="text" name="phone_no" class=" rounded-md h-10 w-96 border  mt-2 p-2" required />
                    </div>
                    <div class="flex items-center justify-between h-14 w-full  ">
                        <label class=" block text-gray-600 text-base font-semibold ">
                            Gender
                        </label>
                        <div class='w-96 space-x-10 rounded-md h-10 border  mt-2 p-2 bg-white'>
                            <label class=" text-gray-600 text-base font-semibold">
                                <input type="radio" type="radio" name="gender" />
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
                        <input type="date" name="dob" class="rounded-md h-10 w-96 border  mt-2 p-2" required />
                    </div>
                    <div class="flex items-center justify-between h-14 w-full">
                        <label class="block text-gray-600 text-base font-semibold">
                            Address
                        </label>
                        <textarea name="address" class="rounded-md  w-96 border  mt-5 p-2"> </textarea>
                    </div>
                    <div class=" items-center justify-center h-14 w-full my-4 space-x-4 pt-4">
                        <button type="button" class=" rounded text-white bg-green-400 px-6 py-2 hover:bg-green-700">
                            Save
                        </button>

                    </div>
                </form>
            </div>
        </div>

        {{-- list --}}
        <div class=" container mx-auto my-8">
            <div class="h-12">
                <button class="rounded bg-slate-600 text-white px-6 py-2 font-semibold mx-5">
                    Add Student
                </button>
            </div>
            <div class="flex shadow border-b">
                <table class="min-w-full">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="text-left font-medium text-gray-500 uppercase tracking-wider py-3 px-6">student Name
                            </th>
                            <th class="text-left font-medium text-gray-500 uppercase tracking-wider py-3 px-6">Email</th>
                            <th class="text-left font-medium text-gray-500 uppercase tracking-wider py-3 px-6">Phone Number
                            </th>
                            <th class="text-left font-medium text-gray-500 uppercase tracking-wider py-3 px-6">Gender</th>
                            <th class="text-left font-medium text-gray-500 uppercase tracking-wider py-3 px-6">Date of Birth
                            </th>
                            <th class="text-left font-medium text-gray-500 uppercase tracking-wider py-3 px-6">Address</th>
                            <th class="text-right font-medium text-gray-500 uppercase tracking-wider py-3 px-6">
                                Actions
                            </th>
                        </tr>
                    </thead>

                    <tbody class="bg-white ">
                        @foreach ($students as $key => $student)
                            <tr>
                                <td class="text-left px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-500">{{ $student->stu_name }}</div>
                                </td>
                                <td class="text-left px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-500">{{ $student->email }}</div>
                                </td>
                                <td class="text-left px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-500">{{ $student->phone_no }}</div>
                                </td>
                                <td class="text-left px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-500">{{ $student->gender }}</div>
                                </td>
                                <td class="text-left px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-500">{{ $student->dob }}</div>
                                </td>
                                <td class="text-left px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-500">{{ $student->address }}</div>
                                </td>
                                <td class=" text-right px-6 py-4 whitespace-nowrap font-medium text-sm space-x-4">
                                    <a href="{{ route('employee.edit', $employee->id) }}"
                                        class="rounded text-white bg-green-400  py-2 hover:bg-green-700 px-4 hover:cursor-pointer ">
                                        Edit
                                    </a>
                                    <a href="#"
                                        class=" rounded text-white bg-red-400 py-2 hover:bg-red-700 px-4 hover:cursor-pointer">
                                        Delete
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>

                </table>
                
            </div>
        </div>
    @endsection
