<?php
// if(!isset($_SESSION['admin_id'])){
//     $this->session->set_flashdata('er','Username ve ya password yaz!');
//     redirect(base_url('a_login'));
// }
?>

<?php $this->load->view('admin/includes/headerStyle'); ?>
<?php $this->load->view('admin/includes/header'); ?>
<!-- PAGE CONTENT -->

<!-- Google CSS -->
<link rel="stylesheet" href="<?php echo base_url('public/user/assets/') ?>css/google.css">

<div class="md:hidden justify-between items-center bg-black text-white flex">
    <button @click="navOpen = !navOpen" class="btn p-4 focus:outline-none hover:bg-gray-800">
        <svg class="w-6 h-6 fill-current" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
        </svg>
    </button>
</div>
<section class="max-w-7xl mx-auto py-4 px-5">
    <div class="flex justify-between items-center border-b border-gray-300">
        <!-- <h1 class="text-2xl font-semibold pt-2 pb-6"><?php echo $_SESSION['admin_id'] ?></h1> -->
    </div>


    <!-- TABLE -->



    <style>

    </style>



    <div class=" w-11/12 flex p-4 wrap gap-2 justify-center">

        <!--  widget    -->
        <div class="flex flex-col h-full p-4 gap-2 justify-center">
            <div class="time glass p-2 text-3xl text-center">
            <i class="fa-solid fa-clock"></i>
                23:50
            </div>
            <div class="day glass p-2 text-2xl text-center">Fri</div>
        </div>

        <div class="glass flex flex-col p-4 gap-2 justify-center">
            <!-- links -->
            <div class="flex flex-wrap items glass p-4  gap-2 justify-center">
            </div>
        </div>
    </div>




</section>
<!-- END OF PAGE CONTENT -->
</main>
</div>
</body>

</html>



<!-- <script>
    setInterval(() =>
        document.getElementById('clock')
        .textContent = new Date()
        .toLocaleTimeString("az"), 1000)
</script> -->









<script>
    const QUICK_NOTE = "QUICK NOTE"
    document.addEventListener("DOMContentLoaded", () => {
        loadItems()
        loadTime()
        loadNote()
        addNoteEvents()
        addSearchEvents()
    });

    function loadTime() {
        const weekday = ["Sun", "Mon", "Tue", "Wed", "Thur", "Fri", "Sat"];

        const currentDate = new Date();
        const hours = currentDate.getHours();
        const minutes = currentDate.getMinutes();
        const formattedTime = `${hours < 10 ? '0' : ''}${hours}:${minutes < 10 ? '0' : ''}${minutes}`;
        document.querySelector('.time').textContent = formattedTime;
        document.querySelector(".day").textContent = weekday[currentDate.getDay()];
    }

    function open_url(url) {
        window.open(url, '_blank');
    }

    function loadItems() {
        var items = [{
                "icon": "fa-brands fa-google",
                "text": "Google",
                "link": "https://www.google.com/",
                "accent": "#4285f4"
            },

            {
                "icon": "fa-brands fa-youtube",
                "text": "Youtube",
                "link": "https://youtube.com",
                "accent": "#ea4336"
            },

            {
                "icon": "fa-brands fa-codepen",
                "text": "Codepen",
                "link": "https://codepen.io",
                "accent": "#222"
            },

            {
                "icon": "fa-brands fa-pinterest",
                "text": "Pinterest",
                "link": "https://pinterest.com/",
                "accent": "#ff5247"
            },

            {
                "icon": "fa-brands fa-whatsapp",
                "text": "Whatsapp",
                "link": "https://web.whatsapp.com/",
                "accent": "#4ac958"
            }
        ];


        let html = "";
        items.forEach((obj, index) => {
            html += `
<a
target="_blank"
href="${obj.link}"
class="w-24 shadow item flex flex-col items-center p-4">
<i class="${obj.icon} text-3xl"></i>
<div>${obj.text}</div>
</a>
`;
        });
        document.querySelector(".items").innerHTML = html;
        addItemEvents(items)
    }

    function addItemEvents(items) {
        document.querySelectorAll(".item").forEach((div, index) => {
            div.addEventListener("mouseover", function(event) {
                div.style.color = items[index].accent
            })
            div.addEventListener("mouseout", function(event) {
                div.style.color = "#111"
            })

        })
    }

    function addNoteEvents() {
        document.querySelector(".note").addEventListener("click", function(e) {
            this.setAttribute("contenteditable", "true")
            document.querySelector(".savenote").classList.remove("hidden")

        })
        document.querySelector(".note").addEventListener("blur", function(e) {
            this.removeAttribute("contenteditable")
        })
        document.querySelector(".savenote").addEventListener("click", function(e) {
            saveNote()
        })
    }


    function loadNote() {
        const savedNote = localStorage.getItem(QUICK_NOTE);
        if (savedNote) {
            document.querySelector(".note").innerHTML = savedNote;
        } else {
            document.querySelector(".note").innerHTML = "Write something here..."
        }
    }

    function saveNote() {
        const noteContent = document.querySelector(".note").innerHTML;
        localStorage.setItem(QUICK_NOTE, noteContent);
        showSnackbar("Note Saved!")
        document.querySelector(".savenote").classList.add("hidden")
    }

    function showSnackbar(msg) {
        const snackbar = document.getElementById("snackbar");
        snackbar.classList.add("show");
        snackbar.innerHTML = msg.trim()

        // Hide the snackbar after 3 seconds (3000 milliseconds)
        setTimeout(function() {
            snackbar.classList.remove("show");
        }, 3000);
    }

    function addSearchEvents() {
        document.querySelector(".search").addEventListener("keyup", function(event) {
            // console.log()
            var query = event.target.value.trim()
            if (event.keyCode == 13) {
                var url = `https://bing.com/search?q=${encodeURIComponent(query)}`
                window.location = url
            }
        })
    }
</script>