
@extends('layouts.app')

@section('content')

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
                        
                   
                    <tr key={employee.id}>
                        <td class="text-left px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-500">{{$student->stu_name}}</div>
                        </td>
                        <td class="text-left px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-500">{{$student->email}}</div>
                        </td>
                        <td class="text-left px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-500">{{$student->phone_no}}</div>
                        </td>
                        <td class="text-left px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-500">{{$student->gender}}</div>
                        </td>
                        <td class="text-left px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-500">{{$student->dob}}</div>
                        </td>
                        <td class="text-left px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-500">{{$student->address}}</div>
                        </td>
                        <td class=" text-right px-6 py-4 whitespace-nowrap font-medium text-sm space-x-4">
                            <a href="{{  route('employee.edit', $employee->id) }}" class="rounded text-white bg-green-400  py-2 hover:bg-green-700 px-4 hover:cursor-pointer ">
                                Edit
                            </a>
                            <a href="#" class=" rounded text-white bg-red-400 py-2 hover:bg-red-700 px-4 hover:cursor-pointer">
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
