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
                            <input type="text" name="title" class="form-control" id="nama" required="required">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="nama" class="form-label">Category</label>
                            <select type="text" name="category" class="form-control" id="nama">
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
                            <label for="nama" class="form-label">Level</label>
                            <div class="row">
                                <div class="col-3">
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input" name="level" value="mudah" checked>
                                        <label for="level" class="form-check-label">Mudah</label>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input" name="level" value="menengah">
                                        <label for="level" class="form-check-label">Menengah</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="tool">Tool</label>
                            <div class="row">
                                <div class="col-3">
                                    <label for="tool">
                                    <input type="checkbox" id="tool" name="tool[]" value="vscode" checked>
                                    VSCode</label>
                                </div>
                                <div class="col-3">
                                    <label for="tool">
                                    <input type="checkbox" id="tool" name="tool[]" value="html">
                                    HTML</label>
                                </div>
                                <div class="col-3">
                                    <label for="tool">
                                    <input type="checkbox" id="tool" name="tool[]" value="nodejs">
                                    NodeJs</label>
                                </div>
                                <div class="col-3">
                                    <label for="tool">
                                    <input type="checkbox" id="tool" name="tool[]" value="react">
                                    React</label>
                                </div>
                                <div class="col-3">
                                    <label for="tool">
                                    <input type="checkbox" id="tool" name="tool[]" value="github">
                                    Git Hub</label>
                                </div>
                                <div class="col-3">
                                    <label for="tool">
                                    <input type="checkbox" id="tool" name="tool[]" value="css">
                                    CSS</label>
                                </div>
                                <div class="col-3">
                                    <label for="tool">
                                    <input type="checkbox" id="tool" name="tool[]" value="bootstrap">
                                    Bootstrap</label>
                                </div>
                                <div class="col-3">
                                    <label for="tool">
                                    <input type="checkbox" id="tool" name="tool[]" value="laravel">
                                    Laravel</label>
                                </div>
                                <div class="col-3">
                                    <label for="tool">
                                    <input type="checkbox" id="tool" name="tool[]" value="tailwiind">
                                    TailWind</label>
                                </div>
                                <div class="col-3">
                                    <label for="tool">
                                    <input type="checkbox" id="tool" name="tool[]" value="xampp">
                                    XAMPP</label>
                                </div>
                                <div class="col-3">
                                    <label for="tool">
                                    <input type="checkbox" id="tool" name="tool[]" value="figma">
                                    Figma</label>
                                </div>
                                <div class="col-3">
                                    <label for="tool">
                                    <input type="checkbox" id="tool" name="tool[]" value="js">
                                    JavaScript</label>
                                </div>
                                <div class="col-3">
                                    <label for="tool">
                                    <input type="checkbox" id="tool" name="tool[]" value="php">
                                    PHP</label>
                                </div>
                                <div class="col-3">
                                    <label for="tool">
                                    <input type="checkbox" id="tool" name="tool[]" value="browser">
                                    Browers</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="nama" class="form-label">About</label>
                            <textarea type="text" name="about" class="form-control" required="required" id="nama"></textarea><br>
                            <button type="button" onclick="document.getElementById('demo').style.display='block'">Paragraf 2 (Pencet Bila Perlu)</button>
                            <textarea type="text" name="about2" class="form-control" required="required" id="demo" style="display:none"></textarea>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="nama" class="form-label">id Yt</label>
                            <input type="text" name="id_yt" class="form-control" required="required" id="nama">
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



