<?php require_once view('header'); ?>

<body>
    <header class="w-full h-12 shadow">
      <div class="fx fx-j-btw fx-i-c h-12">
          <div class="w-1/2 color-pri fx fx-i-c px-4">
             <i class="fa fa-graduation-cap"></i><h3 class="px-1"> HighPoint Academy</h3>
          </div>

          <div class="w-1/2 fx fx-j-e fx-i-c color-pri px-5">
              <i class="fa fa-user px-1"></i>
              <p><?= $student->fullName ?></p >
          </div>
      </div>
    </header>

    <main class="fx fx-j-c mt-5">
        <form  id="update_student" action="student/update" method="post"
        class="w-3/12 bgColor-1 h-auto py-5">
            <h3 class="w-full py-2 txt-h-c color-pri-700">My Details</h3>
            <div class="w-10/12 fx  fx-j-btw m-0-auto py-2">
                <label class="fw-bold fs-sm" for="fullName">Full Name</label>
                <input type="text" name="fullName" value="<?= $student->fullName ?>" disabled
                 class="bgColor-1-400 py-1 px-2 outline-0
                border b-color-1 focus:b-color-pri outline-0 rounded color-1
                color-2-700 ">
            </div>

              <input type="hidden" name="id" value="<?= $student->id ?>" />

            <div class="w-10/12 fx  fx-j-btw m-0-auto py-2">
                <label class="fw-bold fs-sm" for="email">Adm No</label>
                <input type="number" name="id" value="<?= $student->id ?>" disabled
                 class="bgColor-1-400 py-1 px-2 outline-0 border b-color-1
                focus:b-color-pri outline-0 rounded color-1
                color-2-700 ">
            </div>

            <div class="w-10/12 fx  fx-j-btw m-0-auto py-2">
                <label class="fw-bold fs-sm" for="gender">Gender</label>
                <input type="text" name="gender" value="<?= $student->gender ?>" disabled
                 class="bgColor-1-400 py-1 px-2 outline-0
                border b-color-1 focus:b-color-pri outline-0 rounded color-1
                color-2-700 ">
            </div>

            <div class="w-10/12 fx  fx-j-btw m-0-auto py-2">
                <label class="fw-bold fs-sm" for="class">Class</label>
                <input type="text" name="class" value="<?= $student->class ?>" disabled
                 class="bgColor-1-400 py-1 px-2 outline-0
                border b-color-1  focus:b-color-pri outline-0 rounded color-1
                color-2-700 ">
            </div>

            <div class="w-10/12 fx  fx-j-btw m-0-auto py-2">
                <label class="fw-bold fs-sm" for="created_at">Admitted</label>
                <input type="text" name="created_at" value="<?= $student->created_at ?>" disabled
                 class="bgColor-1-400 py-1 px-2 outline-0
                border b-color-1 focus:b-color-pri outline-0 rounded color-1
                color-2-700 ">
            </div>

            <div class="w-10/12 fx  fx-j-btw m-0-auto py-2">
                <label class="fw-bold fs-sm" for="email">Email</label>
                <input type="text" name="email" value="<?= $student->email ?>"
                 class="bgColor-1-400 py-1 px-2 outline-0
                border b-color-2 focus:b-color-pri outline-0 rounded color-1
                color-2-700 ">
            </div>

            <div class="w-10/12 fx  fx-j-btw m-0-auto py-2">
                <label class="fw-bold fs-sm" for="phone">Phone</label>
                <input type="text" name="phone" value="<?= $student->phone ?>"
                 class="bgColor-1-400 py-1 px-2 outline-0
                border b-color-2 focus:b-color-pri outline-0 rounded color-1
                color-2-700 ">
            </div>

            <div class="w-10/12 fx  fx-j-btw m-0-auto py-2">
                <label class="fw-bold fs-sm" for="address">Address</label>
                <input type="text" name="address" value="<?= $student->address ?>"
                 class="bgColor-1-400 py-1 px-2 outline-0
                border b-color-2 focus:b-color-pri outline-0 rounded color-1
                color-2-700 ">
            </div>

            <div class="w-10/12 fx  fx-j-btw m-0-auto py-2">
                <label class="fw-bold fs-sm" for="county">County</label>
                <input type="text" name="county" value="<?= $student->county ?>"
                 class="bgColor-1-400 py-1 px-2 outline-0
                border b-color-2 focus:b-color-pri outline-0 rounded color-1
                color-2-700 ">
            </div>

            <p id="response" class="w-full txt-h-c"></p>

            <div class="w-full fx fx-j-a">
                <button id="update_student_btn" type="button" name="button"
                class="w-1/2 bgColor-pri py-2 px-2 border
                b-color-1-100 outline-0 rounded color-1 mt-5 pointer fw-bold fs-sm
                hover:bgColor-pri-700 mr-2"
                onclick="(new Ajax).form('update_student')
                                   .loader('update_student_btn')
                                   .flush('response')
                                   .send();">
                    Update
                </button>

                <button id="logout_btn" type="button" name="button"
                class="w-1/2 py-2 px-2 border bgColor-2-100
                b-color-1-100 outline-0 rounded color-pri mt-5 pointer fw-bold fs-sm
                hover:bgColor-1 shadow"
                onclick="(new Ajax).route('logout').loader('logout_btn').send();">
                    Logout
                </button>
            </div>
        </form>

        <div class="w-7/12 bgColor-1">
            <h3 class="w-full py-2 txt-h-c color-pri-700">Marks</h3>
            <table class="table-auto border-collapse bgColor-trans">
              <thead>
                <tr>
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

                        <tr class="bgColor-1 border-8 b-solid b-color-sec">
                            <td class="px-4 py-1 color-2-600 border-0"> <?= $marks->class ?></td>
                            <td class="px-4 py-1 color-2-600 border-0"> <?= $marks->term ?></td>
                            <td class="px-4 py-1 color-2-600 border-0"> <?= $marks->english() ?></td>
                            <td class="px-4 py-1 color-2-600 border-0"> <?= $marks->kiswahili() ?> </td>
                            <td class="px-4 py-1 color-2-600 border-0"> <?= $marks->math() ?> </td>
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
    </main>
</body>

<?php require_once view('footer'); ?>
