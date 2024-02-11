@extends('layouts.app')

@section('content')
    <div class=" container mx-auto my-8">
        <div class="h-12">
            <button type="button" class="rounded bg-slate-600 text-white px-6 py-2 font-semibold mx-5">
                <a href="{{ route('students.create') }}">Add Student</a>
            </button>
        </div>
        @if (session('success'))
            <div id="success-alert" class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                <strong class="font-bold">Success!</strong>
                <span class="block sm:inline">{{ session('success') }}</span>
            </div>
        @endif
        @if (session('delete'))
            <div id="success-alert" class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                <strong class="font-bold">Deleted!</strong>
                <span class="block sm:inline">{{ session('delete') }}</span>
            </div>
        @endif
        @if (session('update'))
            <div id="success-alert" class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                <strong class="font-bold">Update!</strong>
                <span class="block sm:inline">{{ session('update') }}</span>
            </div>
        @endif 
        <div class="flex shadow border-b">

            <table class="min-w-full">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="text-left font-medium text-gray-500 uppercase tracking-wider py-3 px-6">ID
                        </th>
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
                    @foreach ($students as $student)
                        <tr>
                            <td class="text-left px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-500">{{ $loop->iteration }}</div>
                            </td>
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
                            <td class="flex text-right px-6 py-4 whitespace-nowrap font-medium text-sm space-x-4">
                                <a href="{{ route('students.edit', $student->id) }}"
                                    class="rounded text-white bg-green-400  py-2 hover:bg-green-700 px-4 hover:cursor-pointer ">
                                    Edit
                                </a>
                                <form action="{{ route('students.destroy', $student->id) }}" method="POST"
                                    onsubmit="return confirm('Are you sure you want to delete this student?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="rounded text-white bg-red-400 py-2 hover:bg-red-700 px-4">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
    </div>
@endsection
@section('js')
<script>
    // Wait for the document to be fully loaded
    document.addEventListener("DOMContentLoaded", function() {
        // Show the success message
        var successAlert = document.getElementById('success-alert');
        successAlert.classList.remove('hidden');

        // Hide the success message after 5 seconds
        setTimeout(function() {
            successAlert.classList.add('hidden');
        }, 2000); 
    });
</script>

@endsection