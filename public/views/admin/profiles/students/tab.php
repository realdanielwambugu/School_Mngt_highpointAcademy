<div class="w-5/12 fx fx-j-btw fx-i-c color-pri pb-2">

   <a href="admin/view/student/<?= $student->id?>" class="no-line">
       <button
       class="<?= $model == 'student' ? 'bgColor-pri  color-1'
                                    : 'bgColor-1 color-pri' ?>
       w-auto fs-sm  py-1 px-3 border-0 rounded fw-bold ff-pri
       pointer outline-0 fx fx-i-c"
       type="button"
       onclick="">
       <i class="fal fa-user"></i>
       <h4 class="px-1">Student details</h4>
       </button>
   </a>

    <a href="admin/view/parent/<?= $student->id?>" class="no-line">
         <button
         class="<?= $model == 'parent' ? 'bgColor-pri  color-1'
                                      : 'bgColor-1 color-pri' ?>
         w-auto fs-sm  py-1 px-3 border-0 rounded fw-bold ff-pri
         pointer outline-0 fx fx-i-c"
         type="button"
         onclick="">
         <i class="fal fa-phone"></i>
         <h4 class="px-1">Parent Contacts</h4>
         </button>
    </a>

    <a href="admin/view/marks/<?= $student->id?>"class="no-line">
        <button
        class="<?= $model == 'marks' ? 'bgColor-pri  color-1'
                                     : 'bgColor-1 color-pri' ?>
        w-auto fs-sm  py-1 px-3 border-0 rounded fw-bold ff-pri
        pointer outline-0 fx fx-i-c"
        type="button"
        onclick="">
        <i class="fal fa-book"></i>
        <h4 class="px-1">Marks</h4>
        </button>
    </a>


</div>
