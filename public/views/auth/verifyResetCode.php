<?php require_once view('header'); ?>
<body>
    <main
    style='background-image:url("<?= basePath() ?>/public/assets/images/students.jpg")'
    class="w-full h-screen bg-no-repeat bg-cover pt-1 ff-pri">

     <div class="w-9/12 lg:w-5/12 m-0-auto color-pri mt-10 fx fx-j-c fx-i-c">
        <i class="fa fa-graduation-cap fa-2x"></i>  <h2>HighPoint Academy</h2>
     </div>

    <form id="verifyResetCode_form" class="w-9/12 lg:w-5/12 h-auto bgColor-pri-600 m-0-auto mt-10 py-4"
    action="verifyResetCode" method="post">
        <h2 class="w-full txt-h-c py-4 color-1"> Verify Code </h2>

        <p class="w-full py-2 color-1 txt-h-c">
             Enter 4 digit code sent to your email
        </p>

        <div class="w-9/12 m-0-auto py-4">
            <input class="bgColor-1-400 w-full py-2 px-2 border b-color-1-100
            focus:b-color-pri outline-0 rounded color-1 h-10"
            type="text" name="code" placeholder="4 digit code">

            <p id="response" class="w-full txt-h-c pt-2"></p>

            <button id="verifyResetCode_btn" type="button" name="button"
            class="w-full m-0-auto bgColor-1 py-3 px-2 border
            b-color-1-100 outline-0 rounded color-pri mt-5 pointer fw-bold fs-sm
            hover:bgColor-1-700"
            onclick="(new Ajax).form('verifyResetCode_form')
                               .loader('verifyResetCode_btn')
                               .flush('response')
                               .send();">
                Verify
            </button>


        </div>
    </form>

    </main>
</body>
<?php require_once view('footer'); ?>
