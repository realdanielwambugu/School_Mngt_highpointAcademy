<?php require_once view('header'); ?>
<body>

    <main class="fx fx-j-btw ff-pri">

        <?php require_once view('admin/menu'); ?>

        <div class="bgColor-sec w-11/12 h-auto">

          <?php require_once view('admin/header'); ?>

            <div class="w-11/12 m-0-auto mt-20">
                <div class="fx fx-i-c color-pri pb-2">
                       <i class="fal fa-users"></i>
                       <h4 class="px-1">Parents</h4>
                </div>

                <table class="table-auto border-collapse bgColor-trans">

                  <thead>
                    <tr class=" bgColor-sec">
                      <th class="px-4 py-2 color-2-700">Name</th>
                      <th class="px-4 py-2 color-2-700">Email</th>
                      <th class="px-4 py-2 color-2-700">Phone</th>
                    </tr>
                  </thead>

                    <tbody class="txt-h-c">
                       <?php foreach ($parents as $parent): ?>
                           <tr class="pointer bgColor-1 border-8 b-solid b-color-sec">
                               <td class="px-4 py-1 color-2-600 border-0"> <?= $parent->fullName ?> </td>
                               <td class="px-4 py-1 color-2-600 border-0"> <?= $parent->email  ?>  </td>
                               <td class="px-4 py-1 color-2-600 border-0"> <?= $parent->phone  ?>  </td>
                           </tr>
                       <?php endforeach; ?>

                    </tbody>

                </table>
            </div>

        </div>

  </main>
</body>

<?php require_once view('footer'); ?>
