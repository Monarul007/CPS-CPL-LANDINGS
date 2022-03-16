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

                    <form action="{{'design_settings'}}" method="POST" class="mt-4 col-6 m-auto" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group mb-2">
                            <label for="design">Form Design</label>
                            <select class="form-control" name="design" id="design" required>
                                <option value="">Select Form Design</option>
                                <option value="form-1">Form 1</option>
                                <option value="form-2">Form 2</option>
                                <option value="form-3">Form 3</option>
                                <option value="form-4">Form 4</option>
                                <option value="form-5">Form 5</option>
                            </select>
                        </div>
                        <div id="hideseek">
                            <div class="flex justify-center">
                                <div class="mb-3 w-full">
                                    <label for="formFile2" class="form-label inline-block mb-2 text-gray-700">Upload <span id="bgbody"></span> Body Background Image</label>
                                    <input class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border- focus:outline-none" type="file" name="body_bg" id="formFile2" required>
                                </div>
                            </div>
                            <div class="flex justify-center">
                                <div class="mb-3 w-full">
                                    <label for="formFile1" class="form-label inline-block mb-2 text-gray-700">Upload <span id="bgform"></span> Background Image <span id="bgbody"></span></label>
                                    <input class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border- focus:outline-none" type="file" name="form_bg" id="formFile1" required>
                                </div>
                            </div>
                            <label for="text1">Form Text 1</label>
                            <input type="text" class="form-control" name="text1" value="{{ $design->form_text1 ?? 'You are on the best place for meeting new people nearby! Chat, Flirt, Socialize and have Fun!' }}" required>

                            <label for="text2">Form Text 2</label>
                            <input type="text" class="form-control" name="text2" value="{{ $design->form_text2 ?? 'Meet amazing people nearby Waiting for you...!' }}" required>
                        </div>
                        <br>
                        <input type="submit" value="Update" class="btn btn-info float-end">
                    </form>
                    <br>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>