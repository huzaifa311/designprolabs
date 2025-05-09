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

    window.Tawk_API = window.Tawk_API || {};
    window.Tawk_API.onChatStarted = function () {
        console.log("Tawk.to Chat Started");

        // Send event to GTM
        window.dataLayer = window.dataLayer || [];
        window.dataLayer.push({
            'event': 'tawkChatStarted'
        });
    };
</script>

<script>
    Tawk_API = Tawk_API || {};
    // Function to extract **name** from chat messages
    function extractName(message) {
        var namePattern = /(?:my name is|I'm|I am|this is|name:)\s*([A-Za-z\s]+)/i;
        var match = message.match(namePattern);
        return match ? match[1].trim() : "";
    }
    // Function to extract **email** from chat messages
    function extractEmail(message) {
        var emailPattern = /[\w.-]+@[a-zA-Z.-]+\.[a-zA-Z]{2,}/g;
        var match = message.match(emailPattern);
        return match ? match[0] : "";
    }
    // Function to extract **U.S. phone numbers** from chat messages
    function extractPhone(message) {
        var phonePattern = /(\+1\s?)?(\(?\d{3}\)?[\s.-]?)\d{3}[\s.-]?\d{4}/g;
        var match = message.match(phonePattern);
        return match ? match[0] : "";
    }
    // Push extracted data to GTM Data Layer when a user sends a message
    Tawk_API.onChatMessageVisitor = function (message) {
        dataLayer.push({
            event: "tawkto_Interactions",
            "chat name": extractName(message),   // Matching GTM variable
            "Chat Email": extractEmail(message), // Matching GTM variable
            "chatPhoneNumber": extractPhone(message) // Matching GTM variable
        });
    };
</script>




<!--End of Tawk.to Script-->