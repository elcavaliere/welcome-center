@section('app-hero-title')
    Companies list
@endsection
<div class="wrapper w-11/12 py-5 mx-auto">
    <!-- This example requires Tailwind CSS v2.0+ -->
    <div class="flex flex-col">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class=" overflow-hidden ">
                    <div class="py-3 text-right"><a href="{{ route('companies.create') }}" class="bg-indigo-500 font-medium text-sm rounded-md px-4 py-2 text-white">Create a new company</a></div>
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Name
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Email
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                About
                            </th>
                            <th scope="col" class="relative px-6 py-3">
                                Actions
                                <span class="sr-only">Edit</span>
                            </th>
                        </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                        @foreach($companies as $company)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0 h-10 w-10">
                                            <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=4&w=256&h=256&q=60" alt="">
                                        </div>
                                        <div class="ml-4">
                                            <div class="text-sm font-medium text-gray-900">
                                                {{ $company->name }}
                                            </div>
                                        </div>
                                    </div>
                                </td>

                                <td class="px-6 py-4 whitespace-nowrap">
                                    {{ $company->email }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    {{ \Illuminate\Support\Str::limit($company->description,50) }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium divide-x-2">
                                    <a href="{{ route('companies.edit',['company'=>$company]) }}" class="text-indigo-600 hover:text-indigo-900 space-x-2">Edit</a>
                                    <a href="{{ route('companies.show',['company'=>$company]) }}" class="text-indigo-600 hover:text-indigo-900 space-x-2">Profile</a>
                                </td>
                            </tr>
                        @endforeach


                        <!-- More people... -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="my-4">
    </div>
</div>
