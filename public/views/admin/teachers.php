<?php require_once view('header'); ?>
<body>

    <main class="fx fx-j-btw ff-pri">

        <?php require_once view('admin/menu'); ?>

        <div class="bgColor-sec w-11/12 h-auto">

          <?php require_once view('admin/header'); ?>

            <div class="w-11/12 m-0-auto mt-20">
                <div class="fx fx-i-c color-pri pb-2">
                       <i class="fal fa-users"></i>
                       <h4 class="px-1">Teachers</h4>
                </div>

                <a href="admin/add/teacher" class="no-line">
                     <button class="bgColor-1 color-pri fs-sm  py-1 px-3 border-0
                     rounded fw-bold ff-pri pointer outline-0 fx fx-i-c mt-4 mb-4"
                     type="button">
                     <i class="fal fa-plus"></i>
                     <h4 class="px-1">Add new teacher</h4>
                     </button>
                </a>

                <table class="table-auto border-collapse bgColor-trans">

                  <thead>
                    <tr class=" bgColor-sec">
                      <th class="px-4 py-2 color-2-700">Name</th>
                      <th class="px-4 py-2 color-2-700">Gender</th>
                      <th class="px-4 py-2 color-2-700">Email</th>
                      <th class="px-4 py-2 color-2-700">Phone</th>
                      <th class="px-4 py-2 color-2-700">Subject</th>

                    </tr>
                  </thead>

                    <tbody class="txt-h-c">
                        <?php foreach ($teachers as $teacher): ?>
                            <tr class="pointer bgColor-1 border-8 b-solid b-color-sec">
                                <td class="px-4 py-1 color-2-600 border-0"> <?= $teacher->fullName ?></td>
                                <td class="px-4 py-1 color-2-600 border-0"> <?= $teacher->gender ?> </td>
                                <td class="px-4 py-1 color-2-600 border-0"> <?= $teacher->email ?> </td>
                                <td class="px-4 py-1 color-2-600 border-0"> <?= $teacher->phone ?>  </td>
                                <td class="px-4 py-1 color-2-600 border-0"> <?= $teacher->subject ?>  </td>
                                <td class="px-4 py-1 color-1">
                                    <a href="admin/edit/teacher/<?= $teacher->id ?>">
                                       <button  class="bgColor-pri w-auto color-1 fs-sm
                                       py-1 px-3 border-0 rounded fw-bold ff-pri
                                       pointer outline-0" type="button">
                                       Edit
                                       </button>
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
  </main>
</body>

<?php require_once view('footer'); ?>
