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
                <input type="text" name="id_user" value="{{$post->users->id}}">
                <div class="row">
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="nama" class="form-label">Title</label>
                            <input type="text" name="title" class="form-control" id="nama" value="{{old('title')??$post->title}}">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="nama" class="form-label">category</label>
                            <select type="text" name="category" class="form-control" id="nama">
                                <option value="{{old('category')??$post->category}}">{{old('category')??$post->category}}</option>
                                <option value="" disabled>-------</option>
                                <option value="html">HTML</option>
                                <option value="css">css</option>
                                <option value="php">php</option>
                                <option value="js">js</option>
                                <option value="mysql">mysql</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="nama" class="form-label">level</label>
                            <select type="text" name="level" class="form-control" id="nama" value="">
                                <option value="{{old('level')??$post->level}}">{{old('level')??$post->level}}</option>
                                <option value="" disabled>-------</option>
                                <option value="mudah">Mudah</option>
                                <option value="menengah">Menengah</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="nama" class="form-label">tool</label>
                            <input type="text" name="tool" class="form-control" id="nama" value="{{old('tool')??$post->tool}}">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="nama" class="form-label">content</label>
                            <input type="text" name="content" class="form-control" id="nama" value="{{old('content')??$post->content}}">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="nama" class="form-label">id Yt</label>
                            <input type="text" name="id_yt" class="form-control" id="nama" value="{{old('id_yt')??$post->id_yt}}">
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



