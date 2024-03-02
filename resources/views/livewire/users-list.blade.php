<section class="container px-4 mx-auto">
    <div class="flex flex-col">
        <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                <div class="overflow-hidden border border-gray-200 white:border-gray-700 md:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200 white:divide-gray-700">
                        <thead class="bg-gray-50 white:bg-gray-800">
                            <tr>
                                <th scope="col"
                                    class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 white:text-gray-400">
                                    Name
                                </th>

                                <th scope="col"
                                    class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 white:text-gray-400">
                                    Email
                                </th>

                                <th scope="col"
                                    class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 white:text-gray-400">
                                    Joined
                                </th>

                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200 white:divide-gray-700 white:bg-gray-900">
                            @foreach ($users as $user)
                                <tr>
                                    <td class="px-4 py-4 text-sm text-gray-500 white:text-gray-300 whitespace-nowrap">
                                        {{ $user->name }}</td>
                                    <td class="px-4 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                        <div
                                            class="inline-flex items-center px-3 py-1 text-red-500 rounded-full gap-x-2 bg-red-100/60 white:bg-gray-800">

                                            {{ $user->email }}
                                        </div>
                                    </td>
                                    <td class="px-4 py-4 text-sm text-gray-500 white:text-gray-300 whitespace-nowrap">
                                        <div class="flex items-center gap-x-2">
                                            {{ $user->created_at }}
                                            {{-- <img class="object-cover w-8 h-8 rounded-full"
                                                src="https://images.unsplash.com/photo-1531590878845-12627191e687?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=764&q=80"
                                                alt="">
                                            <div>
                                                <h2 class="text-sm font-medium text-gray-800 white:text-white ">Andi
                                                    Lane</h2>
                                                <p class="text-xs font-normal text-gray-600 white:text-gray-400">
                                                    andi@example.com</p>
                                            </div> --}}
                                        </div>
                                    </td>

                                </tr>
                            @endforeach


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="flex items-center justify-between mt-6">
        {{ $users->links('vendor.livewire.test') }}
    </div>
</section>
