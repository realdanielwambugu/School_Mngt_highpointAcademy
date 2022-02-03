<?php require_once view('header'); ?>
<body>

    <main class="fx fx-j-btw ff-pri">

        <?php require_once view('admin/menu'); ?>

        <div class="bgColor-sec w-11/12 h-auto">

          <?php require_once view('admin/header'); ?>

            <div class="w-11/12 m-0-auto mt-20">
                <div class="fx fx-i-c color-pri pb-2">
                       <i class="fal fa-users"></i>
                       <h4 class="px-1">Classes</h4>
                </div>

                <table class="table-auto border-collapse bgColor-trans">

                  <thead>
                    <tr class=" bgColor-sec">
                      <th class="px-4 py-2 color-2-700">Name</th>
                      <th class="px-4 py-2 color-2-700">Class Teacher</th>
                      <th class="px-4 py-2 color-2-700">Class Monitor</th>
                      <th class="px-4 py-2 color-2-700">Students</th>
                    </tr>
                  </thead>

                    <tbody class="txt-h-c">
                        <?php foreach ($classes as $class): ?>
                            <tr class="pointer bgColor-1 border-8 b-solid b-color-sec">
                                <td class="px-4 py-1 color-2-600 border-0"> <?= $class->name ?> </td>
                                <td class="px-4 py-1 color-2-600 border-0"> <?= $class->teacher ?> </td>
                                <td class="px-4 py-1 color-2-600 border-0"> <?= $class->monitor ?> </td>
                                <td class="px-4 py-1 color-1">
                                      <a href="/admin/students/<?= $class->name ?>">
                                     <button  class="bgColor-pri w-auto color-1 fs-sm  py-1 px-3 border-0 rounded
                                     fw-bold ff-pri pointer outline-0" type="button"
                                     onclick="">
                                     view list
                                    </button>
                                    </a>
                                </td>
                                <td class="px-4 py-1 color-1">
                                   <a href="/admin/edit/class/<?= $class->id ?>">
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
