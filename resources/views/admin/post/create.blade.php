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
                    <div class="mx-5">
                        <div class="mb-3">
                            <label for="nama" class="form-label">Title</label>
                            <input type="text" required="required" name="title" class="form-control" id="nama">
                        </div>
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
                        <div class="mb-3">
                            <label for="nama" class="form-label">level</label>
                            <select type="text"  required="required" name="level" class="form-control" id="nama">
                                <option value="mudah">Mudah</option>
                                <option value="menengah">Menengah</option>
                            </select>
                        </div>
                                                    @error('tool')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        <div class="mb-3">
                            <label for="tool">Tool</label>
                            <div class="row">
                                <div class="col-3">
                                    <label for="tool">
                                    <input type="checkbox" id="tool" name="tool[]" value="vscode">
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
                        <div class="mb-3">
                            <label for="nama" class="form-label">About</label>
                            <style>
                                ul{
                                    list-style: inherit;
                                }
                                ol{
                                    list-style: block;
                                }
                            </style>
                            <input id="x" type="hidden" name="about" value="" />
                            <trix-editor input="x" class="trix-content form-control"></trix-editor>
                        </div>
                            @error('video_id')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        <div class="mb-3">
                            <label for="nama" class="form-label">Link YouTube</label>
                            <input type="text" name="id_yt" class="form-control" required="required" id="nama">
                        </div>


                        <div class="mb-3">
                            <button type="submit" class="btn btn-outline-success">Simpan Data</button>
                        </div>

                    </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>



