<div class="sidebar-kelas">
    <form method="post" action="" >
        <h3 class="py-2 fw-bolder">Urutkan</h3>
            <div class="form-check">
                <input class="form-check-input" type="radio" onclick="javascript:levelCheck();" name="level" id="noCheck" checked>
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
<div class="modal bg-white" tabindex="-1" aria-labelledby="..." aria-hidden="true" id="options">
    <div class="container">

        <form action="" method="get">
            <h3 class="py-2 fw-bolder">Urutkan</h3>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="level" value="" id="noCheck" checked>
                <label class="form-check-label mb-2" style="display: block;" for="noCheck">
                    Semua
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="level" value="mudah" id="mudahCheck">
                <label class="form-check-label mb-2"  style="display: block;" for="mudahCheck">
                    Mudah
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="level" value="menengah" id="menengahCheck">
                <label class="form-check-label mb-2"  style="display: block;" for="menengahCheck">
                    Menengah
                </label>
            </div>
            <button type="submit" class="btn btn-primary">Filter</button>
        </form>
    </div>
</div>
<a id="btn-filter" href="#" class="btn btn-secondary btn-filter d-block d-xl-none" data-bs-toggle="modal" data-bs-target="#options">Filter Catalog</a>

