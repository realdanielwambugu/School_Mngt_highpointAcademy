<?php require_once view('header'); ?>
<body>
    <main
    style='background-image:url("<?= basePath() ?>/public/assets/images/students.jpg")'
    class="w-full h-auto lg:h-screen bg-no-repeat bg-cover pt-1 ff-pri pb-4">

     <div class="w-9/12 lg:w-5/12 m-0-auto color-pri mt-10 fx fx-j-c fx-i-c">
        <i class="fa fa-graduation-cap fa-2x"></i>  <h2>HighPoint Academy</h2>
     </div>

    <form id="admission" class="w-9/12 lg:w-5/12 h-auto bgColor-pri-600 m-0-auto mt-5 py-4"
          action="admission" method="post">
        <h2 class="w-full txt-h-c py-4 color-1"> Admission Form  </h2>

        <div class="w-9/12 m-0-auto py-4">
           <div id="student_detail">
              <input class="bgColor-1-400 w-full py-2 px-2 border b-color-1-100
              focus:b-color-pri outline-0 rounded color-1 h-10"
              type="text" name="fullName" placeholder="Student Full Name">

              <input class="bgColor-1-400 w-full py-2 px-2 border b-color-1-100
              focus:b-color-pri outline-0 rounded color-1 mt-5 h-10"
              type="text" name="email" placeholder="Student Email">

              <input class="bgColor-1-400 w-full py-2 px-2 border b-color-1-100
              focus:b-color-pri outline-0 rounded color-1 mt-5 h-10"
              type="text" name="phone" placeholder="Phone">

              <select class="bgColor-1-400 w-full py-2 px-2 border b-color-1-100
              focus:b-color-pri outline-0 rounded color-1 mt-5 h-10" name="gender">
                <option value="">Gender</option>
                <option class="bgColor-pri" value="male">Male</option>
                <option class="bgColor-pri" value="female">Female</option>
              </select>

              <input class="bgColor-1-400 w-full py-2 px-2 border b-color-1-100
              focus:b-color-pri outline-0 rounded color-1 mt-5 h-10"
              type="number" name="class" placeholder="Form">


              <button id="show_parent_detail" type="button" name="button"
              class="w-full m-0-auto bgColor-1  py-3 px-2 border
              b-color-1-100 outline-0 rounded color-pri mt-5 pointer fw-bold fs-sm
              hover:bgColor-1-700">
                  Next <i class="fa fa-arrow-right"></i>
              </button>
            </div>

            <div id="parent_detail" class="hide">
                <input class="bgColor-1-400 w-full py-2 px-2 border b-color-1-100
                focus:b-color-pri outline-0 rounded color-1 mt-5 h-10"
                type="text" name="parentFullName" placeholder="Parent FullName">

                <input class="bgColor-1-400 w-full py-2 px-2 border b-color-1-100
                focus:b-color-pri outline-0 rounded color-1 mt-5 h-10"
                type="text" name="parentEmail" placeholder="Parent Email">

                <input class="bgColor-1-400 w-full py-2 px-2 border b-color-1-100
                focus:b-color-pri outline-0 rounded color-1 mt-5 h-10"
                type="text" name="parentPhone" placeholder="Parent Phone">

                <div class="w-full fx fx-j-a">
                    <button id="back_to_student_detail" type="button" name="button"
                    class="w-5/12 bgColor-1 py-3 px-2 border
                    b-color-1-100 outline-0 rounded color-pri mt-5 pointer fw-bold fs-sm
                    hover:bgColor-1-700">
                       <i class="fa fa-arrow-left"></i> back
                    </button>

                    <button id="show_other_detail" type="button" name="button"
                    class="w-5/12 bgColor-1 py-3 px-2 border
                    b-color-1-100 outline-0 rounded color-pri mt-5 pointer fw-bold fs-sm
                    hover:bgColor-1-700">
                        Next <i class="fa fa-arrow-right"></i>
                    </button>
                </div>

            </div>

            <div id="other_detail" class="hide">
                <h4>Fill In If Applicable</h4>
                <input class="bgColor-1-400 w-full py-2 px-2 border b-color-1-100
                focus:b-color-pri outline-0 rounded color-1 mt-5 h-10"
                type="text" name="previous_school" placeholder="Previous School">

                <input class="bgColor-1-400 w-full py-2 px-2 border b-color-1-100
                focus:b-color-pri outline-0 rounded color-1 mt-5 h-10"
                type="text" name="reason_for_transfer" placeholder="Reason For Transfer">

                <input class="bgColor-1-400 w-full py-2 px-2 border b-color-1-100
                focus:b-color-pri outline-0 rounded color-1 mt-5 h-10"
                type="text" name="co_calicular_activity" placeholder="Co Calicular Activity">

                <div class="w-full fx fx-j-a">
                    <button id="back_to_parent_detail" type="button" name="button"
                    class="w-5/12 bgColor-1 py-3 px-2 border
                    b-color-1-100 outline-0 rounded color-pri mt-5 pointer fw-bold fs-sm
                    hover:bgColor-1-700">
                       <i class="fa fa-arrow-left"></i> back
                    </button>

                    <button id="show_more_detail" type="button" name="button"
                    class="w-5/12 bgColor-1 py-3 px-2 border
                    b-color-1-100 outline-0 rounded color-pri mt-5 pointer fw-bold fs-sm
                    hover:bgColor-1-700">
                        Next <i class="fa fa-arrow-right"></i>
                    </button>
                </div>

            </div>

            <div id="more_detail" class="hide">
                <input class="bgColor-1-400 w-full py-2 px-2 border b-color-1-100
                focus:b-color-pri outline-0 rounded color-1 mt-5 h-10"
                type="text" name="county" placeholder="County">

                <input class="bgColor-1-400 w-full py-2 px-2 border b-color-1-100
                focus:b-color-pri outline-0 rounded color-1 mt-5 h-10"
                type="text" name="city" placeholder="City/Town">

                <input class="bgColor-1-400 w-full py-2 px-2 border b-color-1-100
                focus:b-color-pri outline-0 rounded color-1 mt-5 h-10"
                type="number" name="address" placeholder="Address">

                <p id="response" class="w-full txt-h-c py-2"></p>

                <div class="w-full fx fx-j-a">
                    <button id="back_to_other_detail" type="button" name="button"
                    class="w-5/12 bgColor-1 py-3 px-2 border
                    b-color-1-100 outline-0 rounded color-pri mt-5 pointer fw-bold fs-sm
                    hover:bgColor-1-700">
                       <i class="fa fa-arrow-left"></i> back
                    </button>

                    <button id="admission_btn" type="button" name="button"
                    class="w-5/12 bgColor-1 py-3 px-2 border
                    b-color-1-100 outline-0 rounded color-pri mt-5 pointer fw-bold fs-sm
                    hover:bgColor-1-700"
                    onclick="(new Ajax).form('admission')
                                       .flush('response')
                                       .loader('admission_btn')
                                       .send();">
                        Submit
                    </button>
                </div>

            </div>

            <div class="w-full txt-h-c py-4">
                <a href="login" class="no-line color-1">
                    Already a member?
                    <a href="login" class="no-line color-pri">login</a>
                </a>
            </div>
        </div>
    </form>

    </main>
    <script type="text/javascript">
        $(document).on('click', '#show_parent_detail', function ()
        {
            $('#student_detail').hide('slow');

            $('#parent_detail').show('slow');
        });

        $(document).on('click', '#show_student_detail', function ()
        {
            $('#parent_detail').hide('slow');

            $('#student_detail').show('slow');
        });

        $(document).on('click', '#show_other_detail', function ()
        {
            $('#parent_detail').hide('slow');

            $('#other_detail').show('slow');
        });

        $(document).on('click', '#show_more_detail', function ()
        {
            $('#other_detail').hide('slow');

            $('#more_detail').show('slow');
        });

        $(document).on('click', '#back_to_student_detail', function ()
        {
            $('#student_detail').show('slow');

            $('#parent_detail').hide('slow');
        });

        $(document).on('click', '#back_to_parent_detail', function ()
        {
            $('#other_detail').hide('slow');

            $('#parent_detail').show('slow');
        });

        $(document).on('click', '#back_to_other_detail', function ()
        {
            $('#more_detail').hide('slow');

            $('#other_detail').show('slow');
        });


    </script>
</body>
<?php require_once view('footer'); ?>
