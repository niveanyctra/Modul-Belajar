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
                    <form action="{{ route('post.update',$post->id) }}" method="post">
                @csrf
                @method('put')
                <input type="hidden" name="id_user" value="{{$post->id_user}}">
                <div class="mx-5">
                        <div class="mb-3">
                            <label for="nama" class="form-label">Title</label>
                            <input type="text" name="title" class="form-control" id="nama" required="required" value="{{old('title')??$post->title}}">
                        </div>
                        <div class="mb-3">
                            <label for="nama" class="form-label">Category</label>
                            <select type="text" name="category" class="form-control" id="nama">
                                <option value="{{old('category')??$post->category}}">{{old('category')??$post->category}}</option>
                                <option value="" disabled>-------</option>
                                <option value="html">HTML</option>
                                <option value="css">CSS</option>
                                <option value="php">PHP</option>
                                <option value="js">JS</option>
                                <option value="sql">SQL</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="nama" class="form-label">Level</label>
                            <div class="row">
                                <div class="col-3">
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input" name="level" value="mudah" @if (str_contains($post->level,"mudah")) checked @endif>
                                        <label for="level" class="form-check-label">Mudah</label>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input" name="level" value="menengah" @if (str_contains($post->level,"menengah")) checked @endif>
                                        <label for="level" class="form-check-label">Menengah</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="tool">Tool</label>
                            <div class="row">
                                <div class="col-3">
                                    <label for="tool">
                                    <input type="checkbox" id="tool" name="tool[]" @if(str_contains($post->tool,"vscode")) checked @endif value="vscode" checked>
                                    VSCode</label>
                                </div>
                                <div class="col-3">
                                    <label for="tool">
                                    <input type="checkbox" id="tool" name="tool[]" @if(str_contains($post->tool,"html")) checked @endif value="html">
                                    HTML</label>
                                </div>
                                <div class="col-3">
                                    <label for="tool">
                                    <input type="checkbox" id="tool" name="tool[]" @if(str_contains($post->tool,"nodejs")) checked @endif value="nodejs">
                                    NodeJs</label>
                                </div>
                                <div class="col-3">
                                    <label for="tool">
                                    <input type="checkbox" id="tool" name="tool[]" @if(str_contains($post->tool,"react")) checked @endif value="react">
                                    React</label>
                                </div>
                                <div class="col-3">
                                    <label for="tool">
                                    <input type="checkbox" id="tool" name="tool[]" @if(str_contains($post->tool,"github")) checked @endif value="github">
                                    GitHub</label>
                                </div>
                                <div class="col-3">
                                    <label for="tool">
                                    <input type="checkbox" id="tool" name="tool[]" @if(str_contains($post->tool,"css")) checked @endif value="css">
                                    CSS</label>
                                </div>
                                <div class="col-3">
                                    <label for="tool">
                                    <input type="checkbox" id="tool" name="tool[]" @if(str_contains($post->tool,"bootstrap")) checked @endif value="bootstrap">
                                    Bootstrap</label>
                                </div>
                                <div class="col-3">
                                    <label for="tool">
                                    <input type="checkbox" id="tool" name="tool[]" @if(str_contains($post->tool,"laravel")) checked @endif value="laravel">
                                    Laravel</label>
                                </div>
                                <div class="col-3">
                                    <label for="tool">
                                    <input type="checkbox" id="tool" name="tool[]" @if(str_contains($post->tool,"tailwind")) checked @endif value="tailwiind">
                                    TailWind</label>
                                </div>
                                <div class="col-3">
                                    <label for="tool">
                                    <input type="checkbox" id="tool" name="tool[]" @if(str_contains($post->tool,"xampp")) checked @endif value="xampp">
                                    XAMPP</label>
                                </div>
                                <div class="col-3">
                                    <label for="tool">
                                    <input type="checkbox" id="tool" name="tool[]" @if(str_contains($post->tool,"figma")) checked @endif value="figma">
                                    Figma</label>
                                </div>
                                <div class="col-3">
                                    <label for="tool">
                                    <input type="checkbox" id="tool" name="tool[]" @if(str_contains($post->tool,"js")) checked @endif value="js">
                                    JavaScript</label>
                                </div>
                                <div class="col-3">
                                    <label for="tool">
                                    <input type="checkbox" id="tool" name="tool[]" @if(str_contains($post->tool,"php")) checked @endif value="php">
                                    PHP</label>
                                </div>
                                <div class="col-3">
                                    <label for="tool">
                                    <input type="checkbox" id="tool" name="tool[]" @if(str_contains($post->tool,"browser")) checked @endif value="browser">
                                    Browsers</label>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="nama" class="form-label">About</label>
                            <input id="x" type="hidden" name="about" value="{{old('about')??$post->about}}" />
                            <trix-editor input="x" class="trix-content form-control"></trix-editor>
                        </div>
                        <div class="mb-3">
                            <label for="nama" class="form-label">ID YouTube</label>
                            <input type="text" name="id_yt" class="form-control" required="required" id="nama" value="{{old('id_yt')??$post->id_yt}}">
                        </div>
                    


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



