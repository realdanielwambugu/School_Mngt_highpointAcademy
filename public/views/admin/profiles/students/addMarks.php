<?php require_once view('header'); ?>
<body>

    <main class="fx fx-j-btw ff-pri">

        <?php require_once view('admin/menu'); ?>

        <div class="bgColor-sec w-11/12 h-auto">

          <?php require_once view('admin/header'); ?>
            <div class="w-11/12 m-0-auto mt-20 pb-10">

                <div class="w-9/12 bgColor-1">
                    <form id="mark_form" action="admin/add/marks" method="post"
                    class="w-11/12 m-0-auto bgColor-1 h-auto py-5">

                        <h3 class="w-full txt-h-c py-4"> Record Marks </h3>

                        <input type="hidden" name="admission_id" value="<?= $id ?>">

                        <div class="w-5/12 fx fx-j-btw m-0-auto py-4  py-4">
                            <label class="fw-bold fs-sm" for="class">Class</label>
                            <input type="text" name="class"
                           class="bgColor-1-400 py-1 px-2 outline-0 border b-color-2
                           focus:b-color-pri outline-0 rounded color-1
                            color-2-700 ">
                        </div>

                        <div class="w-5/12 fx fx-j-btw m-0-auto py-4  py-4">
                            <label class="fw-bold fs-sm" for="class">Term</label>
                            <input type="text" name="term"
                           class="bgColor-1-400 py-1 px-2 outline-0 border b-color-2
                           focus:b-color-pri outline-0 rounded color-1
                            color-2-700 ">
                        </div>

                        <div class="w-5/12 fx fx-j-btw m-0-auto py-4  py-4">
                            <label class="fw-bold fs-sm" for="math">Mathematics</label>
                            <input type="number" name="math"
                           class="bgColor-1-400 py-1 px-2 outline-0 border b-color-2
                           focus:b-color-pri outline-0 rounded color-1
                            color-2-700 ">
                        </div>

                        <div class="w-5/12 fx fx-j-btw m-0-auto py-4  py-4">
                            <label class="fw-bold fs-sm" for="english">English</label>
                            <input type="number" name="english"
                           class="bgColor-1-400 py-1 px-2 outline-0 border b-color-2
                           focus:b-color-pri outline-0 rounded color-1
                            color-2-700 ">
                        </div>

                        <div class="w-5/12 fx fx-j-btw m-0-auto py-4  py-4 py-4">
                            <label class="fw-bold fs-sm" for="kiswahili">Kiswahili</label>
                            <input type="number" name="kiswahili"
                           class="bgColor-1-400 py-1 px-2  outline-0
                            border b-color-2 focus:b-color-pri outline-0
                            rounded color-1 color-2-700 ">
                        </div>

                        <div class="w-5/12 fx fx-j-btw m-0-auto py-4  py-4">
                            <label class="fw-bold fs-sm" for="physics_or_Biology">Phy/Bio</label>
                            <input type="number" name="physics_or_Biology"
                           class="bgColor-1-400 py-1 px-2 outline-0 border b-color-2
                           focus:b-color-pri outline-0 rounded color-1
                            color-2-700 ">
                        </div>

                        <div class="w-5/12 fx fx-j-btw m-0-auto py-4  py-4">
                            <label class="fw-bold fs-sm" for="history_or_geography">Hist/Geo</label>
                            <input type="number" name="history_or_geography"
                           class="bgColor-1-400 py-1 px-2 outline-0 border b-color-2
                           focus:b-color-pri outline-0 rounded color-1
                            color-2-700 ">
                        </div>

                        <div class="w-5/12 fx fx-j-btw m-0-auto py-4  py-4">
                            <label class="fw-bold fs-sm" for="chemistry">Chem</label>
                            <input type="number" name="chemistry"
                           class="bgColor-1-400 py-1 px-2 outline-0 border b-color-2
                           focus:b-color-pri outline-0 rounded color-1
                            color-2-700 ">
                        </div>

                        <div class="w-5/12 fx fx-j-btw m-0-auto py-4  py-4">
                            <label class="fw-bold fs-sm" for="CRE_or_islamic">CRE/Islamic</label>
                            <input type="number" name="CRE_or_islamic"
                           class="bgColor-1-400 py-1 px-2 outline-0 border b-color-2
                           focus:b-color-pri outline-0 rounded color-1
                            color-2-700 ">
                        </div>

                        <!-- <div class="w-5/12 fx fx-j-btw m-0-auto py-4  py-4">
                            <label class="fw-bold fs-sm" for="total">Total Marks</label>
                            <input type="number" name="total"
                           class="bgColor-1-400 py-1 px-2 outline-0 border b-color-2
                           focus:b-color-pri outline-0 rounded color-1
                            color-2-700 ">
                        </div> -->

                        <p id="response" class="w-full txt-h-c"></p>

                        <div class="w-4/12 m-0-auto ">
                            <button id="marks_btn" type="button" name="button"
                            class="w-full bgColor-pri py-2 px-2 border
                            b-color-1-100 outline-0 rounded color-1 mt-5 pointer fw-bold fs-sm
                            hover:bgColor-pri-700"
                            onclick="(new Ajax).form('mark_form')
                                               .loader('marks_btn')
                                               .flush('response')
                                               .send();">
                                Submit
                            </button>
                        </div>

                    </form>

                </div>

            </div>

        </div>

  </main>
</body>

<?php require_once view('footer'); ?>
