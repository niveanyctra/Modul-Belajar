<div class="sidebar-kelas">
    <form method="post" action="" >
        <h3 class="py-2 fw-bolder">Urutkan</h3>
            <div class="form-check">
                {{-- <label for=""> --}}
                    <input class="form-check-input" type="radio" onclick="javascript:levelCheck();" name="level" id="noCheck" checked>
                {{-- </label> --}}
                <label class="form-check-label mb-2" style="display: block;" for="noCheck">
                    Semua
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" onclick="javascript:levelCheck();" name="level" id="mudahCheck">
                <label class="form-check-label mb-2"  style="display: block;" for="mudahCheck">
                    Mudah
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" onclick="javascript:levelCheck();" name="level" id="menengahCheck">
                <label class="form-check-label mb-2"  style="display: block;" for="menengahCheck">
                    Menengah
                </label>
            </div>
    </form>
</div>

{{-- <div class="col-lg-2 col-12 d-none d-lg-block course-filter">
    <div id="content" class="mt-30 follow-scroll" style="position: relative; transition: all 600ms linear 0s;">
        <div class="item-filter">
            <h3 class="head">Sort</h3>
            <div class="child">
                <label for="" class="container-inp">
                    <input type="radio" name="sort" autocomplete="off" value="recent" id="reRelease" class="nd-checkbox">
                </label>
                <label for="reRelease" class="label"> Baru Rilis </label>
            </div>
        </div>
    </div>
</div>
<script src="https://buildwithangga.com/js/catalogue-courses.js"></script> --}}
