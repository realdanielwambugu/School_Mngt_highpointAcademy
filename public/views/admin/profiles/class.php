<?php require_once view('header'); ?>
<body>

    <main class="fx fx-j-btw ff-pri">

        <?php require_once view('admin/menu'); ?>

        <div class="bgColor-sec w-11/12 h-auto">

          <?php require_once view('admin/header'); ?>
            <div class="w-11/12 m-0-auto mt-20">

                <div class="w-9/12 bgColor-1">
                    <form id="update_class_form" action="/admin/update/class" method="post"
                    class="w-11/12 m-0-auto bgColor-1 h-auto py-5">
                        <h4 class="w-full txt-h-c color-pri py-4">
                          Edit Class Details
                        </h4>

                        <input type="hidden" name="id" value="<?= $class->id ?>"/>

                        <div class="w-5/12 fx fx-j-btw m-0-auto py-4  py-4">
                            <label class="fw-bold fs-sm" for="teacher">Class Teacher</label>
                            <input type="text" name="teacher" value="<?= $class->teacher ?>"
                           class="bgColor-1-400 py-2 px-2 outline-0 border b-color-2
                           focus:b-color-pri outline-0 rounded color-1
                            color-2-700 ">
                        </div>

                        <div class="w-5/12 fx fx-j-btw m-0-auto py-4  py-4">
                            <label class="fw-bold fs-sm" for="monitor">Class Mnitor</label>
                            <input type="text" name="monitor" value="<?= $class->monitor ?>"
                           class="bgColor-1-400 py-2 px-2 outline-0 border b-color-2
                           focus:b-color-pri outline-0 rounded color-1
                            color-2-700 ">
                        </div>

                        <p id="Response" class="w-full txt-h-c"></p>

                        <div class="w-5/12 m-0-auto ">
                            <button id="update_class_btn" type="button" name="button"
                            class="w-full bgColor-pri py-3 px-2 border
                            b-color-1-100 outline-0 rounded color-1 mt-5 pointer fw-bold fs-sm
                            hover:bgColor-pri-700"
                            onclick="(new Ajax).form('update_class_form')
                                               .loader('update_class_btn')
                                               .flush('Response')
                                               .send();">
                                Update
                            </button>
                        </div>

                    </form>

                </div>

            </div>

        </div>

  </main>
</body>

<?php require_once view('footer'); ?>
