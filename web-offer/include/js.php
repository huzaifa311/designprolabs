<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" defer src="assets/js/lib.js"></script>
<script type="text/javascript" defer src="assets/js/functions.js"></script>
<script>
    function handlenav() {
        const menuLeft = document.querySelector('.menu-left.enable');

        // Check if the element exists before removing the class
        if (menuLeft) {
            menuLeft.classList.remove('enable');
        }
    }

    // Select the menu element
    // Select the menu element and all its child links
    const menuLinn = document.querySelector('.menu-linn');
    const menuLinks = menuLinn.querySelectorAll('a'); // Select all anchor tags inside menu-linn

    // Add a scroll event listener to the window
    window.addEventListener('scroll', () => {
        // Check if the user has scrolled more than 2px
        if (window.scrollY > 2) {
            menuLinn.style.background = '#ffffff'; // Set background to white
            menuLinn.style.backdropFilter = 'none'; // Remove the blur effect
            menuLinn.style.color = 'black'; // Change general text color

            // Change link colors to black
            menuLinks.forEach(link => {
                link.style.color = 'black';
            });
        } else {
            menuLinn.style.background = 'transparent'; // Set background to transparent
            menuLinn.style.backdropFilter = 'blur(25px)'; // Apply the blur effect
            menuLinn.style.color = 'white'; // Change general text color

            // Change link colors to white
            menuLinks.forEach(link => {
                link.style.color = 'white';
            });
        }
    });


</script>


<!-- Start of designsengine Zendesk Widget script -->
<!--<script id="ze-snippet" src="https://static.zdassets.com/ekr/snippet.js?key=74b4211f-9739-44e9-9ebb-455445f3b2a4"> </script>-->
<!-- <script id="ze-snippet" src="https://static.zdassets.com/ekr/snippet.js?key=6c44defe-f64e-402f-934f-3dd3091ab4fe"> -->
<!-- </script> -->
<!-- End of designsengine Zendesk Widget script -->
<!-- <script defer type="text/javascript">
    function setButtonURL() {
        //CUGICHelper.bubbleChat.toggle();
        $zopim.livechat.window.toggle();
        //LC_API.open_chat_window();
        // Tawk_API.toggle();
        //tidioChatApi.open();
        //Comm100API.do('livechat.button.click');
    }
</script> -->

<!-- <script>
    zE(function () {
        $zopim(function () {
            $zopim.livechat.setOnUnreadMsgs(unread);

            function unread(number) {
                if (number >= 1) {
                    $zopim.livechat.window.show();
                }
            }
        });
    });
</script> -->

<!--Start of Tawk.to Script-->

<script type="text/javascript">
    var Tawk_API = Tawk_API || {},
        Tawk_LoadStart = new Date();
    (function () {
        var s1 = document.createElement("script"),
            s0 = document.getElementsByTagName("script")[0];
        s1.async = true;
        s1.src = "https://embed.tawk.to/67293ec34304e3196add1144/1ibshqbi7";
        s1.charset = "UTF-8";
        s1.setAttribute("crossorigin", "*");
        s0.parentNode.insertBefore(s1, s0);
    })();

    Tawk_API.onLoad = function () {
        Tawk_API.maximize();
    };
</script>

<!--End of Tawk.to Script-->