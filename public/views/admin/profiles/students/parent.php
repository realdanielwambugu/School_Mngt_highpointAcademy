<?php require_once view('header'); ?>
<body>

    <main class="fx fx-j-btw ff-pri">

        <?php require_once view('admin/menu'); ?>

        <div class="bgColor-sec w-11/12 h-auto">

          <?php require_once view('admin/header'); ?>
            <div class="w-11/12 m-0-auto mt-20">

                <?php require_once view('admin/profiles/students/tab'); ?>

                <div class="w-9/12 bgColor-1">
                    <div class="w-11/12 m-0-auto bgColor-1 h-auto py-5">

                        <div class="w-1/2 m-0-auto">
                            <label class="fw-bold fs-sm" for="email">Parent Name</label>
                            <input type="text" name="email" value="<?= $student->parent->fullName ?>"
                            disabled class="bgColor-1-400 py-2 px-2 border-none outline-0
                            color-2-700 ">
                        </div>

                        <div class="w-1/2 m-0-auto">
                            <label class="fw-bold fs-sm" for="email">Email</label>
                            <input type="text" name="email" value="<?= $student->parent->email ?>"
                            disabled class="bgColor-1-400 py-2 px-2 border-none outline-0
                            color-2-700 ">
                        </div>

                        <div class="w-1/2 m-0-auto">
                            <label class="fw-bold fs-sm" for="email">Phone</label>
                            <input type="text" name="email" value="<?= $student->parent->phone ?>"
                            disabled class="bgColor-1-400 py-2 px-2 border-none outline-0
                            color-2-700 ">
                        </div>

                    </div>

                </div>

            </div>

        </div>

  </main>
</body>

<?php require_once view('footer'); ?>
