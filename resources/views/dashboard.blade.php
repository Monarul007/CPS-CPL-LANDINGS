<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @if (session()->has('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>{{ session('success') }}</strong>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    <form action="{{'gen_settings'}}" method="POST" class="mt-4 col-6 m-auto" enctype="multipart/form-data">
                        @csrf
                        <div class="flex justify-center">
                            <div class="mb-3 w-full">
                                <label for="formFile" class="form-label inline-block mb-2 text-gray-700">Upload Logo</label>
                                <input class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border- focus:outline-none" name="logo" type="file" id="formFile">
                            </div>
                        </div>
                        <div class="flex justify-center">
                            <div class="mb-3 w-full">
                                <label for="formFile2" class="form-label inline-block mb-2 text-gray-700">Upload Favicon</label>
                                <input class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border- focus:outline-none" type="file" name="favicon" id="formFile2">
                            </div>
                        </div>
                        <label for="Web">WebSite Name</label>
                        <input type="text" class="form-control" name="web_name" value="{{ $setting->website_name }}" required>

                        <label for="Web">WebSite Title</label>
                        <input type="text" class="form-control" name="title" value="{{ $setting->title }}" required>

                        <label for="Web">WebSite Sub Title</label>
                        <input type="text" class="form-control" name="sub_title" value="{{ $setting->sub_title }}" required>
                        <div class="form-group">
                            <label for="design">Form Design</label>
                            <select class="form-control" name="design" id="design">
                                <option value="">Select Form Design</option>
                                <option value="form-1" {{ $setting->form == 'form-1' ? 'selected' : '' }}>Form 1</option>
                                <option value="form-2" {{ $setting->form == 'form-2' ? 'selected' : '' }}>Form 2</option>
                                <option value="form-3" {{ $setting->form == 'form-3' ? 'selected' : '' }}>Form 3</option>
                                <option value="form-4" {{ $setting->form == 'form-4' ? 'selected' : '' }}>Form 4</option>
                                <option value="form-5" {{ $setting->form == 'form-5' ? 'selected' : '' }}>Form 5</option>
                            </select>
                        </div>
                        <br>
                        <input type="submit" value="Update" class="btn btn-info float-end">
                    </form>

                    <br>
                    <br>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
