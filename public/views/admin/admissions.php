<?php require_once view('header'); ?>
<body>

    <main class="fx fx-j-btw ff-pri">

        <?php require_once view('admin/menu'); ?>

        <div class="bgColor-sec w-11/12 h-auto">

          <?php require_once view('admin/header'); ?>

            <div class="w-11/12 m-0-auto mt-20">
                <div class="fx fx-i-c color-pri pb-2">
                   <i class="fal fa-graduation-cap"></i> <h4>Admissions Requests</h4>
                </div>

                <table class="table-auto border-collapse bgColor-trans">

                  <thead>
                    <tr class=" bgColor-sec">
                      <th class="px-4 py-2 color-2-700">Name</th>
                      <th class="px-4 py-2 color-2-700">Gender</th>
                      <th class="px-4 py-2 color-2-700">Email</th>
                      <th class="px-4 py-2 color-2-700">Phone</th>
                      <th class="px-4 py-2 color-2-700">County</th>
                      <th class="px-4 py-2 color-2-700">Previous School</th>
                      <th class="px-4 py-2 color-2-700">Reason For Transfer</th>
                      <th class="px-4 py-2 color-2-700">Co-calicular</th>
                      <th class="px-4 py-2 color-2-700">status</th>

                    </tr>
                  </thead>

                    <tbody class="txt-h-c">
                        <?php foreach ($admissions as $admission): ?>

                            <tr class="pointer bgColor-1 border-8 b-solid b-color-sec">
                                <td class="px-4 py-1 color-2-600 border-0"> <?= $admission->fullName ?> </td>
                                <td class="px-4 py-1 color-2-600 border-0"> <?= $admission->gender ?> </td>
                                <td class="px-4 py-1 color-2-600 border-0"> <?= $admission->email ?>  </td>
                                <td class="px-4 py-1 color-2-600 border-0"> <?= $admission->phone ?>  </td>
                                <td class="px-4 py-1 color-2-600 border-0"> <?= $admission->city ?> </td>
                                <td class="px-4 py-1 color-2-600 border-0"> <?= $admission->previous_school ?> </td>
                                <td class="px-4 py-1 color-2-600 border-0"> <?= $admission->reason_for_transfer ?> </td>
                                <td class="px-4 py-1 color-2-600 border-0"> <?= $admission->co_calicular_activity ?> </td>

                                <td id="status<?= $admission->id ?>" class="px-4 py-1 color-2-600 border-0">
                                    <?= $admission->status() ?>
                                </td>

                                <?php if ($admission->isPending()): ?>

                                        <td class="status_btns<?= $admission->id ?> px-4 py-1 color-pri">
                                            <button id="approve_btn<?= $admission->id ?>" class="bgColor-pri w-auto
                                            fs-sm  py-1 px-5 border-0 rounded fw-bold ff-pri
                                            pointer outline-0 color-1" type="button"
                                            onclick="approve('admission/approve','<?= $admission->id ?>');">
                                                    approve
                                            </button>
                                        </td>

                                        <td class="status_btns<?= $admission->id ?> px-4 py-1 color-pri">
                                              <button id="reject_btn<?= $admission->id ?>" class="bgColor-3 w-auto
                                              fs-sm  py-1 px-5 border-0 rounded fw-bold ff-pri
                                              pointer outline-0 color-1" type="button"
                                               onclick="reject('admission/reject','<?= $admission->id ?>');">
                                               reject
                                              </button>
                                        </td>

                                <?php endif; ?>

                            </tr>

                        <?php endforeach; ?>

                    </tbody>

                </table>
            </div>

        </div>

  </main>
  <script type="text/javascript">
      function approve(route, id)
      {
        (new Ajax()).route(route)
                    .data({application_id:id})
                    .loader('approve_btn' + id)
                    .flush('status' + id)
                    .send();

        setTimeout(function ()
        {

          $('.status_btns' + id).hide();

        },3000)

      }

      function reject(route, id)
      {
        (new Ajax()).route(route)
                    .data({application_id:id})
                    .loader('reject_btn' + id)
                    .flush('status' + id)
                    .send();

        setTimeout(function ()
        {

          $('.status_btns' + id).hide();

        },1000)

      }
  </script>

</body>

<?php require_once view('footer'); ?>
