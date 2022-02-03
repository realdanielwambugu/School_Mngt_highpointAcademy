<?php require_once view('header'); ?>
<body>

    <main class="fx fx-j-btw ff-pri">

        <?php require_once view('admin/menu'); ?>

        <div class="bgColor-sec w-11/12 h-auto">

          <?php require_once view('admin/header'); ?>
            <div class="w-11/12 m-0-auto mt-20">

                <div class="w-9/12 bgColor-1">
                    <form id="update_teacher_form" action="/admin/update/teacher" method="post"
                    class="w-11/12 m-0-auto bgColor-1 h-auto py-5">

                    <input type="hidden" name="id" value="<?= $teacher->id ?>">

                        <div class="w-5/12 fx fx-j-btw m-0-auto py-4  py-4">
                            <label class="fw-bold fs-sm" for="fullName">Name</label>
                            <input type="text" name="fullName" value="<?= $teacher->fullName ?>"
                           class="bgColor-1-400 py-1 px-2 outline-0 border b-color-2
                           focus:b-color-pri outline-0 rounded color-1
                            color-2-700 ">
                        </div>

                        <div class="w-5/12 fx fx-j-btw m-0-auto py-4  py-4">
                            <label class="fw-bold fs-sm" for="gender">Gender</label>
                            <input type="text" name="gender" value="<?= $teacher->gender ?>"
                           class="bgColor-1-400 py-1 px-2 outline-0 border b-color-2
                           focus:b-color-pri outline-0 rounded color-1
                            color-2-700 ">
                        </div>

                        <div class="w-5/12 fx fx-j-btw m-0-auto py-4  py-4">
                            <label class="fw-bold fs-sm" for="created_at">Employed</label>
                            <input type="text" name="created_at" value="<?= $teacher->created_at ?>"
                           class="py-1 px-2 outline-0 border b-color-2
                           focus:b-color-pri outline-0 rounded color-1
                            color-2-700 " disabled>
                        </div>

                        <div class="w-5/12 fx fx-j-btw m-0-auto py-4  py-4">
                            <label class="fw-bold fs-sm" for="email">Email</label>
                            <input type="text" name="email" value="<?= $teacher->email ?>"
                           class="bgColor-1-400 py-1 px-2 outline-0 border b-color-2
                           focus:b-color-pri outline-0 rounded color-1
                            color-2-700 ">
                        </div>

                        <div class="w-5/12 fx fx-j-btw m-0-auto py-4  py-4 py-4">
                            <label class="fw-bold fs-sm" for="phone">Phone</label>
                            <input type="text" name="phone" value="<?= $teacher->phone ?>"
                           class="bgColor-1-400 py-1 px-2  outline-0
                            border b-color-2 focus:b-color-pri outline-0
                            rounded color-1 color-2-700 ">
                        </div>

                        <div class="w-5/12 fx fx-j-btw m-0-auto py-4  py-4">
                            <label class="fw-bold fs-sm" for="subject">Subject</label>
                            <input type="text" name="subject" value="<?= $teacher->subject ?>"
                           class="bgColor-1-400 py-1 px-2 outline-0 border b-color-2
                           focus:b-color-pri outline-0 rounded color-1
                            color-2-700 ">
                        </div>

                        <p id="response" class="w-full txt-h-c"></p>

                        <div class="w-4/12 m-0-auto ">
                            <button id="update_teacher_btn" type="button" name="button"
                            class="w-full bgColor-pri py-2 px-2 border
                            b-color-1-100 outline-0 rounded color-1 mt-5 pointer fw-bold fs-sm
                            hover:bgColor-pri-700"
                            onclick="(new Ajax).form('update_teacher_form')
                                               .loader('update_teacher_btn')
                                               .flush('response')
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
