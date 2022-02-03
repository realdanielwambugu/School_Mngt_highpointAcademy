<?php require_once view('header'); ?>
<body>
    <main class="fx fx-j-btw ff-pri">

        <?php require_once view('admin/menu'); ?>

        <div class="bgColor-sec w-11/12 h-auto">

          <?php require_once view('admin/header'); ?>

          <div class="w-11/12 bgColor-1 m-0-auto h-64 mt-20 fx fx-j-btw">
              <div class="w-1/2 h-64 fx fx-i-c pl-10 color-pri txt-h-c">
                  <h2> Welcome to High Point academy adminstration portal</h2>
              </div>
               <div class="w-1/2 py-4">
                   <img class="w-full h-full contain"
                       src="<?= images_path('static1.svg'); ?>"
                   alt="admin image">
               </div>
          </div>

           <div class="w-11/12 bgColor-sec m-0-auto h-20 mt-8 fx fx-j-btw ">
                <div class="w-1/3 h-20 fx fx-j-c fx-i-c bgColor-1 px-4">
                    <div class="w-1/2 txt-h-c border-t-0 border-b-0 border-l-0
                     b-solid b-color-sec border-r fw-500">
                      <i class="fas fa-users fa-2x color-pri"></i>
                      <p>Students</p>
                    </div>

                    <div class="w-1/2 fa-2x txt-h-c fw-600">
                       <?= $studentCount ?>
                    </div>
                </div>

                <div class="w-1/3 h-20 fx fx-j-c fx-i-c bgColor-1 px-4">
                    <div class="w-1/2 txt-h-c border-t-0 border-b-0 border-l-0
                     b-solid b-color-sec border-r fw-500">
                      <i class="fas fa-users fa-2x color-pri"></i>
                      <p>Parents</p>
                    </div>

                    <div class="w-1/2 fa-2x txt-h-c fw-600">
                       <?= $parentCount ?>
                    </div>
                </div>

                <div class="w-1/4 h-20 fx fx-j-c fx-i-c bgColor-1 px-4">
                    <div class="w-1/2 txt-h-c border-t-0 border-b-0 border-l-0
                     b-solid b-color-sec border-r fw-500">
                      <i class="fas fa-users fa-2x color-pri"></i>
                      <p>Teachers</p>
                    </div>

                    <div class="w-1/2 fa-2x txt-h-c fw-600">
                       <?= $teachersCount ?>
                    </div>
                </div>
        </div>

  </main>
</body>

<?php require_once view('footer'); ?>
