<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Post') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form action="{{ route('post.store') }}" method="post">
                @csrf
                <input type="hidden" name="id_user" value="{{$user->id}}">
                <div class="row">
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="nama" class="form-label">Title</label>
                            <input type="text" required="required" name="title" class="form-control" id="nama">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="nama" class="form-label">category</label>
                            <select type="text" required="required" name="category" class="form-control" id="nama">
                                <option value="html">HTML</option>
                                <option value="css">CSS</option>
                                <option value="php">PHP</option>
                                <option value="js">JS</option>
                                <option value="sql">SQL</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="nama" class="form-label">level</label>
                            <select type="text"  required="required" name="level" class="form-control" id="nama">
                                <option value="mudah">Mudah</option>
                                <option value="menengah">Menengah</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-3">
                            <input type="checkbox" id="tool" name="tool[]" value="vscode">
                            <label for="tool"> VSCode</label><br>
                            <input type="checkbox" id="tool" name="tool[]" value="html">
                            <label for="tool"> HTML</label><br>
                            <input type="checkbox" id="tool" name="tool[]" value="nodejs">
                            <label for="tool"> NodeJs</label><br>
                            <input type="checkbox" id="tool" name="tool[]" value="react">
                            <label for="tool"> React</label><br>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="nama" class="form-label">content</label>
                            <input type="text" name="content" class="form-control" id="nama">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="nama" class="form-label">id Yt</label>
                            <input type="text" name="id_yt" class="form-control" id="nama">
                        </div>
                    </div>
                    <div class="col-6"></div>


                        <div class="mb-3">
                            <button type="submit" class="btn btn-outline-success">Simpan Data</button>
                        </div>
                    </div>
                </div>

            </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>



