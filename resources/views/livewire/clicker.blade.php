<div>
    @if (session('success'))
        <span class="px-3 py-3 bg-green-600 text-white  rounded">{{ session('success') }}</span>
    @endif
    <div class="flex items-center justify-center p-12">
        <div class="mx-auto w-full max-w-[550px]">
            <form wire:submit='createNewUser' action="">
                <div class="mb-5">
                    <label for="name" class="mb-3 block text-base font-medium text-[#07074D]">
                        Full Name
                    </label>
                    <input type="text" wire:model='name' name="name" id="name" placeholder="Full Name"
                        class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    @error('name')
                        <span class="text-red-500 text-xs">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="email" class="mb-3 block text-base font-medium text-[#07074D]">
                        Email Address
                    </label>
                    <input type="email" wire:model='email' name="email" id="email"
                        placeholder="example@domain.com"
                        class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    @error('email')
                        <span class="text-red-500 text-xs">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="subject" class="mb-3 block text-base font-medium text-[#07074D]">
                        Password
                    </label>
                    <input type="password" wire:model='password' name="password" id="subject"
                        placeholder="Enter Password"
                        class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    @error('password')
                        <span class="text-red-500 text-xs">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="subject" class="mb-3 block text-base font-medium text-[#07074D]">
                        Profile Picture
                    </label>
                    <input wire:model='image' type="file" id="image" placeholder="Enter Password"
                        class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    @error('image')
                        <span class="text-red-500 text-xs">{{ $message }}</span>
                    @enderror
                    @if ($image)
                        <input type="image" class="rounded w-10 h-10 mt-5 block" src="{{ $image->temporaryUrl() }}"
                            alt="">
                    @endif
                    <div wire:loading wire:target='image'>
                        <span class="text-green-500">Uploading...</span>
                    </div>
                </div>
                <div>
                    <button
                        class="hover:shadow-form rounded-md bg-[#6A64F1] py-3 px-8 text-base font-semibold text-white outline-none">
                        Submit
                    </button>
                </div>
            </form>
        </div>
    </div>
    <hr>

</div>
