<?php require_once view('header'); ?>
<body>

    <main class="fx fx-j-btw ff-pri">

        <?php require_once view('admin/menu'); ?>

        <div class="bgColor-sec w-11/12 h-auto">

          <?php require_once view('admin/header'); ?>
            <div class="w-11/12 m-0-auto mt-20">

                <?php require_once view('admin/profiles/students/tab'); ?>

                <a href="admin/add/marks/<?= $student->id ?>" class="no-line">
                     <button class="bgColor-1 color-pri fs-sm  py-1 px-3 border-0
                     rounded fw-bold ff-pri pointer outline-0 fx fx-i-c mt-4 mb-4"
                     type="button">
                     <i class="fal fa-plus"></i>
                     <h4 class="px-1">Add new marks</h4>
                     </button>
                </a>

                <table class="table-auto border-collapse bgColor-trans">

                  <thead>
                    <tr class=" bgColor-sec">
                      <th class="px-4 py-2 color-2-700">Class</th>
                      <th class="px-4 py-2 color-2-700">Term</th>
                      <th class="px-4 py-2 color-2-700">Eng</th>
                      <th class="px-4 py-2 color-2-700">kisw</th>
                      <th class="px-4 py-2 color-2-700">Math</th>
                      <th class="px-4 py-2 color-2-700">Phy/Bio</th>
                      <th class="px-4 py-2 color-2-700">Hist/Geo</th>
                      <th class="px-4 py-2 color-2-700">Chem</th>
                      <th class="px-4 py-2 color-2-700">CRE/Islamic</th>
                      <th class="px-4 py-2 color-2-700">Total</th>
                    </tr>
                  </thead>

                    <tbody class="txt-h-c">

                       <?php foreach ($student->marks as $marks): ?>

                           <tr class="pointer bgColor-1 border-8 b-solid b-color-sec">
                               <td class="px-4 py-1 color-2-600 border-0"><?= $marks->class ?></td>
                               <td class="px-4 py-1 color-2-600 border-0"><?= $marks->term ?></td>
                               <td class="px-4 py-1 color-2-600 border-0"><?= $marks->english() ?></td>
                               <td class="px-4 py-1 color-2-600 border-0"> <?= $marks->math() ?> </td>
                               <td class="px-4 py-1 color-2-600 border-0"> <?= $marks->kiswahili() ?> </td>
                               <td class="px-4 py-1 color-2-600 border-0"> <?= $marks->physics_or_Biology() ?> </td>
                               <td class="px-4 py-1 color-2-600 border-0"> <?= $marks->history_or_geography() ?> </td>
                               <td class="px-4 py-1 color-2-600 border-0"> <?= $marks->chemistry() ?> </td>
                               <td class="px-4 py-1 color-2-600 border-0"> <?= $marks->CRE_or_islamic() ?> </td>
                               <td class="px-4 py-1 color-2-600 border-0"> <?= $marks->total() ?> </td>
                           </tr>

                       <?php endforeach; ?>

                    </tbody>

                </table>
            </div>

        </div>

  </main>
</body>

<?php require_once view('footer'); ?>
