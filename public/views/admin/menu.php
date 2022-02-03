<div class="bgColor-1 w-1/5 h-screen shadow">
    <div class="w-1/5 fixed">
        <div class="w-11/12 m-0-auto color-pri mt-5 fx fx-j-c fx-i-c">
           <i class="fa fa-graduation-cap"></i><h3 class="px-1"> HighPoint Academy</h3>
        </div>

        <div class=" w-8/12 h-auto m-0-auto color-pri py-4 fw-600">
            <div class="py-4">
                <a href="/admin/overview"
                class="<?= $route == 'overview' ? 'color-pri-600' : 'color-pri'?>
                 no-line">
                    <i class="fa fa-home"></i> Overview
                </a>
            </div>

            <div class="py-4">
                <a href="/admin/admissions"
                class="<?= $route == 'admissions' ? 'color-pri-600' : 'color-pri'?>
                no-line">
                    <i class="fas fa-graduation-cap"></i> Admissions
                </a>
            </div>

           <div class="py-4">
               <a href="/admin/teachers"
               class="<?= $route == 'teachers' ? 'color-pri-600' : 'color-pri'?>
               no-line">
                   <i class="fas fa-users"></i> Teachers
               </a>
           </div>

           <div class="py-4">
               <a href="/admin/students"
               class="<?= $route == 'students' ? 'color-pri-600' : 'color-pri'?>
               no-line">
                   <i class="fas fa-users"></i> Students
               </a>
           </div>

           <div class="py-4">
              <a href="/admin/parents"
               class="<?= $route == 'parents' ? 'color-pri-600' : 'color-pri'?>
               no-line">
                   <i class="fas fa-users"></i> Parents
               </a>
           </div>

           <div class="py-4">
               <a href="/admin/classes"
               class="<?= $route == 'classes' ? 'color-pri-600' : 'color-pri'?>
               no-line">
                   <i class="fas fa-book"></i> Clasess
               </a>
           </div>

           <div class="py-4">
               <a href="/admin/classes"
               class=" color-danger no-line"
                onclick="(new Ajax).route('logout').loader('logout_btn').send();">
                   <i class="fa fa-sign-out"></i> logout
               </a>
           </div>
        </div>
    </div>
</div>
