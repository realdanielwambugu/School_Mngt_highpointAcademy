<?php require_once view('header'); ?>
<body>

    <main class="fx fx-j-btw ff-pri">

        <?php require_once view('admin/menu'); ?>

        <div class="bgColor-sec w-11/12 h-auto">

          <?php require_once view('admin/header'); ?>
            <div class="w-11/12 m-0-auto mt-20">

                <?php require_once view('admin/profiles/students/tab'); ?>

                <div class="w-9/12 bgColor-1">
                    <form id="update_student" action="/admin/update/student" method="post"
                    class="w-11/12 m-0-auto bgColor-1 h-auto py-5">

                    <input type="hidden" name="id" value="<?= $student->id ?>">

                        <div class="w-5/12 fx fx-j-btw m-0-auto py-2">
                            <label class="fw-bold fs-sm" for="fullName">Full Name</label>
                            <input type="text" name="fullName" value="<?= $student->fullName ?>"
                             class="bgColor-1-400 py-1 px-2 outline-0
                            border b-color-2 focus:b-color-pri outline-0 rounded color-1
                            color-2-700 ">
                        </div>

                        <div class="w-5/12 fx fx-j-btw m-0-auto py-2">
                            <label class="fw-bold fs-sm" for="admission_id">Adm No</label>
                            <input type="text" name="admission_id" value="<?= $student->id ?>"
                             class=" py-1 px-2 outline-0 border b-color-2
                            focus:b-color-pri outline-0 rounded color-1
                            color-2-700 " disabled>
                        </div>

                        <div class="w-5/12 fx fx-j-btw m-0-auto py-2">
                            <label class="fw-bold fs-sm" for="gender">Gender</label>
                            <input type="text" name="gender" value="<?= $student->gender ?>"
                             class="bgColor-1-400 py-1 px-2 outline-0
                            border b-color-2 focus:b-color-pri outline-0 rounded color-1
                            color-2-700 ">
                        </div>

                        <div class="w-5/12 fx fx-j-btw m-0-auto py-2">
                            <label class="fw-bold fs-sm" for="class">Class</label>
                            <input type="text" name="class" value="<?= $student->class ?>"
                             class="bgColor-1-400 py-1 px-2 outline-0
                            border b-color-2 focus:b-color-pri outline-0 rounded color-1
                            color-2-700 ">
                        </div>

                        <div class="w-5/12 fx fx-j-btw m-0-auto py-2">
                            <label class="fw-bold fs-sm" for="created_at">Admitted</label>
                            <input type="text" name="created_at" value="<?= $student->created_at ?>"
                             class="py-1 px-2 outline-0
                            border b-color-2 focus:b-color-pri outline-0 rounded color-1
                            color-2-700 " disabled>
                        </div>

                        <div class="w-5/12 fx fx-j-btw m-0-auto py-2">
                            <label class="fw-bold fs-sm" for="email">Email</label>
                            <input type="text" name="email" value="<?= $student->email ?>"
                             class="bgColor-1-400 py-1 px-2 outline-0
                            border b-color-2 focus:b-color-pri outline-0 rounded color-1
                            color-2-700 ">
                        </div>

                        <div class="w-5/12 fx fx-j-btw m-0-auto py-2">
                            <label class="fw-bold fs-sm" for="phone">Phone</label>
                            <input type="text" name="phone" value="<?= $student->phone ?>"
                             class="bgColor-1-400 py-1 px-2 outline-0
                            border b-color-2 focus:b-color-pri outline-0 rounded color-1
                            color-2-700 ">
                        </div>

                        <div class="w-5/12 fx fx-j-btw m-0-auto py-2">
                            <label class="fw-bold fs-sm" for="address">Address</label>
                            <input type="text" name="address" value="<?= $student->address ?>"
                             class="bgColor-1-400 py-1 px-2 outline-0
                            border b-color-2 focus:b-color-pri outline-0 rounded color-1
                            color-2-700 ">
                        </div>

                        <div class="w-5/12 fx fx-j-btw m-0-auto py-2">
                            <label class="fw-bold fs-sm" for="county">County</label>
                            <input type="text" name="county" value="<?= $student->county ?>"
                             class="bgColor-1-400 py-1 px-2 outline-0
                            border b-color-2 focus:b-color-pri outline-0 rounded color-1
                            color-2-700 ">
                        </div>

                        <p id="response" class="w-full pt-2 txt-h-c"></p>

                        <div class="w-4/12 m-0-auto ">
                            <button id="update_student_btn" type="button" name="button"
                            class="w-full bgColor-pri py-2 px-2 border
                            b-color-1-100 outline-0 rounded color-1 mt-5 pointer fw-bold fs-sm
                            hover:bgColor-pri-700"
                            onclick="(new Ajax).form('update_student')
                                               .loader('update_student_btn')
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
