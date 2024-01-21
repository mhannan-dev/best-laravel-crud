<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            <a href="{{ route('offer.create') }}">
                {{ __('Create') }}
            </a>
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100 relative">
                    <table class="w-full bg-white border border-gray-300 mt-10">

                        <thead>
                            <tr>
                                <th class="py-2 px-4 border-b">ID</th>
                                <th class="py-2 px-4 border-b">Name</th>
                                <th class="py-2 px-4 border-b">Email</th>
                                <th class="py-2 px-4 border-b">Role</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="py-2 px-4 border-b">1</td>
                                <td class="py-2 px-4 border-b">John Doe</td>
                                <td class="py-2 px-4 border-b">john@example.com</td>
                                <td class="py-2 px-4 border-b">Admin</td>
                            </tr>
                            <tr>
                                <td class="py-2 px-4 border-b">2</td>
                                <td class="py-2 px-4 border-b">Jane Doe</td>
                                <td class="py-2 px-4 border-b">jane@example.com</td>
                                <td class="py-2 px-4 border-b">User</td>
                            </tr>
                            <!-- Add more rows as needed -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
